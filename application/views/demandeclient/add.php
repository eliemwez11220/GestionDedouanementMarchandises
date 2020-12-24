<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Demandeclient Add</h3>
            </div>
            <?php echo form_open('demandeclient/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="date_demande" class="control-label"><span class="text-danger">*</span>Date Demande</label>
						<div class="form-group">
							<input type="text" name="date_demande" value="<?php echo $this->input->post('date_demande'); ?>" class="has-datepicker form-control" id="date_demande" />
							<span class="text-danger"><?php echo form_error('date_demande');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_client" class="control-label"><span class="text-danger">*</span>Nom Client</label>
						<div class="form-group">
							<input type="text" name="nom_client" value="<?php echo $this->input->post('nom_client'); ?>" class="form-control" id="nom_client" />
							<span class="text-danger"><?php echo form_error('nom_client');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label">Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo $this->input->post('telephone'); ?>" class="form-control" id="telephone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="motif_demande" class="control-label"><span class="text-danger">*</span>Motif Demande</label>
						<div class="form-group">
							<textarea name="motif_demande" class="form-control" id="motif_demande"><?php echo $this->input->post('motif_demande'); ?></textarea>
							<span class="text-danger"><?php echo form_error('motif_demande');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse</label>
						<div class="form-group">
							<textarea name="adresse" class="form-control" id="adresse"><?php echo $this->input->post('adresse'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo $this->input->post('observation'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>