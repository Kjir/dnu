<?php
$menus["main_menu"] = array(
    'Homepage' => 'index.php',
    'Attività' => 'attivita.php',
    'Novità' => 'notizie.php',
    'Eventi' => 'foto.php',
    'Contatti' => 'contatti.php'
);
$menus["attivita"] = array(
        'Nuoto Libero' => 'attivita.php?a=lib',
        'Acquafitness' => 'attivita.php?a=gym',
        'Scuola Nuoto Adulti' => 'attivita.php?a=sna',
        'Scuola Nuoto Bambini' => 'attivita.php?a=snb',
        'Agonismo' => 'attivita.php?a=ago',
        'Rieducazione Funzionale' => 'attivita.php?a=fun',
);

function get_entries($menu_name) {
    global $menus;
    if(array_key_exists($menu_name, $menus)) {
        return $menus[$menu_name];
    } else {
        return array();
    }
}
