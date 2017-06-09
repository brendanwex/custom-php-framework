<?php

/**
 * Created by PhpStorm.
 * User: Brendan
 * Date: 09/06/2017
 * Time: 20:34
 *
 */
class TestModel extends Model
{

    function __construct()
    {

        parent::__construct();




    }


    public function some_data_source(){


        return array(

            'version' => 'dev-master',
            'app' => 'Simple PHP Framework',
            'website' => 'https://github.com/brendanwex/custom-php-framework'


        );


    }


}
$TestModel = new TestModel();