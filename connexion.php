<?php
    $serveur = "localhost";
    $login = "root";
    $pass = "";

    try{
        $connexion = new PDO("mysql:host=$serveur;dbname=git_github", $login, $pass);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset($_POST['login']))
        {
            $email=$_POST['email'];
            $mdp=$_POST['password'];
            $foncsql="SELECT * FROM visiteur WHERE email='$email'";
            $requete= $connexion->query($foncsql);
            $requete->execute();
            $result=$requete->fetch(PDO::FETCH_ASSOC);
            if($result!=null)
            {
                if(password_verify($mdp,$result['Password']))
                {
                    header("location: ./index1.html");
                }else
                {
                    echo "mauvais mot de passe";
                }
            }else
            {
                echo "aucun email trouvé";
            }
        }
    }catch(PDOException $e){
        echo 'Echec de la connexion: ' .$e -> getMessage ();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
    <link rel="shortcut icon" href="IMG/img/icon.ico" type="IMG/imgconnect/x-icon">
    <title>Connexion</title>
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body, input{
    font-family: 'Poppins', sans-serif;
}


.container{
    position: relative;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
    
}
.container:before{
    content: '';
    position: absolute;
    width: 2000px;
    height: 2000px;
    border-radius: 50px;
    background: linear-gradient(-35deg,#0463FA, rgb(128, 124, 124));
    top: -10%;
    right: 48%;
    transform: translateY(-50%);
    z-index: 6;
    transition: 1.8s ease-in-out;

}
.form-container{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    overflow: hidden;
}

.signin-signup{

    position: absolute;
    top: 50%;
    left: 75%;
    transform: translate(-50%, -50%);
    width: 50%;
    display: grid;
    grid-template-columns: 1fr;
    z-index: 5;
    transition: 1s 0.7s ease-in-out;
}

form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding : 0 5em;
    overflow: hidden;
    grid-column: 1 / 2;
    grid-row: 1 / 2;
    transition: 0.2s 0.7s ease-in-out  ;
}

form.sign-in-form{
    z-index: 2;
}

form.sign-up-form{
    z-index: 1;
    opacity: 0;
}
.title{
    font-size: 2.2rem;
    color: #4444;
    margin-bottom: 10px;

}

.input-field{
    max-width: 300px;
    width: 100%;
    height: 55px;
    background-color: #f0f0f0;
    margin: 10px 0;
    border-radius: 55px;
    display: grid;
    grid-template-columns: 15% 85%;
    padding: 0 .4rem;

}

.input-field i{
    text-align: center;
    line-height: 55px;
    color: #acacac;
    font-size: 1.1rem;
}

.input-field input{
    background: none;
    outline: none;
    border: none;
    line-height: 1;
    font-weight: 600;
    font-size: 1.1rem;
    color: #333;
}
.input-field input::placeholder{
    color: #aaa;
    font-weight: 500;
}

.btn{
    width: 150px;
    height: 49px;
    border: none;
    outline: none;
    border-radius: 49px;
    cursor: pointer;
    background-color: #0463FA;
    color: #fff;
    text-transform: upercase;
    font-weight: 600;
    margin: 10px 0;
    transition: .5s;
}


.btn:hover{
    background-color: #0463FA;
}
.social-text{
    padding: .7rem 0;
    font-size: 1rem;
}
.social-media{
    display: flex;
    justify-content: center;

}

.social-icon{

    height: 46px;
    width: 46px;
    border: 1px solid #333;
    margin: 0 0.45rem;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    color: #333;
    font-size: 1.1rem;
    border-radius: 50%;
    transition: 0.3s;
}

.social-icon:hover{
    color: #ff4500;
    border-color: #ff4500;
}


.panel-container{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.panel{
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: space-around;
    text-align: center;
    z-index: 7;
}

.left-panel{
    padding: 3rem 17% 2rem 17%;
    pointer-events: all;
}
.right-panel{
    padding: 3rem 12% 2rem 17%;
    pointer-events: none;
}

.panel .content{
    color: #fff;
    transition: .9s .6s ease-in-out;
    
}

.panel h3{
    font-weight: 600;
    line-height: 1;
    font-size: 1.5rem;
}
.panel p{
    font-size: 0.95em;
    padding: 0.7rem 0;
}

.btn.transparent{
    margin: 0;
    background: none;
    border: 2px solid #fff;
    width: 130px;
    height: 41px;
    font-weight: 600;
    font-size: 0.8rem;
}
.image{
    width: 100%;
    transition: 1.1s .4s ease-in-out;

}

.right-panel .content, .right-panel .image{
    transform: translateX(800px);
}

.container.sign-up-mode:before{
    transform: translate(100%, -50%);
    right: 52%;
}
.container.sign-up-mode .left-panel .image,
.container.sign-up-mode .left-panel .content{
    transform: translateX(-800px);
}

.container.sign-up-mode .right-panel .content, 
.container.sign-up-mode .right-panel .image{
    transform: translateX(0px);
}

.container.sign-up-mode .left-panel{
    pointer-events: none;
}
.container.sign-up-mode .right-panel{
    pointer-events: all;
}
.container.sign-up-mode .signin-signup{
    left: 25%;
}

.container.sign-up-mode form.sign-in-form{
    z-index: 1;
    opacity: 0;
}
.container.container.sign-up-mode form.sign-up-form{
    z-index: 2;
    opacity: 1;
}

#forgot{
    text-decoration: none;
    color: #0463FA;

}
	</style>
</head>
<body>

        <div class="container">
            <div class="form-container">
                <div class="signin-signup">
                    <form action="./connexion.php" method="POST"class="sign-in-form">
                        <h2 class="title">LogIn</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="email" name="email">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <a href="./recupPage.php" id="forgot">forgot password?</a>
                        <input type="submit" value="Login" class="btn solid" name="login"/>
                        
                        <p class="social-content">Or Sign In with social platform</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>

                        
                    </form>


                    <form action="./creation.php" method="POST"class="sign-up-form">
                        <h2 class="title">Sign Up</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username" name="username"/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email" id="email" name="email"/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" id="password" name="password"/>
                        </div>
                        <input type="submit" value="Sign Up" name="signup" class="btn solid registerbutton"/>
                        <p class="social-content">Or Sign Up with social platform</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>

                        
                    </form>
                </div>
            </div>
            <div class="panel-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>New Here?</h3>
                        <p>Bienvenue sur le site de Git et Github</p>
                        <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                    </div>
                    <img src="img/login.webp" class="image">
                </div>

                <div class="panel right-panel">
                    <div class="content">
                        <h3>One of Us?</h3>
                        <p>Bienvenue sur le site de Git et Github</p>
                        <button class="btn transparent" id="sign-in-btn">Login</button>
                    </div>
                    <img src="img/draw2.svg" class="image">
                </div>

            </div>
        </div>
</body>
<script>
	const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener('click', () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click', () => {
    container.classList.remove("sign-up-mode");
});

</script>
	
</script>
</html>