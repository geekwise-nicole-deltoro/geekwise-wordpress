<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" type="image/png" href="http://i.imgur.com/CmBvoI4.png"/>
    <link href="<?php echo get_template_directory_uri(); ?>/about.css" rel="stylesheet">
    <link href='/Fonts/ciria.woff' rel='fonts.css' type='text/css'>
	<link href="//db.onlinewebfonts.com/c/e5f2f90ef20309de329a7d174c3d2245?family=Franchise" rel="stylesheet" type="text/css"/>
    <title>Geekwise Academy | Team</title>
</head>

       
<!-- added sign up link. putting it above the header tag was the easiest to control positioning for this page -->
       
        <div id="margin_top">
            <a class="signup_link team_signup" href="/index.php?page_id=12"><span>sign up</span></a>
        </div>
    <header id="contact_header">
               
<!-- start of nav bar menu for all website pages -->
       
        <nav>
            <ul>              
               <div class="icon_div">
                <li id="icon">
                
<!-- this is the geekwise icon on the header -->
                   
                    <a href="/index.php?p=25">
                        <img src="http://i.imgur.com/sCkxjbZ.png" id="icon_image">
                    </a>
                </li>
               </div>
               
               <!--dropdown-->
               
               <label for="dropdown">
                    <img src="images/menu.svg" id="bars">
               </label>
               <input type="checkbox" id="dropdown">
               
               <!--end dropdowh-->
              
               <div class="nav_div team_nav_div">
                <li class="about">
                    <a href="/index.php?page_id=4">
                        <span>
                            about
                        </span>
                    </a>
                </li>
                <li class="courses">
                    <a href="/index.php?page_id=6">
                        <span>
                            courses
                        </span>
                    </a>
                </li>
                <li class="workshops">
                    <a href="/index.php?page_id=8">
                        <span>
                            workshops
                        </span>
                    </a>
                </li>
                <li class="cohort">
                    <a href="/index.php?page_id=10">
                        <span>
                            cohort
                        </span>
                    </a>
                </li>
                <li class="team">
                    <a class="active" href="/index.php?page_id=14">
                        <span>
                            team
                        </span>
                    </a>
                </li>
                <li class="contact">
                    <a href="/index.php?page_id=16">
                        <span>
                            contact
                        </span>
                    </a>
                </li>
                
        <!-- added signup link to nav bar because there was none in the landing-page -->
               
                <li class="added_signup">
                   <a href="/index.php?page_id=12">
                        <span>
                            sign up
                        </span>
                    </a>
                </li>
               </div>
            </ul>
        </nav>       
    </header> 
    