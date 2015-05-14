<?php 
$nodes = myfunctionlib_get_nodes($title);

$tmp_nodes = myfunctionlib_get_tmps($nodes);
// kpr($tmp_nodes); die(); 
?>
<!-- InstanceBeginEditable name="mainContainer" -->
<div id="container" style="padding-bottom:5%;">
	<div id="productTitleDetailPage">
		<h4>Figurines</h4>
		<h2><?php echo $title; ?></h2>
	</div>
	<!-- <div class="thumbPageContainer" style="background:url(images/ivory-transparent-back-TEMP.png) repeat;">-->
	<div class="thumbPageContainer" style="background:ivory;"> 
	   <?php foreach ($tmp_nodes as $tmp): ?> 
		<div class="crossSellingThumb thumbnails ImageWrapper BackgroundS ContentWrapperH chrome-fix">
			<a href="<?php echo $tmp['path']; ?>">
				<img class="img-responsive" src="<?php echo $tmp['product_picture_url']; ?>" alt="">
				<div class="PStyleH ContentH TOrange">
					<div class="Content thumbName">
						<h2>
							<?php echo $tmp['title']; ?>
						</h2>
						<p>
							<?php echo $tmp['product_no']; ?>
						</p>
					</div>
				</div>
			</a>
		</div>
	   <?php endforeach;  ?>		
	</div>
</div>
<!-- InstanceEndEditable -->
<?php if ($page['sidebar_first']): ?>
	<aside id="secondary" class="sidebar-container" role="complementary">
		<?php print render($page['sidebar_first']); ?>
	</aside> 
<?php endif; ?>  
