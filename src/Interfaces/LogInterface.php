<?php 

namespace Log\Interfaces;

interface LogInterface{

    /**
     * This method will be responsible for writing error logs.
     * @var $msg = Error message to set.
     * @var $file = File that generated this error message.
     * @var $line = Line where the error occurred.
     * @return bool
     */
    public function setMessageError($msg, $file, $line);

    /**
     * This method will be responsible for writing error logs.
     * @var $msg =  Warning message to set.
     * @var $file = File that generated this warning message.
     * @var $line = Line where the warning occurred.
     * @return bool
     */
    public function setWarningMessage($msg, $file, $line);

}