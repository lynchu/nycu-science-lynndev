<?php
get_header();

$args = array(  
    'post_type' => 'staff',
    'post_status' => 'publish'
);
$loop = new WP_Query( $args ); 
?>

<div id="post-title-area">
    <h1 id="post-title"><?php _e('院辦公室', 'nycu-science' ); ?></h1>
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
            'name'            => get_field( 'name' ),
            'title'           => get_field( 'title' ),
            'job_description' => get_field( 'job_description' ),
            'email'           => get_field( 'email' ),
            'tel'             => get_field( 'tel' )
        );
        $image = $acf_fields['photo'];
?>
    <div class="info-card">
        <div class="img-box">
        <?php
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php 
            endif; ?>
        </div>
        <div class="text-box">
            <div class="name"><?php echo $acf_fields['name']; ?>
                <span class="title"><?php echo $acf_fields['title']; ?></span>
            </div>
            <div class="job-description-title"><?php _e('主要業務', 'nycu-science' ); ?></div>
            <div class="job-description-content"><?php echo $acf_fields['job_description']; ?></div>
            <div class="email">
                <img src="<?php echo get_template_directory_uri() . '/images/staff-email-icon.png';?>" />
                <?php echo $acf_fields['email']; ?>
            </div>
            <div class="tel">
                <img src="<?php echo get_template_directory_uri() . '/images/staff-tel-icon.png';?>" />
                <?php echo $acf_fields['tel']; ?>
            </div>
        </div>
    </div>
<?php
    endwhile;
endif;
?>
</div>
<!-- End of the loop. -->

<?php 
get_footer();
?>