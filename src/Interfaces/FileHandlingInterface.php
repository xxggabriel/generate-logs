<?php 

namespace Log\Interfaces;

interface FileHandlingInterface{

    /**
     * Set log file directory.
     * @var $filePath = A directory string where the log files are.
     * @return void
     */
    public function setFilePath($filePath):string;


    /**
     * Get file directory 
     * @return string
     */
    public function getFilePath():string;

    /**
     * Write to log file
     * @var $information = Message already formatted to be written to log file.
     */
    public function LogFileWriting($information);

}