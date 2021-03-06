<?php
namespace App\Providers;

use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(UserRepositoryInterface::class, function ($app) {
			return $app->make(UserRepository::class);
		});

	}
}
