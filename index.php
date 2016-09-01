<?php 
    require_once 'controller/indexProcess.php';
    
    if( $path['call_parts'][0] == '' || $path['call_parts'][0] == 'home' ) :
        include 'default.php';  
    elseif($path['call_parts'][0] == 'registration') :
        include 'registration.php';
    endif;   
