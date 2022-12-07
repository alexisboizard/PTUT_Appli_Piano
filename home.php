<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <a class="login-button fa-2x" href="login.php">
        <img src="img-sae/profil.svg" alt="" srcset="">
    </a>
    <?php
            if(isset($_SESSION)){
                echo "<h1> Bonjour "  . $_SESSION["user"]["firstname"]. ", </h1>";
            }else{
                echo "<h1> Bonjour Inconnu,</h1>";
            }
    ?>    
    <div class="container test">
        <p class="first-para">Reprendre la leçon</p>
    </div>
    <div class="stats">
        <h2>Statistique du mois</h2> 
        <div class="container top">
            <p class="first-para"><em>Streaks</em></p>
            <p><strong>10 jours de pratique à la suite</strong></p>
        </div>
        <div class="bottom-part">
            <div class="right">
                <div class="container container-bot r1">
                    <p class="first-para">8H de leçons</p>
                </div>
                <div class="container container-bot r2">
                    <p class="first-para">Niveau</p>
                    <p>13</p>
                </div>
            </div>
            <div class="container container-bot left ">
                <p class="first-para">Note moyenne</p>
                <p>14.3/20</p>
            </div>
        </div>
    </div>
    
    <?php include_once __DIR__ . ("/modules/footer.php"); ?>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyDZ9pq_S1PKE54s9GTHssSaOd_JTAH6Duk",
          authDomain: "ptut-79321.firebaseapp.com",
          projectId: "ptut-79321",
          storageBucket: "ptut-79321.appspot.com",
          messagingSenderId: "1048719818176",
          appId: "1:1048719818176:web:eb8ee66136779f759edc25",
          measurementId: "G-X43F1MWQBZ"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>
</body>
</html>