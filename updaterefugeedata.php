<?php
    include 'databaseconnection.php';
    if (isset($_POST['addrefugee'])) {
        $id = $_POST['id']; 
        $reg = $_POST['reg'];
        $name = $_POST['name'];
        $mothername = $_POST['mothername'];
        $fathername = $_POST['fathername'];
        $dateofbirth = $_POST['dob'];
        $gender = $_POST['gender'];
        $religion = $_POST['religion'];
        $paddress = $_POST['paddress'];
        $camp = $_POST['camp'];
        $sector = $_POST['sector'];
        $contact = $_POST['contact'];
        $temcontact = $_POST['temcontact'];
        $behaviour = $_POST['behaviour'];
        $missmem = $_POST['missmem'];
        $disease = $_POST['disease'];
        $blood = $_POST['blood'];
        $maritial = $_POST['maritial'];
        $sql = "UPDATE `refugee` SET `reg`='$reg',`name`='$name',`fathername`='fathername',`mothername`='$mothername',`gender`='$gender',`dob`='$dateofbirth',`religion`='$religion',`parmanentaddress`='$paddress',`camp`='$camp',`sector`='$sector',`contact`='$contact',`temcontact`='$temcontact',`status`='$behaviour',`missmem`='$missmem',`disease`='$disease',`blood`='$blood',`marital`='$maritial' WHERE id='$id'";
        if(mysqli_query($connection, $sql))
        {
            echo "Data Access Successfully!";
            header('location:updaterefugeeinfo.php');
        }else{
            
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }

    }
?>