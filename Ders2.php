<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
    <?php
    echo"<h4>Tırnak içerisindeki farklar</h4>";
  
    $uni="Adnan Menderes Üniversitesi";
    echo"Adnan Menderes Üniversitesi";
    echo"<br>";

    echo"1-Kazandığınız Üniversite: " .'$uni';/* değişkenin ismini yazdırır*/
    echo"<br>";
    echo"2-Kazandığınız Üniversite: " ."$uni";/*değişkenin içeriğini yazdırır*/
    echo"<br>";
    echo"3-Kazandığınız Üniversite: " .$uni;/*değişkenin içeriğini yazdırır*/
    echo"<br>";
    echo"4-Kazandığınız Üniversite: $uni";/*değişkenin içeriğini yazdırır*/


    echo"<hr><h4>Temel matematiksel işlemler</h4>";
    echo"<h5>Toplama işlemi</h5>";


    $sayi1=10;
    $sayi2=20;
    echo'$sayi1 + $sayi2= ' . $sayi1  + $sayi2;
    echo"<br>";
    echo"$sayi1 +$sayi2=" . $sayi1  + $sayi2;
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";





    






    
    ?>
</body>
</html>