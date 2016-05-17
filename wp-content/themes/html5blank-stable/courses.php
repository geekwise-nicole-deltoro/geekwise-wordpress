<?php /* Template Name: courses */ ?>

<?php get_header('courses'); ?>



        <div id="workshops_fluff" class="courses_fluff">
            <p>
            <span></span>
            </p>
        </div>
        
    <main id="courses_main">
        <div>
          <p>
          </p>
        </div>
        
        
<nav id="white_background">

<h1><?php the_title(); ?></h1>
<?php while (have_posts() ): the_post();?>
<p class="course-content"><?php the_content(); ?></p>
<?php endwhile; ?>

<!-- table title -->
    <section class="courses_table" id="courses_title">
        <div class="column1" id="courses_height">
            <p>
                <span class="courses_bold">
                    
                    Topic
            
                </span>
            </p>
        </div>
        <div class="column2">
            <p>
                <span class="courses_bold">
                    
                    Duration
                    
                </span>
            </p>
        </div>
        <div class="column3">
            <p>
                <span class="courses_bold">
                    
                    Day/Time
                    
                </span>
            </p>
        </div>
        <div class="column4">
            <p>
                <span class="courses_bold">
                    
                    Fee	
                    
                </span>
            </p>
        </div>
        <div class="column5">
            <p>
                <span class="courses_bold">
                    
                    Instructor
                    
                </span>
            </p>
        </div>
        <div class="column6">
            <p>
                <span class="courses_bold">
                    
                    Sign-up
                    
                </span>
            </p>
        </div> 
    </section>
        
<!-- table 1 -->
  
<?php query_posts('post_type=geekwise_courses'); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <section class="courses_table courses_border_top" id="courses_table1">
        <div class="column1">
            <p class="courses_underline" id="courses_subtitle1">
                    <?php the_title(); ?>
                <span class="sold_out">&nbsp;</span>
            <p class="courses_padding_bottom1">
                <i>
                    <?php the_content(); ?>
                </i>
            </p>
        </div>
        <div class="column2">
            <p>
                <span class="courses_bold courses_position_top">
                    <?php the_field('duration'); ?>
                </span>
            </p>
            <p class="courses_font_weight">
                
            </p>
            <p class="courses_font_weight">
                
            </p>
        </div>
        <div class="column3 courses_column_Monday">
            <p>
                <span  class="courses_bold">
                    <?php the_field('day_time'); ?>
                </span>
            </p>
            <p  class="courses_padding_bottom2">
            </p>
        </div>
        <div class="column4">
            <p>
                <span class="courses_bold">
                    <?php the_field('fee'); ?>
                </span>
            </p>
            <p  class="courses_padding_bottom2">
                
            </p>
        </div>
        <div class="column5">
            <p class="courses_padding_bottom3">
                <?php the_field('instructor'); ?>
            </p>
        </div>
        <div class="column6">
            <p class="courses_enroll">
                <a href="#" class="enroll_anchor">
                    <span>
                        <button class="btn">Enroll</button>
                    </span>
                </a>
            </p>
        </div>
    </section>
    
<?php endwhile; ?>    
        
      </nav>
    </main>
    <footer class="workshops_footer">
        <div>
            <p>
               <a href="/index.php?page_id=16">
                   <span>
                       
                    </span>
               </a>                
            </p>
        </div>
    </footer>
    <img src="http://i.imgur.com/Bkba1Pj.png" id="half_owl">
</body>





