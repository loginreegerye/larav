<?php namespace App\Providers;

/*use App\Exercise\Smartphone;
use App\Exercise\Processor;
use App\Exercise\Display;
use App\Exercise\Camera;
use App\Exercise\Battery;*/

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
		
		/*$sm = new Smartphone('Sone Xperia New', new Processor('Qualcomm 801', '8 cores'), new Display('1024x768 pixels'), new Camera('12 megapixel'), new Battery('1500 mAh'));
		App::instance('Smartphone', $sm);*/

	}

}
