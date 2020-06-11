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

        <div class="formulaire">
            <h1>Contact</h1>
    <form method="post">
        <label>Email</label>
        <input type="email" name="email" required><br>
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $position_arobase = strpos($_POST['email'], '@');
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('jules@free.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
    ?>
        </div>
    </body>

</html>