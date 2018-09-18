<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Event_model extends CI_Model {
  
    function getEventInfos($eventId)
    {
        $this->load->database();
       
        $mysql_query = "SELECT * FROM Event WHERE Id = ".$eventId.";";  
        
        $mysql_result = $this->db->query($mysql_query);
        
        $eventList = array();
        
        foreach ($mysql_result->result() as $row)
        {
            $eventData['Id'] = $row->Id;
            $eventData['Name'] = $row->Name;
            $eventData['AppHeaderImage'] = $row->AppHeaderImage;
         array_push($eventList, $eventData);
        }

        return $eventList[0];
    }
    
}
