        <div id="container">
            <div id="header" class="central">
                <div id="logo"><img src="images/logo.png" width="310" height="90" alt="DNU"><div id="op_hours"><h4>orario apertura impianto</h4>lun-mer-ven: 10:00 - 13:30 / 15:00 - 22:00<br>
mar-gio: 14:00 - 22:00<br>
sab: 10:00 - 13:30</div></div>
            </div>
            <div id="menu" class="central">
                        <select id="stylesel">
                            <option value="No style">No style</option>
                        </select>
                        <img src="images/papera.png" width="48" height="30" alt="" id="duck">
                        <?php print_menu(get_entries("main_menu")); ?>
            </div>