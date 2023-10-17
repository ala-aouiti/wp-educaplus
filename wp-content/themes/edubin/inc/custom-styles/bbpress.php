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
    #bbpress-forums li.bbp-header {
        background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    #bbpress-forums li.bbp-footer {
         background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    div.bbp-template-notice a {
        color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    #bbpress-forums fieldset.bbp-form legend {
        border: 1px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    #bbp-search-form input#bbp_search_submit {
        background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    #bbp-search-form input#bbp_search_submit {
        border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
        background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
        color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    }
    #bbp-search-form:hover input#bbp_search_submit {
        background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
        border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
        color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    }
    .bbp-topic-permalink{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    #bbpress-forums p.bbp-topic-meta span{
       color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    #bbpress-forums p.bbp-topic-meta a:hover span{
       color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    .bbp-topic-freshness a{
     color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    #bbpress-forums #bbp-single-user-details #bbp-user-navigation a{
       color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    #bbpress-forums #bbp-single-user-details #bbp-user-navigation a:hover{
       color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    #bbpress-forums div.bbp-reply-author .bbp-author-name{
       color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    #bbpress-forums div.bbp-reply-author .bbp-author-name:hover{
       color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
</style>