function setActiveStyleSheet(title) {
    var i, a;
    for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
        if(a.getAttribute("rel").indexOf("style") != -1
                && a.getAttribute("title")) {
            a.disabled = true;
            if(a.getAttribute("title") == title) a.disabled = false;
        }
    }
    createCookie("prefstyle", title);
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

function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}
