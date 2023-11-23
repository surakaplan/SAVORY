<?php

require 'config/database.php';

//butona basıldıgında verileri yukleme

if(isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    //giris değerlerini doğrula
    if(!$firstname){
        $_SESSION['signup'] = "Lütfen adınızı giriniz";
    }
    else if (!$lastname) {
        $_SESSION['signup'] = "Lütfen Soyadınızı giriniz";

    }
    else if (!$username) {
        $_SESSION['signup'] = "Lütfen Kullanıcı adınızı giriniz";

    }
    else if (!$email) {
        $_SESSION['signup'] = "Lütfen geçerli e-postanızı giriniz";

    }
    else if (strlen($createpassword)< 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Şifreniz 8+ karakter olmalıdır";

    }
    else if (!$avatar['name']) {
        $_SESSION['signup'] = "Lütfen avatar ekleyiniz";

    }
    else{  //sifre eşleşiyor mu kontrol et
        if($createpassword !== $confirmpassword){
            $_SESSION['signup'] =  "şifreler eşleşmiyor";
        }
        else{ 
            $hashed_password = password_hash($createpassword,PASSWORD_DEFAULT);

            //username ya da email database de var mı kontrol et
            $user_check_query = "SELECT * FROM users WHERE 
            username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result)> 0 ){
                $_SESSION['signup'] = "Kullanıcı adı zaten var";
            }
            else{
                //avatar adı değisme
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/'. $avatar_name;

                //dosyaya ekleme
                $allowed_files = ['png','jpg','jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if(in_array($extention,$allowed_files)){
                    //avatar boyu 1mb+ olamaz
                    if($avatar['size'] < 100000) {
                        //avatar yükleme
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);

                    }
                    else{
                        $_SESSION['signup'] = "Dosya boyutu çok büyük.1mb'dan küçük olmalı";
                    }
                }
                else{
                    $_SESSİON['signup'] = "Dosya uzantısı png, jpg ya da jpeg olmalıdır";
                }
             }
        } 

    }
    //sorun varsa signup sayfasına geri döndürme
    if(isset($_SESSION['signup'])) {

        $_SESSION['signup-data'] = $_POST;
        header('location:'. ROOT_URL . 'signup.php');
        die();
    }
    else{
        //yeni kullanıcıyı users tabloya ekleme
        $insert_user_query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname', username='$username',
         email='$email', password='$hashed_password', avatar='$avatar_name', is_admin=0";
        
        $insert_users_result = mysqli_query($connection, $insert_user_query);
        
        if(mysqli_errno($connection)){
            //basarılı mesajıyla login sayfasına
            $_SESSION['signup-success'] = "Kayıt başarılı. Lütfen giriş yapın";
            header('location:'.ROOT_URL. 'signin.php');
            die();
        }

    }
    
}


else {
    //butona basılmazsa sigup sayfasına
    header('location:' . ROOT_URL .'signup.php');
    die();
}

