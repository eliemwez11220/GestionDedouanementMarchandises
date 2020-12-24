<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Marchandises Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('marchandise/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Mar Id</th>
						<th>Client Sid</th>
						<th>Cotation Sid</th>
						<th>BonLivraison Sid</th>
						<th>Designation</th>
						<th>Quantite</th>
						<th>Poids</th>
						<th>Volume</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($marchandises as $m){ ?>
                    <tr>
						<td><?php echo $m['mar_id']; ?></td>
						<td><?php echo $m['client_sid']; ?></td>
						<td><?php echo $m['cotation_sid']; ?></td>
						<td><?php echo $m['bonLivraison_sid']; ?></td>
						<td><?php echo $m['designation']; ?></td>
						<td><?php echo $m['quantite']; ?></td>
						<td><?php echo $m['poids']; ?></td>
						<td><?php echo $m['volume']; ?></td>
						<td>
                            <a href="<?php echo site_url('marchandise/edit/'.$m['mar_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('marchandise/remove/'.$m['mar_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> supprimer</a>
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
