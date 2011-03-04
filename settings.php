<?php
$menus["main_menu"] = array(
    'Homepage' => 'index.php',
    'Attività' => 'attivita.php',
    'Notizie' => 'notizie.php',
    'Galleria Fotografica' => 'foto.php',
    'Contatti' => 'contatti.php'
);

function get_entries($menu_name) {
    global $menus;
    if(array_key_exists($menu_name, $menus)) {
        return $menus[$menu_name];
    } else {
        return array();
    }
}
