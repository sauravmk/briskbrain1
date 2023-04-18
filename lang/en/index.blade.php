<?php

  $user_ip = getenv('REMOTE_ADDR');
  $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
  $country = $geo["geoplugin_countryName"];

  switch ($country) {
    case "India":
        header('Location:http://domain.com/hi');
        break;
    case "United States":
        header('Location:http://domain.com/en');
        break;
    default:   
        header('Location:http://domain.com');  
  }

?>
http://ipinfo.io/
