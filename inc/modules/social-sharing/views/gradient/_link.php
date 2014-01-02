<?php
/**
 * To change this license header, choose License Headers in Project Properties.
 */
?>

<li>

    <?php do_action( 'kbso_before_sharelinks_link', $name, $label, $href, $post_type ); ?>
    
    <a class="<?php echo esc_attr( 'klink ' . $name ); ?>" href="<?php echo esc_url( $href ); ?>" title="<?php echo esc_attr( sprintf( 'Share on %s', $label ) ); ?>" target="_blank">
        
        <?php if ( in_array( 'icon', $link_content ) ) : ?>
            <span class="kicon"><i class="<?php echo esc_attr( 'zocial ' . $name ); ?>"></i></span>
        <?php endif; ?>
        
        <?php if ( in_array( 'name', $link_content ) ) : ?>
            <span class="kname"><?php echo esc_html( $label ); ?></span>
        <?php endif; ?>
            
        <?php if ( in_array( 'count', $link_content ) && ( isset( $count ) && 0 != $count ) ) : ?>
            <span class="kcount"><?php echo esc_html( kbso_social_share_count_display( $count ) ); ?></span>
        <?php endif; ?>
            
    </a>
    
    <?php do_action( 'kbso_after_sharelinks_link', $name, $label, $href, $post_type ); ?>

</li>
