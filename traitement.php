<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ESSAI</title>   
    </head> 
    <body> 
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
                $retour = mail('antonin.solacroup@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: antonin.solacroup@gmail.com' . $_POST['email']);
                if($retour)
                    echo '<p>Votre message a été envoyé.</p>';
                else
                    echo '<p>Erreur.</p>';
            }
        }
        ?>
    </body> 
</html>