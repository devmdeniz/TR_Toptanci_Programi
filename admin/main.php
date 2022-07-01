<!DOCTYPE html>

<html lang="en">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">



	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="description" content="Neon Admin Panel" />

	<meta name="author" content="" />



	<link rel="icon" href="assets/images/favicon.ico">



	<title>Neon | Cafe Skin</title>



	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">

	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">

	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">

	<link rel="stylesheet" href="assets/css/bootstrap.css">

	<link rel="stylesheet" href="assets/css/neon-core.css">

	<link rel="stylesheet" href="assets/css/neon-theme.css">

	<link rel="stylesheet" href="assets/css/neon-forms.css">

	<link rel="stylesheet" href="assets/css/custom.css">

	<link rel="stylesheet" href="assets/css/skins/cafe.css">



	<script src="assets/js/jquery-1.11.3.min.js"></script>



	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>

		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->





</head>

<body class="page-body skin-cafe" data-url="http://neon.dev">



<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

	

	<div class="sidebar-menu">



		<div class="sidebar-menu-inner">

			

			<header class="logo-env">



				<!-- logo -->

				<div class="logo">

					<a href="index.html">

						<img src="assets/images/logo@2x.png" width="120" alt="" />

					</a>

				</div>



				<!-- logo collapse icon -->

				<div class="sidebar-collapse">

					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->

						<i class="entypo-menu"></i>

					</a>

				</div>



								

				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->

				<div class="sidebar-mobile-menu visible-xs">

					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->

						<i class="entypo-menu"></i>

					</a>

				</div>



			</header>

			

						<div class="sidebar-user-info">



				<div class="sui-normal">

					<a href="#" class="user-link">

						<img src="assets/images/thumb-1@2x.png" width="55" alt="" class="img-circle" />



						<span>Welcome,</span>

						<strong>Art Ramadani</strong>

					</a>

				</div>



				<div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->

					<a href="#">

						<i class="entypo-pencil"></i>

						New Page

					</a>



					<a href="mailbox.html">

						<i class="entypo-mail"></i>

						Inbox

					</a>



					<a href="extra-lockscreen.html">

						<i class="entypo-lock"></i>

						Log Off

					</a>
					<span class="close-sui-popup">&times;</span><!-- this is mandatory -->				</div>
			</div>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="opened active has-sub">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
					<ul class="visible">
						<li>
							<a href="index.html">
								<span class="title">Dashboard 1</span>
							</a>
						</li>
						<li>
							<a href="dashboard-2.html">
								<span class="title">Dashboard 2</span>
							</a>
						</li>
						<li>
							<a href="dashboard-3.html">
								<span class="title">Dashboard 3</span>
							</a>
						</li>
							</ul>
						</li>
						<li>
							<a href="highlights.html">
								<span class="title">What's New</span>
								<span class="badge badge-success badge-roundless">v2.0</span>
							</a>
						</li>
					</ul>
				</ul>
		</div>
	</div>



	<div class="main-content">

				

		<div class="row">

		

			<!-- Profile Info and Notifications -->

			<div class="col-md-6 col-sm-8 clearfix">

		

				<ul class="user-info pull-left pull-none-xsm">

		

					

				<ul class="user-info pull-left pull-right-xs pull-none-xsm">

		

					<!-- Raw Notifications -->

					<li class="notifications dropdown">

		

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

							<i class="entypo-attention"></i>

							<span class="badge badge-info">6</span>

						</a>

		

						<ul class="dropdown-menu">

							<li class="top">

								<p class="small">

									<a href="#" class="pull-right">Mark all Read</a>

									You have <strong>3</strong> new notifications.

								</p>

							</li>

							

							<li>

								<ul class="dropdown-menu-list scroller">

									<li class="unread notification-success">

										<a href="#">

											<i class="entypo-user-add pull-right"></i>

											

											<span class="line">

												<strong>New user registered</strong>

											</span>

											

											<span class="line small">

												30 seconds ago

											</span>

										</a>

									</li>

									

									<li class="unread notification-secondary">

										<a href="#">

											<i class="entypo-heart pull-right"></i>

											

											<span class="line">

												<strong>Someone special liked this</strong>

											</span>

											

											<span class="line small">

												2 minutes ago

											</span>

										</a>

									</li>

									

									<li class="notification-primary">

										<a href="#">

											<i class="entypo-user pull-right"></i>

											

											<span class="line">

												<strong>Privacy settings have been changed</strong>

											</span>

											

											<span class="line small">

												3 hours ago

											</span>

										</a>

									</li>

									

									<li class="notification-danger">

										<a href="#">

											<i class="entypo-cancel-circled pull-right"></i>

											

											<span class="line">

												John cancelled the event

											</span>

											

											<span class="line small">

												9 hours ago

											</span>

										</a>

									</li>

									

									<li class="notification-info">

										<a href="#">

											<i class="entypo-info pull-right"></i>

											

											<span class="line">

												The server is status is stable

											</span>

											

											<span class="line small">

												yesterday at 10:30am

											</span>

										</a>

									</li>

									

									<li class="notification-warning">

										<a href="#">

											<i class="entypo-rss pull-right"></i>

											

											<span class="line">

												New comments waiting approval

											</span>

											

											<span class="line small">

												last week

											</span>

										</a>

									</li>

								</ul>

							</li>

							

							<li class="external">

								<a href="#">View all notifications</a>

							</li>

						</ul>

		

					</li>

		

					<!-- Message Notifications -->

					<li class="notifications dropdown">

		

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

							<i class="entypo-mail"></i>

							<span class="badge badge-secondary">10</span>

						</a>

		

						<ul class="dropdown-menu">

							<li>

								<form class="top-dropdown-search">

									

									<div class="form-group">

										<input type="text" class="form-control" placeholder="Search anything..." name="s" />

									</div>

									

								</form>

								

								<ul class="dropdown-menu-list scroller">

									<li class="active">

										<a href="#">

											<span class="image pull-right">

												<img src="assets/images/thumb-1@2x.png" width="44" alt="" class="img-circle" />

											</span>

											

											<span class="line">

												<strong>Luc Chartier</strong>

												- yesterday

											</span>

											

											<span class="line desc small">

												This ain’t our first item, it is the best of the rest.

											</span>

										</a>

									</li>

									

									<li class="active">

										<a href="#">

											<span class="image pull-right">

												<img src="assets/images/thumb-2@2x.png" width="44" alt="" class="img-circle" />

											</span>

											

											<span class="line">

												<strong>Salma Nyberg</strong>

												- 2 days ago

											</span>

											

											<span class="line desc small">

												Oh he decisively impression attachment friendship so if everything. 

											</span>

										</a>

									</li>

									

									<li>

										<a href="#">

											<span class="image pull-right">

												<img src="assets/images/thumb-3@2x.png" width="44" alt="" class="img-circle" />

											</span>

											

											<span class="line">

												Hayden Cartwright

												- a week ago

											</span>

											

											<span class="line desc small">

												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.

											</span>

										</a>

									</li>

									

									<li>

										<a href="#">

											<span class="image pull-right">

												<img src="assets/images/thumb-4@2x.png" width="44" alt="" class="img-circle" />

											</span>

											

											<span class="line">

												Sandra Eberhardt

												- 16 days ago

											</span>

											

											<span class="line desc small">

												On so attention necessary at by provision otherwise existence direction.

											</span>

										</a>

									</li>

								</ul>

							</li>

							

							<li class="external">

								<a href="mailbox.html">All Messages</a>

							</li>

						</ul>

		

					</li>

		

					<!-- Task Notifications -->

					<li class="notifications dropdown">

		

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">

							<i class="entypo-list"></i>

							<span class="badge badge-warning">1</span>

						</a>

		

						<ul class="dropdown-menu">

							<li class="top">

								<p>You have 6 pending tasks</p>

							</li>

							

							<li>

								<ul class="dropdown-menu-list scroller">

									<li>

										<a href="#">

											<span class="task">

												<span class="desc">Procurement</span>

												<span class="percent">27%</span>

											</span>

										

											<span class="progress">

												<span style="width: 27%;" class="progress-bar progress-bar-success">

													<span class="sr-only">27% Complete</span>

												</span>

											</span>

										</a>

									</li>

									<li>

										<a href="#">

											<span class="task">

												<span class="desc">App Development</span>

												<span class="percent">83%</span>

											</span>

											

											<span class="progress progress-striped">

												<span style="width: 83%;" class="progress-bar progress-bar-danger">

													<span class="sr-only">83% Complete</span>

												</span>

											</span>

										</a>

									</li>

									<li>

										<a href="#">

											<span class="task">

												<span class="desc">HTML Slicing</span>

												<span class="percent">91%</span>

											</span>

											

											<span class="progress">

												<span style="width: 91%;" class="progress-bar progress-bar-success">

													<span class="sr-only">91% Complete</span>

												</span>

											</span>

										</a>

									</li>

									<li>

										<a href="#">

											<span class="task">

												<span class="desc">Database Repair</span>

												<span class="percent">12%</span>

											</span>

											

											<span class="progress progress-striped">

												<span style="width: 12%;" class="progress-bar progress-bar-warning">

													<span class="sr-only">12% Complete</span>

												</span>

											</span>

										</a>

									</li>

									<li>

										<a href="#">

											<span class="task">

												<span class="desc">Backup Create Progress</span>

												<span class="percent">54%</span>

											</span>

											

											<span class="progress progress-striped">

												<span style="width: 54%;" class="progress-bar progress-bar-info">

													<span class="sr-only">54% Complete</span>

												</span>

											</span>

										</a>

									</li>

									<li>

										<a href="#">

											<span class="task">

												<span class="desc">Upgrade Progress</span>

												<span class="percent">17%</span>

											</span>

											

											<span class="progress progress-striped">

												<span style="width: 17%;" class="progress-bar progress-bar-important">

													<span class="sr-only">17% Complete</span>

												</span>

											</span>

										</a>

									</li>

								</ul>

							</li>

							

							<li class="external">

								<a href="#">See all tasks</a>

							</li>

						</ul>

		

					</li>

		

				</ul>

		

			</div>

		

		

			<!-- Raw Links -->

			<div class="col-md-6 col-sm-4 clearfix hidden-xs">

		

				<ul class="list-inline links-list pull-right">

		

					<!-- Language Selector -->

					<li class="dropdown language-selector">

		

						Language: &nbsp;

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">

							<img src="assets/images/flags/flag-uk.png" width="16" height="16" />

						</a>

		

						<ul class="dropdown-menu pull-right">

							<li>

								<a href="#">

									<img src="assets/images/flags/flag-de.png" width="16" height="16" />

									<span>Deutsch</span>

								</a>

							</li>

							<li class="active">

								<a href="#">

									<img src="assets/images/flags/flag-uk.png" width="16" height="16" />

									<span>English</span>

								</a>

							</li>

							<li>

								<a href="#">

									<img src="assets/images/flags/flag-fr.png" width="16" height="16" />

									<span>François</span>

								</a>

							</li>

							<li>

								<a href="#">

									<img src="assets/images/flags/flag-al.png" width="16" height="16" />

									<span>Shqip</span>

								</a>

							</li>

							<li>

								<a href="#">

									<img src="assets/images/flags/flag-es.png" width="16" height="16" />

									<span>Español</span>

								</a>

							</li>

						</ul>

		

					</li>

		

					<li class="sep"></li>

		

					

					<li>

						<a href="#" data-toggle="chat" data-collapse-sidebar="1">

							<i class="entypo-chat"></i>

							Chat

		

							<span class="badge badge-success chat-notifications-badge is-hidden">0</span>

						</a>

					</li>

		

					<li class="sep"></li>

		

					<li>

						<a href="extra-login.html">

							Log Out <i class="entypo-logout right"></i>

						</a>

					</li>

				</ul>

		

			</div>

		

		</div>

		

		<hr />

		

		

		<script type="text/javascript">

		jQuery(document).ready(function($)

		{

			// Sample Toastr Notification

			setTimeout(function()

			{

				var opts = {

					"closeButton": true,

					"debug": false,

					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",

					"toastClass": "black",

					"onclick": null,

					"showDuration": "300",

					"hideDuration": "1000",

					"timeOut": "5000",

					"extendedTimeOut": "1000",

					"showEasing": "swing",

					"hideEasing": "linear",

					"showMethod": "fadeIn",

					"hideMethod": "fadeOut"

				};

		

				// toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);

			}, 3000);

		

		

			// Sparkline Charts

			$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );

			$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );

			$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );

			$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });

			$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});

			$('.linechart').sparkline();

			$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );

			$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );

		

		

			$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {

				type: 'bar',

				barColor: '#485671',

				height: '80px',

				barWidth: 10,

				barSpacing: 2

			});

		

		

			// JVector Maps

			var map = $("#map");

		

			map.vectorMap({

				map: 'europe_merc_en',

				zoomMin: '3',

				backgroundColor: '#383f47',

				focusOn: { x: 0.5, y: 0.8, scale: 3 }

			});

		

		

		

			// Line Charts

			var line_chart_demo = $("#line-chart-demo");

		

			var line_chart = Morris.Line({

				element: 'line-chart-demo',

				data: [

					{ y: '2006', a: 100, b: 90 },

					{ y: '2007', a: 75,  b: 65 },

					{ y: '2008', a: 50,  b: 40 },

					{ y: '2009', a: 75,  b: 65 },

					{ y: '2010', a: 50,  b: 40 },

					{ y: '2011', a: 75,  b: 65 },

					{ y: '2012', a: 100, b: 90 },

					{ y: '2006', a: 100, b: 90 },

					{ y: '2006', a: 100, b: 90 },

					{ y: '2006', a: 100, b: 90 },

					{ y: '2006', a: 100, b: 90 },

				],

				xkey: 'y',

				ykeys: ['a', 'b'],

				labels: ['October 2013', 'November 2013'],

				redraw: true

			});

		

			line_chart_demo.parent().attr('style', '');

		

		

			// Donut Chart

			var donut_chart_demo = $("#donut-chart-demo");

		

			donut_chart_demo.parent().show();

		

			var donut_chart = Morris.Donut({

				element: 'donut-chart-demo',

				data: [

					{label: "Download Sales", value: getRandomInt(10,50)},

					{label: "In-Store Sales", value: getRandomInt(10,50)},

					{label: "Mail-Order Sales", value: getRandomInt(10,50)}

				],

				colors: ['#707f9b', '#455064', '#242d3c']

			});

		

			donut_chart_demo.parent().attr('style', '');

		

		

			// Area Chart

			var area_chart_demo = $("#area-chart-demo");

		

			area_chart_demo.parent().show();

		

			var area_chart = Morris.Area({

				element: 'area-chart-demo',

				data: [

					{ y: '2006', a: 100, b: 90 },

					{ y: '2007', a: 75,  b: 65 },

					{ y: '2008', a: 50,  b: 40 },

					{ y: '2009', a: 75,  b: 65 },

					{ y: '2010', a: 50,  b: 40 },

					{ y: '2011', a: 75,  b: 65 },

					{ y: '2012', a: 100, b: 90 }

				],

				xkey: 'y',

				ykeys: ['a', 'b'],

				labels: ['Series A', 'Series B'],

				lineColors: ['#303641', '#576277']

			});

		

			area_chart_demo.parent().attr('style', '');

		

		

		

		

			// Rickshaw

			var seriesData = [ [], [] ];

		

			var random = new Rickshaw.Fixtures.RandomData(50);

		

			for (var i = 0; i < 50; i++)

			{

				random.addData(seriesData);

			}

		

			var graph = new Rickshaw.Graph( {

				element: document.getElementById("rickshaw-chart-demo"),

				height: 193,

				renderer: 'area',

				stroke: false,

				preserve: true,

				series: [{

						color: '#73c8ff',

						data: seriesData[0],

						name: 'Upload'

					}, {

						color: '#e0f2ff',

						data: seriesData[1],

						name: 'Download'

					}

				]

			} );

		

			graph.render();

		

			var hoverDetail = new Rickshaw.Graph.HoverDetail( {

				graph: graph,

				xFormatter: function(x) {

					return new Date(x * 1000).toString();

				}

			} );

		

			var legend = new Rickshaw.Graph.Legend( {

				graph: graph,

				element: document.getElementById('rickshaw-legend')

			} );

		

			var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {

				graph: graph,

				legend: legend

			} );

		

			setInterval( function() {

				random.removeData(seriesData);

				random.addData(seriesData);

				graph.update();

		

			}, 500 );

		});

		

		

		function getRandomInt(min, max)

		{

			return Math.floor(Math.random() * (max - min + 1)) + min;

		}

		</script>

		

		

		<div class="row">

			<div class="col-sm-3 col-xs-6">

		

				<div class="tile-stats tile-red">

					<div class="icon"><i class="entypo-users"></i></div>

					<div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>

		

					<h3>Registered users</h3>

					<p>so far in our blog, and our website.</p>

				</div>

		

			</div>

		

			<div class="col-sm-3 col-xs-6">

		

				<div class="tile-stats tile-green">

					<div class="icon"><i class="entypo-chart-bar"></i></div>

					<div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>

		

					<h3>Daily Visitors</h3>

					<p>this is the average value.</p>

				</div>

		

			</div>

			

			<div class="clear visible-xs"></div>

		

			<div class="col-sm-3 col-xs-6">

		

				<div class="tile-stats tile-aqua">

					<div class="icon"><i class="entypo-mail"></i></div>

					<div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>

		

					<h3>New Messages</h3>

					<p>messages per day.</p>

				</div>

		

			</div>

		

			<div class="col-sm-3 col-xs-6">

		

				<div class="tile-stats tile-blue">

					<div class="icon"><i class="entypo-rss"></i></div>

					<div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>

		

					<h3>Subscribers</h3>

					<p>on our site right now.</p>

				</div>

		

			</div>

		</div>

		

		<br />

		

		<div class="row">

			<div class="col-sm-8">

		

				<div class="panel panel-primary" id="charts_env">

		

					<div class="panel-heading">

						<div class="panel-title">Site Stats</div>

		

						<div class="panel-options">

							<ul class="nav nav-tabs">

								<li class=""><a href="#area-chart" data-toggle="tab">Area Chart</a></li>

								<li class="active"><a href="#line-chart" data-toggle="tab">Line Charts</a></li>

								<li class=""><a href="#pie-chart" data-toggle="tab">Pie Chart</a></li>

							</ul>

						</div>

					</div>

		

					<div class="panel-body">

		

						<div class="tab-content">

		

							<div class="tab-pane" id="area-chart">

								<div id="area-chart-demo" class="morrischart" style="height: 300px"></div>

							</div>

		

							<div class="tab-pane active" id="line-chart">

								<div id="line-chart-demo" class="morrischart" style="height: 300px"></div>

							</div>

		

							<div class="tab-pane" id="pie-chart">

								<div id="donut-chart-demo" class="morrischart" style="height: 300px;"></div>

							</div>

		

						</div>

		

					</div>

		

					<table class="table table-bordered table-responsive">

		

						<thead>

							<tr>

								<th width="50%" class="col-padding-1">

									<div class="pull-left">

										<div class="h4 no-margin">Pageviews</div>

										<small>54,127</small>

									</div>

									<span class="pull-right pageviews">4,3,5,4,5,6,5</span>

		

								</th>

								<th width="50%" class="col-padding-1">

									<div class="pull-left">

										<div class="h4 no-margin">Unique Visitors</div>

										<small>25,127</small>

									</div>

									<span class="pull-right uniquevisitors">2,3,5,4,3,4,5</span>

								</th>

							</tr>

						</thead>

		

					</table>

		

				</div>

		

			</div>

		

			<div class="col-sm-4">

		

				<div class="panel panel-primary">

					<div class="panel-heading">

						<div class="panel-title">

							<h4>

								Real Time Stats

								<br />

								<small>current server uptime</small>

							</h4>

						</div>

		

						<div class="panel-options">

							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>

							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>

							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>

							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>

						</div>

					</div>

		

					<div class="panel-body no-padding">

						<div id="rickshaw-chart-demo">

							<div id="rickshaw-legend"></div>

						</div>

					</div>

				</div>

		

			</div>

		</div>

		

		

		<br />

		

		<div class="row">

		

			<div class="col-sm-4">

		

				<div class="panel panel-primary">

					<table class="table table-bordered table-responsive">

						<thead>

							<tr>

								<th class="padding-bottom-none text-center">

									<br />

									<br />

									<span class="monthly-sales"></span>

								</th>

							</tr>

						</thead>

						<tbody>

							<tr>

								<td class="panel-heading">

									<h4>Monthly Sales</h4>

								</td>

							</tr>

						</tbody>

					</table>

				</div>

		

			</div>

		

			<div class="col-sm-8">

		

				<div class="panel panel-primary">

					<div class="panel-heading">

						<div class="panel-title">Latest Updated Profiles</div>

		

						<div class="panel-options">

							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>

							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>

							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>

							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>

						</div>

					</div>

		

					<table class="table table-bordered table-responsive">

						<thead>

							<tr>

								<th>#</th>

								<th>Name</th>

								<th>Position</th>

								<th>Activity</th>

							</tr>

						</thead>

		

						<tbody>

							<tr>

								<td>1</td>

								<td>Art Ramadani</td>

								<td>CEO</td>

								<td class="text-center"><span class="inlinebar">4,3,5,4,5,6</span></td>

							</tr>

		

							<tr>

								<td>2</td>

								<td>Ylli Pylla</td>

								<td>Font-end Developer</td>

								<td class="text-center"><span class="inlinebar-2">1,3,4,5,3,5</span></td>

							</tr>

		

							<tr>

								<td>3</td>

								<td>Arlind Nushi</td>

								<td>Co-founder</td>

								<td class="text-center"><span class="inlinebar-3">5,3,2,5,4,5</span></td>

							</tr>

		

						</tbody>

					</table>

				</div>

		

			</div>

		

		</div>

		

		<br />

		

		

		<script type="text/javascript">

			// Code used to add Todo Tasks

			jQuery(document).ready(function($)

			{

				var $todo_tasks = $("#todo_tasks");

		

				$todo_tasks.find('input[type="text"]').on('keydown', function(ev)

				{

					if(ev.keyCode == 13)

					{

						ev.preventDefault();

		

						if($.trim($(this).val()).length)

						{

							var $todo_entry = $('<li><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>'+$(this).val()+'</label></div></li>');

							$(this).val('');

		

							$todo_entry.appendTo($todo_tasks.find('.todo-list'));

							$todo_entry.hide().slideDown('fast');

							replaceCheckboxes();

						}

					}

				});

			});

		</script>

		

		<div class="row">

		

			<div class="col-sm-3">

				<div class="tile-block" id="todo_tasks">

		

					<div class="tile-header">

						<i class="entypo-list"></i>

		

						<a href="#">

							Tasks

							<span>To do list, tick one.</span>

						</a>

					</div>

		

					<div class="tile-content">

		

						<input type="text" class="form-control" placeholder="Add Task" />

		

		

						<ul class="todo-list">

							<li>

								<div class="checkbox checkbox-replace color-white">

									<input type="checkbox" />

									<label>Website Design</label>

								</div>

							</li>

		

							<li>

								<div class="checkbox checkbox-replace color-white">

									<input type="checkbox" id="task-2" checked />

									<label>Slicing</label>

								</div>

							</li>

		

							<li>

								<div class="checkbox checkbox-replace color-white">

									<input type="checkbox" id="task-3" />

									<label>WordPress Integration</label>

								</div>

							</li>

		

							<li>

								<div class="checkbox checkbox-replace color-white">

									<input type="checkbox" id="task-4" />

									<label>SEO Optimize</label>

								</div>

							</li>

		

							<li>

								<div class="checkbox checkbox-replace color-white">

									<input type="checkbox" id="task-5" checked="" />

									<label>Minify &amp; Compress</label>

								</div>

							</li>

						</ul>

		

					</div>

		

					<div class="tile-footer">

						<a href="#">View all tasks</a>

					</div>

		

				</div>

			</div>

		

			<div class="col-sm-9">

		

				<script type="text/javascript">

					jQuery(document).ready(function($)

					{

						var map = $("#map-2");

		

						map.vectorMap({

							map: 'europe_merc_en',

							zoomMin: '3',

							backgroundColor: '#383f47',

							focusOn: { x: 0.5, y: 0.8, scale: 3 }

						});

					});

				</script>

		

				<div class="tile-group">

		

					<div class="tile-left">

						<div class="tile-entry">

							<h3>Map</h3>

							<span>top visitors location</span>

						</div>

		

						<div class="tile-entry">

							<img src="assets/images/sample-al.png" alt="" class="pull-right op" />

		

							<h4>Albania</h4>

							<span>25%</span>

						</div>

		

						<div class="tile-entry">

							<img src="assets/images/sample-it.png" alt="" class="pull-right op" />

		

							<h4>Italy</h4>

							<span>18%</span>

						</div>

		

						<div class="tile-entry">

							<img src="assets/images/sample-au.png" alt="" class="pull-right op" />

		

							<h4>Austria</h4>

							<span>15%</span>

						</div>

					</div>

		

					<div class="tile-right">

		

						<div id="map-2" class="map"></div>

		

					</div>

		

				</div>

		

			</div>

		

		</div>

		

		<!-- Footer -->

		<footer class="main">

			

			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

		

		</footer>

	</div>



		

	<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">

	

		<div class="chat-inner">

	

	

			<h2 class="chat-header">

				<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>

	

				<i class="entypo-users"></i>

				Chat

				<span class="badge badge-success is-hidden">0</span>

			</h2>

	

	

			<div class="chat-group" id="group-1">

				<strong>Favorites</strong>

	

				<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>

				<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>

				<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>

				<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>

				<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>

			</div>

	

	

			<div class="chat-group" id="group-2">

				<strong>Work</strong>

	

				<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>

				<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>

				<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>

			</div>

	

	

			<div class="chat-group" id="group-3">

				<strong>Social</strong>

	

				<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>

				<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>

				<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>

				<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>

			</div>

	

		</div>

	

		<!-- conversation template -->

		<div class="chat-conversation">

	

			<div class="conversation-header">

				<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>

	

				<span class="user-status"></span>

				<span class="display-name"></span>

				<small></small>

			</div>

	

			<ul class="conversation-body">

			</ul>

	

			<div class="chat-textarea">

				<textarea class="form-control autogrow" placeholder="Type your message"></textarea>

			</div>

	

		</div>

	

	</div>

	

	

	<!-- Chat Histories -->

	<ul class="chat-history" id="sample_history">

		<li>

			<span class="user">Art Ramadani</span>

			<p>Are you here?</p>

			<span class="time">09:00</span>

		</li>

	

		<li class="opponent">

			<span class="user">Catherine J. Watkins</span>

			<p>This message is pre-queued.</p>

			<span class="time">09:25</span>

		</li>

	

		<li class="opponent">

			<span class="user">Catherine J. Watkins</span>

			<p>Whohoo!</p>

			<span class="time">09:26</span>

		</li>

	

		<li class="opponent unread">

			<span class="user">Catherine J. Watkins</span>

			<p>Do you like it?</p>

			<span class="time">09:27</span>

		</li>

	</ul>

	

	

	

	

	<!-- Chat Histories -->

	<ul class="chat-history" id="sample_history_2">

		<li class="opponent unread">

			<span class="user">Daniel A. Pena</span>

			<p>I am going out.</p>

			<span class="time">08:21</span>

		</li>

	

		<li class="opponent unread">

			<span class="user">Daniel A. Pena</span>

			<p>Call me when you see this message.</p>

			<span class="time">08:27</span>

		</li>

	</ul>



	

</div>



	<!-- Sample Modal (Default skin) -->

	<div class="modal fade" id="sample-modal-dialog-1">

		<div class="modal-dialog">

			<div class="modal-content">

				

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

					<h4 class="modal-title">Widget Options - Default Modal</h4>

				</div>

				

				<div class="modal-body">

					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>

				</div>

				

				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					<button type="button" class="btn btn-primary">Save changes</button>

				</div>

			</div>

		</div>

	</div>

	

	<!-- Sample Modal (Skin inverted) -->

	<div class="modal invert fade" id="sample-modal-dialog-2">

		<div class="modal-dialog">

			<div class="modal-content">

				

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

					<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>

				</div>

				

				<div class="modal-body">

					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>

				</div>

				

				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					<button type="button" class="btn btn-primary">Save changes</button>

				</div>

			</div>

		</div>

	</div>

	

	<!-- Sample Modal (Skin gray) -->

	<div class="modal gray fade" id="sample-modal-dialog-3">

		<div class="modal-dialog">

			<div class="modal-content">

				

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

					<h4 class="modal-title">Widget Options - Gray Skin Modal</h4>

				</div>

				

				<div class="modal-body">

					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>

				</div>

				

				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					<button type="button" class="btn btn-primary">Save changes</button>

				</div>

			</div>

		</div>

	</div>









	<!-- Imported styles on this page -->

	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">

	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">



	<!-- Bottom scripts (common) -->

	<script src="assets/js/gsap/TweenMax.min.js"></script>

	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>

	<script src="assets/js/bootstrap.js"></script>

	<script src="assets/js/joinable.js"></script>

	<script src="assets/js/resizeable.js"></script>

	<script src="assets/js/neon-api.js"></script>

	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>





	<!-- Imported scripts on this page -->

	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>

	<script src="assets/js/jquery.sparkline.min.js"></script>

	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>

	<script src="assets/js/rickshaw/rickshaw.min.js"></script>

	<script src="assets/js/raphael-min.js"></script>

	<script src="assets/js/morris.min.js"></script>

	<script src="assets/js/toastr.js"></script>

	<script src="assets/js/neon-chat.js"></script>





	<!-- JavaScripts initializations and stuff -->

	<script src="assets/js/neon-custom.js"></script>





	<!-- Demo Settings -->

	<script src="assets/js/neon-demo.js"></script>



</body>

</html>