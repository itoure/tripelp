<?php

class IndexController extends BaseController {


    protected $layout = 'layout';


	public function getIndex()
	{
        $this->layout->content = View::make('index/index');
	}

}
