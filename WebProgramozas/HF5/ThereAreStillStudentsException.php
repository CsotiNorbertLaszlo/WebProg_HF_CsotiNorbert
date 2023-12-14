<?php


namespace HF5\University;

class ThereAreStillStudentsException extends \Exception
{
    public function __construct($message = "Vannak még diákok", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}

