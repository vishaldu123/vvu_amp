<div class="pull-right">
	<a href="<?php echo site_url('page/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Catid</th>
		<th>Featured</th>
		<th>Title</th>
		<th>Alias</th>
		<th>Created</th>
		<th>Access</th>
		<th>Hits</th>
		<th>Fulltext</th>
		<th>Images</th>
		<th>Urls</th>
		<th>Metakey</th>
		<th>Metadesc</th>
		<th>Metadata</th>
		<th>Actions</th>
    </tr>
	<?php foreach($page as $p){ ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['catid']; ?></td>
		<td><?php echo $p['featured']; ?></td>
		<td><?php echo $p['title']; ?></td>
		<td><?php echo $p['alias']; ?></td>
		<td><?php echo $p['created']; ?></td>
		<td><?php echo $p['access']; ?></td>
		<td><?php echo $p['hits']; ?></td>
		<td><?php echo $p['fulltext']; ?></td>
		<td><?php echo $p['images']; ?></td>
		<td><?php echo $p['urls']; ?></td>
		<td><?php echo $p['metakey']; ?></td>
		<td><?php echo $p['metadesc']; ?></td>
		<td><?php echo $p['metadata']; ?></td>
		<td>
            <a href="<?php echo site_url('page/edit/'.$p['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('page/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
