<?php
/**
 * Help Panel.
 *
 * @package Yummy Bites
 */
?>
<!-- Help file panel -->
<div id="help-panel" class="panel-left">

    <div class="panel-aside">
        <h4><?php esc_html_e( 'View Our Documentation Link', 'yummy-bites' ); ?></h4>
        <p><?php esc_html_e( 'New to the WordPress world? Our documentation has step by step procedure to create a beautiful website.', 'yummy-bites' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://wpdelicious.com/docs-category/yummy-bites/' ); ?>" title="<?php esc_attr_e( 'Visit the Documentation', 'yummy-bites' ); ?>" target="_blank">
            <?php esc_html_e( 'View Documentation', 'yummy-bites' ); ?>
        </a>
    </div><!-- .panel-aside -->
    
    <div class="panel-aside">
        <h4><?php esc_html_e( 'Support Ticket', 'yummy-bites' ); ?></h4>
        <p><?php printf( __( 'It\'s always a good idea to visit our %1$sKnowledge Base%2$s before you send us a support ticket.', 'yummy-bites' ), '<a href="'. esc_url( 'https://wpdelicious.com/docs-category/yummy-bites/' ) .'" target="_blank">', '</a>' ); ?></p>
        <p><?php esc_html_e( 'If the Knowledge Base didn\'t answer your queries, submit us a support ticket here. Our response time usually is less than a business day, except on the weekends.', 'yummy-bites' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://wpdelicious.com/support-ticket/' ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'yummy-bites' ); ?>" target="_blank">
            <?php esc_html_e( 'Contact Support', 'yummy-bites' ); ?>
        </a>
    </div><!-- .panel-aside -->

    <div class="panel-aside">
        <h4><?php printf( esc_html__( 'View Our %1$s Demo', 'yummy-bites' ), YUMMY_BITES_THEME_NAME ); ?></h4>
        <p><?php esc_html_e( 'Visit the demo to get more ideas about our theme design.', 'yummy-bites' ); ?></p>
        <a class="button button-primary" href="<?php echo esc_url( 'https://wpdelicious.com/yummy-bites-demos/'); ?>" title="<?php esc_attr_e( 'Visit the Demo', 'yummy-bites' ); ?>" target="_blank">
            <?php esc_html_e( 'View Demo', 'yummy-bites' ); ?>
        </a>
    </div><!-- .panel-aside -->
</div>