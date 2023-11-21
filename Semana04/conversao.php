<html>

<head>
    <title>Conversão de temperatura</title>
</head>

<body>
    <form action=ae method="get">
        Digite 1 para: Celsius para Farenheit<br />
        Digite 2 para: Farenheit para Celsius<br />
        <input type="number" name="opt" /><br />
        Temperatura:<input type="number" name="number" /><br />
        <input type="submit" name="submit" value="Calcular" />
    </form>
    <?php
    $op = $_GET['opt'];
    $temp = $_GET['number'];

    if ($op == 1)
        echo "Temperatura em Farenheit: " . CtoF($temp);
    elseif ($op == 2)
        echo "Temperatura em Celsius: " . FtoC($temp);
    else
        echo "Opção inválida";


    function CtoF($temperatura)
    {
        return ($temperatura * 9 / 5) + 32;
    }
    function FtoC($temperatura)
    {
        return ($temperatura - 32) * 5 / 9;
    }
    ?>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>

</html>