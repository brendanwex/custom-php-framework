<?php

/**
 * Created by PhpStorm.
 * User: Brendan
 * Date: 09/06/2017
 * Time: 20:34
 *
 */
class TestModel extends App\Model
{

    function __construct()
    {

        parent::__construct();




    }


    public function get_posts(){


       $posts = $this->db->get('posts');

       return $posts;


    }

    public function get_article($slug){


		$this->db->where('post_slug', $slug);

		$post = $this->db->getOne('posts');


		return $post;

	}


}
