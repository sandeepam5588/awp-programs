<?php
    #calculate 60 days in the future: seconds * minutes * hours * days + current time
    $itm=60*60*24*60+time();
    #create cookie
    setcookie('last_visit',date("G:i -m/d/y"),$itm);
    #check if cookie exists
    if(isset($_COOKIE['last_visit'])) {
        $visit=$_COOKIE['last_visit'];
        echo "Your last visit was- " .$visit;
    }
    else {
        #no cookies
        echo "This is your first visit" ;
    }
 ?>