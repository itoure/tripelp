<?php

class UserController extends BaseController {


    protected $layout = 'layout';


	public function getIndex()
	{
        $this->layout->content = View::make('users');
	}

}
