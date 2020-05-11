<?php
	$content = file_get_contents('./accepted.json');
	$json = json_decode($content, true);

	foreach ($json['researchTrack'] as $key => $value) {
?>

<div class="paper">
	<span class="authors">
		<?php foreach ($value['authors'] as $author) { ?>
		<span>
			<a href="emailto:<?php echo $author['email'] ?>"><?php echo $author['name'] ?></a>, 
		</span>.
		<?php } ?> 
	</span>
	<span class="title">
		<?php echo $value['title'] ?>	
	</span>
</div>

<?php
	}
?>
