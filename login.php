<?php 
   if (($_POST['user']=='') and ($_POST['password']==''))   {  
        echo "1";
    } 
    elseif (($_POST['user']<>'fatima@gmail.com') and ($_POST['password']<>'0123456789')) {
        echo "2";
    }
    elseif (($_POST['user']=='fatima@gmail.com') and ($_POST['password']=='0123456789')) {
        echo "3";
    };
 ?>