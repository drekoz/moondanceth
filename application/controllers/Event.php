<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Event extends CI_Controller {

	public function index()
	{
            $this->load->helper('url');            
            $this->load->helper('form');
            $this->load->helper('file');

            $this->load->view('Register_view');
	}
        
        public function getEventInfo($eventId)
        {
           $this->load->helper('url');            
           $this->load->helper('form');
           $this->load->helper('file');
           
           $this->load->model('event_model');
          
          $eventData = $this->event_model->getEventInfos($eventId);
          
          echo json_encode($eventData);
        }
        
}
        