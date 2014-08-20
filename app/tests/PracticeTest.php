<?php

class PracticeTest extends PHPUnit_Framework_TestCase{

    public function testHelloWorld()
    {
        $greeting = 'Hello,World.';
        $this->assertTrue($greeting == 'Hello,World.');
    }


    public function testHi()
    {
        $greeting = 'Hello,World.';
        $this->assertFalse($greeting == 'Hello,World',$greeting);
    }


    public function testYourName()
    {
        $greeting = 'YourName';
        $this->assertEquals('YourName',$greeting);
    }

    public function testLaravelDevsIncludesDayle()
    {
        $name = ['Taylor','Shawn','Dayle'];
        $this->assertContains('Dayle',$name);
    }

    public function testValue()
    {
        $val = 0;
        $this->assertEquals(0,$val);
    }


    public function testNumber()
    {
        $val = null;
        $this->assertEquals(0,$val);
    }


    public function testFamilyRequiresParent()
    {
        $family = [
            'parents' => 'joe',
            'children' => ['Timmy','Suzy']
        ];

        $this->assertInternalType('array', $family['children']);
    }

    public function testInteger()
    {
        $age = 25;


        $this->assertInternalType('integer', $age);
    }
}





