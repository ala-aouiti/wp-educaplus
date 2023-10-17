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
    /*Woocommerce*/
    .woocommerce .woocommerce-error .button,
    .woocommerce .woocommerce-info .button,
    .woocommerce .woocommerce-message .button {
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    }
    .woocommerce .woocommerce-error .button:hover,
    .woocommerce .woocommerce-info .button:hover,
    .woocommerce .woocommerce-message .button:hover {
      border: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    }
    .woocommerce #respond input#submit,
    .woocommerce input.button{
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    }
    .woocommerce #respond input#submit:hover,
    .woocommerce input.button:hover{
      border: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    }
    .wc-proceed-to-checkout{
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    }
    .wc-proceed-to-checkout:hover{
      border: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    }
    .wc-proceed-to-checkout:hover a.checkout-button{
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    }
    .woocommerce a.shipping-calculator-button{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    .woocommerce a.showcoupon{
     color: <?php echo esc_attr( Edubin::setting( 'link_color')); ?>;
    }
    <?php if (Edubin::setting( 'primary_color' )): ?>
    .woocommerce span.onsale{
      color: #fff;
      background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    <?php endif;?>
  .woocommerce a.added_to_cart.wc-forward{
  background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  }
  .woocommerce a.add_to_cart_button{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  <?php if (Edubin::setting( 'primary_color' )): ?>
  .woocommerce a.add_to_cart_button:hover {
    background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    color:#fff;
  }
  <?php endif;?>
  <?php if (Edubin::setting( 'primary_color' )): ?>
  .woocommerce a.edubin-cart-link{
  border: 1px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  color: #fff;
  }
  <?php endif;?>
  <?php if (Edubin::setting( 'primary_color' )): ?>
  .woocommerce a.edubin-cart-link:hover{
   background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
   color: #fff;
   border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  <?php endif;?>
  <?php if (Edubin::setting( 'secondary_color') || Edubin::setting( 'primary_color' )): ?>
  .woocommerce ul.products li.product .overlay{
     background-color: rgba(0,0,0,.3);
  }
  <?php endif;?>
  <?php if (Edubin::setting( 'primary_color' )): ?>
  .woocommerce .edubin-cart-button-list>a.button {
  border: 1px solid <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  color: #fff;
  }
  <?php endif;?>
  .woocommerce .edubin-cart-button-list>a.button:hover {
  border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?> !important;
  }
  <?php if (Edubin::setting( 'primary_color' )): ?>
  .woocommerce a.button.added:after, .woocommerce button.button.added:after{
   background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
   color: #fff;
  }
  <?php endif;?>
  <?php if (Edubin::setting( 'primary_color' )): ?>
  .woocommerce #respond input#submit.loading:after, .woocommerce a.button.loading:after, .woocommerce button.button.loading:after, .woocommerce input.button.loading:after {
   background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
   color: #fff;
  }
  <?php endif;?>
  .woocommerce h2.woocommerce-loop-product__title:hover{
  color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
  .woocommerce h2.woocommerce-loop-product__title{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .woocommerce div.product .woocommerce-tabs ul.tabs li a{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .woocommerce div.product .woocommerce-tabs ul.tabs li.active a{
  color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  .woocommerce div.product .woocommerce-tabs ul.tabs li.active a:before{
  background: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }

  .woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover{
  background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
  }
  .woocommerce-cart table.cart td a, .woocommerce-cart table.cart th a {
    color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
  }
  a.button.wc-backward {
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
  }
  a.button.wc-backward:hover {
    background-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
    color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
  }
  .woocommerce .product_meta a:hover{
   color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
  }
</style>
