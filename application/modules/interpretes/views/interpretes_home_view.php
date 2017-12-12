<div class="box">

	<div class="box-header">
	  <h3 class="box-title">Interpretes</h3>
	</div>

	<!-- /.box-header -->
	<div class="box-body">

		<table id="example2" class="table table-bordered table-striped">
		    <thead>
		    <tr>
		      <th>Nombre</th>
		      <th>Biografia</th>
		      <th>Platform(s)</th>
		      <th>Engine version</th>
		      <th>Estado</th>
		    </tr>
		    </thead>

		    <tbody>
	    	<?php foreach ($filas as $fila) {
	    		# code...
				echo "<tr>";
	    		echo "<td>".$fila->inte_nombre."</td>";
	    		echo "<td>".$fila->inte_biografia."</td>";
	    		echo "<td>".$fila->inte_nombre."</td>";
	    		
	    		echo "<td>";
	    		if($fila->inte_habilitado == 0){
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