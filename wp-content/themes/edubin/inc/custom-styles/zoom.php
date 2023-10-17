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
?>
<style>
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-tile{
        background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-timer .dpn-zvc-timer-cell{
       background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn-join-link{
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn-join-link:hover{
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn-start-link{
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-box .join-links .btn-start-link:hover{
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-content .dpn-zvc-sidebar-content-list>span>strong{
        color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .deepn-zvc-single-description h3{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
     }
     .dpn-zvc-display-or-hide-localtimezone-notice>strong{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
     }
     .dpn-zvc-single-content-wrapper .dpn-zvc-sidebar-wrapper .dpn-zvc-sidebar-state > a.vczapi-meeting-state-change{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
     }
     .edubin-meeting-single-title a{
       color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
     }
     .edubin-meeting-single-content .vczapi-list-zoom-meetings--item__details__meta .meta>strong{
       color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
     }
</style>

