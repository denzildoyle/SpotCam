<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class V1 extends REST_Controller{
    function location_post(){
        $location = array('lat' => $this->post('lat'), 
                          'long' => $this->post('long'),
                          'type' => $this->post('type'),
                          'lname' => $this->post('lname'),
                          'city' => $this->post('city'),
                          'country' => $this->post('country')
                          );

        $this->location_model->postLocation($location);
        $this->response('success', 200);
    }

    public function send_post(){
        var_dump($this->request->body);
    }

    public function send_put(){
        var_dump($this->put('foo'));
    }
}