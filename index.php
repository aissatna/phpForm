<?php
$firstname=$name=$email=$phone=$message="";
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $firstname=$_POST['firstname'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contactez-moi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="divider"></div>
    <div class="heading">
        <h2>Contactez-moi</h2>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" id="contact-form" method="post" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstname"> Prénom <span class="blue"> *</span></label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom"
                               value="<?php echo $firstname;?>">
                        <p class="comments">Message d'erreur</p>
                    </div>

                    <div class="col-md-6">
                        <label for="name"> Nom <span class="blue"> *</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom"
                               value="<?php echo $name?>">
                        <p class="comments">Message d'erreur</p>
                    </div>

                    <div class="col-md-6">
                        <label for="email"> Email <span class="blue"> *</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre email"
                               value="<?php echo $email;?>">
                        <p class="comments">Message d'erreur</p>
                    </div>

                    <div class="col-md-6">
                        <label for="phone"> Téléphone </label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone"
                               value="<?php echo $phone;?>">
                        <p class="comments">Message d'erreur</p>
                    </div>

                    <div class="col-md-12">
                        <label for="message"> Message<span class="blue"> *</span></label>
                        <textarea name="message" id="message" class="form-control"  rows="4" placeholder="Votre message">
                            <?php echo $message;?>
                        </textarea>
                        <p class="comments">Message d'erreur</p>
                    </div>

                    <div class="col-md-12">
                        <p class="blue"><strong>Ces informations sont requises</strong></p>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" class="button1" value="Envoyer">
                    </div>
                </div>
                <p class="thank-you"> Votre message a bien été envoyé.Merci de m'avoir contacté:  </p>
            </form>
        </div>
    </div>

</div>


<!------ Scripts-------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>