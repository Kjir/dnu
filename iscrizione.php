<?php
require_once "menu.php";
require_once "settings.php";
$accept = true;
if(!empty($_POST)) {
    if(empty($_POST['accept'])) {
        $accept = false;
    } else {
        $to = "Segreteria Ducato Nuoto Urbino <ducatonuoto@gmail.com>";
        $subject = "Iscrizione alla Ducato Nuoto Urbino";
        $message = "L'utente ha richiesto di iscriversi con i seguenti dati:
    Nome: {$_POST['aname']}
    Cognome: {$_POST['asurname']}
    Nato a {$_POST['bplace']} ({$_POST['bprovince']}) il {$_POST['bdate']}
    Nome genitore: {$_POST['pname']}
    Cognome genitore: {$_POST['psurname']}
    Residente in {$_POST['rstreet']}, {$_POST['rnum']} nel comune di {$_POST['rplace']} ({$_POST['rprovince']})
    Numero di telefono: {$_POST['tel']}
    E-mail: {$_POST['email']}
";
        if(!empty($_POST['news'])) {
            $message .= "L'utente desidera ricevere aggiornamenti per e-mail";
        } else {
            $message .= "L'utente NON vuole ricevere aggiornamenti per e-mail";
        }
        mail($to, $subject, $message, "From: Sito DNU <ducatonuoto@gmail.com>");
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri/conferma_iscr.php");
        exit;
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Iscrizione on-line - Ducato Nuoto Urbino</title>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<?php include "styles.php"; ?>
<?php include "js.php"; ?>
    </head>
    <body>
<?php include "header.php"; ?>
        <div id="body" class="central">
            <h1>Iscrizione</h1>
<?php if(!$accept): ?>
                <strong class="error">L'accettazione dell'informativa sulla privacy è necessaria per iscriversi</strong>
<?php endif; ?>
            <form action="iscrizione.php" method="POST">
                <fieldset>
                    <legend>Attività scelta</legend>
                    <select name="att">
                        <option value="NL">Nuoto Libero</option>
                        <option value="SNB">Scuola Nuoto Bambini</option>
                        <option value="SNA">Scuola Nuoto Adulti</option>
                        <option value="GMY">Acquagym</option>
                        <option value="AGO">Agonismo</option>
                        <option value="MST">Master</option>
                        <option value="LI">Lezioni individuali</option>
                        <option value="FUN">Rieducazione funzionale</option>
                    </select>
                </fieldset>
                <fieldset>
                <legend>Dati atleta</legend>
                    <label for="aname">Nome:</label>
                    <input type="text" name="aname" id="aname"><br>
                    <label for="asurname">Cognome:</label>
                    <input type="text" name="asurname" id="asurname"><br>
                    <label for="bplace">Comune di nascita:</label>
                    <input type="text" name="bplace" id="bplace"><br>
                    <label for="bprovince">Provincia di nascita:</label>
                    <input type="text" name="bprovince" id="bprovince" maxlength="2" size="2"><br>
                    <label for="bdate">Data di nascita (gg/mm/aaaa):</label>
                    <input type="text" name="bdate" id="bdate" maxlength="10" size="10"><br>
                </fieldset>
                <fieldset>
                    <legend>Dati genitore (in caso di minori)</legend>
                    <label for="pname">Nome:</label>
                    <input type="text" name="pname" id="pname"><br>
                    <label for="psurname">Cognome:</label>
                    <input type="text" name="psurname" id="psurname">
                </fieldset>
                <fieldset>
                    <legend>Recapiti</legend>
                    <label for="rplace">Comune di residenza:</label>
                    <input type="text" name="rplace" id="rplace"><br>
                    <label for="rprovince">Provincia di residenza:</label>
                    <input type="text" name="rprovince" id="rprovince" maxlength="2" size="2"><br>
                    <label for="rstreet">Indirizzo:</label>
                    <input type="text" name="rstreet" id="rstreet"><br>
                    <label for="rnum">N.</label>
                    <input type="text" name="rnum" id="rnum" size="5"><br>
                    <label for="tel">Telefono:</label>
                    <input type="text" name="tel" id="tel"><br>
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email">
                </fieldset>
                <fieldset>
                    <legend>Accettazione</legend>
                    <textarea name="priv" cols="80" rows="10">
<?php include "privacy.txt"; ?>
                    </textarea><br>
                    <input type="checkbox" name="privacy" id="privacy" value="1">
                    <label for="privacy">Dichiaro di aver letto l’informativa sulla privacy e quindi autorizzo l’associazione in riferimento al decreto 196 del 30/06/2003 (testo unico sulla privacy) ad utilizzare i miei dati per gli scopi istituzionali e per quelli previsti da suddetta informativa.</label><br>
                    <textarea name="acceptance" cols="80" rows="10">
<?php include "acceptance.txt"; ?>
                    </textarea><br>
                    <input type="checkbox" name="accept" id="accept" value="1">
                    <label for="accept">Dichiaro di aver letto ed accettato le precedenti condizioni</label><br>
                    <input type="checkbox" name="news" id="news" value="1">
                    <label for="news">Desidero ricevere via e-mail gli aggiornamenti su chiusure straordinarie, novità, promozioni e altre informazioni riguardanti le attività della piscina</label>
                </fieldset>
                <input type="submit" value="Invia">
            </form>
        </div>
<?php include "footer.php"; ?>
    </body>
</html>
