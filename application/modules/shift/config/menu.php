
   <?php

// module name
$HmvcMenu["shift"] = array(
    //set icon
    "icon"           => "<i class='fa fa-users'></i>", 
    
//*************POSITION START**************
 "position" => array(
            "controller" => "shifts",
            "method"     => "create_shift",
            "permission" => "create"
      
    ), 

//*************POSITION END**************


//*************GROUP LEVEL START*************
    //group level name
    "direct_empl" => array(
   "add_employee" => array(
        //menu name
  
            "controller" => "Employees",
            "method"     => "viewEmhistory",
            "permission" => "create"
       
       
    ), 

  "manage_employee" => array(
        //menu name
  
            "controller" => "Employees",
            "method"     => "manageemployee",
            "permission" => "read"
       
       
    ), 
    ), 

//*************GROUP LEVEL START*************    
   

//*****************EMPLOYEE PERFORMANCE******************
     "emp_performance" => array(
        //menu name
       
          
            "controller" => "Employees",
            "method"     => "create_emp_performance",
            "permission" => "create"
        
    ),     

  

);

 