<?php 

namespace Log;

use PHPUnit\Framework\TestCase;

final class LogTest extends TestCase
{

    public function testSetMessageError()
    {
        $log = new Log(__DIR__.'/logs.log');

        $msg = "Test error.";
        $file = __FILE__;
        $line = __LINE__;

        $this->assertTrue($log->setMessageError($msg, $file, $line));
    }

    public function testSetsetWarningMessage()
    {
        $log = new Log(__DIR__.'/logs.log');

        $msg = "Test warning.";
        $file = __FILE__;
        $line = __LINE__;

        $this->assertTrue($log->setWarningMessage($msg, $file, $line));
    }

}