<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Smart House</title>
<!--[if IE]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link rel="stylesheet" type="text/css" href="../css/sh.css"
	media="screen" />
<link rel="stylesheet" type="text/css" href="../css/simpheader.css"
	media="screen" />
<link rel="stylesheet" type="text/css" href="../css/devpanel.css"
	media="screen" />
	<script src="../js/devicepanel.js"></script>
</head>
<body>
	<div id="content">
		<ul class="topnav">
			<li><a class="active" href="#home">Home</a></li>
			<li><a href="#news">List of devices</a></li>
			<li><a href="#contact">Settings</a></li>
			<li class="right"><a href="#logout">Log out</a></li>
		</ul>

		<div id="simple-header">List of devices</div>




		<div id="devices-panel">
			<div id="device-panel-1" class="device-panel">
				<div class="dp-header">
					<div class="add-dev" onclick="addDevice()">+</div>
					<div class="dp-header-text">Smart home server</div>
					<div class="del-dev" onclick="delDevice()">-</div>
				</div>
				<div class="ip-address">
					<div class="dp-ip">ip: 251.12.151.24</div>
					<div class="dp-port">port: 20</div>
				</div>
				<div id="dp-mac">mac-addr: 00:25:96:FF:FE:12:34:56</div>
				<div class="dp-driver">
<!-- 				<form action="template.html"> -->
					<form action="lod/">
						<div class="radio-group">
							<div class="dp-driver-on">
								<input type="radio" name="r-dev-on" value="On">On<Br>
							</div>
							<div class="dp-driver-off">
								<input type="radio" name="r-dev-on" value="Off">Off<Br>
							</div>
							<div class="dp-driver-reset">
								<input type="radio" name="r-dev-on" value="Reset">Reset<Br>
							</div>
						</div>
						<div class="dp-current-state">
							<div class="dp-cs-header">Current state:</div>
							<div class="dp-cs-message">Device is off</div>
						</div>
						<div class="btn-block">
							<div class="btn-go">
								<button type="submit">Go</button>
							</div>
							<div class="btn-reset">
								<button>Reset</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>




		<!--
-->
		<div id="frm-yn">
			<div class="frm-service-header"> Make your choice! </div>
			<div class="frm-service-content">
				<div class="frm-service-msg">Did you really want delete this device?</div>
					<form action="template.html">
						<div class="btn-block">
							<div class="btn-yes">
								<button  onclick="delDeviceYes()"> Yes </button>
							</div>
							<div class="btn-no">
								<button  onclick="delDeviceNo()"> No </button>
							</div>
						</div>
					</form>
				</div>
			</div>






		<!--
 -->

		<div id="frm-add-new-device">
			<div id="frm-add-new-device-shape">
				<form>
					<div class="frm-adddevice-header">Add new device...</div>
					<div class="frm-adddevice-content">
						<div class="frm-inp-str">
							<div class="frm-inp-str-lbl">Input device name:</div>
							<div class="frm-inp-str-inp">
								<input type="text" name="dev-name">
							</div>
						</div>
						<div class="frm-inp-str">
							<div class="frm-inp-str-lbl">Input ip:</div>
							<div class="frm-inp-str-inp">
								<input type="text" name="ip">
							</div>
						</div>
						<div class="frm-inp-str">
							<div class="frm-inp-str-lbl">Input port:</div>
							<div class="frm-inp-str-inp">
								<input type="text" name="port">
							</div>
						</div>
						<div class="frm-inp-str">
							<div class="frm-inp-str-lbl">Input mac-address:</div>
							<div class="frm-inp-str-inp">
								<input type="text" name="mac-addr">
							</div>
						</div>

						<div class="btn-block">
							<div class="btn-add">
								<button  onclick="addNewDevice()">Add</button>
							</div>
							<div class="btn-cancel">
								<button onclick="cancelNewDevice()">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>


		<?=$mainloginform;?>
		<div id="pbottom">
			<div>
				<div id="aboutMe" class="bottomcol" style="width: 40%">
					<div class="boldtext">About Me:</div>
					<div class="bottomcoltext">
						<div>Software Developer & Technical Translator</div>
					</div>
				</div>
				<div id="latestNews" class="bottomcol" style="width: 45%">
					<div class="boldtext">Latest News:</div>
					<div class="bottomcoltext">
						<div>Do you want the same?</div>
					</div>
				</div>
				<div id="SendMeMessage" class="bottomcol">
					<div class="boldtext">Send Me A Message:</div>
					<div class="bottomcoltext">
						<div>Facebook</div>
						<div>LinkedIn</div>
						<div>Telegram</div>
						<div>E-mail</div>
						<div>SMS</div>
					</div>
				</div>
			</div>
			<div id="pcopyright">
				<div class="textcenter">
					<div class="cinline">Copyright © 2017 by</div>
					<div class="cinline">Volodymyr Nerovnia</div>
					<div class="cinline">. All rights reserved</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
