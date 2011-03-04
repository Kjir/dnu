<?php
function print_menu($entries) {
    print "<ul>";
    $first = true;
    foreach($entries as $k => $l) {
        print "<li";
        $classes = "";
        if ($first) {
            $classes .= "first ";
            $first = false;
        }
        if (is_current_page($l)) {
            $classes .= "current ";
        }
        if (!empty($classes)) {
            print " class=\"" . trim($classes) . "\"";
        }
        print "><a href=\"$l\">$k</a></li>";
    }
    print "</ul>";
}

function is_current_page($link) {
    if(strcmp($_SERVER['PHP_SELF'], $link) == 0 || strcmp(basename($_SERVER['PHP_SELF']), $link) == 0) {
        return true;
    } else {
        return false;
    }
}
