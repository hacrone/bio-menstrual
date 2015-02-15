<!DOCTYPE html>
<html>
  <head>
	<title>Bio-Menstrual</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<?php echo $this->Html->css(array("metro-bootstrap", "metro-bootstrap-responsive")); ?>
	<?php echo $this->Html->script(array(
		"jquery/jquery.min",
		"jquery/jquery.widget.min",
		"jquery/jquery.mousewheel",
		"jquery/jquery.easing.1.3.min",

		'metro/metro-global',
		'metro/metro-core',
		'metro/metro-locale',
		'metro/metro-touch-handler',

		'metro/metro-accordion',
		'metro/metro-button-set',
		'metro/metro-date-format',
		'metro/metro-calendar',
		'metro/metro-datepicker',
		'metro/metro-carousel',
		'metro/metro-countdown',
		'metro/metro-dropdown',
		'metro/metro-input-control',
		'metro/metro-live-tile',

		'metro/metro-progressbar',
		'metro/metro-rating',
		'metro/metro-slider',
		'metro/metro-tab-control',
		'metro/metro-table',
		'metro/metro-times',
		'metro/metro-dialog',
		'metro/metro-notify',
		'metro/metro-listview',
		'metro/metro-treeview',
		'metro/metro-fluentmenu',
		'metro/metro-hint',
		'metro/metro-streamer',
		'metro/metro-stepper',
		'metro/metro-drag-tile',
		'metro/metro-scroll',
		'metro/metro-pull',
		'metro/metro-wizard',

		'metro/metro-initiator'
		)); ?>
		
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style type="text/css">
		body > .container { height: auto; min-height: 90%; }
		#footer {
			border-top: 1px solid #DDDDDD;
			font-size: 11px;
			margin: 0 auto;
			padding: 5px 0 5px 0;
			text-align: center;
			width: 90%;
		}
	</style>
  </head>
	<body class="metro">
		<nav class="navigation-bar dark">
			<nav class="navigation-bar-content container">
				<a class="element" href="<?php echo $this->Html->url(array('controller' => 'calculators', 'action' => 'index'),true);?>"><span class="icon-grid-view"></span> Bio-Menstrual <sup>BETA</sup></a>
				<div class="hidden-print">
				<span class="element-divider"></span>
				<div class="element">
					<a class="dropdown-toggle" href="#">Calculator</a>
					<ul class="dropdown-menu" data-role="dropdown">
						<li><?php echo $this->Html->link('Menstrual Period Calculator', array('controller' => 'calculators', 'action' => 'menstrual_period'));?></li>
						<li class="divider"></li>
						<li><?php echo $this->Html->link('Ovulation Calculator', array('controller' => 'calculators', 'action' => 'ovulation_fertile'));?></li>
					</ul>
				</div>
				<span class="element-divider"></span>
				<div class="element">
					<a class="dropdown-toggle" href="#">Help</a>
					<ul class="dropdown-menu" data-role="dropdown">
						<li><?php echo $this->Html->link('About', array('controller' => 'pages', 'action' => 'about'));?></li>
					</ul>
				</div>
		 
				<span class="element-divider place-right"></span>
				<a class="element brand place-right" href="#" id="refreshPage"><span class="icon-spin"></span></a>
				<span class="element-divider place-right"></span>
				<a class="element brand place-right" href="#" id="printThis"><span class="icon-printer"></span></a>
				<span class="element-divider place-right"></span>
				</div>
			</nav>
		</nav>
		<div class="page">
			<div class="page-region">
				<div class="page-region-content">
					<div class="container" style="padding: 8px;">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
					</div>
				</div>
			</div>
		</div>
		
			<div id="footer">
			
				<div id="copyright">
				© <?php echo (date('Y') > '2014') ? '2014 - ' . date('Y') : '2014' ?> - Bio-Menstural by <a href="http://blog.hacrone.com">Hacrone</a>
				</div>
			</div>
		<?php echo $this->element('sql_dump'); ?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
	</body>
	<script type="text/javascript">
	$('#printThis').on('click', function(){
		window.print();
		// $.Notify({
  //       	content : "This function not available yet.",
  //       	caption : "Opps!",
  //       	style  	: {background: '#72CEFA', color: 'black'} 
  //   	});
	});

	$('#refreshPage').on('click', function(){
		location.reload();
	});
	</script>
</html>