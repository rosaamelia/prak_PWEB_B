<?php
require 'Tabung.php';


// $_GET['nama']='Rosa amelia';
// var_dump ($_GET);

// var_dump($_POST); #menangkap melalui pengisian form
// if (isset($_POST['submit_bttn'])) 
//     if (strlen($_POST['diameter']) > 0) {
//         echo "login !";
//     } else {
//         echo "Isi diameter terlebih dahulu";
//     }
// } #cek login
// $luas = 0;
// $volume =0 ;


// if (isset($_POST['button_submit'])) {

//     $diameter = $_POST ['diameter'];
//     $tinggi = $_POST ['tinggi'];
//     $jari = $diameter/2;
    
//     $luas = 3.14 * $diameter *$tinggi ;
//     $volume = 3.14 * $jari * $jari * $tinggi;
//     echo "Diameter $diameter <br/>";
//     echo "Tinggi $tinggi <br/>";
// }
$tabung = new Tabung;

if (isset($_POST['button_submit'])) {
    $tabung -> setDiameter($_POST['diameter']);
    $tabung -> setTinggi($_POST['tinggi']);
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <form action="" method="POST">
        <input type="text" name="diameter" value = '7'> </form> # mencoba $_post-->
    <!-- <form action="" method="POST">
        <input type="text" name="diameter"> 
        <button name = 'submit_bttn'>submit</button></form>  -->
<!--     
    <h1><?php echo ($_GET['nama']);?></h1> -->
    
    
    
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name = "button_submit">Hitung</button>

        <hr>

        
    </form>
    <ul>
            <li>Luas Permukaan : <?php  echo $tabung -> getLuasSelimut()?></li>
            <li>Volume : </li>
        </ul>
</body>
</html>