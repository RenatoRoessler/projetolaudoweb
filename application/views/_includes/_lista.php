<div class="col-sm-12 col-xs-12 sys-lista-filter">
	<div class="col-sm-7 col-xs-7">
		<input type="text" class="col-sm-12 col-xs-12 form-control input-sm" value="" placeholder="Filtrar registros" 
			onkeydown="listaFiltro($(this),'tbl<?php echo $LISTA['Label'] ;?>')" onkeyup="listaFiltro($(this),'tbl<?php echo $LISTA['Label'] ;?>')" >
	</div>
	<div class="col-sm-5 col-xs-5"></div>
</div>
<div class="col-sm-12 col-xs-12 table-responsive">
	<table id="tbl<?php echo $LISTA['Label'];?>" class="table table-condensed table-hover">
	    <?php
	    	// Montando o Head da Tabela
	    	$listaHead = implode("</th><th>",$LISTA['Colunas']);
		?>
		<thead>
			<tr>
				<th style="width:30px;" >
					<input type="checkbox" onclick="marcarCheckBox($(this),'tbl<?php echo $LISTA['Label'];?>')""/>
				</th>
				<th><?php echo $listaHead;?></th>
			</tr>
		</thead>
		<tbody>
		<?php     
	    	//	Caso lista de itens não exista, precisamos trasnformar ela em um array
	      	( count($LISTA['Itens']) == 0  ) ? $LISTA['Itens'] = array() : null ;
	       	foreach ( $LISTA['Todos'] as $b => $v ){
	       		//	Compara os dois arrays para ficar apenas com o que existe nos dois
	       		$listaLinha = implode( "</td><td>", array_intersect_key( $v, array_flip($LISTA['Colunas']) ));
	    ?>	
			<tr>
				<td>
					<input type="checkbox" name="<?php echo $LISTA['Label'];?>[]" value="<?php echo $v["ID"]?>" 
						<?php if( array_search($v["ID"], $LISTA['Itens'] ) ) echo "checked" ; ?> /> 
				</td>				
	    		<td><?php echo $listaLinha; ?></td>
	    	</tr>
		<?php 
	       	}
		?>     
		</tbody>  		
	</table>
</div>

