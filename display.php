<?php
    session_start();
    $path = $_SESSION['path'];
    $details = $_SESSION['details'];
    if(file_exists("$path") == true){

    $img = "$path/avatar.png";

    $update = fopen("$path/full-name.txt", "r");
    $fname = fgets($update);
    fclose($update);

    $update = fopen("$path/faculty.txt", "r");
    $faculty = fgets($update);
    fclose($update);
    
    $update = fopen("$path/department.txt", "r");
    $department = fgets($update);
    fclose($update);
    
    $update = fopen("$path/semester.txt", "r");
    $semester = fgets($update);
    fclose($update);
    
    $update = fopen("$path/matric-no.txt", "r");
    $matric_no = fgets($update);
    fclose($update);

    $courses = array('chm101 chemistry', 'bio101'=>'biology', 
    'mat101'=>'algebra', 'mat111'=>'trigonometry', 'csc111'=>'introduction to computer', 
    'gns101'=>'use of library', 'phy101'=>'mechanics', 'phy103'=>'basic heat', 
    'phy105'=>'experimental physics', 'mat141'=>'geometry');
    
    
    $name = $_POST['courses'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        tr{
            height: 20px;
        }
    </style>
</head>
<body>
    <div class="docket">
        <div class="space"></div>
            <div class="left">
                <div class="center">
                    <h2>lagos state university</h2>
                </div>
                <b>faculty: </b><span><?php echo $faculty; ?></span><br>
                <b>programme: </b><span><?php echo $department; ?></span><br>
                <span>2019/2020 academic session:: </span><span><?php echo $semester; ?></span><span> semester examination docket</span><br>
                <b>matricnum: </b><span><?php echo $matric_no; ?></span>&nbsp;&nbsp;&nbsp;<span class="fullname"><?php echo $fname; ?></span><br>
                <div class="center">
                    <h4>registered courses for the examination</h4>
                </div>
                <?php
                  foreach ($name as $key){
                    $paste = strtoupper($key);
                    echo "<table>
                    <tr>
                    <td>$paste</td>
                    </tr>
                    </table";
                  }
                ?>
            <div class="space"></div>
            <div class="right">
                <img src="<?php echo $img; ?>" alt="avatar"><br>
                
                
            </div>
        <div class="space"></div>
    </div>
    <br>
    <div class="note">
    <b>NOTE: <span>only this examination docket allows the bearer entrance into the examination hall. you are advised to laminate this docket as a mutilated exam docket is not admissible.</span></b>
    </div>
            
</body>
</html>
<?php
    }else{    
        header ('Location: index.php');
    }
?>