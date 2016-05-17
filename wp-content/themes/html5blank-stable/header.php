<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link rel="icon" type="image/png" href="http://i.imgur.com/CmBvoI4.png"/>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
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
	    
        
    
			<!-- header -->
		<!--        nav bar          -->
    
     <header id="header-1">

<!--    container for hidden button for nav bar on sm screen       -->
             
        <div id="label_wrap">                
                         
            <label id="fafa" class="fa fa-bars fa-2x" for="toggle-1"></label>
            
            <input type="checkbox" id="toggle-1"/>
            
            
            <nav id="nav-1">
                               
                <ul id="list-1" class="media">
                   
                    <li id="home_list_item">
                        <a href="about.html">About</a>
                    </li>
                    
                    <li id="home_list_item">
                        <a href="courses.html">Courses</a>
                    </li>
                    
                    <li id="home_list_item__workshop">
                        <a href="workshops.html">Workshops</a>
                    </li>
                    
                    <li id="home_list_item">
                        <a href="cohort.html">Cohort</a>
                    </li>
                    
                    <li id="home_list_item__signup">
                        <a href="signup.html">Signup</a>
                    </li>
                    
                    <li id="home_list_item">
                        <a href="team.html">Team</a>
                    </li>
                    
                    <li id="home_list_item">
                        <a href="contact.html">Contact</a>
                    </li>
                    
                </ul>                
                
            </nav>    
       
         </div>  
                      
     </header>
			<!-- /header -->