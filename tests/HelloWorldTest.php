<?php

namespace App\Tests;

use App\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase {
    public function testsOutput() {
        $helloWorld = new HelloWorld();
        $this->assertEquals("Hello World", $helloWorld->setOutput());
    }
}