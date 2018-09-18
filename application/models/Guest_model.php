<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Guest_model extends CI_Model {

    function insertToGuest($name, $lastname, $tel, $email, $company, $checkInCode, $registerStatus, $note, $referralId, $imagePath)
    { 
        $this->load->database();

        $mysql_query = "INSERT INTO Guest"
                       ." (Name, LastName, Telephone, Email, Company, CheckInCode, RegisterStatus, Note, ImagePath, ReferralId) VALUES "
                       ." ('".$name."','".$lastname."','".$tel."','".$email."','".$company."','".$checkInCode."','".$registerStatus."','".$note."','".$imagePath."','".$referralId."');";

        $result = $this->db->query($mysql_query);

       return $result;
    }
    
    function getGuestInfos()
    {
        $this->load->database();
       
        $mysql_query = "SELECT * FROM Guest;";  
        
        $mysql_result = $this->db->query($mysql_query);
        
        $guestList = array();
        
        foreach ($mysql_result->result() as $row)
        {
            $guestData['Id'] = $row->Id;
            $guestData['Name'] = $row->Name;
            $guestData['LastName'] = $row->LastName;
            $guestData['Telephone'] = $row->Telephone;
            $guestData['Email'] = $row->Email;
            $guestData['Company'] = $row->Company;
            $guestData['CheckInCode'] = $row->CheckInCode;
            $guestData['RegisterStatus'] = $row->RegisterStatus;
            $guestData['Note'] = $row->Note;
            if($row->ImagePath == ""){
                $imagePath = "";
            }else {
                $imagePath = base_url('assets/img/guests/'.$row->ImagePath);
            }
            $guestData['ImagePath'] = $imagePath;
            $guestData['ReferralId'] = $row->ReferralId;
            
         array_push($guestList, $guestData);
        }

        return $guestList;
    }
    
    function getGuestInfoById($Id)
    {
        $this->load->database();
       
        $mysql_query = "SELECT * FROM Guest WHERE Id = ".$Id.";";  
        
        $mysql_result = $this->db->query($mysql_query);
        
        $guestList = array();
        
        foreach ($mysql_result->result() as $row)
        {
            $guestData['Id'] = $row->Id;
            $guestData['Name'] = $row->Name;
            $guestData['Telephone'] = $row->Telephone;
            $guestData['Email'] = $row->Email;
            $guestData['Company'] = $row->Company;
            $guestData['CheckInCode'] = $row->CheckInCode;
            $guestData['RegisterStatus'] = $row->RegisterStatus;
            $guestData['Note'] = $row->Note;
            
         array_push($guestList, $guestData);
        }

        return $$guestList;
    }
    
    function getCountGuestByCondition($whereClause)
    {
        $this->load->database();
       
        $mysql_query = "SELECT count(*) as counted FROM Guest ".$whereClause.";";  
        
        $mysql_result = $this->db->query($mysql_query);
        
        $guestList = array();
        
        foreach ($mysql_result->result() as $row)
        {
            $guestData['count'] = $row->counted;
            
         array_push($guestList, $guestData);
        }

        return $guestList[0]['count'];
    }

     function updateGuestStatus($Id, $status){
        $this->load->database();

        $mysql_query = "UPDATE Guest"
                       ." SET RegisterStatus = '".$status. "'"
                       ." WHERE Id = ".$Id;

        $result = $this->db->query($mysql_query);

        return $result;
     }
     
      
    function updateGuestInfo($name, $lastname, $tel, $email, $company, $checkInCode, $registerStatus, $note, $referralId, $imagePath, $Id)
    { 
        $this->load->database();

        $mysql_query = "";
        if($imagePath == "")
        {
        $mysql_query = "Update Guest"
                        ." SET Name = '".$name."'"
                        .", LastName = '".$lastname."'"
                        .", Telephone = '".$tel."'"
                        .", Email = '".$email."'"
                        .", Company = '".$company."'"
                        .", CheckInCode = '".$checkInCode."'"
                        .", RegisterStatus = '".$registerStatus."'"
                        .", Note = '".$note."'"
                        .", ReferralId = '".$referralId."'"
                        ." WHERE Id = ".$Id.";";
        }else{
            $mysql_query = "Update Guest"
                        ." SET Name = '".$name."'"
                        .", LastName = '".$lastname."'"
                        .", Telephone = '".$tel."'"
                        .", Email = '".$email."'"
                        .", Company = '".$company."'"
                        .", CheckInCode = '".$checkInCode."'"
                        .", RegisterStatus = '".$registerStatus."'"
                        .", Note = '".$note."'"
                        .", ImagePath = '".$imagePath."'"
                        .", ReferralId = '".$referralId."'"
                        ." WHERE Id = ".$Id.";";
        }

        $result = $this->db->query($mysql_query);

       return $result;
    }
    
}
