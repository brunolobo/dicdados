<?php

namespace Brunolobo\Dicdados;

use Illuminate\Support\ServiceProvider;

//Add Your Own Package Classes Here!!

class DicdadosServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes.php');
		$this->loadMigrationsFrom(__DIR__.'/migrations');
		$this->loadTranslationsFrom(__DIR__.'/translations', 'dicdados');
		$this->loadViewsFrom(__DIR__.'/views', 'dicdados');
		$this->publishes([
			__DIR__.'/config/dicdados.php' => config_path('dicdados.php'),
		]);
		$this->publishes([
	        __DIR__.'/translations' => resource_path('lang/dicdados'),
	    ]);
	    $this->publishes([
	        __DIR__.'/views' => resource_path('views/dicdados'),
	    ]);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton(Dicdados::class, function () {
			return new Dicdados();
		});
		$this->app->alias(Dicdados::class, 'dicdados');
	}
}