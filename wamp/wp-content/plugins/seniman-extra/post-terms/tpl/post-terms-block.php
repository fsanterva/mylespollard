<?php 
$category_name = array();
	$category_slugs = array();
	$category_terms = wp_get_object_terms(get_the_ID(), 'portfolio-category');
	if(!empty($category_terms)){
		if(!is_wp_error( $category_terms )){
			foreach($category_terms as $term){
				$category_name[] = $term->name;
				$category_slugs[] = $term->slug;
			}
		}
	}
	$seniman_porto_comas =  join( ", ", $category_name );
	$seniman_porto_space =  join( " ", $category_slugs );
	//var_dump($seniman_porto_comas);
$taxonomy_exist = taxonomy_exists('category');
if($taxonomy_exist) { ?>
<div class="portfolio-terms clearfix">
	<h5 class="terms-item"><?php echo esc_html( $seniman_porto_comas ); ?></h5>
</div>
<?php } ?>