<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Input;
use DataTables;
use Validator;
use Redirect;
use App\Repositories\UserRepository;
use App\Service\UploadService;

class UserController extends Controller
{
    protected $model;
    protected $user_repository;
    protected $upload_service;

    public function __construct(User $user,UserRepository $user_repository,UploadService $upload_service)
    {
        $this->model = $user;
        $this->user_repository = $user_repository;
        $this->upload_service = $upload_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.list');
    }

    public function getData()
    {
        $data_tables = Datatables::collection($this->model->get());

        $data_tables->EditColumn('name', function ($user) {
             return $user->name;
        })->EditColumn('email', function ($user) {
            return $user->email;
        })->EditColumn('created_at', function ($user) {
            return $user->created_at;
        })->EditColumn('updated_at', function ($user) {
            return $user->updated_at;
        })->EditColumn('action', function ($user) {
            return view("admin.users.action", ['user' => $user]);
        });
        return $data_tables->rawColumns(['action'])->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'     => 'required|max:255',
            'username' => 'sometimes|required|max:255|unique:users',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'profile_image' => 'mimes:jpeg,jpg,png,gif|max:10000' // max 10000kb
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $image_name = "";
            if (Input::file('profile_image')) {
                $file = Input::file('profile_image');
                try {
                    $image_name = $this->upload_service->upload($file, 'upload/profile');
                } catch (\Exception $e) {
                    /*flash()->error($e->getMessage());*/
                    return Redirect::back();
                }
            }

             $user_id = $this->user_repository->create($request->all(), $image_name);

            if ($user_id) {
                flash('Utilisateur ajouter avec succès!')->success();
                return Redirect::to('users');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->user_repository->getById($id);
        return view('admin.users.edit')->with('users', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'     => 'required|max:255',
            'username' => 'sometimes|required|max:255',
            'email'    => 'required|email|max:255',
            'password' => 'confirmed',
            'profile_image' => 'mimes:jpeg,jpg,png,gif|max:10000' // max 10000kb
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $image_name = "";
            if (Input::file('profile_image')) {
                $file = Input::file('profile_image');
                try {
                    $image_name = $this->upload_service->upload($file, 'upload/profile');
                } catch (\Exception $e) {
                    return Redirect::back();
                }
            }
            $user = $this->user_repository->update($id, $request->all(), $image_name);
            flash('Utilisateur modifier avec succès!')->success();
            return Redirect::to('users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->user_repository->delete($id)) {
            flash('Utilisateur supprimer avec succès!')->success();
            return Redirect('users');
        }
    }
}
