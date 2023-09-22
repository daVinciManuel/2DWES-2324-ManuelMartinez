<html>
<head><title>IP + NETMASK + etc. etc.</title></head>
<body>
    <?php
    $ip = '192.168.16.100/16';

    $netMask = getNetmask($ip);
    

    // ----------------------- PRINTS ----------------------
    print("<p>IP $ip</p>");
    print("<p>Máscara $netMask </p>");
    
    
    
    
    
    
    
    
    // ----------------------- FUNCIONES --------------------
    function getNetmask($ip){
        $netmaskPos = strpos($ip,"/");
        $netmask = substr($ip, $netmaskPos+1);
        return $netmask;
    }
    ?>
</body>
</html>