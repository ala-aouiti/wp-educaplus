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
    div.wpforms-container-full .wpforms-form input[type=submit], div.wpforms-container-full .wpforms-form button[type=submit], div.wpforms-container-full .wpforms-form .wpforms-page-button{
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    }
    div.wpforms-container-full .wpforms-form input[type=date]:focus, div.wpforms-container-full .wpforms-form input[type=datetime]:focus, div.wpforms-container-full .wpforms-form input[type=datetime-local]:focus, div.wpforms-container-full .wpforms-form input[type=email]:focus, div.wpforms-container-full .wpforms-form input[type=month]:focus, div.wpforms-container-full .wpforms-form input[type=number]:focus, div.wpforms-container-full .wpforms-form input[type=password]:focus, div.wpforms-container-full .wpforms-form input[type=range]:focus, div.wpforms-container-full .wpforms-form input[type=search]:focus, div.wpforms-container-full .wpforms-form input[type=tel]:focus, div.wpforms-container-full .wpforms-form input[type=text]:focus, div.wpforms-container-full .wpforms-form input[type=time]:focus, div.wpforms-container-full .wpforms-form input[type=url]:focus, div.wpforms-container-full .wpforms-form input[type=week]:focus, div.wpforms-container-full .wpforms-form select:focus, div.wpforms-container-full .wpforms-form textarea:focus{
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    }
    div.wpforms-container-full .wpforms-form input:focus, div.wpforms-container-full .wpforms-form textarea:focus, div.wpforms-container-full .wpforms-form select:focus{
    border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
    }
    div.wpforms-container-full .wpforms-form input[type=submit]:hover, div.wpforms-container-full .wpforms-form button[type=submit]:hover, div.wpforms-container-full .wpforms-form .wpforms-page-button:hover{
    border: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    }
    div.wpforms-container-full .wpforms-form input[type=submit], div.wpforms-container-full .wpforms-form button[type=submit], div.wpforms-container-full .wpforms-form .wpforms-page-button{
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    }
</style>