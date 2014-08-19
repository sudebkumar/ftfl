<?php

class WelcomeController extends BaseController{

    public function sayhello(){
        return View::make('weicome.sayhello')
            ->with(array('hi'=>'ll hello how r ull'
            ,'hell'=>'ll hell ll',
                'an ExampleArraykey'=>'Hello laravel'));
    }
}
        