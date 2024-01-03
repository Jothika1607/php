<!DOCTYPE html>
         <html lang="en">
         <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
         </head>
         <body>
         <p>Choose a site to visit :</p>
      
      <form action = "<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
         <select name = "location">.
     
        <option value = "http://www.ITSourceCode.com">
           itsourcecode.com
        </option>
     
        <option value = "http://www.PythonforFree.com">
           pythonforfree.com
        </option>
     
         </select>
         <input type = "submit" />
      </form>
         </body>
         </html>
         <?php
         $num = rand( 1, 4 );
         
         switch( $num ) {
            case 1: $image_file = "1.png";
               break;
            
            case 2: $image_file = "2.jpg";
               break;
            
            case 3: $image_file = "3.png";
               break;
            
            case 4: $image_file = "4.jpg";
               break;
         }
         echo "<img src=$image_file />"
          ?>

   <?php
   	if(empty($_POST["location"])) {
   	echo " ";
   	}else{
    $location = $_POST["location"];
    header( "Location:".$location );
      
     	exit();
   }

    $userAgent = $_SERVER['HTTP_USER_AGEN'];
    echo "$userAgent";

    date_default_timezone_set("Asia/Calcutta");
    echo "Server date".date("Y-m-d");
    echo "Time".date("h:i:sa");

         function getBrowser() { 
            $user_agent = $_SERVER['HTTP_USER_AGENT']; 
            $base_name = 'Unknown';
            $platform = 'Unknown';
            $version = "";
            
            //First get the platform?
            if (preg_match('/linux/i', $user_agent)) {
               $platform = 'linux';
            }elseif (preg_match('/macintosh|mac os x/i', $user_agent)) {
               $platform = 'mac';
            }elseif (preg_match('/windows|win32/i', $user_agent)) {
               $platform = 'windows';
            }
            
            // Next get the name of the useragent yes seperately and for good reason
            if(preg_match('/MSIE/i',$user_agent) && !preg_match('/Opera/i',$user_agent)) {
               $base_name = 'Internet Explorer';
               $user_browser = "MSIE";
            } elseif(preg_match('/Firefox/i',$user_agent)) {
               $base_name = 'Mozilla Firefox';
               $user_browser = "Firefox";
            } elseif(preg_match('/Chrome/i',$user_agent)) {
               $base_name = 'Google Chrome';
               $user_browser = "Chrome";
            }elseif(preg_match('/Safari/i',$user_agent)) {
               $base_name = 'Apple Safari';
               $user_browser = "Safari";
            }elseif(preg_match('/Opera/i',$user_agent)) {
               $base_name = 'Opera';
               $user_browser = "Opera";
            }elseif(preg_match('/Netscape/i',$user_agent)) {
               $base_name = 'Netscape';
               $user_browser = "Netscape";
            }
            
            // finally get the correct version number
            $known = array('Version', $user_browser, 'other');
            $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
            
            if (!preg_match_all($pattern, $user_agent, $matches)) {
               // we have no matching number just continue
            }
            
            // see how many we have
            $i = count($matches['browser']);
            
            if ($i != 1) {
               //we will have two since we are not using 'other' argument yet
               
               //see if version is before or after the name
               if (strripos($user_agent,"Version") < strripos($user_agent,$user_browser)){
                  $version= $matches['version'][0];
               }else {
                  $version= $matches['version'][1];
               }
            }else {
               $version= $matches['version'][0];
            }
            
            // check if we have a number
            if ($version == null || $version == "") {$version = "?";}
            return array(
               'userAgent' => $user_agent,
               'name'      => $base_name,
               'version'   => $version,
               'platform'  => $platform,
               'pattern'   => $pattern
            );
         }
         
         // now try it
         $ua = getBrowser();
         $yourbrowser = "Your browser: " . $ua['name'] . " " . $ua['version'] .
            " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
         
         print_r($yourbrowser);
        ?>