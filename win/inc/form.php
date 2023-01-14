<?php
    include 'conn.php';
    $errors=[
        'firstNameError'=>'',
        'lastNameError'=>'',
        'emailError'=>'',
    ];
    @$firstName=mysqli_escape_string($conn,$_POST['firstName']);
    @$lastName=mysqli_escape_string($conn,$_POST['lastName']);
    @$email=mysqli_real_escape_string($conn,$_POST['email']);
    if(isset($_POST['submit'])){

        if(empty($firstName)){
            $errors['firstNameError']='يرجى ادخال الإسم الأول';
        }if(empty($lastName)){
            $errors['lastNameError']='يرجى ادخال الإسم الأخير';
        }if(empty($email)){
            $errors['emailError']='يرجى ادخال الإيميل';

        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['emailError']='يرجى ادخال إيميل بصيغة صحيحة';
        }
        if(!array_filter($errors)){
            $sql="INSERT INTO users (firstName, lastName, email) VALUES ('".$firstName."','".$lastName."','".$email."')";
            if(mysqli_query($conn,$sql)){
                header('Location:'.$_SERVER['PHP_SELF']);
            }else{
                echo 'Error : '.mysqli_error($conn);
            }
        }
    }

?>