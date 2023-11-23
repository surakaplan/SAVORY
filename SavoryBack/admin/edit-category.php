<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAVORY</title>
    <link rel="stylesheet" href="./style.css">
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
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">Savory</a>
            <ul class="nav__items">
                <li><a href="index.html">Ana Sayfa</a></li>
                <li><a href="recipes.html">Tarifler</a></li>
                <li><a href="about.html">Hakkında</a></li>
                <li><a href="contact.html">İletişim</a></li>
                <li><a href="signin.html">Giriş</a></li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="images/avatar4jpeg.jpeg">
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
                
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-times"></i></button>

        </div>
    </nav>
    <!--nav bar sonu-->

<style>

.form__section{
   font-family: 'Poppins', sans-serif;
   display: grid;
   place-items: center;
   height: 100vh;
   margin-bottom: 150px;
   
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
            <h2>Kategori Düzenleme</h2>
            <form action="" style="font-family: 'Poppins', sans-serif;">
                <input type="text" placeholder="Başlık">
                <textarea  rows="4"placeholder="Açıklama"></textarea>
                
                <button type="submit"class="subtn">Kategori Güncelle</button>
            
            </form>
        </div>
    </section>
    




<?php
include '../partials/footer.php';
?>


</body>
</html>

</body>