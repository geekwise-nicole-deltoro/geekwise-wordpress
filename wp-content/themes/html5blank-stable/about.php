<?php /* Template Name: about */ ?>
<?php get_header('about'); ?>

<link href="//db.onlinewebfonts.com/c/e5f2f90ef20309de329a7d174c3d2245?family=Franchise" rel="stylesheet" type="text/css"/>

 
   <main id="about_main">
         <div id="main_div">
          <div>
              <img class="about_image" src="http://i.imgur.com/dSd9l0h.png">
           </div>
           <div id="about_learn">
               <p>
                   <span id="l">L</span>earn a real world
               </p>
               <p>
                   technology skill. Fast.
               </p>
           </div>


          </div>
          
            <button class="about_button" type="button">sign up!</button>  
   </main>
   <!--                not use            
   <footer class="about_footer">
              <div class="info">
               <div class="sign_up_div">
                   <p class="signup">
                       <a href="/index.php?p=16">
                           <span>
                               sign up
                           </span>
                       </a>
                   </p>
               </div>
               <div class="info_div">
                   <p class="subheadings about_info_div_p what">
                       What
                   </p>
                   <p class="about_info_div_p">
                       Geekwise Academy is an accelerated training program for current and aspiring technologists. Geekwise Academy teaches trainees hard skills in the technology industry in only six weeks. Each course is fast-paced, rigorous, and narrowly focused on a hard skill that is presently in-demand in the technology industry.
                   </p>
               </div>
               <div class="info_div">
                   <p class="subheadings about_info_div_p">
                       How
                   </p>
                   <p class="about_info_div_p">
                       The subject matter for each course is selected by an employer who wants to recruit technologists right out of the Geekwise Academy classroom. Geekwise Academy then works with the employer to build a curriculum specifically designed to effectively teach that skill. Each course is then taught by an industry-expert lecturer. Every second of every course is designed to provide you with the skills that technology employers and clients need you to have.
                   </p>
               </div>
               <div class="info_div">
                   <p class="subheadings about_info_div_p">
                      Why 
                   </p>
                   <p class="about_info_div_p">
                       We need more geeks. Lots of them. And good ones. It’s no secret that software and information technology are among the fastest growing industries on the planet. Despite that truth, there simply aren’t enough technologists to keep up with the demand. Not to mention that these industries offer promising careers and have mountains of jobs that are available today. Geekwise Academy exists to fill that demand by rapidly producing high quality technologists, and then connecting those same technologists to real world opportunities.
                     </p>
                     
                 <div class="info_div">
                     
                  
                  
                 </div>
                       
 -->
     
                       
                        <?php query_posts('post_type=about_us'); ?>
                   
                       <?php while (have_posts()) : the_post(); ?>  
               <div class="about_what" id="about">
                  

                   <h1><?php the_title(); ?><?php the_content(); ?></h1>
                   <p class="about"><?php the_field('what'); ?></p>
               
                
               </div>
            
               
              <?php endwhile; ?>