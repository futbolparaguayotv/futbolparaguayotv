<html>
<head>
<meta name="robots" content="noindex">
<meta charset="UTF-8">
<title>Player</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='https://content.jwplatform.com/libraries/KB5zFt7A.js'></script>
<script> jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo'; </script>
<script id="aclib" type="text/javascript" src="//futbol-libre.pe/ads/lib.js"></script>
<script type="text/javascript">
    aclib.runPop({
        zoneId: '7143118',
    });
</script>
</head>
<body style="padding: 0px; margin:0px;">
<div id="player"></div>
<script type="text/javascript">
$(document).ready(function() {
  const urlParams = new URLSearchParams(window.location.search);
  const eventId = urlParams.get('id');
  const eventImg = urlParams.get('img');

  function setupPlayer() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/vimeo/scripts/1.json');
    xhr.onload = function() {
      if (xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);
        var playerInstance = jwplayer("player");

        playerInstance.setup({
          playlist : [{
            title : "",
            description : "",
            image : "https://iili.io/JvaSo7t.png",
            sources : [{
              default : true,
              file : atob(data.hls), 
              label : "0",
              type : "hls"
            }],
          }],
          width : "100%",
          height : "100%",
          aspectratio : "16:9",
          autostart : true,
       sharing : {}
        });
        
        playerInstance.on('error', function(event) {
          if (event.code === 232403) {
            location.reload();
          }
        });
      }
    };
    xhr.send();
  }

  setupPlayer(); 

});
</script>
</body>
</html>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VQWGHMD46W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VQWGHMD46W');
</script>
