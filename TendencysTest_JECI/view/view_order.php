<div class='block-complete-view'>
	<div id="close" class="close-block">X</div>
	<div class='view-order'>
		<div class='block-title' id='order'></div>
		<div class='info-order'>
			<div class='content-order' >
				<table>
					<tr class='head-table' id ='tr'>
						<th colspan="4">Productos</th>
					</tr>
					<tr class='head-table' id ='tr-0'>
						<th>Sku</th>
						<th>Nombre</th>
						<th>Cantidad</th>
						<th>Precio</th>
					</tr>
					<tr id="tr-final">
						
						<td class="info-table" colspan="3">TOTAL:</td>
						<td id="total"></td></tr>

				</table>
				<div class='new-product'><button type ='button' id='pagar'>Pagar</button></div>
			</div>
			<div class='edit-order' id='add-items'>
				<div class="block-title">Editar/Agregar producto</div>
				<form class=''>
					<div class='new-product'>
						<div class ='info-header'>SKU</div> 
						<input type='text' class='add-product' id='sku' placeholder="Clave o codigo del producto">
					</div>
					<div class='new-product'>
						<div class ='info-header'>Nombre</div> 
						<input type='text' class='add-product' id='name' placeholder="Agrega un nombre">
					</div>
					<div class='new-product'>
						<div class ='info-header'>Cantidad</div> 
						<input type='number' class='add-product' id='cant'>
					</div>
					<div class='new-product'>
						<div class ='info-header'>Precio</div> 
						<input type='text' class='add-product' id='price'>
						<div class ='info-header' style='font-size: 18px'>MXN</div> 
					</div>
					<div class='new-product'><button type = 'button' id='agregar'>Agregar</button></div>
				</form>
			</div>
		</div>
	</div>
</div>