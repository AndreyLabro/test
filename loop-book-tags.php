

<div class="container books">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-9">

						<div class="book_theme">
                          
                          <div class="visible-md visible-lg book_theme-title">Темы</div><div href="#" class="visible-xs visible-sm book_theme-title--link book_theme-toggle-js"> <span class="btn-text">Темы</span><span class="icon-caret"></span></div>
							   <?php $args = array(
								'smallest'                  => 18, 
								'largest'                   => 18,
								'unit'                      => 'px', 
								'number'                    => 0,  
								'format'                    => 'list',
								'separator'                 => "\n\n",
								'orderby'                   => 'name', 
								'order'                     => 'ASC',
								'exclude'                   => null, 
								'include'                   => null, 
								'link'                      => 'view', 
								'taxonomy'                  => 'book_tags', 
								'echo'                      => true,
								'child_of'                  => null, // see Note!
							); ?>
							
							<div class="book_theme-list">
							<?php wp_tag_cloud( $args ); ?>
							</div>
                          
                        </div>
                        
                        <section class="books_list">
                <div class="row">

<?php

if (have_posts()) {
    while ( have_posts() ) : the_post(); ?>
    
   <div class="col-xs-6 col-sm-3 col-md-3 col-lg-15">
		<div class="books-item"><a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url( 'thumbnail' ); ?>);" class="books-cover"></a>
		 
		  <div class="books-categories">
			 <?php echo get_the_term_list( $post->ID, 'book_tags', '', ', ', '</p>' ) ?>
		  </div>
		  
		  <a href="<?php the_permalink(); ?>" class="books-author"><?php the_field('book_author'); ?></a><a href="<?php the_permalink(); ?>" class="books-name"> 
			<q><?php the_title(); ?></q></a>
		</div>
	  </div>
    
    
    <?php
     
    endwhile; //end loop ?>
    
    </div></section>
			
			<?php echo td_page_generator::get_pagination(); // get the pagination - /includes/wp_booster/td_page_generator.php ?>
		
			</div></div></div>

<?php
   


} else {
    /**
     * no posts to display. This function generates the __td('No posts to display').
     * the text can be overwritten by the themplate using the global @see td_global::$custom_no_posts_message
     */

    echo td_page_generator::no_posts();
}