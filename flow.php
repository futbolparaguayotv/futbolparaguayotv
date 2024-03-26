

<!DOCTYPE html>
<html lang="es">
    <style type="text/css">
body {
   margin: 0;
   padding: 0;
   background-color:black
}
.jw-button-color {
    color: rgb(255 1 1 / 80%)!important;
}
.jw-knob {
    background-color: #ff0101!important;
    }
.jw-progress {
    background-color: #ff0101!important;
}
.jw-text-live::before {
    background-color: red!important;
    }
.jw-reset-text{
    color: #ff0101!important;
}
</style>
<head>
<title>WEB REPRODUCTOR</title>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow">
<meta name="referrer" content="no-referrer">

<!-- advertisement -->
<script type='text/javascript' src='//pl18834358.highrevenuegate.com/00/27/1a/00271aa6b9fe738478c33f5b7571d0d0.js'></script>

<!-- jw player -->
<script src='assets/player/v/8.26.0/jwplayer-1.js'></script>
<script> jwplayer.key='XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
</head>
<body style="margin:0; padding:0;">

<div id="player" style="background-color:#ff0101; color:#FFF;">Cargando Recursos...</div>

<script type="text/javascript">
function getParameterByName(name) {
	name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
	var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
	results = regex.exec(location.search);
	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var getLang = getParameterByName('lang');
</script>

<script type="text/javascript">
function getData(e){e=e.replace(/[\[]/,"[").replace(/[\]]/,"]");var a=new RegExp("[?&]"+e+"=([^&#]*)").exec(location.search);return null===a?"":decodeURIComponent(a[1].replace(/\+/g," "))}

jwplayer("player").setup({
    "abouttext": "Descarga VerTvCable +",
            "aboutlink": "https://play.google.com/store/apps/details?id=com.fralegon.vertv",
            "logo": {
                "file":
                "https://www.vertvcable.com/wp-content/uploads/2022/12/playericon.png",
                "link": "https://www.vertvcable.com"
                    },
playlist: [{
"title": "PLAYER OFICIAL",
          "description": "www.vertvcable.com",
		  "image": "https://www.vertvcable.com/wp-content/uploads/2022/12/bgnew2.png",
"sources": [{
"default": true,
"label": "0",
"type": "dash",
"file": atob(getData("url")),
"drm": {"clearkey": {"keyId": atob(getData("k1")), "key": atob(getData("k2"))}}
}]
}],
autostart: getData("aut"),
width: "100%", height: "100%", aspectratio: "16:9", stretching : "exactfit", cast: {}, sharing: false

});


if (getLang == "") {
	getLang = 0;
}
jwplayer(player).on('play', function(e) {jwplayer(player).setCurrentAudioTrack(getLang);});
</script>

<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4718129,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4718129&101" alt="free contador" border="0"></a></noscript>
<script>
if(!Histats_variables){var Histats_variables=[];}
Histats_variables.push("web","1");
</script>
<!-- Histats.com  END  -->
</body>
</html>
