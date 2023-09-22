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
        // ============== DATOS ====================
        // ________________________________________
        // obtengo la posicion de '/' en la IP
        $netmaskPos = strpos($ip,"/");
        // obtengo la máscara
        $netmask = substr($ip, $netmaskPos+1);
        // separo la IP de la máscara
        $ipOnly = substr($ip,0,$netmaskPos);
        // array con los componentes del IPv4
        $ipArray = explode(".",$ipOnly);
        $ipArrayLength = count($ipArray);
        // ============== OPERACIONES ====================
        // _______________________________________________
        $aux = $netmask / 8;
        for($i = 0; $i < $ipArrayLength; $i++){
            if($i >= $aux){
                $ipArray[$i] = 0;
            }
        }
        $newIp = "$ipArray[0].$ipArray[1].$ipArray[2].$ipArray[3]";
        return $newIp;
    }
    // echo getDireccionRed($ip);
    ?>
</body>
</html>