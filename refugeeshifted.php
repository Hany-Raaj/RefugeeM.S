<?php
    include 'databaseconnection.php';
    if (isset($_POST['addrefugee'])) {
        $id = $_GET['id'];
        $currentstatus= "Shifted";


        $sql = "UPDATE `refugee` SET `currentstatus`='$currentstatus' WHERE `id`='$id'"; 
        if(mysqli_query($connection, $sql))
        {
            ?>
                <script>
                    alert("Data Updated Successfully!");
                     window.open('updateteacherinfo.php?uid=<?php echo $id;?>', '_self');
                </script>
            <?php

        }else{
            ?>
            <script>
                    alert("<?php echo("ERROR: Could not able to execute $sql. " . mysqli_error($connection)); ?>");
                </script> 
            <?php
        }

    }
?>