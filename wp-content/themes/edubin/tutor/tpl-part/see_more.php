    <?php
    
    $tutor_see_more_text = Edubin::setting( 'tutor_see_more_text' );
    $tutor_permalink_type = Edubin::setting( 'tutor_permalink_type' );

     if($tutor_permalink_type == 'tutor_archive_dynamic_url'): ?>
<?php tutor_course_loop_price(); ?>

     <?php   else : ?>
            <a href="<?php the_permalink(); ?>">
               <?php echo $tutor_see_more_text; ?>                           
            </a>   
        <?php 
        endif; 
    ?>
