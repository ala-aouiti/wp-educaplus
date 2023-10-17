  <?php 
        $primary_color               = Edubin::setting( 'primary_color' );
        $secondary_color             = Edubin::setting( 'secondary_color' );
        $content_color               = Edubin::setting( 'content_color' );
        $tertiary_color              = Edubin::setting( 'tertiary_color' );
        $link_color                  = Edubin::setting( 'link_color' );
        $link_hover_color            = Edubin::setting( 'link_hover_color' );
        $btn_color                   = Edubin::setting( 'btn_color' );
        $btn_hover_color             = Edubin::setting( 'btn_hover_color' );
        $btn_text_color              = Edubin::setting( 'btn_text_color' );
        $btn_text_hover_color        = Edubin::setting( 'btn_text_hover_color' );

       // Sensei
        $sensei_layout_override = Edubin::setting( 'sensei_layout_override' );
        $sensei_archive_pagi_aligment = Edubin::setting( 'sensei_archive_pagi_aligment' );
        
?>
<style>
    <?php if ( $sensei_layout_override): ?>

        .wp-block-sensei-lms-course-outline-lesson:not(.has-text-color), .entry-content .wp-block-sensei-lms-course-outline-lesson:not(.has-text-color), .sensei .entry-content .wp-block-sensei-lms-course-outline-lesson:not(.button):not(.has-text-color) {
            border-bottom: 1px solid #ededed;
        }
        .wp-block-sensei-lms-course-outline-lesson>span {
            padding: 15px 16px;
        }
    <?php endif;?>

 <?php if ( $sensei_archive_pagi_aligment): ?>
    body.sensei.page nav.sensei-pagination{
      text-align: <?php echo esc_attr($sensei_archive_pagi_aligment); ?>;
    }
  <?php endif;?>

    <?php if ( Edubin::setting( 'primary_color' ) or Edubin::setting( 'secondary_color')): ?>

        .sensei-pagination .page-numbers li .page-numbers.current{
            color: #fff;
        }
    <?php endif; ?>
</style>