<?php
/*
	Template Name: Discount List
*/
get_header();

	global $post, $wpdb, $current_user;
	// var_dump($current_user->ID);
	// $discount_code = $_REQUEST['discount_code'];
	$discount = $wpdb->get_row("SELECT code FROM $wpdb->pmpro_discount_codes");
	// var_dump($discount);
?>

<div class="container"> 
	<div class="row">
		<div class="col-sm-6">
			<p><?php echo $discount->code; ?></p>
		</div>
		<div class="col-sm-6">
			<p> Kratika </p>
		</div>

	</div>

</div>
	
	
	

<?php
get_footer();