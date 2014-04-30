<!--
********************************************************************
****															                              
****	This file is an entire website that has been posted     	
****	at the request of a client for a pending job contract   	
****														                              	
****	All content has been written by: Harry McKinney		      	
****	All software licenses are owned by: McKinney Media		    
****														                              	
****	The name of the website is :						                	
****	for the company (or person) :						                	
****															                              
****	Thanks for your interest, Please contact 			            
****	McKinney Media or Harry McKinney with any questions		    
****														                                
****	All Database passwords and names have been hashed out	    
****	or edited for security reasons						                
****														                              	
******************************************************************** -->  







<!-- this is a file I wrote to calculate 1 Billion Seconds for my 10yr old son -->


<?php


echo 'Current time: ' . date('m-d-Y H:i:s') . "\n";           



$date = new DateTime();
$date->modify('+1000000000 second');
echo 'One Billion Seconds Later:' . $date->format('m-d-Y H:i:s');

//used date time function to escape the 2038 bug!

?>
