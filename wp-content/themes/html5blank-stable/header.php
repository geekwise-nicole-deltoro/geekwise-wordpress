<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		
		<!-- wrapper -->
		
   <header id="try" class="top">
               <label class="fa fa-bars list" for="tiff"></label>
                  <input type="checkbox" id="tiff">
                      
        <nav id="kao">
         <ul>
              <li><a href="about.html">about</a></li>
               <li><a href="courses.html">courses</a></li>
               <li><a href="workshops.html">workshops</a></li>
               <li><a href="cohort.html">cohort</a></li>
               <li class="active"><a href="http://geekwiseacademy.com/signup">signup</a></li>
               <li><a href="team.html">team</a></li>
               <li><a href="contact.html">contact</a></li>
         </ul> 
       </nav>
        </header>