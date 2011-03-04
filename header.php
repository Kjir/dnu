        <div id="container">
            <div id="header" class="central">
                <div id="logo"><img src="images/logo.jpg" width="310" height="90" alt="DNU"></div>
            </div>
            <div id="menu" class="central">
                        <select id="stylesel">
                            <option value="No style">No style</option>
                        </select>
                        <?php print_menu(get_entries("main_menu")); ?>
            </div>
