<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple SEND MAIL PEC</title>
  </head>
  <body>
    <div style="padding:30px;">
        <H2>Compila il form</H2>

        <form name="sendmail" method="post" action="sendmail.php" >

            <input type="text" style="width:500px; height:50px; background-color:aliceblue;" name="host" placeholder="Inserisci HOST" value=""><br /><br />
            <input type="text" style="width:500px; height:50px; background-color:aliceblue;" name="username" placeholder="Inserisci username della tua pec" value=""><br /><br />
            <input type="text" style="width:500px; height:50px; background-color:aliceblue;" name="password" placeholder="Inserisci password della tua pec" value=""><br /><br />
            <input type="text" style="width:500px; height:50px; background-color:aliceblue;" name="nome" placeholder="Inserisci nome visualizzato" value=""><br /><br />
            <input type="text" style="width:500px; height:50px; background-color:aliceblue;" name="destinatario" placeholder="Inserisci pec destinatario" value=""><br /><br />
            <input type="text" style="width:500px; height:50px; background-color:aliceblue;" name="oggetto" placeholder="Inserisci oggetto della pec" value=""><br /><br />
            <input type="text" style="width:500px; height:50px; background-color:aliceblue;" name="testo" placeholder="Inserisci testo della pec" value=""><br /><br />
            <input type="text" style="width:500px; height:50px; background-color:aliceblue;" name="porta" placeholder="Inserisci porta del server di posta" value=""><br /><br />
            <input type="submit" value="INVIA" tyle="width:500px; height:50px; background-color:aliceblue;">
        </form>
    </div>
  </body>
</html>