<?php
/*
 * Helper Functions
 */

/**
 * Update the count using a new number.
 */
function kbso_update_count( $current, $new ) {
    
    /*
     * If we have no values yet, set it to 0 as a default
     */
    if ( empty( $current ) ) {
        
        $current = 0;
        
    }
    
    /*
     * If we have a valid new value, use it.
     */
    if ( isset( $new ) && is_int( $new ) && ( 0 < $new ) ) {
        
        $current = $new;
        
    }
    
    return $current;
    
}

/**
 * Update the total count using a new number.
 */
function kbso_update_count_total( $total, $new ) {
    
    if ( ! empty( $new ) && is_int( absint( $new ) ) && ( 0 < $new ) ) {
        
        $total = $total + $new;
        
    }
    
    return $total;
    
}

/**
 * Output Selected Share Services
 */
function kbso_social_share_services( $type = 'selected' ) {

    $services = kbso_share_links_order( $type );

    if ( is_array( $services ) ) {

        foreach ( $services as $link ) {
            ?>
            <li class="<?php echo $link; ?> share-link sortable" data-service="<?php echo $link; ?>">
                <a><i class="zocial <?php echo $link; ?>"></i><span class="name"><?php echo ucfirst($link); ?></span></a>
            </li>
            <?php
        }
        
    }
    
}

/**
 * Process Social Count for Display
 */
function kbso_social_share_count_display( $count, $thousand = 'K', $million = 'M' ) {

    if ( ! is_numeric( $count ) ) {
        $result = 0;
    }
    
    /*
     * If greater than 1000 divide by 1000 and add k.
     */
    if ( $count > 1000000 ) {
        
        $result = (int) ( $count / 1000000 );
        
        $result .= $million;
        
    } elseif ( $count > 1000 ) {
        
        $result = (int) ( $count / 1000 );
        
        $result .= $thousand;
        
    } else {
        
        $result = $count;
        
    }
    
    return apply_filters( 'kbso_social_sharing_count_display', $result, $count );
    
}