<?php
require_once "menu.php";
require_once "settings.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
		"http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Homepage - Ducato Nuoto Urbino</title>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<?php include "styles.php"; ?>
<?php include "js.php"; ?>
	</head>
	<body>
<?php include "header.php"; ?>
            <div id="banner" class="central">
                <img src="images/pictures/main.jpg" width="580" height="335" alt="" title="">
            </div>
            <div id="body" class="central">
                <h1>Ultime notizie dalla Ducato Nuoto</h1>
                <div class="news">
                    <dl>
                        <dt>Corsi di nuoto</dt>
                        <dd>Al via la nuova stagione con tutti i corsi di nuoto per bambini e adulti.</dd>
                        <dt>Orari segreteria</dt>
                        <dd>Per informazioni sui corsi o su come iscriversi potete venire a trovarci in segreteria presso la Piscina "F.lli Cervi" dalle ore 16.00 alle ore 20.15 tutti i giorni dal lunedì al venerdì.</dd>
                        <dt>Agonismo</dt>
                        <dd>Nuova stagione per gli atleti della Ducato Nuoto che partono subito forte con delle ottime prestazioni.<br>
Per far parte della squadra di nuoto agonistico o di nuoto master chiamare il numero 3287489695 o presentarsi in piscina per fissare una prova.</dd>
                    </dl>
                </div>
                <!--<div class="half left">
                    <h1>Attività in promozione</h1>
                    Avviate le iscrizioni per il corso esitivo di <a href="attivita.php?a=snb">Scuola nuoto Bambini</a>.
                </div>
                <div class="half right">
                    <h1>Ultimi eventi</h1>
                </div>-->
                <div class="spacer"></div>
            </div>
<?php include "footer.php"; ?>
	</body>
</html>
