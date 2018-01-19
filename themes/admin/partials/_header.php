<?php
	Assets::add_css( );

	if (isset($shortcut_data) && is_array($shortcut_data['shortcut_keys'])) {
		Assets::add_js($this->load->view('ui/shortcut_keys', $shortcut_data, true), 'inline');
	}
	$mainmenu = $this->uri->segment(2);
	$menu = $this->uri->segment(3);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo isset($toolbar_title) ? $toolbar_title .' : ' : ''; ?> <?php echo $this->settings_lib->item('site.title') ?></title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>logo.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/js/plugins/gritter/jquery.gritter.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin/css/style.css">
   	<?php echo Assets::css(null, true); ?> 
</head> 

