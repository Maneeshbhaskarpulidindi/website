<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id=$_GET['iid'];
    $pas=$_GET['pas'];
    if($pas=="IITBHILAI")
    {
    $rrea=fopen('rollnumbers.txt','a');
    fputs($rrea,$id."\n");
    echo "your roll number is registered succesfully,please login with the ID";
    fclose($rrea);
    }
    else
    {
     echo "wrong password, please register with correct password";
     $target = "login.html";
     $linkname = "Relogin";
     link($target, $linkname);
    //  header("Location:http://localhost/simple/website/login.html");
    }
     ?>
    
</body>
</html>