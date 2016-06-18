<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Homepage extends Controller {

    public function action_index() 
    {
        $this->response->body('indexaction');
    }

    public function action_test() 
    {   
        $posts = ORM::factory('Posts')->find_all();
        $this->response->body($posts[0]->username);
        
    }
}