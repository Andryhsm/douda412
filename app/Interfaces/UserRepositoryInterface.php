<?php
namespace App\Interfaces;

interface UserRepositoryInterface
{
	public function create($input,$image_name);
	public function getById($id);
	public function update($id,$input,$image_name);
	public function delete($id);
}