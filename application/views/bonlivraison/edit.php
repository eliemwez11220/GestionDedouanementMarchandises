<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bonlivraison Edit</h3>
            </div>
			<?php echo form_open('bonlivraison/edit/'.$bonlivraison['bon_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="declarant_sid" class="control-label"><span class="text-danger">*</span>Declarant</label>
						<div class="form-group">
							<select name="declarant_sid" class="form-control">
								<option value="">select declarant</option>
								<?php 
								foreach($all_declarants as $declarant)
								{
									$selected = ($declarant['matricule'] == $bonlivraison['declarant_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$declarant['matricule'].'" '.$selected.'>'.$declarant['nomDeclarant'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('declarant_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numBon" class="control-label"><span class="text-danger">*</span>NumBon</label>
						<div class="form-group">
							<input type="text" name="numBon" value="<?php echo ($this->input->post('numBon') ? $this->input->post('numBon') : $bonlivraison['numBon']); ?>" class="form-control" id="numBon" />
							<span class="text-danger"><?php echo form_error('numBon');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateBon" class="control-label">DateBon</label>
						<div class="form-group">
							<input type="text" name="dateBon" value="<?php echo ($this->input->post('dateBon') ? $this->input->post('dateBon') : $bonlivraison['dateBon']); ?>" class="has-datepicker form-control" id="dateBon" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Concernee" class="control-label">Concernee</label>
						<div class="form-group">
							<input type="text" name="Concernee" value="<?php echo ($this->input->post('Concernee') ? $this->input->post('Concernee') : $bonlivraison['Concernee']); ?>" class="form-control" id="Concernee" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateDedouane" class="control-label">DateDedouane</label>
						<div class="form-group">
							<input type="text" name="dateDedouane" value="<?php echo ($this->input->post('dateDedouane') ? $this->input->post('dateDedouane') : $bonlivraison['dateDedouane']); ?>" class="has-datepicker form-control" id="dateDedouane" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo ($this->input->post('observation') ? $this->input->post('observation') : $bonlivraison['observation']); ?></textarea>
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