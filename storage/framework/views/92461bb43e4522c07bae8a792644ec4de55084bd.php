<!DOCTYPE html>

<head>
	<title>Beauty Blogger for user</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>


	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

	<link rel="stylesheet" href="<?php echo e(asset('frontendtemplate/usertemplate/css/open-iconic-bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontendtemplate/usertemplate/css/animate.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(asset('frontendtemplate/usertemplate/css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontendtemplate/usertemplate/css/owl.theme.default.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontendtemplate/usertemplate/css/magnific-popup.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(asset('frontendtemplate/usertemplate/css/aos.css')); ?>">

	<link rel="stylesheet" href="<?php echo e(asset('frontendtemplate/usertemplate/css/icomoon.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontendtemplate/usertemplate/css/style.css')); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('frontendtemplate/bloggertemplate/js/css/like.css')); ?>">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">


	<nav class="navbar navbar-expand-lg  ftco_navbar bg-light ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">BB</a>
			

			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> 
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="<?php echo e(route('index')); ?>" class="nav-link"><span><i class="icon icon-home2"></i>&nbsp;&nbsp;Home</span></a></li>
					<li class="nav-item"><a href="<?php echo e(route('saved_post')); ?>" class="nav-link"><span><i class="icon icon-play"></i>&nbsp;&nbsp;Save</span></a></li>
					
					<li class="nav-item dropdown">
              			<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
			              <div class="dropdown-menu" aria-labelledby="dropdown04">
			    
			    				<?php if(Auth::user()->getRoleNames()[0] == "user"): ?>
			    				<a class="dropdown-item" href="<?php echo e(route('requestblogger',Auth::user()->id)); ?>">
                                    As Request Blogger									
                                    </a>
									<a class="dropdown-item" href="<?php echo e(route('userprofile')); ?>">
                                        <?php echo e(Auth::user()->name); ?>

                           			</a>
                               <?php endif; ?> 
                               <?php if(Auth::user()->getRoleNames()[0] == "blogger"): ?>  
                                <a class="dropdown-item" href="<?php echo e(route('blogger')); ?>">
                                        <?php echo e(Auth::user()->name); ?>

                           		</a>
                           		<?php endif; ?>
				                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
	                                       onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                        <?php echo e(__('Logout')); ?>

	                            </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
			              </div>
            		</li>
	          
				</ul>

			</div>
		</div>
</div>
</nav>

<div class="container-fluid post">
	<?php echo $__env->yieldContent('usercontent'); ?>
	
</div>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/jquery.easing.1.3.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/jquery.stellar.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/aos.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/jquery.animateNumber.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/scrollax.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('frontendtemplate/usertemplate/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/bloggertemplate/js/like.js')); ?>"></script>
<script src="<?php echo e(asset('frontendtemplate/usertemplate/js/main.js')); ?>"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	var token = "<?php echo e(Session::token()); ?>";
</script>
</body>
</html><?php /**PATH /opt/lampp/htdocs/blogger/resources/views/frontend/master.blade.php ENDPATH**/ ?>