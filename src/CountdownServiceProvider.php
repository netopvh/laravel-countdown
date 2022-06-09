<?php

namespace CreativeMobile\LaravelCountdown;

use Carbon\Carbon;
use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;

class CountdownServiceProvider extends ServiceProvider
{
  /**
   * Perform post-registration booting of services.
   *
   * @return void
   */
  public function boot()
  {
    //
  }

  /**
   * Register any package services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->singleton('creativemobile.countdown', function (Container $app) {
      $carbon = new Carbon();
      $timezone = $app->config->get('app.timezone');

      return new Countdown($timezone, $carbon);
    });

    $this->app->alias('creativemobile.countdown', Countdown::class);
  }
}
