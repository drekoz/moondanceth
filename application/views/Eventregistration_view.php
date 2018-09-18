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

<div id="container">
	<div id="body">
        <fieldset>
        <div class="row">
            <div class="col-md-1">&nbsp</div>
            <div class="col-md-10 text-left">
                
        <h1>Smart Event Registration</h1>
        <div class="controls">
        <legend>Event detail</legend>
        
       <?php echo form_open_multipart('Eventregistration/register', array('name' => 'registration','onsubmit' => 'return validateForm();'));?>
               
            
        <div class="form-group row">
          <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Name:</label>  
          <div class="col-md-4">
          <input id="EventName" name="EventName" type="text" placeholder="Event name" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
            
        <div class="form-group row">
          <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Event host:</label>  
          <div class="col-md-4">
          <input id="textinput" name="EventHost" type="text" placeholder="Envent host" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Guest size:</label>  
          <div class="col-md-4">
          <input id="EventSize" name="EventSize" type="text" placeholder="Approx. number of guest" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="radios">Event type:</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="radios-0">
              <input type="radio" name="EventType" id="EventType" value="1" checked="checked">
              Private
            </label>
            </div>
          <div class="radio">
            <label for="radios-1">
              <input type="radio" name="EventType" id="prEventTypeess" value="2">
              Press
            </label>
            </div>
              <div class="radio">
            <label for="radios-2">
              <input type="radio" name="EventType" id="EventType" value="2">
              Public
            </label>
            </div>
              <div class="radio">
            <label for="radios-3">
              <input type="radio" name="EventType" id="EventType" value="2">
              Other / Special
            </label>
                  <input id="EventTypeEventTypeSpecial" name="EventTypeSpecial" type="text" placeholder="Please specify" class="form-control input-md">
            </div>
          </div>
        </div>
          
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Venue:</label>  
          <div class="col-md-4">
          <input id="EventVenue" name="EventVenue" type="text" placeholder="Event venue" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
          
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Event date start:</label>  
          <div class="col-md-4">
          <input id="EventStartDate" name="EventStartDate" type="text" placeholder="Start date" class="form-control input-md">
          </div>
          <div class="col-md-2">
          <input id="EventStartTime" name="EventStartTime" type="text" placeholder="Time" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
       
            
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Event date to:</label>  
          <div class="col-md-4">
          <input id="EventEndDate" name="EventEndDate" type="text" placeholder="To date" class="form-control input-md">
          </div>
          <div class="col-md-2">
          <input id="EventEndTime" name="EventEndTime" type="text" placeholder="Time" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
            
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Event detail:</label>  
          <div class="col-md-4">
              <textarea class="form-control  input-md" rows="5" id="EventDetail" name="EventDetail" placeholder="Event detail"></textarea>
          </div>
          <div class="col-md-5"></div>
        </div>
            
            
        <legend>Guest Field</legend>
            
        <!-- Multiple Checkboxes -->
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-4 control-label" for="checkboxes">Select guest information fields</label>
          <div class="col-md-4">
          <div class="checkbox">
            <label for="checkboxes-0">
              <input type="checkbox" name="CheckboxFullname" id="CheckboxFullname" value="1">
              Full name
            </label>
        </div>
              
              <div class="checkbox">
            <label for="checkboxes-0">
              <input type="checkbox" name="CheckboxGender" id="CheckboxGender" value="1">
              Gender
            </label>
        </div>
              
          <div class="checkbox">
            <label for="checkboxes-1">
              <input type="checkbox" name="CheckboxTelephone" id="CheckboxTelephone" value="2">
              Telephone no.
            </label>
            </div>
              
              <div class="checkbox">
            <label for="checkboxes-0">
              <input type="checkbox" name="CheckboxEmail" id="CheckboxEmail" value="1">
              Email addres
            </label>
            </div>
              
              <div class="checkbox">
            <label for="checkboxes-0">
              <input type="checkbox" name="CheckboxPhoto" id="CheckboxPhoto" value="1">
              In event photo
            </label>
        </div>
              <div class="col-md-10"> 
                <div class="checkbox">
                    <label for="checkboxes-0">
                      <input type="checkbox" name="CheckboxDSLR" id="CheckboxDSLR" value="1">
                      DSLR grade photo shooting
                    </label>
                </div>
                  <div class="checkbox">
                    <label for="checkboxes-1">
                      <input type="checkbox" name="CheckboxQRCode" id="CheckboxQRCode" value="2">
                      QR code photo upload
                    </label>
                    </div>
                      
                  </div>
              
              
          </div>
          <div class="col-md-5"></div>
        </div>
        
        <label class="col-md-4 control-label" for="text">Specify additional guest information fields</label>
        <div class="form-group row">
        <div class="col-md-4 input-group control-group after-add-more">
          <input type="text" name="addmore[]" class="form-control" placeholder="Additional guest field name">
          <div class="input-group-btn"> 
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
          </div>
        </div>
        </div>

        <!-- Copy Fields -->
        <div class="copy hide">
            <label class="col-md-4 control-label" for="checkboxes">&nbsp;</label>
          <div class="col-md-4 control-group input-group" style="margin-top:10px">
              <div class="col-md-12 input-group control-group">
            <input type="text" name="addmore[]" class="form-control" placeholder="Additional guest field name">
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
            </div>
          </div>
        </div>
        
        <br>
        <legend>Special request</legend>
            
        <!-- Multiple Checkboxes -->
        <div class="form-group">
            <div class="col-md-1"></div>
          <label class="col-md-4 control-label" for="checkboxes">Addition special request</label>
          <div class="col-md-4">
          
              <div class="checkbox">
                    <label for="checkboxes-1">
                      <input type="checkbox" name="CheckboxSpecialGuestRandom" id="checkboxes-1" value="2">
                      Mini game - Guest name randomiser
                    </label>
            </div>
          </div>
        </div>
        
        
        
        <label class="col-md-4 control-label" for="text">Specify additional special request</label>
        <div class="form-group">
        <div class="col-md-4 input-group control-group2 after-add-more2">
          <input type="text" name="addmore2[]" class="form-control" placeholder="Additional special request">
          <div class="input-group-btn"> 
            <button class="btn btn-success add-more2" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
          </div>
        </div>
        </div>

        <!-- Copy Fields -->
        <div class="copy2 hide">
            <label class="col-md-4 control-label" for="checkboxes">&nbsp;</label>
          <div class="col-md-4 control-group2 input-group" style="margin-top:10px">
              <div class="col-md-12 input-group control-group2">
            <input type="text" name="addmore2[]" class="form-control" placeholder="Additional special request">
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
            </div>
          </div>
        </div>

        <legend>Organiser Contact Details</legend>
        
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Name:</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Organisation:</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Telephone:</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-2 control-label" for="textinput">Email:</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
          </div>
          <div class="col-md-5"></div>
        </div>
        
        
        <br><br>
        <div class="form-group row">
            <div class="col-md-1"></div>
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Create new event</button>
          </div>
        </div>
                
        <?php echo form_close(); ?>    
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