<?php
    session_start();
    $path = $_SESSION['path'];
    $details = $_SESSION['details'];

    if(file_exists("$path") == true){


        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $_SESSION['fname'] = $fname;
    
            $faculty = $_POST['faculty'];
            $_SESSION['faculty'] = $faculty;
    
            $department = $_POST['department'];
            $_SESSION['department'] = $department;
    
            $semester = $_POST['semester'];
            $_SESSION['semester'] = $semester;
            
            $path_1 = $_SESSION["path"];
    
            $update = fopen("$path_1/full-name.txt", "w");
            fwrite($update, $fname);
            fclose($update);
            
            $update = fopen("$path_1/faculty.txt", "w");
            fwrite($update, $faculty);
            fclose($update);
    
            $update = fopen("$path_1/department.txt", "w");
            $check_3 = fwrite($update, $department);
            fclose($update);
    
            $update = fopen("$path_1/semester.txt", "w");
            fwrite($update, $semester);        
            fclose($update);
            
            header("Location: display.php");
        }
        
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div align="center">
            
            <h1>Fill in your details</h1>
            <form action="display.php" method="post">
                    <label for="fname">Full Name:</label>
                    <input type="text" name="fname" required>
                    <label for="faculty">Faculty:</label>
                    <input type="text" name="faculty" required><br><br>

                    
                    <label for="department">Department:</label>
                    <input type="text" name="department" required>
                    <label for="semester">Semester:</label>
                    <select name="semester">
                        <option name="1st" value="1st">1st</option>
                        <option name="2nd" value="2nd">2nd</option>
                    </select><br><br>
                    <div class="div">
                    <label for="">Select your courses</label><br>
                    <table>
                    <tr>
                    <td>CHM101</td>
                    <td>introduction to chemistry</td><td><input type="checkbox" name="courses[]" value="bio101-  introduction to biology"></td></tr>
                     <tr><td>BIO101</td><td>introduction to biology</td><td><input type="checkbox" name="courses[]" value="bio101-  introduction to biology"></td></tr>
                     <tr><td>MAT101</td><td>ALGEBRA</td><td><input type="checkbox" name="courses[]" value="mat101-  algebra"></td></tr>
                     <tr><td>MAT111</td><td>TRIGONOMETRY</td><td><input type="checkbox" name="courses[]" value="mat111-  trigonometry"></td></tr>
                     <tr><td>CSC111</td><td>INTRODUCTION TO COMPUTER</td><td><input type="checkbox" name="courses[]" value="csc111-  introduction to computer"></td></tr>
                     <tr><td>GNS101</td><td>USE OF LIBRARY</td><td><input type="checkbox" name="courses[]" value="gns101- use of library"></td></tr>
                     <tr><td>PHY101</td><td>MECHANICS AND PROPERTIES OF MATTER</td><td><input type="checkbox" name="courses[]" value="phy101-  mechanics and properties of matter"></td></tr>
                     <tr><td>PHY103</td><td>BASIC HEAT</td><td><input type="checkbox" name="courses[]" value="phy103-  basic 
                     <tr><td>PHY105</td><td>EXPERIMENTAL PHYSICS</td<td><input type="checkbox" name="courses[]" value="phy105-  experimental Physics"></td></tr>
                     <tr><td> MAT141</td><td>COORDINATE GEOMETRY</td><td><input type="checkbox" name="courses[]" value="mat141-  coordinate geometry"></td></tr>
                     
                     
                    </table>
                    </div>


                    <input type="submit" class="submit" name='submit' value="Upload Details">
            </form>

        </div>
    </body>
</html>
<?php
    }else{    
        header ('Location: index.php');
    }
    
?>