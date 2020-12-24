<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Registredossier Edit</h3>
            </div>
			<?php echo form_open('registredossier/edit/'.$registredossier['dossier_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="declarant_sid" class="control-label">Declarant</label>
						<div class="form-group">
							<select name="declarant_sid" class="form-control">
								<option value="">select declarant</option>
								<?php 
								foreach($all_declarants as $declarant)
								{
									$selected = ($declarant['matricule'] == $registredossier['declarant_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$declarant['matricule'].'" '.$selected.'>'.$declarant['nomDeclarant'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numDossier" class="control-label">NumDossier</label>
						<div class="form-group">
							<input type="text" name="numDossier" value="<?php echo ($this->input->post('numDossier') ? $this->input->post('numDossier') : $registredossier['numDossier']); ?>" class="form-control" id="numDossier" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="paysProv" class="control-label">PaysProv</label>
						<div class="form-group">
							<input type="text" name="paysProv" value="<?php echo ($this->input->post('paysProv') ? $this->input->post('paysProv') : $registredossier['paysProv']); ?>" class="form-control" id="paysProv" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lieuEntree" class="control-label">LieuEntree</label>
						<div class="form-group">
							<input type="text" name="lieuEntree" value="<?php echo ($this->input->post('lieuEntree') ? $this->input->post('lieuEntree') : $registredossier['lieuEntree']); ?>" class="form-control" id="lieuEntree" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateEntree" class="control-label">DateEntree</label>
						<div class="form-group">
							<input type="text" name="dateEntree" value="<?php echo ($this->input->post('dateEntree') ? $this->input->post('dateEntree') : $registredossier['dateEntree']); ?>" class="has-datepicker form-control" id="dateEntree" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nationTransp" class="control-label">NationTransp</label>
						<div class="form-group">
							<input type="text" name="nationTransp" value="<?php echo ($this->input->post('nationTransp') ? $this->input->post('nationTransp') : $registredossier['nationTransp']); ?>" class="form-control" id="nationTransp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="modeTransp" class="control-label">ModeTransp</label>
						<div class="form-group">
							<input type="text" name="modeTransp" value="<?php echo ($this->input->post('modeTransp') ? $this->input->post('modeTransp') : $registredossier['modeTransp']); ?>" class="form-control" id="modeTransp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="valeurDouane" class="control-label">ValeurDouane</label>
						<div class="form-group">
							<input type="text" name="valeurDouane" value="<?php echo ($this->input->post('valeurDouane') ? $this->input->post('valeurDouane') : $registredossier['valeurDouane']); ?>" class="form-control" id="valeurDouane" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DroitPercu" class="control-label">DroitPercu</label>
						<div class="form-group">
							<input type="text" name="DroitPercu" value="<?php echo ($this->input->post('DroitPercu') ? $this->input->post('DroitPercu') : $registredossier['DroitPercu']); ?>" class="form-control" id="DroitPercu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="entrepot" class="control-label">Entrepot</label>
						<div class="form-group">
							<textarea name="entrepot" class="form-control" id="entrepot"><?php echo ($this->input->post('entrepot') ? $this->input->post('entrepot') : $registredossier['entrepot']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="apurement" class="control-label">Apurement</label>
						<div class="form-group">
							<textarea name="apurement" class="form-control" id="apurement"><?php echo ($this->input->post('apurement') ? $this->input->post('apurement') : $registredossier['apurement']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="liquidation" class="control-label">Liquidation</label>
						<div class="form-group">
							<textarea name="liquidation" class="form-control" id="liquidation"><?php echo ($this->input->post('liquidation') ? $this->input->post('liquidation') : $registredossier['liquidation']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo ($this->input->post('observation') ? $this->input->post('observation') : $registredossier['observation']); ?></textarea>
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