<html>
<head><title>IP + NETMASK + etc. etc.</title></head>
<body>
    <?php
    $ip = '192.168.16.100/16';

    $netMask = getNetmask($ip);
    // $DireccionRed = getDireccionRed($ip);

// -------------------------------------------------------- PRINTS --------------------------------------------------------
    print("<p>IP $ip</p>");
    print("<p>Máscara $netMask </p>");
    // print("<p>Direccion Red $DireccionRed </p>");    
    print("</br></br>");
    
    
    
    
// -------------------------------------------------------- FUNCIONES --------------------------------------------------------
    function getNetmask($ip){
        $netmaskPos = strpos($ip,"/");
        $netmask = substr($ip, $netmaskPos+1);
        return $netmask;
    }
    
    function getDireccionRed($ip){
        $netmask = getNetmask($ip);
        $netmaskPos = strpos($ip,"/");
        $ip = substr($ip,0,$netmaskPos); 
        $ipSplitted = explode(".",$ip);
        $ipBinary = array();
        foreach($ipSplitted as $i => $byte){
            // $byteBin = decbin($byte);
            // print("<p>$i - $byte</p>");

        }
        extract($ipSplitted);
        var_dump($ipSplitted);
        // la idea es tener un array con la ip en binario (ipSplitted) y otro con la Ip en binario
    }
    getDireccionRed($ip);
    ?>
</body>
</html>