<html>
    <head>
        <title>IP CONVERTER</title>
    </head>
    <body>
        <?php
        $ip = "192.18.16.204";
        // explode()    es el split() de PHP
        $num = explode(".", $ip);
        $ipBin = sprintf("<b> %b.%b.%b.%b </b>",$num[0],$num[1],$num[2],$num[3]);
        // print("la ip ", $ip, " convertida a binario es ",$ipBin);
        // solo se concatena en echo() NO EN PRINT()
        print("<h2>la ip $ip convertida a binario es $ipBin</h2>");
        ?>
    </body>
</html>