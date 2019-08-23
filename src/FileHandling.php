<?php 

namespace Log;

use Log\Interfaces\FileHandlingInterface;

abstract class FileHandling implements FileHandlingInterface
{

    private $filePath;

    /**
     * Write to log file
     * @var $information = Message already formatted to be written to log file.
     * @return bool
     */
    public function LogFileWriting(string $information)
    {

        if(!is_writable($this->getFilePath())){
            throw new \Exception($this->getFilePath()." file cannot be changed.", 1);
        }

        $fileSize = filesize($this->getFilePath());

        if($fileSize > 0){
            $fileRead = fopen($this->getFilePath(), 'r');
            $information = $information ."\n". fread($fileRead, $fileSize);
            fclose($fileRead);
        }

        $fileWrite = fopen($this->getFilePath(), 'w');
        $result =  fwrite($fileWrite, $information) !== 0 ? true : false;
        fclose($fileWrite);
        return $result;
    }

    /**
     * Set log file directory.
     * @var $filePath = A directory string where the log files are.
     * @return void
     */
    public function setFilePath(string $filePath)
    {
        if(!is_file($filePath)){
            throw new \Exception("File path not found.", 1);         
        }

        $this->filePath = $filePath;
    }


    /**
     * Get file directory 
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

}