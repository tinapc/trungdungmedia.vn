<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">

    <title><?=$this->load->get_var('title')?></title>
    <script type="text/javascript" src="<?=ADMIN_ASSETS?>js/jquery.js"></script>
    <script type="text/javascript">
    	var ADMIN_URL = '<?=base_url()?>manager/';
    	var ADMIN_ASSETS = '<?=ADMIN_ASSETS?>';
    </script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
  

    <!-- Bootstrap core CSS -->
    <link href="<?=ADMIN_ASSETS?>js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?=ADMIN_ASSETS?>fonts/font-awesome-4/css/font-awesome.min.css">

	<!--Modal-->
	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/jquery.niftymodals/css/component.css" />

	<!--isCheckbox-->
	<link href="<?=ADMIN_ASSETS?>js/jquery.icheck/skins/square/blue.css" rel="stylesheet">

	<!--Fancybox-->
	<link href="<?=ADMIN_ASSETS?>js/fancybox/source/jquery.fancybox.css" rel="stylesheet">
	<script type="text/javascript" src="<?=ADMIN_ASSETS?>js/fancybox/source/jquery.fancybox.pack.js"></script>	

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	
	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/jquery.gritter/css/jquery.gritter.css" />
  	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/jquery.nanoscroller/nanoscroller.css" />
  	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/jquery.easypiechart/jquery.easy-pie-chart.css" />
	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/bootstrap.switch/bootstrap-switch.css" />
	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/jquery.select2/select2.css" />
	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/bootstrap.slider/css/slider.css" />
	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/intro.js/introjs.css" />

	<!--Datatable-->
	<link rel="stylesheet" type="text/css" href="<?=ADMIN_ASSETS?>js/jquery.datatables/bootstrap-adapter/css/datatables.css" />

	<!--Valid form-->
	<script src="<?=ADMIN_ASSETS?>js/jquery.parsley/dist/parsley.min.js" type="text/javascript"></script>
  	<script src="<?=ADMIN_ASSETS?>js/jquery.parsley/src/extra/dateiso.js" type="text/javascript"></script>

  	<!-- Custom styles for this template -->
  	<link href="<?=ADMIN_ASSETS?>css/style.css" rel="stylesheet" />
  	<link href="<?=ADMIN_ASSETS?>css/custom.css" rel="stylesheet" />

</head>
<body>

  <!-- Fixed navbar -->
  <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-gear"></span>
        </button>
        <a class="navbar-brand" href="#"><span>Tâm Điểm</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          	<li class="active"><a href="<?=site_url()?>" target="_blank">Home</a></li>
          	<li><a href="<?=base_url()?>guide_admin.html" target="_blank">Hướng dẫn sử dụng Admin Panel</a></li>
          	<!-- <li><a href="#about">About</a></li>
          	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              	<li><a href="#">Action</a></li>
	              	<li><a href="#">Another action</a></li>
	              	<li><a href="#">Something else here</a></li>
	      			<li class="dropdown-submenu"><a href="#">Sub menu</a>
				        <ul class="dropdown-menu">
				          <li><a href="#">Action</a></li>
				          <li><a href="#">Another action</a></li>
				          <li><a href="#">Something else here</a></li>
			          </ul>
	      			</li>              
	      		</ul>
          	</li>
          	<li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Large menu <b class="caret"></b></a>
			      	<ul class="dropdown-menu col-menu-2">
				        <li class="col-sm-6 no-padding">
				          <ul>
					          <li class="dropdown-header"><i class="fa fa-group"></i>Users</li>
					          <li><a href="#">Action</a></li>
					          <li><a href="#">Another action</a></li>
					          <li><a href="#">Something else here</a></li>
					          <li class="dropdown-header"><i class="fa fa-gear"></i>Config</li>
					          <li><a href="#">Action</a></li>
					          <li><a href="#">Another action</a></li>
					          <li><a href="#">Something else here</a></li> 
				          </ul>
				        </li>
	        			<li  class="col-sm-6 no-padding">
				          <ul>
					          <li class="dropdown-header"><i class="fa fa-legal"></i>Sales</li>
					          <li><a href="#">New sale</a></li>
					          <li><a href="#">Register a product</a></li>
					          <li><a href="#">Register a client</a></li> 
					          <li><a href="#">Month sales</a></li>
					          <li><a href="#">Delivered orders</a></li>
				          </ul>
	        			</li>
      				</ul>
          	</li> -->
        </ul>
		<ul class="nav navbar-nav navbar-right user-nav">
		      <li class="dropdown profile_menu">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="<?=ADMIN_ASSETS?>images/logo.jpg" /><span><?php echo $this->session->userdata('username')?></span> <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="<?=base_url()?>auth/edit_user/<?=$this->session->userdata('user_id')?>">My Account</a></li>
		          <li><a href="<?=base_url()?>auth/logout">Sign Out</a></li>
		        </ul>
		      </li>
		</ul>			

      </div><!--/.nav-collapse animate-collapse -->
    </div>
  </div>