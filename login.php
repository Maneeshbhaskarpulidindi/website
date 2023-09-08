<html>
    <?php
    $read=fopen('rollnumbers.txt','r');
    $id=$_GET["id"];
    while(!feof($read))
    {
        if($id==fgets($read))
        {
            header("Location:http://localhost/simple/website/welcome.html");
        }
        echo "number is not registered please register now.";
    }
fclose($read);
    ?>

</html>