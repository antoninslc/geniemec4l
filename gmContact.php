<!DOCTYPE html>

<html>

    <head>
        <title>Contact | Génie Méc'4L</title>
        <meta charset="utf-8">	
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="base.css">
        <link rel="stylesheet" type="text/css" href="header.css">
        <link rel="stylesheet" type="text/css" href="Contact.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="icon" type="image/png" href="icon.ico" />


    </head>

    <body>
        <div class="header">
            <div class="container">
                <div class="header__navbar">
                    <div class="header__navbar-logo">
                        <p class="header__navbar-logo-title">Génie Méc'4L</p>	
                    </div>
                    <div class="header__navbar-menu">
                        <nav>
                            <ul>
                                <li><a class="header__navbar-menu-link" href="index.html">Accueil</a></li>
                                <li><a class="header__navbar-menu-link" href="gmAPropos.html">Le 4L Trophy</a></li>	
                                <li><a class="header__navbar-menu-link" href="gmEquipage.html">L'équipage</a></li>
                                <li><a class="header__navbar-menu-link" href="gmNotreProjet.html">Notre projet</a></li>		
                                <li><a class="header__navbar-menu-link" href="gmActualités.html">Actualités</a></li>
                                <li class="menu-NousSoutenir"><a class="header__navbar-menu-link">Nous soutenir</a>
                                    <ul class="NousSoutenir">
                                        <li><a href="gmCommentNousSoutenir.html">Comment nous soutenir ?</a></li>
                                        <li><a href="gmIlsNousSoutiennentDéjà.html">Ils nous soutiennent déjà</a></li>
                                    </ul></li>
                                <li><a class="header__navbar-menu-link" href="gmContact.html" style="color: sandybrown; border-top: 2px solid sandybrown; padding: 18px 30px 20px 30px;">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="dossier">
                        <a href="https://d0d3b06b-acb8-4d7d-9aab-cc744290d5e4.filesusr.com/ugd/ae5fb1_a4a4a34f48a24776b4361c602a98db8d.pdf" target="bank" class="header__navbar-menu-dossier"><div style="width: auto; padding: 15px; border: 2px solid white; text-align: center; background: none; border-radius: 10px;">Dossier sponsoring</div></a>
                    </div>
                </div>	
            </div>
        </div>
        <div class="white"></div>

        <h1>Contact</h1>

        <div class="contacts">
                <div class="n">
                    <p> <i class="fas fa-phone-alt"></i> 07 68 46 38 07</p>
                </div>
                <div class="n">
                    <p>78 route de Narbonne <br>
                        31400, Toulouse</p>
                </div>
                <div class="n">
                    <p>genie.mec4l@hotmail.com</p>
                </div>
        </div>

        <a href="mailto:geniemac4l@hotmail.com">Ecrivez-moi</a>

        <div class="formulaire">
                    <h1>Contact</h1>
                    <form name="contact_form" method="post" action="">
                        <table width="500">
                        <tr>
                         <td valign="top">
                          <label for="nom">Nom *</label>
                         </td>
                         <td valign="top">
                          <input  type="text" name="nom" maxlength="50" size="30" value="<?php if (
                    isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']);?>">
                         </td>
                        </tr>
                        <tr>
                         <td valign="top">
                          <label for="prenom">Prénom *</label>
                         </td>
                         <td valign="top">
                          <input  type="text" name="prenom" maxlength="50" size="30" value="<?php if
                     (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>">
                         </td>
                        </tr>
                        <tr>
                         <td valign="top">
                          <label for="email">Email Addresse *</label>
                         </td>
                         <td valign="top">
                          <input  type="text" name="email" maxlength="80" size="30" value="<?php if 
                    (isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
                         </td>
                        </tr>
                        <tr>
                         <td valign="top">
                          <label for="telephone">Téléphone</label>
                         </td>
                         <td valign="top">
                          <input  type="text" name="telephone" maxlength="30" size="30" value="
                    <?php if (isset($_POST['telephone'])) echo htmlspecialchars($_POST['telephone'])
                    ;?>">
                         </td>
                        </tr>
                        <tr>
                         <td valign="top">
                          <label for="commentaire">Commentaire *</label>
                         </td>
                         <td valign="top">
                          <textarea  name="commentaire" cols="28" rows="10"><?php if (isset($_POST[
                    'commentaire'])) echo htmlspecialchars($_POST['commentaire']);?></textarea>
                         </td>
                        </tr>
                        <tr>
                         <td colspan="2" style="text-align:center">
                          <input type="submit" value=" Envoyer ">
                         </td>
                        </tr>
                        </table>
                        </form>
                    
                    <?php
                    if(isset($_POST['email'])) {
                     
                        // EDIT THE 2 LINES BELOW AS REQUIRED
                        $email_to = "antonin.solacroup@gmail.com";
                        $email_subject = "Le sujet de votre email";
                     
                        function died($error) {
                            // your error code can go here
                            echo 
                    "Nous sommes désolés, mais des erreurs ont été détectées dans le" .
                    " formulaire que vous avez envoyé. ";
                            echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
                            echo $error."<br /><br />";
                            echo "Merci de corriger ces erreurs.<br /><br />";
                            die();
                        }
                     
                     
                        // si la validation des données attendues existe
                         if(!isset($_POST['nom']) ||
                            !isset($_POST['prenom']) ||
                            !isset($_POST['email']) ||
                            !isset($_POST['telephone']) ||
                            !isset($_POST['commentaire'])) {
                            died(
                    'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
                    ' problème.');
                        }
                     
                         
                     
                        $nom = $_POST['nom']; // required
                        $prenom = $_POST['prenom']; // required
                        $email = $_POST['email']; // required
                        $telephone = $_POST['telephone']; // not required
                        $commentaire = $_POST['commentaire']; // required
                     
                        $error_message = "";
                        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                     
                        if(!preg_match($email_exp,$email)) {
                          $error_message .= 
                    'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
                        }
                       
                          // Prend les caractères alphanumériques + le point et le tiret 6
                          $string_exp = "/^[A-Za-z0-9 .'-]+$/";
                       
                        if(!preg_match($string_exp,$nom)) {
                          $error_message .= 
                    'Le nom que vous avez entré ne semble pas être valide.<br />';
                        }
                       
                        if(!preg_match($string_exp,$prenom)) {
                          $error_message .= 
                    'Le prénom que vous avez entré ne semble pas être valide.<br />';
                        }
                       
                        if(strlen($commentaire) < 2) {
                          $error_message .= 
                    'Le commentaire que vous avez entré ne semble pas être valide.<br />';
                        }
                       
                        if(strlen($error_message) > 0) {
                          died($error_message);
                        }
                     
                        $email_message = "Détail.\n\n";
                        $email_message .= "Nom: ".$nom."\n";
                        $email_message .= "Prenom: ".$prenom."\n";
                        $email_message .= "Email: ".$email."\n";
                        $email_message .= "Telephone: ".$telephone."\n";
                        $email_message .= "Commentaire: ".$commentaire."\n";
                     
                        // create email headers
                        $headers = 'From: '.$email."\r\n".
                        'Reply-To: '.$email."\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                        mail($email_to, $email_subject, $email_message, $headers);
                        ?>
                         
                        <!-- mettez ici votre propre message de succès en html -->
                         
                        Merci de nous avoir contacter. Nous vous contacterons très bientôt.
                         
                        <?php
                    
                        }
        </div>
        <div class="ecartement"></div>
    </body>

</html>