 <?php /* Template Name: signup */ ?> 
  <?php get_header('signup'); ?>
  <link href="//db.onlinewebfonts.com/c/e5f2f90ef20309de329a7d174c3d2245?family=Franchise" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="css/signup.css">
  <body>
      
      <?php /* Template Name: sign-up */ ?>
<?php get_header( 'signup' ); ?>


<li id="sign_in_tab"><a href="#" class=" sign_tab right">Signup</a></li>
       <section class="sign_middle">
        
                   
              <p class="sign_top">Course Selection & Enrollment</p>
               <?php query_posts('post_type=sign_up'); ?>
                   
                       <?php while (have_posts()) : the_post(); ?> 
            <div class="dates">
               <a href="#" class="date_start"><?php the_title(); ?></a>
               <div class="class_date"><?php the_field('date'); ?></div>
               
            </div>
            <div id="refund"><?php the_field('refund'); ?></div>
             <?php endwhile; ?>
       </section>
       </body>
       </html>
        
     
        
   <main class="signup_main">
         

         
          <div>
            <a id="signup_signup" href="#">
                <span>
                    sign up
                </span>
            </a>
          </div>
       <nav class="course">
           <ul>
               <li id="selection_and_enrollment">
                   <p class="font_bold data">
                       Course Selection 
                   </p>
                   <p class="font_bold data">
                       & Enrollment
                   </p>
               </li>
               <li>
                   <p class="data padding sign_up_font_family">
                      Database Design - Starts April  4, 2016
                   </p>
                   <p class="days padding">
                       Monday & Wednesday 
                   </p>
               </li>
               <li>
                   <p class="padding sign_up_font_family">
                      Intro to AngularJS - Starts April 5, 2016 
                   </p>
                   <p class="days padding">
                       Tuesday & Thursday 
                   </p>
               </li>
               <li>
                   <p class="padding sign_up_font_family line_through">
                      <span class='sign_up_sold_out'>sold out&#33;</span>Javascript for Beginners - Starts April 4, 2016 
                   </p>
                   <p class="days padding">
                       Monday & Wednesday
                   </p>
               </li>
               <li>
                   <p class="padding sign_up_font_family" >
                      Mobile-First Websites - Starts April 5, 2016 
                   </p>
                   <p class="days padding">
                       Tuesday & Thursday 
                   </p>
               </li>
               <li>
                   <p class="padding sign_up_font_family line_through">
                      <span class='sign_up_sold_out'>sold out&#33;</span>Websites for Beginners - Starts April 4, 2016 
                   </p>
                   <p class="days padding">
                       Monday & Wednesday 
                   </p>  
               </li>
               <li>
                    <p class="padding">
                       *Refunds available only for life-events. 
                    </p>
               </li>
           </ul>
       </nav>
   </main>
   <footer class="signup_footer"></footer>
</body>

                                                                 

  
