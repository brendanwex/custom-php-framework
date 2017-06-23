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

            'title' => "Custom PHP Framework",

            'message' => 'You can change this text from /controllers/Home.php'

        );

        $this->view('template/header', $data);

        $this->view('index', $data);

        $this->view('template/footer');


    }

    public function about(){


        $data = array(

            'title' => "Custom PHP Framework ~ About",

            'message' => 'Just another test using models',


            'about' => $this->test_model->some_data_source()

        );

        $this->view('template/header', $data);

        $this->view('index', $data);

        $this->view('template/footer');



    }


}