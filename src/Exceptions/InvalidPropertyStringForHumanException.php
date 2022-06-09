<?php

namespace CreativeMobile\LaravelCountdown\Exceptions;

use InvalidArgumentException;

class InvalidPropertyStringForHumanException extends InvalidArgumentException
{
  protected $message = 'String to parse for human contains invalid property';
}
