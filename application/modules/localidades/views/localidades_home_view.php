<div class="box">

	<div class="box-header">
	  <h3 class="box-title">Localidades</h3>
	</div>

	<!-- /.box-header -->
	<div class="box-body">

		<table id="example2" class="table table-bordered table-striped">
		    <thead>
		    <tr>
		      <th>Nombre</th>
		      <th>Estado</th>
		      <th>Acciones</th>
		    </tr>
		    </thead>

		    <tbody>
	    	<?php foreach ($filas as $fila) {
	    		# code...
				echo "<tr>";
	    		echo "<td>".$fila->nombre."</td>";	    		
	    		echo "<td>";
	    		if($fila->habilitado == 0){
	    			echo "<span class='btn btn-danger btn-xs'>Inactivo</span>";
	    		}else{
	    			echo "<span class='btn btn-success btn-xs'>Activo</span>";
	    		}
	    		echo "</td>";
	    		echo "<td align='right'><a class='btn btn-success btn-xs'><i class='fa fa-user'></i> Editar</a> <a class='btn btn-danger btn-xs'><i class='fa fa-user'></i> Eliminar</a></td>";
	    		echo "</tr>";
	    	} ?>
		    </tbody>	
		</table>

	</div>

</div>