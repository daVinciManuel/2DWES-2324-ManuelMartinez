<html>
<head><title>IP + NETMASK + etc. etc.</title></head>
<body>
    <?php
    $ip = '192.168.16.100/16';

    $netMask = getNetmask($ip);
    $DireccionRed = getDireccionRed($ip);

    // ----------------------- PRINTS ----------------------
    print("<p>IP $ip</p>");
    print("<p>Máscara $netMask </p>");
    print("<p>Direccion Red $DireccionRed </p>");    
    
    
    
    
    
    
    // ----------------------- FUNCIONES --------------------
    function getNetmask($ip){
        $netmaskPos = strpos($ip,"/");
        $netmask = substr($ip, $netmaskPos+1);
        return $netmask;
    }
    function getDireccionRed($ip){
        $netmask = getNetmask($ip);
        $ipArray = explode(".",$ip);
        
    }
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // ~~~~~~~~~~~~~~~~~~~ INTENTO FALLIDO ~~~~~~~~~~~~~~~~~~~ 
    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // [pensaba que todas las mascaras eran multiplos de 8]
    //
    // function getDireccionRed($ip){
    //     // ============== DATOS ====================
    //     // ________________________________________
    //     // obtengo la posicion de '/' en la IP
    //     $netmaskPos = strpos($ip,"/");
    //     // obtengo la máscara
    //     $netmask = substr($ip, $netmaskPos+1);
    //     $ipArrayLength = count($ipArray);
    //     // ============== OPERACIONES ====================
    //     // _______________________________________________
    //     $aux = $netmask / 8;
    //     for($i = 0; $i < $ipArrayLength; $i++){
    //         if($i >= $aux){
    //             $ipArray[$i] = 0;
    //         }
    //     }
    //     $newIp = "$ipArray[0].$ipArray[1].$ipArray[2].$ipArray[3]";
    //     return $newIp;
    // }
    // // echo getDireccionRed($ip);
    ?>
</body>
</html>