<div class="page-heading">
    <h3 class="page-title"><strong>1.Listado Construcción de cubos</strong></h3>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" >
            	<div class="ibox-header">
            		<a href="<?=base_url()?>cubos/nuevo" class="btn btn-success">Nuevo</a>
            	</div>
                <div class="ibox-body">
                	<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Id</th>
									<th>Puntaje total</th>
									<th>Puntaje total sin bonif.</th>
									<th>Fecha</th>
									<th>Accion</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($info as $key => $value): ?>
									<tr>
										<td><?=$value->cubo_id?></td>
										<td><?=$value->puntaje_total?></td>
										<td><?=$value->puntaje_total_sin?></td>
										<td><?=$value->created_at?></td>
										<td><a href="<?=base_url()?>cubos/edit/<?=$value->cubo_id?>" class="btn btn-primary">Editar</a></td>
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