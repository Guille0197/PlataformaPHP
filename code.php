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

        $usertype = $_POST['user_type_student'];
        $nameStudent = $_POST['name_student'];
        $numberIdStudent = $_POST['numer_id_student'];
        $genderStudent = $_POST['gender_student'];
        $bdayStudent = $_POST['bday_student'];
        $addressStudent = $_POST['address_student'];
        $phoneStudent = $_POST['phone_student'];
        $levelStudent = $_POST['level_student'];
        $bloodtypeStudent = $_POST['bloodtype_student'];
        $nationalityStudent = $_POST['nationality_student'];
        $imgStudent = $_FILES["img_student"]['name'];
        
                    
                    
                        $query =  "INSERT INTO student (name_student,numer_id_student,gender_student,bday_student,address_student,level_student,bloodtype_student,nationality_student,img_student,user_type_student) 
                        VALUES ('$usertype','$nameStudent','$numberIdStudent','$genderStudent','$bdayStudent','$addressStudent','$phoneStudent','$levelStudent','$bloodtypeStudent','$nationalityStudent','$imgStudent')";
                        $query_run = mysqli_query($connection, $query);

                    if ($query_run) {
                        move_uploaded_file($_FILES["img_student"]["tmp_name"], "upload/".$_FILES["img_student"]["name"]);
                        $_SESSION['success'] = "Student Profile added";
                        header('Location: allstudent.php');
                        
                    }else {

                    $_SESSION['success'] = "Student Profile is not added";
                        header('Location: allstudent.php');
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
            header('Location:register.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not udpate";
            header('Location:register.php');
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


    

?>