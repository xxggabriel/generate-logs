<?php 

namespace Log;

use Log\Interfaces\LogInterface;

class Log implements LogInterface{

    public function setMessageError($msg, $file, $line,$code = null)
    {

    }

    public function setWarningMessage($msg, $file, $line, $code = null)
    {
        
    }

}