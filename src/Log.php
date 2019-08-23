<?php 

namespace Log;

use Log\Interfaces\LogInterface;

class Log extends FileHandling implements LogInterface{

    /**
     * Set file path in function setFilePath().
     *
     * @param string $filePath
     */
    public function __construct($filePath)
    {
        $this->setFilePath($filePath);
    }

    /**
     * Write  Error Message to log file.
     *
     * @param string $msg
     * @param string $file
     * @param int $line
     * @return bool
     */
    public function setMessageError($msg, $file, $line)
    {
        return $this->setDefaultLogMessages("Error", $msg, $file, $line);   
    }

    /**
     * Write  Warning Message to log file.
     *
     * @param string $msg
     * @param string $file
     * @param int $line
     * @return bool
     */
    public function setWarningMessage($msg, $file, $line)
    {
        return $this->setDefaultLogMessages("Warning", $msg, $file, $line);   
    }

    /**
     * Generate message format to be written;
     *
     * @param string $messageType
     * @param string $msg
     * @param string $file
     * @param int $line
     * @return bool
     */
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