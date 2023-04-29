<div class="footer-nav-menu" > 
            <?php 
            if( has_nav_menu( 'footer_menu' ) ){
            wp_nav_menu(
                array(
                    'theme_location' => 'footer_menu',
                    // 'menu_class' => 'custom-class-here'
                )
            );
        }
            ?>
        </div>
		
<footer class="site-footer">
			<p><?php echo date( 'Y' ); ?> | Developer links: 
				<a href="<?php the_permalink( $post = 1 ); ?>">Edits</a>,
				<a href="<?php the_permalink( $page_id = 26 ); ?>">Home</a>,
				<a href="<?php the_permalink(); ?>">Single</a>
			</p>
		</footer>
	</div> 

    <?php wp_footer(); ?>
    
  </body>
</html>