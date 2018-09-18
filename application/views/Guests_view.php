<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        <title>Smart Event Registration</title>

        
          <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/vendor/simple-line-icons/css/simple-line-icons.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css"/>

</head>
<body>

    <?php
    
    function generateRegisterSumation($allInvite, $invitedLeft, $inviteRegistered, $inviteRegisteredDay_1, $inviteRegisteredDay_2){
       echo "<div class='table-responsive' style='border:0;border-bottom:1px solid #e5e5e5;'>";

    echo "<table id='table-1' class='table table-hover table-bordered usefulinfo-table master-content-detail' style='font-size:1.2em; width=50%;'>";
    
    echo "<tr><td><h3>All invited</h3></td>";
    echo "<td><h3>".$allInvite."</h3></td></tr>"; 
    
    echo "<tr><td><h3>Invited no show</h3></td>";
    echo "<td><h3>".$invitedLeft."</h3></td></tr>"; 
    
    echo "<tr><td><h3>Invited registered</h3></td>";
    echo "<td><h3>".$inviteRegistered."</h3></td></tr>"; 
    
    echo "<tr><td><h4> > Day 1</h4></td>";
    echo "<td><h4>".$inviteRegisteredDay_1."</h4></td></tr>"; 
    
    echo "<tr><td><h4> > Day 2</h4></td>";
    echo "<td><h4>".$inviteRegisteredDay_2."</h4></td></tr>"; 
  
    echo "</table>";

    echo "<table id='header-fixed'></table>";

    echo "<br></div>";
       
    }
    
    function generateRegisterNewJoinSumation($newJoin, $newJoinDay_1, $newJoinDay_2){
       echo "<div class='table-responsive' style='border:0;border-bottom:1px solid #e5e5e5;'>";

    echo "<table id='table-1' class='table table-hover table-bordered usefulinfo-table master-content-detail' style='font-size:1.2em; width=50%;'>";
  
    echo "<tr><td><h3>New registered</h3></td>";
    echo "<td><h3>".$newJoin."</h3></td></tr>"; 

    echo "<tr><td><h4> > Day 1</h4></td>";
    echo "<td><h4>".$newJoinDay_1."</h4></td></tr>"; 
    
    echo "<tr><td><h4> > Day 2</h4></td>";
    echo "<td><h4>".$newJoinDay_2."</h4></td></tr>"; 
  
    echo "</table>";

    echo "<table id='header-fixed'></table>";

    echo "<br></div>";
       
    }
    
    
    function generateRegisterData($regDataList){
    echo "<div class='table-responsive' style='border:0;border-bottom:1px solid #e5e5e5;'>";

    echo "<table id='table-1' class='table table-bordered usefulinfo-table master-content-detail' style='font-size:1.2em;'>";
    echo "<th>Id</th>";  
    echo "<th>RegisterStatus</th>";             
    echo "<th>Image</th>";              
    echo "<th>Name</th>";          
    echo "<th>Lastname</th>";         
    echo "<th>Telephone</th>";                  
    echo "<th>Email</th>";              
    echo "<th>Company</th>";               
    echo "<th>ReferralId</th>";                   
    echo "<th>Note</th>";      

    foreach ($regDataList as $regData){
                echo "<tr>";
                echo "<td>".$regData['Id']."</td>";
                echo "<td>".$regData['RegisterStatus']."</td>"; 
                echo "<td><img src='".$regData['ImagePath']."' width='50px' height='50px' /></td>"; 
                echo "<td>".$regData['Name']."</td>";  
                echo "<td>".$regData['LastName']."</td>";  
                echo "<td>".$regData['Telephone']."</td>";
                echo "<td>".$regData['Email']."</td>";
                echo "<td>".$regData['Company']."</td>";
                echo "<td>".$regData['ReferralId']."</td>";               
                echo "<td>".$regData['Note']."</td>";   
                echo "</tr>";
            }
            echo "</table>";
            
            echo "<table id='header-fixed'></table>";
                    
            echo "<br></div>";
    
    }
    
    ?>
    
    
    
    
<div id="container">
	<div id="body">
        <fieldset>
        <div class="row">
            <div class="col-md-1">&nbsp</div>
            <div class="col-md-10 text-left">
           
                
        <div class="row">
            <div class="controls col-md-5">
                <h1>Invited Guest Summary</h1>
            </div>
            <div class="col-md-2"></div>
            <div class="controls col-md-5">
                <h1>New Registered Guest Summary</h1>
            </div>
                    
        </div>
        <div class="row">  
        
        <div class="controls col-md-5">
      
        <?php
         generateRegisterSumation($allInvited, $invitedLeft, $inviteRegistered, $inviteRegisteredDay_1, $inviteRegisteredDay_2);
        ?>
        
        </div>
        <div class="col-md-2"></div>
        <div class="controls col-md-5">
      
        <?php
         generateRegisterNewJoinSumation($newJoin, $newJoinDay_1, $newJoinDay_2);
        ?>
        
        </div>
                
        </div>
        <br>    
        
        <h1>Register List</h1>
        <div class="controls">
      
        <?php
        generateRegisterData($guestData);
        ?>
        
            </div>
            </div>
        </div>
        
 
        </fieldset>
       
            
            
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

    
      <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="<?php echo base_url('assets/vendor/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/vendor/jquery-migrate.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

    
        <!-- Page level -->
        <script src="<?php echo base_url('assets/js/moment.js'); ?>" type="text/javascript"></script>
       
        
        <script type="text/javascript">
            
        $(document).ready(function() {

            $(".add-more").click(function(){ 
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });

            $("body").on("click",".remove",function(){ 
                $(this).parents(".control-group").remove();
            });

          });
          
          $(document).ready(function() {

            $(".add-more2").click(function(){ 
                var html = $(".copy2").html();
                $(".after-add-more2").after(html);
            });

            $("body").on("click",".remove",function(){ 
                $(this).parents(".control-group2").remove();
            });

          });

        </script>
</body>
</html>