<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Declarant Edit</h3>
            </div>
			<?php echo form_open('declarant/edit/'.$declarant['matricule']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nomDeclarant" class="control-label"><span class="text-danger">*</span>NomDeclarant</label>
						<div class="form-group">
							<input type="text" name="nomDeclarant" value="<?php echo ($this->input->post('nomDeclarant') ? $this->input->post('nomDeclarant') : $declarant['nomDeclarant']); ?>" class="form-control" id="nomDeclarant" />
							<span class="text-danger"><?php echo form_error('nomDeclarant');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label">Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo ($this->input->post('telephone') ? $this->input->post('telephone') : $declarant['telephone']); ?>" class="form-control" id="telephone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse</label>
						<div class="form-group">
							<input type="text" name="adresse" value="<?php echo ($this->input->post('adresse') ? $this->input->post('adresse') : $declarant['adresse']); ?>" class="form-control" id="adresse" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $declarant['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Modifier
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>