<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web teknolojileri ve programlam1</title>
</head>
<body>
    <!-- Açıklama Satırı -->
    <?php
    /*Açıklama satırı bloğu
    shift+alt+a
    */
    /* echo:ekrana yazdırma işlemi yapar.
    İçerisinde html etketi bulunabilir.
    Çift tırnak yada tek tırnak kullanılabilir.
    Çift tırnak içerisinde değişken içerikleri gösterilir.
    Nokta işareti ile birleştirme yapılabilir.
    \ Kaçış karakteridir.*/
    
    echo"<h1>Aydın Adnan Menderes Üniversitesi</h1> "; 
    echo"<h3>Aydın Meslek Yüksek Okulu</h3> "; 
    echo"Bilgisayar programcılığı "." Web teknolojileri"."<br>";
    echo"Bilgisayar programcılığı"."<br>"."Web teknolojileri";


    echo"<hr> <h4> Değişken tanımlama kuralları</h4>";
    echo"<ol>
            <li> Değişken isimleri $ ile başlar.</li>
            <li> Değişken isimleri sayısal bir ifade ile başlayamaz.</li>
            <li> Değişken isimlerinde boşluk kullanımlaz.İki kelime varsa birinci_sinif birincisinif.</li>
            <li>Değişken ve dosya  isimlerinde Türkçe karakter kullanılmamalıdır. </li>
            <li>Değişken isimlerinde büyük küçük harf kullanımına duyarlıdır. \$sayi != \$Sayi </li>
            <li> Değişken içerisinde eğer metinsel ifade varsa çift tırnak veya tek tırnak kullanılır.</li>
            <li> Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır.</li>
            <li> Değişken isimi değişkenin içeriğini işaret etmeli.</li>
            <li> Değişken echo ile yazdırılır.</li>
    </ol>";

    echo"<hr> <h4> Değişken tanımlama örnekleri</h4>";

    $isim="Ahmet";
    $soyisim="Davut";
    $yas=34;

    echo $isim ." ". $soyisim;
    echo "<br>";
    echo "$isim $soyisim $yas";



    /* Uygulama
    üniversite-myo-ad-soyad-numara değişkenlerini olüşturup içeriğini uygun şekilde doldurunuz.
    Girilen bu değişkenlerin değerlerini bir htlm tablo içerisinde gösteriniz.
    */
    $universite="Adnan Menderes Üniversitesi";
    $MYO="Aydın Meslek Yüksekokulu";
    $ad="Simge";
    $soyad="Atik";
    $numara=216001008;
    
    ?>
    <input type="text" name="" disabled value="<?php echo $universite; ?>" id="">
    <input type="text" name="" disabled value="<?php echo $MYO; ?>" id="">
    <input type="text" name=""disabled value="<?php echo $ad; ?>" id="">
    <input type="text" name="" disabled value="<?php echo $soyad; ?>" id="">
    <input type="text" name="" disabled value="<?php echo $numara; ?>" id="">
    
    
</body>
</html>