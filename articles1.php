<!DOCTYPE html>
<?php
	$thisPage = "SQRL";
	include("top.php");
?>
				<h2>SQRL</h2>
				
				<p>	Secure Quick Reliable Login (SQRL) allows users to login to websites without using their personal information or typing in a username and password. By simply using your smartphone to scan a QR code on a website, you can authorize your account to be logged into on sites that enable SQRL. SQRL provides a quick and secure way to get access to your accounts while eliminating the need for you to give up personal information. I will cover some of the security benefits to using SQRL and how to use it to login.</p>

				<p>	When using SQRL to login to a website that provides a QR code you have three options to authenticate your identity. You can use your smart phone QR code app to scan the code from the website, tap the code directly on your smart phone, or click on the QR code on your computer(SQRL application is required). You only need to authorize the QR code login once per site but you will be asked to  confirm the domain name connected with the code each time you use it to log into that website.</p>

				<p>	When you use your SQRL identity to login for the first time, a unique 256 bit cryptographic number is created that is specific to each SQRL user and each website. Each website that uses a QR code login as an option creates a completely unique code for every user that is also different than any other website. This allows for you to have access to your account or even set up an entirely new account without ever needing to provide personal information that could potentially be stolen or used without your permission. Your personal information that you are use to providing while setting up a new account would just be a very long cryptographic number attached to your SQRL app. The website also produces a different code each time you return to the login screen for that site so the code you scan will never be the same. If a hacker were to gain access to your SQRL login for one particular site they would only have half of the information needed to access your account plus no personal information to exploit. Once your SQRL identity has been established it cannot be changed so you can't be locked out of your accounts either.</p>

				<p>	By using SQRL while logging in on public networks you can avoid keystroke loggers and resident malware that may be present. Even if someone were to get access to one of your devices it would be very difficult steal your SQRL information since your computer and smart phone are connected to different channels. Since SQRL uses your smart phone's cellular network, it would be very difficult to compromise two forms of communication simultaneously. Your identity is also protected from third parties since your SQRL doesn't actually contain any personal information. If a hacker were to somehow get all the necessary information from a website and your smart phone to gain access to your account, you have access to an offline "identity unlock key". This key allows you to retire and replace your stolen SQRL identity key.</p>

				<p>	Until SQRL apps become integrated into operating systems for smart phones you will need to choose which SQRL client to install onto your device if you want to take advantage of these features. The SQRL system algorithms, libraries, and packages all exist in the public domain and are ready to be assembled for use. SQRL may be the standard way to login in the future especially as identity theft grows.</p>
			</div>
		</div>
		
<?php include("bottom.php"); ?>