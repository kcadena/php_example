<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	
	<div>
		<a href='<?php echo site_url('pageindex')?>' style="margin:auto">Home CodeIgniter</a> |  
		<a href='<?php echo site_url('grocerycrud')?>' style="margin:auto">Home Grocery</a>  |  
		<a href='<?php echo site_url('grocerycrud/join')?>' style="margin:auto">JOIN</a>  |  
		<a href='<?php echo site_url('grocerycrud/add_est')?>' style="margin:auto">add_est</a>   |  
		<a href='<?php echo site_url('grocerycrud/example_with_like')?>' style="margin:auto">Example</a> 
	</div>

	<div style='height:20px;'></div>  
    <div style="width:80%; margin:auto;">
		<?php echo $output; ?>
    </div>


</body>
</html>
