
<select name="node" id="navigation_node">
	<?php foreach($items as $item): ?>
	<option value="<?php echo $item->node_id; ?>">
	<?php echo str_repeat('----', $item->level); ?>
	<?php echo $item->name; ?>
	</option>
	<?php endforeach; ?>
</select>