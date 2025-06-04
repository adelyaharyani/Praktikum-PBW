<html lang="en">
    <head>
        <body>
           <?php
           $hari = "Senin";
           switch ($hari) {
              case "Senin":
                  echo "Hari pertama kerja!";
                  break;
              case "jum'at":
                  echo "Solat jumat!";
                  break;
              case "Minggu":
                  echo "Libur akhir pekan!";
                  break;
              default:
                  echo "Hari biasa.";}
                  ?>
        </body>
    </head>
</html>