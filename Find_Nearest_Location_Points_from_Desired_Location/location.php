<?php
        function get_client_ip_server() {
            $ipaddress = '';
            if (array_key_exists('HTTP_CLIENT_IP', $_SERVER))
            //if ($_SERVER['HTTP_CLIENT_IP'])
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if($_SERVER['HTTP_X_FORWARDED_FOR'])
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if($_SERVER['HTTP_X_FORWARDED'])
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if($_SERVER['HTTP_FORWARDED_FOR'])
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if($_SERVER['HTTP_FORWARDED'])
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if($_SERVER['REMOTE_ADDR'])
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';
         
            return $ipaddress;
        }
     $user_ip = get_client_ip_server();
     $geo = json_decode(file_get_contents("http://extreme-ip-lookup.com/json/$user_ip"));
     $country = $geo->country;
     $city = $geo->city;
     $ipType = $geo->ipType;
     $businessName = $geo->businessName;
     $businessWebsite = $geo->businessWebsite;
     $lat = $geo->lat;
     $lon = $geo->lon;
    
     echo "Location of $user_ip: $city, $country";
     echo "<br />latitude : ".$lat;
     echo "<br />longitude : ".$lon;
    
?>

