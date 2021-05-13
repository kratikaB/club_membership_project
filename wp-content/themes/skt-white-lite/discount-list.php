<?php
/*
	Template Name: Discount List
*/
get_header();

	global $post, $wpdb, $current_user;
	// var_dump($current_user->ID);
	// $discount_code = $_REQUEST['discount_code'];
	$discounts = $wpdb->get_results("SELECT * FROM $wpdb->pmpro_discount_codes");
	// $level = pmpro_getLevel(1);
	$levels = $wpdb->get_results("SELECT * FROM $wpdb->pmpro_membership_levels");
	 
	 // var_dump($discounts);
	 	
	 
?>

<div class="container"> 
	<div class="row">
		<div class="col-sm-6">
	<?php 
		foreach ($discounts as $discount) {
 	?>
			<p><?php echo $discount->code; ?></p>
		<?php } ?>
		</div>

		<div class="col-sm-6">
	<?php 
		foreach ($levels as $level) {
 	?>
			<p><?php echo $level->name; ?></p>
		<?php } ?>
		</div>

	</div>
</div>
	
	
	

<?php
get_footer();