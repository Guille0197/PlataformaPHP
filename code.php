<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "projectbd");

    ######## REGISTER ADMIN
    if (isset($_POST['registerbtn'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];

     if ($password === $cpassword ) {
        $query =  "INSERT INTO registeradmin (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
        $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Admin Profile added";
        header('Location: register.php');
    }else {
       $_SESSION['success'] = "Admin Profile not added";
        header('Location: register.php');
    }

     }
     else {
        $_SESSION['success'] = "Password and confirm password does not match";
        header('Location: register.php');
     }
    }

    ######## REGISTER TEACHERS
    if (isset($_POST['teacherbtn'])) {

        $name = $_POST['name'];
        $numerid = $_POST['numerid'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];
        $description = $_POST['description'];
        $usertype = $_POST['usertype'];
        $images = $_FILES["image_teachers"]['name'];

            #if (file_exists("upload/".$_FILES["image_teachers"]["name"])) {
              #  $store = $_FILES["image_teachers"]["name"];
               # $_SESSION['status'] = "Images already exists. '.$store.'";
               # header('Location: addteachers.php');
                    
                    if ($password === $cpassword ) {
                        $query =  "INSERT INTO teachers (name,numerid,email,username,phone,department,gender,password,description,usertype,image_teachers) 
                        VALUES ('$name','$numerid','$email','$username','$phone','$department','$gender','$password','$description','$usertype','$images')";
                        $query_run = mysqli_query($connection, $query);

                    if ($query_run) {
                        move_uploaded_file($_FILES["image_teachers"]["tmp_name"], "upload/".$_FILES["image_teachers"]["name"]);
                        $_SESSION['success'] = "Teachers Profile added";
                        header('Location: addteachers.php');
                    }else {
                    $_SESSION['success'] = "Teachers Profile is not added";
                        header('Location: addteachers.php');
                    }

                    }
                    else {
                        $_SESSION['success'] = "Password and confirm password does not match";
                        header('Location: addteachers.php');
                    }
           # }
                
    }

    ######## REGISTER STUDENT
    if (isset($_POST['add_student_btn'])) {

        $nameStudent = $_POST['namestudent'];
        $numberidStudent = $_POST["numberidstudent"];
        $genderStudent = $_POST['genderstudent'];
        $bdayStudent = $_POST['bdaystudent'];
        $age = $_POST['age'];
        $addressStudent = $_POST['addressstudent'];
        $phoneStudent = $_POST['phonestudent'];
        $levelStudent = $_POST['levelstudent'];
        $bloodtypeStudent = $_POST['bloodtypestudent'];
        $nationalityStudent = $_POST['nationalitystudent'];
        $usertype = $_POST['usertype'];
        $img_student = $_FILES["img_student"]['name'];
                    
                
                        $query =  "INSERT INTO student (namestudent,numberidstudent,genderstudent,bdaystudent,age,addressstudent,phonestudent,levelstudent,bloodtypestudent,nationalitystudent,usertype,img_student) 
                        VALUES ('$nameStudent','$numberidStudent','$genderStudent','$bdayStudent','$age','$addressStudent','$phoneStudent','$levelStudent','$bloodtypeStudent','$nationalityStudent','$usertype','$img_student')";
                        $query_run = mysqli_query($connection, $query);      
                        
                        if ($query_run) {
                        move_uploaded_file($_FILES["img_student"]["tmp_name"], "upload/student/".$_FILES["img_student"]["name"]);
                        $_SESSION['success'] = "Student Profile added";
                        header('Location: allstudent.php');
                        }else {
                        $_SESSION['success'] = "Student Profile is not added";
                            header('Location: addstudent.php');
                        }

    }

        ######## REGISTER PARENT
    if (isset($_POST['add_parent_btn'])) {

        $numberidStudent = $_POST['numberidStudent'];

        $namepmother = $_POST['namepmother'];
        $numidmother = $_POST["numidmother"];
        $professionmother = $_POST['professionmother'];
        $phonemother = $_POST['phonemother'];

        $namepfather = $_POST['namepfather'];
        $numidfather = $_POST['numidfather'];
        $professionfather = $_POST['professionfather'];
        $phonefather = $_POST['phonefather'];

        $addressparent = $_POST['addressparent'];
        $nationalityparent = $_POST['nationalityparent'];
        $imgidparent = $_FILES["imgidparent"]['name'];
                    
                
                        $query =  "INSERT INTO parent (numberidStudent,namepmother,numidmother,professionmother,phonemother,namepfather,numidfather,professionfather,phonefather,addressparent,nationalityparent,imgidparent) 
                        VALUES ('$numberidStudent','$namepmother','$numidmother','$professionmother','$phonemother','$namepfather','$numidfather','$professionfather','$phonefather','$addressparent','$nationalityparent','$imgidparent')";
                        $query_run = mysqli_query($connection, $query);      
                        
                        if ($query_run) {
                        move_uploaded_file($_FILES["img_student"]["tmp_name"], "upload/".$_FILES["img_student"]["name"]);
                        $_SESSION['success'] = "Parent Profile added";
                        header('Location: addstudent.php');
                        }else {
                        $_SESSION['success'] = "Parent Profile is not added";
                            echo"Error";
                            header('Location: 404.php');
                        }

                        if (mysqli_query($connection, $query)) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($connection);
                        }

    }

    ######### UPDATE
    if (isset($_POST['updatebtn'])) {

        $id = $_POST['edits_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        $usertype = $_POST['update_usertype'];

        $query =  "UPDATE registeradmin SET username ='$username', email ='$email', password ='$password', usertype ='$usertype' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is udpate";
            header('Location:allstudent.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not udpate";
            header('Location:addstudent.php');
        }
    }#

    ######### UPDATE TEACHERS
    if (isset($_POST['update_teachers_btn'])) {

        $id = $_POST['edits_id'];

        $name = $_POST['name_edit'];
        $numerid = $_POST['numerid_edit'];
        $email = $_POST['email_edit'];
        $username = $_POST['username_edit'];
        $phone = $_POST['phone_edit'];
        $department = $_POST['department_edit'];
        $gender = $_POST['gender_edit']; 
        $password = $_POST['password_edit'];
        $description = $_POST['description_edit'];
        

        $query =  "UPDATE teachers SET name ='$name',numerid ='$numerid',email ='$email',username ='$username', phone ='$phone', department ='$department',gender ='$gender', password ='$password', description ='$description' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is udpate";
            header('Location:addteachers.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not udpate";
            header('Location:addteachers.php');
        }
    }

        ######### UPDATE STUDENT
    if (isset($_POST['update_student_btn'])) {

        $id = $_POST['editstudent_id'];

        $namestudent = $_POST['name_student'];
        $numberidstudent = $_POST['numberid_student'];
        $genderStudent = $_POST['gender_student'];
        $bdaystudent = $_POST['bday_student'];
        $age = $_POST['age'];
        $addressstudent = $_POST['address_student'];
        $bloodtypestudent = $_POST['bloodtype_student'];
        $phonestudent = $_POST['phone_student']; 
        $levelstudent = $_POST['level_student'];
        $nationalitystudent = $_POST['nationality_student'];
        

        $query =  "UPDATE student SET namestudent ='$namestudent',numberidstudent ='$numberidstudent',genderStudent ='$genderStudent',bdaystudent ='$bdaystudent',age = '$age', addressstudent ='$addressstudent', phonestudent ='$phonestudent',levelstudent ='$levelstudent', bloodtypestudent ='$bloodtypestudent', nationalitystudent ='$nationalitystudent' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is udpate";
            header('Location:allstudent.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not udpate";
            header('Location:editstudent.php');
        }
    }

   ######### UPDATE PARENT
    if (isset($_POST['update_parent_btn'])) {

        $id = $_POST['parent_id'];

        $namepmother = $_POST['namep_mother'];
        $numidmother = $_POST['numid_mother'];
        $professionmother = $_POST['profession_mother'];
        $phonemother = $_POST['phone_mother'];
        $namepfather = $_POST['namep_father'];
        $numidfather = $_POST['numid_father'];
        $professionfather = $_POST['profession_father'];
        $phonefather = $_POST['phone_father']; 
        $addressparent = $_POST['address_parent'];
        $nationalityparent = $_POST['nationality_parent'];
        

        $query =  "UPDATE parent SET namep_mother ='$namepmother',numid_mother ='$numidmother',profession_mother ='$professionmother',phone_mother ='$phonemother',namep_father = '$namepfather', numid_father ='$numidfather',profession_father ='$professionfather',phone_father ='$phonefather', addres_sparent ='$addressparent', nationality_parent ='$nationalityparent' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is udpate";
            header('Location:allstudent.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not udpate";
             echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }
    }     
    
    ######### DELETE
    if (isset($_POST['delete_btn'])) {

        $id = $_POST['delete_id'];

        $query =  "DELETE FROM registeradmin WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is deleted";
            header('Location:register.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not deleted";
            header('Location:register.php');
        }

    }#

    ######### DELETE TEACHERS
    if (isset($_POST['deleteteachers_btn'])) {

        $id = $_POST['deleteteachers_id'];

        $query =  "DELETE FROM teachers WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is deleted";
            header('Location:addteachers.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not deleted";
            header('Location:addteachers.php');
        }

    }#

######### DELETE STUDENT
    if (isset($_POST['deletestudent_btn'])) {

        $id = $_POST['deletestudent_id'];

        $query =  "DELETE FROM student WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is deleted";
            header('Location:allstudent.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not deleted";
            header('Location:allstudent.php');
        }

    }#

    

?>