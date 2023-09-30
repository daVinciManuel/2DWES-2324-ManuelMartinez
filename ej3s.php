<html>
<head>
    <title>IP + NETMASK + etc. etc.</title>
    <style>
        <?php include('css/style.css'); ?>
    </style>
</head>
<body>
    <?php
    $ip = '192.168.16.100/16';

    $netMask = getNetmask($ip);
    $DireccionRed = getDireccionRed($ip);
    $broadcast = getDireccionBroadcast($ip);
    $rango = getRango($ip);
// -------------------------------------------------------- PRINTS --------------------------------------------------------
    print("<p>IP $ip</p>");
    print("<p>Máscara $netMask </p>");
    print("<p>Direccion Red: $DireccionRed </p>");    
    print("<p>Direccion Broadcast: $broadcast </p>");    
    print("<p>Rango: $rango </p>");
    print("</br></br>");
    
    
    
// -------------------------------------------------------- FUNCIONES --------------------------------------------------------
    function getNetmask($ip){
        $netmaskPos = strpos($ip,"/");
        $netmask = substr($ip, $netmaskPos+1);
        return $netmask;
    }
    function getDireccionRed($ip){
        $debug = false;
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
        $newIP = implode('.', $newIP);
        if($debug){
            print("<p> pos conversion a Direccion de Red</p>");
            print("$StringIpBin");
            print("</br>");
            // foreach($newIP as $v){ print($v); }
            var_dump($newIP);
        }
        return $newIP;
    }
    function getDireccionBroadcast($ip){
        // hago una string con la ip entera
        $ipBin = ipToBin($ip); 
        $StringIpBin = implode("",$ipBin);

        // la convierto en un array de bits
        $arrayBits = array();
        $arrayBits = str_split($StringIpBin);
        $netmask = getNetmask($ip);
        foreach($arrayBits as $i => $value){
            if($i >= $netmask){
                $arrayBits[$i] = 1;
            }
        }
        $StringIpBin = chunk_split(implode("",$arrayBits),8,".");
        $StringIpBin = rtrim($StringIpBin,".");
        $newIP = explode(".",$StringIpBin);
        $newIP = array_map('bindec',$newIP);
        $newIP = implode('.', $newIP);
        return $newIP;
    }
    function getRango($ip){
        $inicio = array();
        $inicio = explode(".",getDireccionRed($ip));
        $inicio[3]++;
        $inicio = implode(".",$inicio);

        $final = array();
        $final = explode(".",getDireccionBroadcast($ip));
        $final[3]--;
        $final = implode(".",$final);

        // $rango = sprint("de $inicio a $final");
        $rango = $inicio . " a " . $final;
        // var_dump($rango);
        return $rango;
    }
    // -------------------- FUNCIONES UTILES -------------------
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
        // agrega 0's a la izq necesarios para llegar a 8 char
        if(strlen($value) < 8){
            $value = str_pad($value,8,"0",STR_PAD_LEFT);
        }
        return $value;
    }
    ?>
</body>
</html>