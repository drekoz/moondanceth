<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Guests extends CI_Controller {
    
    public function index()
	{
            $this->load->helper('url');            
            $this->load->helper('form');
            $this->load->helper('file');

            $this->load->model('guest_model');
          
            $data['guestData'] = $this->guest_model->getGuestInfos();
            $data['allInvited'] = $this->guest_model->getCountGuestByCondition(" WHERE ReferralId = 0 ");
            $data['invitedLeft'] = $this->guest_model->getCountGuestByCondition(" WHERE ReferralId = 0 AND RegisterStatus != 'Registered' ");
            $data['inviteRegistered'] = $this->guest_model->getCountGuestByCondition(" WHERE ReferralId = 0 AND RegisterStatus = 'Registered' ");
            $data['inviteRegisteredDay_1'] = $this->guest_model->getCountGuestByCondition(" WHERE ReferralId = 0 AND RegisterStatus = 'Registered' AND ModifyWhen BETWEEN '2017-11-29' AND '2017-11-30' ");
            $data['inviteRegisteredDay_2'] = $this->guest_model->getCountGuestByCondition(" WHERE ReferralId = 0 AND RegisterStatus = 'Registered' AND ModifyWhen BETWEEN '2017-11-30' AND '2017-12-01' ");
            
            $data['newJoin'] = $this->guest_model->getCountGuestByCondition(" WHERE ReferralId != 0 ");
            $data['newJoinDay_1'] = $this->guest_model->getCountGuestByCondition(" WHERE ReferralId != 0 AND CreateWhen BETWEEN '2017-11-29' AND '2017-11-30' ");
            $data['newJoinDay_2'] = $this->guest_model->getCountGuestByCondition(" WHERE ReferralId != 0 AND CreateWhen BETWEEN '2017-11-30' AND '2017-12-01' ");
            
            
            $this->load->view('Guests_view',$data);
	}
    
    
}
