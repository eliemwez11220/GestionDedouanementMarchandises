<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Declarants Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('declarant/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Matricule</th>
						<th>NomDeclarant</th>
						<th>Telephone</th>
						<th>Adresse</th>
						<th>Email</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($declarants as $d){ ?>
                    <tr>
						<td><?php echo $d['matricule']; ?></td>
						<td><?php echo $d['nomDeclarant']; ?></td>
						<td><?php echo $d['telephone']; ?></td>
						<td><?php echo $d['adresse']; ?></td>
						<td><?php echo $d['email']; ?></td>
						<td>
                            <a href="<?php echo site_url('declarant/edit/'.$d['matricule']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('declarant/remove/'.$d['matricule']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
