<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Marchandise Add</h3>
            </div>
            <?php echo form_open('marchandise/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="client_sid" class="control-label"><span class="text-danger">*</span>Demandeclient</label>
						<div class="form-group">
							<select name="client_sid" class="form-control">
								<option value="">select demandeclient</option>
								<?php 
								foreach($all_demandeclients as $demandeclient)
								{
									$selected = ($demandeclient['dem_id'] == $this->input->post('client_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$demandeclient['dem_id'].'" '.$selected.'>'.$demandeclient['nom_client'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('client_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cotation_sid" class="control-label"><span class="text-danger">*</span>Cotation Sid</label>
						<div class="form-group">
							<select name="cotation_sid" class="form-control">
								<option value="">select</option>
								<?php 
								$cotation_sid_values = array(
								);

								foreach($cotation_sid_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('cotation_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('cotation_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bonLivraison_sid" class="control-label">Bonlivraison</label>
						<div class="form-group">
							<select name="bonLivraison_sid" class="form-control">
								<option value="">select bonlivraison</option>
								<?php 
								foreach($all_bonlivraisons as $bonlivraison)
								{
									$selected = ($bonlivraison['bon_id'] == $this->input->post('bonLivraison_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$bonlivraison['bon_id'].'" '.$selected.'>'.$bonlivraison['numBon'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="designation" class="control-label"><span class="text-danger">*</span>Designation</label>
						<div class="form-group">
							<input type="text" name="designation" value="<?php echo $this->input->post('designation'); ?>" class="form-control" id="designation" />
							<span class="text-danger"><?php echo form_error('designation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="quantite" class="control-label">Quantite</label>
						<div class="form-group">
							<input type="text" name="quantite" value="<?php echo $this->input->post('quantite'); ?>" class="form-control" id="quantite" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="poids" class="control-label">Poids</label>
						<div class="form-group">
							<input type="text" name="poids" value="<?php echo $this->input->post('poids'); ?>" class="form-control" id="poids" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="volume" class="control-label">Volume</label>
						<div class="form-group">
							<input type="text" name="volume" value="<?php echo $this->input->post('volume'); ?>" class="form-control" id="volume" />
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