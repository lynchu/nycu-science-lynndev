<?php
get_header();

$args = array(  
    'post_type' => 'dean',
    'post_status' => 'publish',
    'order' => 'ASC'
);
$loop = new WP_Query( $args ); 
$cnt = 0;
?>

<div id="post-title-area">
    <h1 id="post-title"><?php _e('現任主管簡介', 'nycu-science' ); ?></h1>
    <div id="top-right-rect"></div>
</div>
<div class="horizontal-divider"></div>
<div id="post-content-area">
<?php
if( $loop->have_posts() ):

    while ( $loop->have_posts() ) : $loop->the_post(); 

        $post_id = get_the_ID();
        $acf_fields = array(
            'photo'           => get_field( 'photo' ),
            'title1'          => get_field( 'title1' ),
            'name'            => get_field( 'name' ),
            'eng_name'        => get_field( 'eng_name' ),
            'title2'          => get_field( 'title2' ),
            'education'       => get_field( 'education' ),
            'research'        => get_field( 'research' ),
            'email'           => get_field( 'email' ),
            'tel'             => get_field( 'tel' )
        );
        $image = $acf_fields['photo'];
?>
    <div class="info-card-wrapper">
        <div class="info-card">
            <div class="img-box">
            <?php
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php 
                endif; ?>
            </div>
            <div class="text-box">
                <div class="name xlarge-text">
                    <?php 
                        echo $acf_fields['title1']; 
                        echo " ";
                        echo $acf_fields['name']; 
                        echo " ";
                        echo $acf_fields['eng_name'];
                    ?>
                </div>
                <div class="title large-text"><?php echo $acf_fields['title2']; ?></div>
                <div class="education-title normal-text bold"><?php _e('學歷', 'nycu-science' ); ?></div>
                <div class="education-content normal-text"><?php echo $acf_fields['education']; ?></div>
                <div class="research-title normal-text bold"><?php _e('學術專長暨研究領域', 'nycu-science' ); ?></div>
                <div class="research-content normal-text"><?php echo $acf_fields['research']; ?></div>
                <div class="email">
                    <img src="<?php echo get_template_directory_uri() . '/images/staff-email-icon.png';?>" />
                    <p><?php echo $acf_fields['email']; ?></p>
                </div>
                <div class="tel">
                    <img src="<?php echo get_template_directory_uri() . '/images/staff-tel-icon.png';?>" />
                    <p><?php echo $acf_fields['tel']; ?></p>
                </div>
            </div>
        </div>
    <?php
        if( $cnt == 0 ): ?>
        <div id="post-content" class="normal-text"><?php the_content(); ?></div>
    <?php 
        endif; ?>
    </div>
    <?php
        if( $cnt == 0 ): $cnt++;?>
    <div class="horizontal-divider"></div>
    <?php 
        endif; ?>
<?php
    endwhile;
endif;
?>
</div>
<!-- End of the loop. -->

<?php 
get_footer();
?>
