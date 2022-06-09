<?php

namespace CreativeMobile\LaravelCountdown\Exceptions;

use InvalidArgumentException;

class InvalidDateFormatToCountdown extends InvalidArgumentException
{
  protected $message = 'Invalid date string or object to parse.';
}
