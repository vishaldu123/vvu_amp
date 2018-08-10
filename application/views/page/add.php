<?php echo form_open('page/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="catid" class="col-md-4 control-label">Catid</label>
		<div class="col-md-8">
			<select name="catid" class="form-control">
				<option value="">select</option>
				<?php 
				$catid_values = array(
				);

				foreach($catid_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('catid')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="featured" class="col-md-4 control-label">Featured</label>
		<div class="col-md-8">
			<select name="featured" class="form-control">
				<option value="">select</option>
				<?php 
				$featured_values = array(
				);

				foreach($featured_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('featured')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-4 control-label"><span class="text-danger">*</span>Title</label>
		<div class="col-md-8">
			<input type="text" name="title" value="<?php echo $this->input->post('title'); ?>" class="form-control" id="title" />
			<span class="text-danger"><?php echo form_error('title');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="alias" class="col-md-4 control-label"><span class="text-danger">*</span>Alias</label>
		<div class="col-md-8">
			<input type="text" name="alias" value="<?php echo $this->input->post('alias'); ?>" class="form-control" id="alias" />
			<span class="text-danger"><?php echo form_error('alias');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="created" class="col-md-4 control-label">Created</label>
		<div class="col-md-8">
			<input type="text" name="created" value="<?php echo $this->input->post('created'); ?>" class="form-control" id="created" />
		</div>
	</div>
	<div class="form-group">
		<label for="access" class="col-md-4 control-label">Access</label>
		<div class="col-md-8">
			<input type="text" name="access" value="<?php echo $this->input->post('access'); ?>" class="form-control" id="access" />
		</div>
	</div>
	<div class="form-group">
		<label for="hits" class="col-md-4 control-label">Hits</label>
		<div class="col-md-8">
			<input type="text" name="hits" value="<?php echo $this->input->post('hits'); ?>" class="form-control" id="hits" />
		</div>
	</div>
	<div class="form-group">
		<label for="fulltext" class="col-md-4 control-label">Fulltext</label>
		<div class="col-md-8">
			<textarea name="fulltext" class="form-control" id="fulltext"><?php echo $this->input->post('fulltext'); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="images" class="col-md-4 control-label">Images</label>
		<div class="col-md-8">
			<textarea name="images" class="form-control" id="images"><?php echo $this->input->post('images'); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="urls" class="col-md-4 control-label">Urls</label>
		<div class="col-md-8">
			<textarea name="urls" class="form-control" id="urls"><?php echo $this->input->post('urls'); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="metakey" class="col-md-4 control-label">Metakey</label>
		<div class="col-md-8">
			<textarea name="metakey" class="form-control" id="metakey"><?php echo $this->input->post('metakey'); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="metadesc" class="col-md-4 control-label">Metadesc</label>
		<div class="col-md-8">
			<textarea name="metadesc" class="form-control" id="metadesc"><?php echo $this->input->post('metadesc'); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="metadata" class="col-md-4 control-label">Metadata</label>
		<div class="col-md-8">
			<textarea name="metadata" class="form-control" id="metadata"><?php echo $this->input->post('metadata'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>