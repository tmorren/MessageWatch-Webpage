<!DOCTYPE html>
<?php include 'functions.php' ?>
<html>
<head>
	<title>VerQu | MessageWatch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-flex.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="jumbotron" id="headerMain">
	  	<div class="container">
	  		<img id="headerLogo" src="img/MessageWatchLogoBlack.png">
			<p id="headerText">MessageWatch elimates compliance issues, and ensures that all messages are archived successfully.</p>
			<p><a class="btn btn-primary btn-lg" id="demoButton" href="#getStartedBanner" role="button">Request Demo</a></p>
			<img id="headerUI" src="img/MessageWatchScreenHalf.png">
		</div>
	</div>

	<div class="row banner" id="firstBanner">
		<div class="container">
			<h3>With MessageWatch, Compliance has never been easier</h3>
		</div>
	</div>

	<!-- The Problem Section -->
	<section class="container" id="sectionTheProblem">
		<div class="row">
			<div class="col-lg-12" id="textTheProblem">
				<div>
					<h3>The Problem</h3>

					<p>In today's business environment, Compliance and Legal departments can be asked to produce electronic copies of important communications or documents.  Every day, your business handles countless messages and files that could contain essential information for business, tax or contractual purposes. Companies are <strong>required by law</strong> to maintain these communications as governed by <strong>SEC Rule 17a-4.</strong></p>

					<p>Your company is utilizing more than just email to communicate - <strong>LinkedIn, Skype for Business, Financial Systems (Reuters, Bloomberg), Slack, etc.</strong> – are all utilized for communications and all of which are discoverable and required in court cases if you’re faced with litigation.</p>

					<p>If your company utilizes EV and is not handling Failed Messages, <strong>your Mail Archiving system is <u>not in full compliance.</u></strong></p>

					<div id="serviceLogos">
						<img src="img/slack-logo-sm.png">
						<img src="img/skype-logo-sm.png">
						<img src="img/linkedin-logo-sm.png">
					</div>
				</div>
			</div>
			<div class="col-lg-3">
			</div>
		</div>
	</section>

	<div class="row banner" id="worksBanner">
		<div class="container">
			<h3>How MessageWatch Works</h3>
		</div>
	</div>


	<section class="container" id="sectionMessageWatch">
		<div class="row">
			<div class="col-lg-12" id="textMessageWatch">
				<div>
					<p>VerQu’s proprietary software MessageWatch processes Failed Messages so you don’t have to!</p>
					<p>Message Watch scans journal mailboxes for failed messages and re-ingests them into Enterprise Vault to be processed again.</p>
					<img src="img/data-image3.png">
					<p>Message Watch can be scheduled to run on a recurring basis so that there is less impact to the Messaging Team.  This frees up valuable resources to work on mission critical issues.  More important – processing of Failed Messages makes searches more complete for eDiscovery &amp; legal searches.</p>

				</div>
			</div>
			<div class="col-lg-3">
			</div>
		</div>
	</section>
	<!-- Select Folder Sections -->
	<!--<section class="container" id="sectionSelectFolder">
		<div class="row">
			<div class="col-lg-6" id="textSelectFolder">
				<div>
					<h3>Select a folder</h3>
					<p>MessageWatch scans journal mailboxes for failed messages and re-ingests them into Enterprise Vault to be processed again.</p>
					<p>Feugiat posidonium pri ei, sea ea commodo singulis, veri viris consul at ius. An quem illud ludus duo cu.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<img src="img/MWConfigureFolders.png">
			</div>
		</div>
	</section>-->

	<!-- Configure Settings Sections -->
	<!--<section class="container" id="sectionConfigureSettings">
		<div class="row">
			<div class="col-lg-5 push-lg-6" id="textConfigureSettings">
				<div>
					<h3>Configure Settings</h3>
					<p>MessageWatch can be configured to meet your compliance needs. MessageWatch provides you with a wide variety of options to make sure everything is done exactly how you need it. The settings include: </p>
					<ul>
						<li>Output Locations</li>
						<li>Threading</li>
						<li>Destinations</li>
						<li>Reporting</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-5 pull-lg-5 offset-lg-1">
				<img src="img/MWSettingsDestinations.png">
			</div>
		</div>
	</section>-->

	<!-- Set a Schedule Sections -->
	<!--<section class="container" id="sectionSetSchedule">
		<div class="row">
			<div class="col-lg-6" id="textSetSchedule">
				<div>
					<h3>Set Your Schedule</h3>
					<p>Scheduling allows you to create new scheduled events or delete older ones. MessageWatch can be configured to run on a daily, weekly, or monthly schedule. Creating a new scheduled event is very straightforward and deleting older ones are even easier.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<img  src="img/MessageWatchScheduler.png">
			</div>
		</div>
	</section>-->

	<!-- Other Section -->
	<!--<section class="container" id="sectionOther">
		<h3>Let MessageWatch Do The Rest</h3>
		<p>Once you have chosen all your settings, MessageWatch will take care of the rest. MessageWatch scans journal mailboxes for failed messages and re-ingests them into Enterprise Vault to be processed again. Message Watch will run on its set schedule so that there is less impact to the Messaging Team.  This frees up valuable resources to work on mission critical issues.  More importantly – processing of Failed Messages makes searches more complete for eDiscovery &amp; legal searches.</p>
		<img src="img/MessageWatchScreen.png">
	</section>-->

	<div class="row banner" id="getStartedBanner">
		<div class="container">
			<h3>Get Started With MessageWatch</h3>
		</div>
	</div>

	<!-- Contact Section -->
	<section class="container" id="sectionContact">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<h3>Contact Us</h3>
				<p>Fill out the form below to learn more about MessageWatch!</p>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'] . "#getStartedBanner" ?>">
					<div class="form-group">
						<label for="name">Name: <span class="required-input">*</span></label>
						<input type="text" class="form-control" name="name" placeholder="ex. John Doe" required/>
					</div>
					<div class="form-group">
					    <label for="email">Email address: <span class="required-input">*</span></label>
					    <input type="email" class="form-control" name="email" placeholder="ex. email@example.com" required>
					</div>
					<div class="form-group">
					    <label for="phone_number">Phone Number: <span class="required-input">*</span><br><small>(format: 555-555-1212)</small> </label>
					    <input type="tel" class="form-control" name="phone_number" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="ex. 555-555-1212" required>
					</div>
					<div class="form-group">
					    <label for="message">Message:</label>
					    <textarea class="form-control" name="message" rows="10"></textarea>
					</div>
				  <button class="btn btn-primary btn-lg" type="submit" name="submit" class="btn btn-default">Submit</button>
				</form>
				<?php
					if (isset($_POST['submit'])) {
						demoRequest();
					}
				?>
			</div>
		</div>
	</section>

		<!-- Footer -->
	<footer class="container-fluid">
		<img src="img/MessageWatchLogoWhite.png"><br /><br />
		<p>Powered by <a href="https://www.verqu.com" target="_blank"><img id="footerVQLogo" src="img/verqu-white.png"></a></p>
	</footer>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-77849150-2', 'auto');
	  ga('send', 'pageview');
	</script>
</body>
</html>