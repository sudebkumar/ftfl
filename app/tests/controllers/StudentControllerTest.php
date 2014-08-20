<?php
class StudentControllerTest extends TestCase{

    public function testLoadingStudentsayhi(){

        $this->call('GET','student/sayhi');
        $this->assertResponseOk();
    }
