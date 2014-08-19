<?php

class HomeController extends BaseController{
    public function showWelcome()
    {
        return view::make('hello');
    }
}