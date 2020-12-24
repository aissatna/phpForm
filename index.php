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
            <form action="" id="contact-form" method="post" role="form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="firstname"> Prénom <span class="blue"> *</span></label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <label for="name"> Nom <span class="blue"> *</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <label for="email"> Email <span class="blue"> *</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre email">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <label for="phone"> Téléphone </label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-12">
                        <label for="message"> Message<span class="blue"> *</span></label>
                        <textarea name="message" id="message" class="form-control"  rows="4" placeholder="Votre message">

                        </textarea>
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-12">
                        <p class="blue"><strong> * Ces informations sont requises</strong></p>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" class="button1" value="Envoyer">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!------ Scripts-------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>