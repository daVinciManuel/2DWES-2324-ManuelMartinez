<html>
<head>
    <title>IP + NETMASK + etc. etc.</title>
    <style>
        <?php include('css/style.css'); ?>
    </style>
</head>
<body>
    <?php
    $ip = '192.168.16.100/21';

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
    function ipToBin($ip){
        $netmask = getNetmask($ip);
        $netmaskPos = strpos($ip,"/");
        $ip = substr($ip,0,$netmaskPos); 
        // array con los elementos de la IPv4 SIN /[longNetMask]
        $ipSplitted = explode(".",$ip);
        // convierto cada byte de la IP en binario 
        $ipBinary = array();
        $ipBinary = array_map("decbin",$ipSplitted);
        $ipBinary = array_map("completeOcteto",$ipBinary);
        // var_dump($ipBinary);
        return($ipBinary);
    }
    function completeOcteto($value){
        if(strlen($value) < 8){
            $value = str_pad($value,8,"0",STR_PAD_LEFT);
        }
        return $value;
    }
    function getDireccionRed($ip){
        $debug = true;
        // hago una string con la ip entera
        $ipBin = ipToBin($ip); 
        $StringIpBin = implode("",$ipBin);

        // la convierto en un array de bits
        $arrayBits = array();
        $arrayBits = str_split($StringIpBin);

        if($debug){
            print("<p> pre conversion a Direccion de Red</p>");
            // foreach($arrayBits as $v){ print($v); }
            $StringIpBin = chunk_split(implode("",$arrayBits),8,".");
            print($StringIpBin);
            print("</br>");
            print("</br>");
        }
        // Ahora a intercambiar 1's por 0's para sacar la direccion de red xd
        $netmask = getNetmask($ip);
        foreach($arrayBits as $i => $value){
        if($i >= $netmask){
            $arrayBits[$i] = 0;
        }
        // Time to turn Ip from binary to decimal
        }
        $StringIpBin = chunk_split(implode("",$arrayBits),8,".");
        $StringIpBin = rtrim($StringIpBin,".");
        $newIP = explode(".",$StringIpBin);
        $newIP = array_map('bindec',$newIP);
        if($debug){
            print("<p> pos conversion a Direccion de Red</p>");
            print("$StringIpBin");
            print("</br>");
            // foreach($newIP as $v){ print($v); }
            var_dump($newIP);
        }


    }
    getDireccionRed($ip);
    ?>
</body>
</html>