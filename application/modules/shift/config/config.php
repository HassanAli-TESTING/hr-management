<?php
// module directory name
$HmvcConfig['shift']["_title"]     = "Employee Details ";
$HmvcConfig['shift']["_description"] = "Simple hrm processing System";


// register your module tables
// only register tables are imported while installing the module
$HmvcConfig['shift']['_database'] = true;
$HmvcConfig['shift']["_tables"] = array( 
	'emp_shifts',
	'emp_shifts_schedule',

	  
);

