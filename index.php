<!DOCTYPE html>
<html>
<head>
<title>Connection Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="main.css">
<style>
.table-list td {
    padding: 6px 8px;
}
.table-list input,
.table-list select {
    margin-top: 0px;
    margin-bottom: 0px;
}
.STYLE1 {
	font-size: large;
	font-weight: bold;
}
.STYLE2 {font-size: large}
</style>
</head>
<body class="body_iframe" onLoad="initial();">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
<div align="center" class="STYLE1">
  <p class="STYLE2">网络联通性测试</p>
</div>
<div class="jumbotron">
		<table class="table table-bordered">
			<tbody><tr>
				<td width="20%">检测点</td>
				<td width="40%">检测结果</td>
				<td width="40%">解释</td>
			</tr>

			<tr>
				<td>国内网站</td>
				<td>
<iframe src="http://ip.ddnsto.com/text" width="100%" height="70" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"> </iframe>
				</td>
				<td>如果没有全局代理或者VPN，左侧显示的IP就是您本机的IP。如果有，则显示的就是全局代理或者VPN的IP地址。</td>
			</tr>
			<tr>
				<td>国外网站 </td>
				<td>
<iframe src="https://ip.anysrc.net/plain/clientip" width="100%" height="30" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"> </iframe>
				</td>
				<td>左侧IP就是您用来访问国外普通网站（没有被封的网站）的IP地址。</td>
			</tr>

			<tr>
				<td><p>谷歌网站</p>
			    </td>
				<td>
<iframe src="http://ip-goji.appspot.com/text" width="100%" height="30" scrolling="no" frameborder="0" marginheight="0" marginwidth="0">
您无法访问谷歌网站
</iframe>
</td>
				<td>左侧如果没有显示一个IP地址，则说明您现在还不能科学上网，不能访问谷歌，Facebook，Twitter等国外网站。显示IP则表示可以科学上网，这个IP地址就是您用来科学上网的IP地址，通常是您的SS服务器的IP地址，或者VPN服务器，代理服务器的IP地址。</td>
			</tr>

<tr>
				<td><p>访问的本站IP</p>
			    </td>
				<td>
<?php
$iipp=$_SERVER["REMOTE_ADDR"];
echo $iipp;
?>
</iframe>
</td>
				<td>显示的为访问者IP地址，如果网页提供者使用CDN加速，则为CDN访问服务器地址。</td>
			</tr>
<tr><td>其它测试网站</td>
<td><a href="http://ip.koolcenter.com/all">Koolshare</a></td>
<td><p>From<a href="../"> lllll.pub</a></p>
  <p> <a href="networktest.7z">Download code</a> </p></td>
</tr>
		</tbody></table>

</div>
</body>
</html>

