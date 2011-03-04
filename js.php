        <script type="text/javascript" src="alternate.js"></script>
        <script type="text/javascript">
        window.onload = function () {
            populateSelector();
            var prefstyle = readCookie("prefstyle");
            if(prefstyle) {
                setActiveStyleSheet(prefstyle);
            }
        };
        </script>
