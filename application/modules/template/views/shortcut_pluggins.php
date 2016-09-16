<!-- #SHORTCUT AREA : With large tiles (activated via clicking user name tag)
			 Note: These tiles are completely responsive, you can add as many as you like -->
		<div id="shortcut">
			<ul>
				<li>
					<a href="#ajax/inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
				</li>
				<li>
					<a href="#ajax/calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
				</li>
				<li>
					<a href="#ajax/gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
				</li>
				<li>
					<a href="#ajax/invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
				</li>
				<li>
					<a href="#ajax/gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
				</li>
				<li>
					<a href="#ajax/profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
				</li>
			</ul>
		</div>
		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->


		<!-- #PLUGINS -->
		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="<?php base_url().'assets/template/js/libs/jquery/2.1.1/jquery.min.js'?>"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="<?php base_url().'assets/template/js/libs/jquery-2.1.1.min.js'?>"><\/script>');
			}
		</script>

		<script src="<?php base_url().'assets/template/js/libs/jqueryui/1.10.3/jquery-ui.min.js'?>"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="<?php base_url().'assets/template/js/app.config.js'?>"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<!-- <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>  -->

		<!-- BOOTSTRAP JS -->
		<!-- <script src="js/bootstrap/bootstrap.min.js"></script> -->

		<!-- CUSTOM NOTIFICATION -->
		<script src="<?php base_url().'assets/template/js/notification/SmartNotification.min.js'?>"></script>

		<!-- JARVIS WIDGETS -->
		<script src="<?php base_url().'assets/template/js/smartwidgets/jarvis.widget.min.js'?>"></script>

		<!-- EASY PIE CHARTS -->
		<script src="<?php base_url().'assets/template/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js'?>"></script>

		<!-- SPARKLINES -->
		<script src="<?php base_url().'assets/template/js/plugin/sparkline/jquery.sparkline.min.js'?>"></script>

		<!-- JQUERY VALIDATE -->
		<script src="<?php base_url().'assets/template/js/plugin/jquery-validate/jquery.validate.min.js'?>"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="<?php base_url().'assets/template/js/plugin/masked-input/jquery.maskedinput.min.js'?>"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="<?php base_url().'assets/template/js/plugin/select2/select2.min.js'?>"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="<?php base_url().'assets/template/js/plugin/bootstrap-slider/bootstrap-slider.min.js'?>"></script>

		<!-- browser msie issue fix -->
		<script src="<?php base_url().'assets/template/js/plugin/msie-fix/jquery.mb.browser.min.js'?>"></script>

		<!-- FastClick: For mobile devices: you can disable this in app.js -->
		<script src="<?php base_url().'assets/template/js/plugin/fastclick/fastclick.min.js'?>"></script>

		<!--[if IE 8]>
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
		<![endif]-->

		<!-- Demo purpose only -->
		<script src="js/demo.min.js"></script>

		<!-- MAIN APP JS FILE -->
		<script src="<?php base_url().'assets/template/js/app.min.js'?>"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="<?php base_url().'assets/template/js/speech/voicecommand.min.js'?>"></script>

		<!-- SmartChat UI : plugin -->
		<script src="js/smart-chat-ui/smart.chat.ui.min.js"></script>
		<script src="js/smart-chat-ui/smart.chat.manager.min.js"></script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-43548732-3']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>