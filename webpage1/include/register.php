<?php
    include_once('config.php');
    session_start();

    if(isset($_POST['submit'])){
        $frist_n = strip_tags($_POST['frist_n']);
        $last_n = strip_tags($_POST['last_n']);
        $email = ($_POST['email']);
        $gender = ($_POST['gemder']);
        $about = strip_tags($_POST['about']);
        $id_student = $_POST['id_student'];
        $name_unver = $_POST['name_unver'];
        $skills = $_POST['skills'];


        if(empty($frist_n)){
            echo"<div class='alert-danger' role='alert'>Plasse inter your frist name</div> ";
        }elseif(empty($last_n)){
            echo"<div class='alert-danger' role='alert'>Plasse inter your last name</div> ";
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo"<div class='alert-danger' role='alert'>Please enter a valid email address</div> ";
        }elseif(empty($email)){
            echo"<div class='alert-danger' role='alert'>please enter e-mail address</div> ";
        }elseif(empty($_POST['password'])){
            echo"<div class='alert-danger' role='alert'>Please enter your password</div> ";
        }elseif(empty($_POST['r_password'])){
            echo"<div class='alert-danger' role='alert'>Please re-enter your password</div> ";
        }elseif($_POST['password'] != $_POST['r-password']){
            echo"<div class='alert-danger' role='alert'>Password does not match</div> ";
        }else{
        $sql_email = mysqli_query($conn,"SELECT emil FROM `students` WHERE `email` = '$email'");
         if(mysqli_num_rows($sql_email) > 0){
            echo"<div class='alert-danger' role='alert'>Sorry, but the email is already registered</div> ";
         }
         
        else{
            $paaword = md5($_POST['password']);
            $insert = "INSERT INTO `students` (`frist_n`,
                                              `last_n`,
                                              `email`,
                                              `password`,
                                              `gender`,
                                              `about_stu`,
                                              `id_student`,
                                              `n_unver `,
                                              `skills `,
            )
                                             VALUES ('$frist_n',
                                             '$last_n',
                                             '$email',
                                             '$paaword',
                                             '$gender',
                                             '$about',
                                             '$id_student',
                                             '$name_unver',
                                             '$skills')" ;

            $insert_sql = mysqli_query($conn,$insert);
                if(isset($insert_sql)){
                    $student_info = mysqli_query($conn,"SELECT * FROM `students` WHERE `email` = '$email'");
                    $student = mysqli_fetch_assoc($student_info);
                    $_SESSION['id'] = $student['id'];
                    $_SESSION['frist_n'] = $student['frist_n'];
                    $_SESSION['last_n'] = $student['last_n'];
                    $_SESSION['email'] = $student['email'];
                    $_SESSION['gender'] = $student['gender'];
                    $_SESSION['about'] = $student['about'];
                    $_SESSION['id_student'] = $student['id_student'];
                    $_SESSION['name_unver'] = $student['name_unver'];
                    $_SESSION['skills'] = $student['skills'];

                    echo '<div class="alert alert-secondary" role="alert">
                    You have been successfully registered
                  </div>';
                  echo'<meta http-equiv="refresh" content="3; \'index.php\'"';
                }
        }
    }

    }
?>