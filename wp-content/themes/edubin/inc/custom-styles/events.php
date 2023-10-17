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
      .tribe-events-event-cost span{
        background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
      }
      .tribe-events-event-cost span{
        border-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
      }
      .events-address ul li .single-address .icon i{
        color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
      }
      .tribe-events-list-event-title a.tribe-event-url{
       color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
     }
     .tribe_events-template-default .edubin-event-register-from #rtec button:hover{
       background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
     }
     <?php if (Edubin::setting( 'primary_color' )): ?>
     .tribe_events-template-default .edubin-event-register-from #rtec span.rtec-already-registered-reveal a{
      color: #fff;
    }
    <?php endif;?>
    #tribe-events .tribe-events-button, #tribe-events .tribe-events-button:hover, #tribe_events_filters_wrapper input[type=submit], .tribe-events-button, .tribe-events-button.tribe-active:hover, .tribe-events-button.tribe-inactive, .tribe-events-button:hover, .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-], .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-] > a{
     background: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    <?php if (Edubin::setting( 'primary_color' )): ?>
    .edubin-events-countdown .count-down-time .single-count .number{
     color: #fff;
    }
    .edubin-single-event-addon .edubin-event-price-1 span{
     color: #fff;
    }
    <?php endif;?>
    #tribe-events .tribe-events-button, .tribe-events-button{
     color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
    }
    #tribe-events .tribe-events-button:hover, #tribe-events .tribe-events-button:hover:hover, #tribe_events_filters_wrapper input[type=submit]:hover, .tribe-events-button:hover, .tribe-events-button.tribe-active:hover:hover, .tribe-events-button.tribe-inactive:hover, .tribe-events-button:hover:hover, .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-]:hover, .tribe-events-calendar td.tribe-events-present div[id*=tribe-events-daynum-] > a:hover{
      background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
    }
    .tribe-events-event-cost span{
      color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
    }
    #tribe-events-content a:hover, .tribe-events-adv-list-widget .tribe-events-widget-link a:hover, .tribe-events-adv-list-widget .tribe-events-widget-link a:hover:hover, .tribe-events-back a:hover, .tribe-events-back a:hover:hover, .tribe-events-event-meta a:hover, .tribe-events-list-widget .tribe-events-widget-link a:hover, .tribe-events-list-widget .tribe-events-widget-link a:hover:hover, ul.tribe-events-sub-nav a:hover, ul.tribe-events-sub-nav a:hover:hover{
      color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    #tribe-events td.tribe-events-present div[id*="tribe-events-daynum-"], #tribe-events td.tribe-events-present div[id*="tribe-events-daynum-"] > a{
     background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    <?php if (Edubin::setting( 'primary_color' )): ?>
    .tribe_events-template-default .edubin-event-register-from #rtec .rtec-register-button{
     background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
     color: #fff;
     border: 2px solid;
    }
    <?php endif;?>

    .events-right [data-overlay]::before{
      background: linear-gradient(190deg,<?php echo esc_attr( Edubin::setting( 'primary_color' )) ?> 50%,transparent 100%);
    }
    .edubin-events-countdown.edubin-events-countdown-2:before{
      background: linear-gradient(190deg,<?php echo esc_attr( Edubin::setting( 'primary_color' )) ?> 20%,transparent 100%);
    }
    <?php if (Edubin::setting( 'primary_color' )): ?>
    .events-left span{
      color: #fff;
    }
    <?php endif;?>
    .tribe-events-calendar thead th{
      background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
    }
    .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"], .tribe-events-calendar td.tribe-events-past div[id*="tribe-events-daynum-"] > a{
     background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
    }
    .tribe-events-calendar div[id*="tribe-events-daynum-"], .tribe-events-calendar div[id*="tribe-events-daynum-"] a{
      background-color: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
    }
    .events-address ul li .single-address .cont h6{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    .tribe-events .tribe-events-calendar-list__event-date-tag-datetime{
      background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    <?php if (Edubin::setting( 'primary_color' )): ?>
      .post-type-archive-tribe_events span.tribe-events-c-small-cta__price{
        background-color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
        color: #fff;
      }
    <?php endif;?>
    .tribe-common--breakpoint-medium.tribe-common .tribe-common-b2 i{
      color: <?php echo esc_attr( Edubin::setting( 'primary_color' )); ?>;
    }
    .tribe-common a, .tribe-common a:active, .tribe-common a:focus, .tribe-common a:hover, .tribe-common a:visited{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    .tribe-common--breakpoint-medium.tribe-common .tribe-common-b2{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    .tribe-common--breakpoint-medium.tribe-common .tribe-common-h6--min-medium{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    .tribe-common--breakpoint-full.tribe-events .tribe-events-c-top-bar__datepicker-desktop{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    .tribe-common--breakpoint-full.tribe-events .tribe-events-c-top-bar__datepicker-desktop{
     color: <?php echo esc_attr( Edubin::setting( 'link_hover_color')); ?>;
    }
    .tribe-events .datepicker .datepicker-switch{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    .tribe_events-template-default .tribe-events-notices{
      color: <?php echo esc_attr( Edubin::setting( 'tertiary_color')); ?>;
    }
    .tribe-events .datepicker .day.active, .tribe-events .datepicker .day.active.focused, .tribe-events .datepicker .day.active:focus, .tribe-events .datepicker .day.active:hover, .tribe-events .datepicker .month.active, .tribe-events .datepicker .month.active.focused, .tribe-events .datepicker .month.active:focus, .tribe-events .datepicker .month.active:hover, .tribe-events .datepicker .year.active, .tribe-events .datepicker .year.active.focused, .tribe-events .datepicker .year.active:focus, .tribe-events .datepicker .year.active:hover{
      background: <?php echo esc_attr( Edubin::setting( 'secondary_color')); ?>;
    }
    .tribe-common .tribe-common-anchor-thin:active, .tribe-common .tribe-common-anchor-thin:focus, .tribe-common .tribe-common-anchor-thin:hover{
      color: <?php echo esc_attr( Edubin::setting( 'link_hover_color')); ?>;
    }

    .tribe-common--breakpoint-medium.tribe-events .tribe-events-c-ical__link{
     background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
     border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
     color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    }
    .tribe-common--breakpoint-medium.tribe-events .tribe-events-c-ical__link:hover{
      background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    }
    .tribe-common .tribe-common-c-btn, .tribe-common a.tribe-common-c-btn{
      background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    }
    .tribe-common .tribe-common-c-btn:focus, .tribe-common .tribe-common-c-btn:hover, .tribe-common a.tribe-common-c-btn:focus, .tribe-common a.tribe-common-c-btn:hover{
      background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    }
    .single-tribe_events a.tribe-events-gcal, .single-tribe_events a.tribe-events-ical{
     background: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
     border-color: <?php echo esc_attr( Edubin::setting( 'btn_color')); ?>;
     color: <?php echo esc_attr( Edubin::setting( 'btn_text_color')); ?>;
    }
    .single-tribe_events a.tribe-events-gcal:hover, .single-tribe_events a.tribe-events-ical:hover{
      background: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      border-color: <?php echo esc_attr( Edubin::setting( 'btn_hover_color')); ?>;
      color: <?php echo esc_attr( Edubin::setting( 'btn_text_hover_color')); ?>;
    }
    .tribe-events .datepicker .datepicker-switch:active{
      color: <?php echo esc_attr( Edubin::setting( 'link_hover_color')); ?>;
    }
</style>
