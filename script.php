<?php
    session_start();

    if(isset($_POST['login'])){
        $details = strtoupper($_POST['name']) . $_POST['matric_no'];
        $matric_no = $_POST['matric_no'];
        $path = 'Student Details/'.$details;
        $_SESSION['path'] = $path;        
        $_SESSION['details'] = $details;
        $_SESSION['matric_no'] = $_POST['matric_no'];  
            

        if(file_exists($path) == false){
            $write = fopen("default/error.txt", "r");
            $error = fgets($write);
            fclose($write); 
            
        }
        else{

            $update = fopen("$path/matric-no.txt", "w");
            fwrite($update, $matric_no);
            fclose($update); 

            header ("Location: form.php");
        }
    } 

    
?>