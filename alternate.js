function setActiveStyleSheet(title) {
    var i, a;
    for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
        if(a.getAttribute("rel").indexOf("style") != -1
                && a.getAttribute("title")) {
            a.disabled = true;
            if(a.getAttribute("title") == title) a.disabled = false;
        }
    }
}

function populateSelector() {
    var i, opt, sel;
    sel = document.getElementById("stylesel");
    for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
        if(a.getAttribute("rel").indexOf("style") != -1
                && a.getAttribute("title")) {
            opt = document.createElement("option");
            opt.value = a.getAttribute("title");
            opt.appendChild(document.createTextNode(a.getAttribute("title")));
            sel.appendChild(opt)
        }
    }
    sel.onchange = function(val) {
        setActiveStyleSheet(this.value);
    };
    sel.onkeypress = function(val) {
        setActiveStyleSheet(this.value);
    };
    sel.onmousewheel = function(val) {
        setActiveStyleSheet(this.value);
    };

}


