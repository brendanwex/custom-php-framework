<?php

/**
 * @User Brendan
 * @Package custom-framework
 * @File Home.php
 * @Date 29-Mar-17  2:14 PM
 * @Version
 */


class Home extends App\Controller
{


    function __construct()
    {

        parent::__construct();


        $this->test_model = new TestModel();




    }

    public function index()
    {


        $data = array(

            'title' => "Welcome to our Custom PHP Framework",

            'message' => 'This example uses our built in Database Connector and Model.',

			'posts' => $this->test_model->get_posts()

        );

        $this->view('template/header', $data);

        $this->view('index', $data);

        $this->view('template/footer');


    }


	public function article()
	{


		$post_slug = $this->router->uri_segment(2);


		$data = array(

			'title' => "Example of a single article",

			'message' => 'This example uses our built in Database Connector and Model.',

			'posts' => $this->test_model->get_article($post_slug)

		);

		$this->view('template/header', $data);

		$this->view('article', $data);

		$this->view('template/footer');


	}




}