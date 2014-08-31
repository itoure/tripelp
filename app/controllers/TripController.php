<?php

class TripController extends BaseController {


    protected $layout = 'layout';


    public function getIndex()
    {
        $this->layout->content = View::make('trip/add');
    }

	public function add()
	{
        $this->layout->content = View::make('trip/add');
	}

    public function plan()
    {
        $this->layout->content = View::make('trip/plan');
    }

}
