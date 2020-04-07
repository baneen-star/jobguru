<?php

/* Template name: Archive-Jobs */

get_header();


?>

<div id="main-content" class="joblist">
<div class="et_pb_row">
	<?php
			while ( have_posts() ): the_post(); 
            $value = get_field( "jobs" );
            $img = get_the_post_thumbnail_url();

			?>

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
                <?php if($img){?>
                <img src="<?php echo $img;?>">
                <?php } else { ?>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/images/placeholder-min.jpg">
                    <?php } ?>
					<div class="entry-content">
                        <h3>
					<?php
                        echo wp_trim_words( get_the_title(), 10, '...' );
                        ?>
                    </h3>
                    <p>
                   Published By <?php echo get_the_author(); ?> on <?php the_time('F jS, Y'); ?>
                    </p>
                    <p>
					<?php
                        echo wp_trim_words( get_the_content(), 40, '...' );?>
                        </p>
                        <?php
						?>

						
					</div> <!-- .entry-content -->

				</article> <!-- .et_pb_post -->

		<?php endwhile;
	
    ?>
    </div?>
	</div>
<?php

get_footer();
