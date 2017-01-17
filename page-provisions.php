<?php get_header(); ?>
<div class="provisions-cont">
	<div class="header table">
		<div class="table-cell">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cheese-window-drawing@2x.gif" alt="">
		</div>
		<div class="table-cell">
			<?php while ( have_posts() ) : the_post();?>
		<?php the_content(); ?>
		<?php endwhile; ?>
		</div>
		
	</div>
	<div class="overflow-fix">
		<div class="provisions-wrapper table" id="provisions">
	<!-- 		<div class="block"></div> -->
			<div class="filter table-cell">
				<h4>SORT BY</h4>
				<div class="filter-blocker"></div>
				<ul class="categories">
					<?php foreach (get_categories(array( 'type' => 'provisions', 'title_li' => '', 'hierarchical' => 0, 'parent' => 21, 'hide_empty' => 0, 'orderby' => 'id')) as $cat) : ?>
						 <li class="category <?php echo strtolower($cat->cat_name); ?>">
						 	<div class="category-cont">
							 	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo strtolower($cat->cat_name) ?>-drawing@2x.gif">
								<p><?php echo strtolower($cat->cat_name); ?></p>
						 	</div>
							 <?php 
							 if ($cat->term_id == 3) {
								 $children = get_categories( array('parent' => $cat->term_id, 'hide_empty' => false,'orderby' => 'id') );
									if($children) { ?>
									<ul class="subcategories">
										<?php foreach ($children as $cat) : ?>
										<li class="subcategory <?php echo strtolower($cat->cat_name);  ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo strtolower($cat->cat_name) ?>-drawing@2x.gif">
								 			<p><?php echo strtolower($cat->cat_name);  ?></p>
								 		</li>
								 		 <?php endforeach; ?>
								 	</ul>
									<?php } ?>
							 <?php } ?>
						 </li>
					 <?php endforeach; ?>
				</ul>
				<p class="underline view-all">view all</p>
			</div>
			<div class="table-cell provisions">
				<?php $provisions = new WP_Query( array( 'post_type' => 'Provisions', 'order' => 'ASC', 'posts_per_page' => 100 ) ); ?>
				<?php while ( $provisions->have_posts() ) : $provisions->the_post();?>
				<li class="provision <?php the_category_unlinked(' '); ?>">
					<?php the_post_thumbnail('full'); ?>
					<div class="info">
						<h4><?php the_title(); ?></h4>
						<?php the_content(); ?>
						<?php $addl_info = get_field('additional_information');
							if ($addl_info) { ?>
							<div class="cta">
								<img class="cta" src="<?php echo get_template_directory_uri(); ?>/assets/images/plus-sign.gif" alt="">
								<div class="addl-info tooltip">
									<?php echo $addl_info; ?>
								</div>
							</div>
						<?php } ?>
					</div>	
				</li>
				<?php endwhile; wp_reset_query(); ?>
			</div>
			
		</div>
	</div>
</div>


<?php get_footer(); ?>