<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        echo "Hello World!" . "<br>";
    //2. bien
    $ten = "Le Hoang Viet" . "<br>";
    echo$ ten; 

    //3. Hang
    define("SoPi", 3.14);
    echo SoPi . "<br>";

    //4. phan biet dau nhay don va dau nhay doi
    echo '$ten'; // in ra chuoi 
    echo "<br>";
    echo "$ten"; // in ra bien duoc goi

    //5 toan tu
    $soThuNhat = 10;
    $soThuHai = 5;
    echo "<br>";
    #phep + - * / % 
    echo $soThuNhat % $soThuHai;
    echo "<br>";

    # toan tu tang giam ++ --
    echo ++$soThuNhat;
    # So sanh: > < >= <= == === != !==
    # += -= /= *=    
    ?>
</body>
</html>