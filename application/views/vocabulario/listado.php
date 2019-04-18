<div class="page-heading">
    <h3 class="page-title"><strong>6. Listado Vocabulario</strong></h3>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" >
            	<div class="ibox-header">
            		<a href="<?=base_url()?>vocabulario/nuevo" class="btn btn-success">Nuevo</a>
            	</div>
                <div class="ibox-body">
                	<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Id</th>
									<th>Puntaje total</th>
									<th>Fecha</th>
									<th>Accion</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($info as $key => $value): ?>
									<tr>
										<td><?=$value->vocabulario_id?></td>
										<td><?=$value->puntaje_total?></td>
										<td><?=$value->created_at?></td>
										<td><a href="<?=base_url()?>vocabulario/edit/<?=$value->vocabulario_id?>" class="btn btn-primary">Editar</a></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>