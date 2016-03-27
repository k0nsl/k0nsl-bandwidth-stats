<?php
/* my really faggy way to bust cache */
$length = 10;
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

$new_value = $randomString;
?>

<html>
<head>
  <script src="//iso.k0nsl.org/stats/js/jquery.min.js"></script>
  <script src="//iso.k0nsl.org/stats/js/masonry.pkgd.min.js"></script>
  <script type="text/javascript">
$(function(){
$('body').masonry({
        itemSelector: 'img',
        columnWidth: 500,
});
});
  </script>
<style>
    body
    {
        margin-left:auto;
        margin-right:auto;
    }
</style>
<meta http-equiv="refresh" content="60" />
<!-- 

dP        a8888a                    dP                               
88       d8' ..8b                   88                               
88  .dP  88 .P 88 88d888b. .d8888b. 88    .d8888b. 88d888b. .d8888b. 
88888"   88 d' 88 88'  `88 Y8ooooo. 88    88'  `88 88'  `88 88'  `88 
88  `8b. Y8'' .8P 88    88       88 88 dP 88.  .88 88       88.  .88 
dP   `YP  Y8888P  dP    dP `88888P' dP 88 `88888P' dP       `8888P88 
                                                                 .88 
                                                             d8888P  

/-->
</head>
<body style="width: 1000px">

<?php
list($dwidth, $dheight, $type, $attr) = getimagesize("vnstat-daily.png");
list($hwidth, $hheight, $type, $attr) = getimagesize("vnstat-hourly.png");
list($swidth, $sheight, $type, $attr) = getimagesize("vnstat-summary.png");
list($mwidth, $mheight, $type, $attr) = getimagesize("vnstat-monthly.png");
list($twidth, $theight, $type, $attr) = getimagesize("vnstat-top10.png");
echo "
<img width='$dwidth' height='$dheight' src='vnstat-daily.png?$new_value' />
<img width='$hwidth' height='$hheight' src='vnstat-hourly.png?$new_value' />
<img width='$mwidth' height='$mheight' src='vnstat-monthly.png?$new_value' />
<img width='$swidth' height='$sheight' src='vnstat-summary.png?$new_value' />
<img width='$twidth' height='$theight' src='vnstat-top10.png?$new_value' />
";
?>
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//s.k0nsl.org/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
</body>
</html>
