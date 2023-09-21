<html>
    <head>
        <title>IP CONVERTER</title>
    </head>
    <body>
        <?php
        $ip = "192.18.16.204";
        // explode()    es el split() de PHP
        $num = explode(".", $ip);
        $ipBin = strval(decbin($num[0])).".".strval(decbin($num[1])).".".strval(decbin($num[2])).".".strval(decbin($num[3]));
        print("<h2>la ip $ip convertida a binario es $ipBin</h2>");
        ?>
    </body>
</html>
