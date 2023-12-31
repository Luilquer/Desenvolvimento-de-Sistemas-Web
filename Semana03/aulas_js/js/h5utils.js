var addEvent = (function () {
    if (document.addEventListener) {
        return function (el, type, fn) {
            if (el && el.nodeName || el === window) {
                el.addEventListener(type, fn, false);
            } else if (el && el.length) {
                for (var i = 0; i < el.length; i++) {
                    addEvent(el[i], type, fn);
                }
            }
        };
    } else {
        return function (el, type, fn) {
            if (el && el.nodeName || el === window) {
                el.attachEvent('on' + type, function () { return fn.call(el, window.event); });
            } else if (el && el.length) {
                for (var i = 0; i < el.length; i++) {
                    addEvent(el[i], type, fn);
                }
            }
        };
    }
})();

(function () {
    var pre = document.createElement('pre');
    pre.id = "view-source"

    addEvent(window, 'click', function (event) {
        if (event.target.hash == '#view-source') {
            if (!document.getElementById('view-source')) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        pre.innerHTML = this.responseText.replace(/[<>]/g, function (m) { return {'<':'&lt;','>':'&gt;'}[m]});
                        prettyPrint();
                    }
                };
                document.body.appendChild(pre);
                xhr.open("GET", window.location, true);
                xhr.send();
            }
            document.body.className = 'view-source';
   
            var sourceTimer = setInterval(function () {
                if (window.location.hash != '#view-source') {
                    clearInterval(sourceTimer);
                    document.body.className = '';
                }
            }, 200);
        }
    });  
})();