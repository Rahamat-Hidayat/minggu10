<?php
    include "myconnection.php";

    $name = $_POST["myname"];
    $address = $_POST["myaddress"];


    move_uploaded_file($tempSementara, $lokasiUpload);

    $query = "INSERT INTO student(name, address)
        VALUE('$name','$address')";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }
    else{
        echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>
