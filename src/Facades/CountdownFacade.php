<?php

namespace CreativeMobile\LaravelCountdown\Facades;

use Illuminate\Support\Facades\Facade;

class CountdownFacade extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'creativemobile.countdown';
  }
}
