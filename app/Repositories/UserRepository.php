<?php
namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }  

    public function create($input, $image_name)
    {
        $this->model->name = $input['name'];
        $this->model->email = $input['email'];
        $this->model->password = Hash::make($input['password']);
        $this->model->profile_image = $image_name;
        $this->model->save();

        return $this->model;
    }
    public function getById($id)
    {
        return User::where('id', $id)->get()->first();
    }

    public function update($id, $input, $image_name)
    {
        $user = $this->model->findOrNew($id);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = (!empty($input['password'])) ? Hash::make($input['password']) : $user->password;
        if (!empty($image_name)) {
            $user->profile_image = $image_name;
        }
        $user->save();

        return $user;
    }

    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }

}