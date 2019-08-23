<?php 

namespace Log\Interfaces;

interface FileHandlingInterface{

    /**
     * Set log file directory.
     * @var $filePath = A directory string where the log files are.
     * @return void
     */
    public function setFilePath(string $filePath);


    /**
     * Get file directory 
     * @return string
     */
    public function getFilePath();

    /**
     * Write to log file
     * @var $information = Message already formatted to be written to log file.
     * @return bool
     */
    public function LogFileWriting(string $information);

}