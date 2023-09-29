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
        $debug = true;
        $netmask = getNetmask($ip);
        $netmaskPos = strpos($ip,"/");
        $ip = substr($ip,0,$netmaskPos); 
        // array con los elementos de la IPv4 SIN /[longNetMask]
        $ipSplitted = explode(".",$ip);
        // convierto cada byte de la IP en binario 
        $ipBinary = array();
        $ipBinary = array_map("decbin",$ipSplitted);
        // ////////////////////////////////////////////////////////
        // FALTA RELLENAR CON 0's LOS OCTETOS QUE NO LLEGAN A 8 CHAR
        // ////////////////////////////////////////////////////////
        // hago una string con la ip entera
        $StringIpBin = implode("",$ipBinary);
        if($debug){
            var_dump($ipBinary);
            print("</br>");
            print("number of bits: ". strlen($StringIpBin));
            print("</br>");
        }
        // la convierto en un array de bits
        $arrayBits = str_split($StringIpBin);

        // Ahora a intercambiar 0's por 1's para sacar la direccion de red xd
        foreach($arrayBits as $i => $value){
        if($i >= $netmask){
            $arrayBits[$i] = 9;
        }
        // Time to turn Ip from binary to decimal
        }
        
        // $StringIpBin = chunk_split(implode("",$arrayBits),8,".");
        $StringIpBin = implode("",$arrayBits);
        if($debug){
        var_dump($ipSplitted);
        var_dump($arrayBits);
        print("</br>");
        print("$StringIpBin");
        print("</br>");
        print_r(array_values($arrayBits));
        }

    }
    getDireccionRed($ip);
    ?>
</body>
</html>