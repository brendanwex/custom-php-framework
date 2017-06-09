<?php

/**
 * @User Brendan
 * @Package custom-framework
 * @File Home.php
 * @Date 29-Mar-17  2:14 PM
 * @Version
 */
class Home extends Controller
{


    function __construct()
    {

        parent::__construct();


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


}