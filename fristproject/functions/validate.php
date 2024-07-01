<?php 


     
    function sanitizeString($string)
    {
        $string = trim($string);
        $string = filter_var($string,FILTER_SANITIZE_STRING);
        return $string;
    }

   
    function checkEmpty($string)
    {
        if(empty($string))
        {
            return false;
        }
        return true;
    }

    
    function checkLess($value,$minimum)
    {
        if(strlen($value) < $minimum)
        {
            return false;
        }
        return true;
    }



   
    function sanitizeEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return $email;
    }


     
     function validEmail($email)
     {
         if(!filter_var($email, FILTER_VALIDATE_EMAIL))
         {
            return false;
         }
         return true;
     }


?>





