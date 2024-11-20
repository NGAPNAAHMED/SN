<?php 
    $serveur = "localhost";
    $login = "root";
    $pass = "";

    try{
        $connexion = new PDO("mysql:host=$serveur;dbname=git_github", $login, $pass);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $name=$_POST['username'];
        $email=$_POST['email'];
        $mdp=password_hash($_POST['password'],PASSWORD_DEFAULT);

        function verifEmail ($email){
            if (filter_var ($email, FILTER_VALIDATE_EMAIL) === false) {
                return false;
                echo "Email incorrect";
            } else {
                return true;
            }
        }

        $foncsql="INSERT INTO Visiteur(nom,email,Password)VALUES(:nom,:email,:password)";
        $tab= [
            ":nom"=>$name,
            ":email"=>$email,
            ":password"=>$mdp,
        ];
        $requete=$connexion->prepare($foncsql);
        $requete->execute($tab);
        header("location: ./connexion.php");
        exit();
    }catch(PDOException $e){
        echo 'Echec de la connexion: ' .$e -> getMessage ();
    }
        

?>