<?php

class StudentController extends BaseController{


    public function sayhi(){
$message = "Hi, i am sudeb an FTFLeans";
        return View::make('student.sayhi')->with('anExampleArraykey',$message);

    }
}
