<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Cotation Add</h3>
            </div>
            <?php echo form_open('cotation/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="honoraire" class="control-label">Honoraire</label>
						<div class="form-group">
							<input type="text" name="honoraire" value="<?php echo $this->input->post('honoraire'); ?>" class="form-control" id="honoraire" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tva" class="control-label">Tva</label>
						<div class="form-group">
							<input type="text" name="tva" value="<?php echo $this->input->post('tva'); ?>" class="form-control" id="tva" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="frais_transit" class="control-label">Frais Transit</label>
						<div class="form-group">
							<input type="text" name="frais_transit" value="<?php echo $this->input->post('frais_transit'); ?>" class="form-control" id="frais_transit" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="seguce" class="control-label">Seguce</label>
						<div class="form-group">
							<input type="text" name="seguce" value="<?php echo $this->input->post('seguce'); ?>" class="form-control" id="seguce" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="montant" class="control-label">Montant</label>
						<div class="form-group">
							<input type="text" name="montant" value="<?php echo $this->input->post('montant'); ?>" class="form-control" id="montant" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cot_id" class="control-label">Cot Id</label>
						<div class="form-group">
							<input type="text" name="cot_id" value="<?php echo $this->input->post('cot_id'); ?>" class="form-control" id="cot_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numCotation" class="control-label"><span class="text-danger">*</span>NumCotation</label>
						<div class="form-group">
							<input type="text" name="numCotation" value="<?php echo $this->input->post('numCotation'); ?>" class="form-control" id="numCotation" />
							<span class="text-danger"><?php echo form_error('numCotation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateCotation" class="control-label"><span class="text-danger">*</span>DateCotation</label>
						<div class="form-group">
							<input type="text" name="dateCotation" value="<?php echo $this->input->post('dateCotation'); ?>" class="has-datepicker form-control" id="dateCotation" />
							<span class="text-danger"><?php echo form_error('dateCotation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="concernee" class="control-label">Concernee</label>
						<div class="form-group">
							<input type="text" name="concernee" value="<?php echo $this->input->post('concernee'); ?>" class="form-control" id="concernee" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="periode" class="control-label">Periode</label>
						<div class="form-group">
							<input type="text" name="periode" value="<?php echo $this->input->post('periode'); ?>" class="has-datepicker form-control" id="periode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="facture" class="control-label">Facture</label>
						<div class="form-group">
							<input type="text" name="facture" value="<?php echo $this->input->post('facture'); ?>" class="form-control" id="facture" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marque" class="control-label">Marque</label>
						<div class="form-group">
							<input type="text" name="marque" value="<?php echo $this->input->post('marque'); ?>" class="form-control" id="marque" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dgda" class="control-label">Dgda</label>
						<div class="form-group">
							<input type="text" name="dgda" value="<?php echo $this->input->post('dgda'); ?>" class="form-control" id="dgda" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="redevance" class="control-label">Redevance</label>
						<div class="form-group">
							<input type="text" name="redevance" value="<?php echo $this->input->post('redevance'); ?>" class="form-control" id="redevance" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fpi" class="control-label">Fpi</label>
						<div class="form-group">
							<input type="text" name="fpi" value="<?php echo $this->input->post('fpi'); ?>" class="form-control" id="fpi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ogefrem" class="control-label">Ogefrem</label>
						<div class="form-group">
							<input type="text" name="ogefrem" value="<?php echo $this->input->post('ogefrem'); ?>" class="form-control" id="ogefrem" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pors_soins" class="control-label">Pors Soins</label>
						<div class="form-group">
							<input type="text" name="pors_soins" value="<?php echo $this->input->post('pors_soins'); ?>" class="form-control" id="pors_soins" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="intervention" class="control-label">Intervention</label>
						<div class="form-group">
							<textarea name="intervention" class="form-control" id="intervention"><?php echo $this->input->post('intervention'); ?></textarea>
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