<?php

class WelcomeControllerTest extends TestCase{

    public function testLoadingWelcomesayhello(){

        $this->call('GET','Welcome/sayhello');
        $this->assertResponseOk();

    }
    public function testHello(){

        $this->call('GET','Welcome/sayhello');
        $this->assertViewHas('avExampleArraykey');

    }

    public function testMessage(){

       $response = $this->call('GET','Welcome/sayhello');
        $this->assertEquals('Hello laravel',$response->getContent());

    }
}