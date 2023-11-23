<?php

require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password']  ?? null ;

unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php mysql admin panel</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!--font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-rAt2dDO9LsmTBpGlczN7ioGVEUb7F6WTpVlX1eCjzFLcN0N4Gqewd7qUdciMK9e" crossorigin="anonymous">
    <!--iconscout cdn-->    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> 
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200&family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
<style>

.form__section{
   font-family: 'Poppins', sans-serif;
   display: grid;
   place-items: center;
   height: 100vh;
   background: url(wp4.jpeg);
   background-size: cover; /* Resmi kaplamak için */
   background-repeat: no-repeat; /* Tekrarlamayı önlemek için */
   background-position: center center; /* Resmi ortalamak için */
}
.form__section-container{
   width: var(--form-width);

}
.alert{
   padding: 0.8rem 1.4rem;
   margin-bottom: 1rem;
   border-radius: var(--card-border-radius-2);
   
}
.alert.error{
   background: var(--color-red-light);
   color: var(--color-red);
}
.alert.success{
   background: var(--color-green-light);
   color: var(--color-green);
   
}
form{
   font-family: 'Poppins', sans-serif;
   display: flex;
   flex-direction: column;
   gap: 1rem;
   margin: 1rem;
   
}
.form__control{
   display: flex;
   flex-direction: column;
   gap: 0.4rem;
}
input, textarea, select{
   padding:0.8rem 1.4rem;
   background-color:  #5854c7a9;
   border-radius: var(--card-border-radius-2);
   resize: none;
   color: var(--color-white);
   font-family: 'Poppins', sans-serif;

}
input::placeholder {
    color: #ffffff; /* İstenilen renk */
}

.form__section small{
    margin-top: 1rem;
    display: block;
}
.form__section small a{
    color:whitesmoke;

}

.subtn{
    
    display: inline-block;
    width: fit-content;
    padding: 0.6rem 1.2rem;
    background-color: var(--color-primary);
    border-radius: var(--card-border-radius-2);
    cursor: pointer;
    transition: var(--transition);
    color: var(--color-white);
}
h2{
    text-align: center;
}

</style>

    <section class="form__section" style="font-family: 'Poppins', sans-serif;">
        <div class="container form__section-container">
            <h2>Giriş Yap</h2>
            <?php if(isset($_SESSION['signup-success'])) : ?>
                <div class="alert success">
                    <p>
                        <?= $_SESSION['signup-success'];
                        unset($_SESSION['signup-success']);
                        ?>
                    </p>
                </div>
            <?php elseif(isset($_SESSION['signin'])) : ?>
                <div class="alert error">
                    <p>
                        <?= $_SESSION['signin'];
                        unset($_SESSION['signin']);
                        ?>
                    </p>
                </div>
            <?php endif ?>    
        </div>
        <form action="<?= ROOT_URL?>signin-logic.php" method="POST" style="font-family: 'Poppins', sans-serif;">
            <input type="text" name="username_email" value="<?=$username_email ?>" placeholder="Kullanıcı Adı / E-posta">
            <input type="password" name="password" value="<?=$password ?>" placeholder="Şifre">
            <div class="form__control">
            <button type="submit" name="submit" class="subtn">Giriş</button>
            <small>Hesabın yok mu?<a href="signup.php"> Üye Ol</a></small>
        </form>
    </section>
    
    </body>