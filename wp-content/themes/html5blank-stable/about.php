<?php /* Template Name: about */ ?>

<?php get_header('about'); ?>


<?php while (have_posts() ): the_post();?>
<p class="about-content"><?php the_content(); ?></p>
<?php endwhile; ?>

    <main class="about-text">
      
<!--  left side text area    -->
      
      <div class="text_container">
       
            <div class="text_area">    
                    
                <h3></h3>
                
                <p>
                    what
                   <!--Geekwise Academy is an accelerated training program for current and aspiring technologists. Geekwise Academy teaches trainees hard skills in the technology industry in only six weeks. Each course is fast-paced, rigorous, and narrowly focused on a hard skill that is presently in-demand in the technology industry.-->
                </p>
                    
            </div>
                     
          <div class="text_area">
            
                <h3></h3>
            
                <p>
                    why
                    <!--We need more geeks. Lots of them. And good ones. It’s no secret that software and information technology are among the fastest growing industries on the planet. Despite that truth, there simply aren’t enough technologists to keep up with the demand. Not to mention that these industries offer promising careers and have mountains of jobs that are available today. Geekwise Academy exists to fill that demand by rapidly producing high quality technologists, and then connecting those same technologists to real world opportunities.-->
                </p>
            
            </div>
        
      </div> 
        
<!--    left side close        -->
       
        <div class="text_container">
        
            <div class="text_area">
            
           
               
               <h3></h3>
               
                 <p>
                     how
                   <!--The subject matter for each course is selected by an employer who wants to recruit technologists right out of the Geekwise Academy classroom. Geekwise Academy then works with the employer to build a curriculum specifically designed to effectively teach that skill. Each course is then taught by an industry-expert lecturer. Every second of every course is designed to provide you with the skills that technology employers and clients need you to have.-->
                </p>
                
        </div>
                
            <div class="text_area">
               
               <h3></h3>
               
               <p>
                   details
                   <!--Length: Each course lasts 6 weeks-->
                   <!--<br>-->
                   <!--Time: Each course meets from 6:00-9:00p, two nights per week-->
                   <!--<br>-->
                   <!--Location: All Classes meet at Bitwise Mural District (2210 San Joaquin St., Fresno, CA 93721-->
                   <!--<br>-->
                   <!--Cost: Each class costs only $250-->
               </p>
                
                
         </div>
         
        </div>
<!--  close right side       -->
                     
     </main>


<?php query_posts('post_type=geekwise_about'); ?>
<?php while ( have_posts() ) : the_post(); ?>


     <main class="about-text">
      
<!--  left side text area    -->
      
      <div class="text_container">
          
          <div class="text_area">    
                    
                <h3></h3>
                <p>
                    <?php the_title(); ?><i><?php the_content(); ?></i>
                  
                </p>
                    
            </div>
       
            <div class="text_area">
                    
                <h3></h3>
                <p>
                    <?php the_field('what'); ?>
                    
                    <!--Geekwise Academy is an accelerated training program for current and aspiring technologists. Geekwise Academy teaches trainees hard skills in the technology industry in only six weeks. Each course is fast-paced, rigorous, and narrowly focused on a hard skill that is presently in-demand in the technology industry.-->
                    
                </p>
                    
            </div>                                              
                     
          <div class="text_area">
            
                <h3></h3>
            
                <p>
                    
                    <?php the_field('why'); ?>
                    <!--We need more geeks. Lots of them. And good ones. It’s no secret that software and information technology are among the fastest growing industries on the planet. Despite that truth, there simply aren’t enough technologists to keep up with the demand. Not to mention that these industries offer promising careers and have mountains of jobs that are available today. Geekwise Academy exists to fill that demand by rapidly producing high quality technologists, and then connecting those same technologists to real world opportunities.-->

                </p>
            
            </div>
        
      </div> 
        
<!--    left side close        -->
       
        <div class="text_container">
        
            <div class="text_area">
            
           
               
               <h3></h3>
               
               <p>
                   
                   <?php the_field('how'); ?>
                   <!--The subject matter for each course is selected by an employer who wants to recruit technologists right out of the Geekwise Academy classroom. Geekwise Academy then works with the employer to build a curriculum specifically designed to effectively teach that skill. Each course is then taught by an industry-expert lecturer. Every second of every course is designed to provide you with the skills that technology employers and clients need you to have.-->
                </p>
                
        </div>
                
            <div class="text_area">
               
               <h3></h3>
               
               <p>
                   
                   <?php the_field('details'); ?>
                   <!--Length: Each course lasts 6 weeks-->
                   <!--<br>-->
                   <!--Time: Each course meets from 6:00-9:00p, two nights per week-->
                   <!--<br>-->
                   <!--Location: All Classes meet at Bitwise Mural District (2210 San Joaquin St., Fresno, CA 93721-->
                   <!--<br>-->
                   <!--Cost: Each class costs only $250-->
               </p>
                
                
         </div>
         
        </div>
        <?php endwhile; ?>
<!--  close right side       -->
                     
     </main>

     

<!--   clickable footer at bottom of the page         -->     

     <footer>
         
          <div>
             
             <a href="<?php bloginfo('url'); ?>/signup-page.php">
             
                 <span> Want to Geekwise? Sign-up Today</span>
                 
             </a>
             
         </div>
         
     </footer>
  
  </body>
  
</html>













