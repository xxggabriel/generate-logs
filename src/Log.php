<?php 

namespace Log;

use Log\Interfaces\LogInterface;

class Log extends FileHandling implements LogInterface{

    public function __construct($filePath)
    {
        $this->setFilePath($filePath);
    }

    public function setMessageError($msg, $file, $line)
    {
        return $this->setDefaultLogMessages("Error", $msg, $file, $line);   
    }

    public function setWarningMessage($msg, $file, $line)
    {
        return $this->setDefaultLogMessages("Warning", $msg, $file, $line);   
    }

    private function setDefaultLogMessages($messageType, $msg, $file, $line)
    {
        $writingResult = $this->LogFileWriting(
            $messageType . " log on file ". $file .": at line ". $line .": - ".date("Y/m/d H:i:s")."\n" .$messageType ." Message: ". $msg.
            "\n =======================================\n"
            );
        
        if(!$writingResult){
            throw new \Exception("Error not defined while writing to log file.", 1);   
        }

        return $writingResult;
    }

}