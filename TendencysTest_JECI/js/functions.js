jQuery(document).on("click",".order-card",function(){  //Permite que al hacer click en una orden...
	var order = jQuery(this).attr("id");			// obtiene el id de la orden
	jQuery("#order").text('Detalles de la orden: '+order);//Escribe el id de la orden para mostrarlo
	var items = JSON.parse(jQuery(this).attr("value"));//
	var cant = 0;

	items.forEach(function(product){
		// console.log(product.name)
		jQuery("#tr-"+cant).after(
			"<tr id='tr-"+(cant+1)+"' class='product'>"+
				"<td>"+product.sku+"</td>"+
				"<td>"+product.name+"</td>"+
				"<td class='quant' value='"+product.quantity+"'>"+product.quantity+"</td>"+
				"<td class='price' value='"+product.price+"'>MX$"+product.price+"</td>"+
			"</tr>")
	})
	
	jQuery(".block-complete-view").css("display","block")
})

jQuery(document).on("click","#pagar",function(){
	jQuery('body').append("<div class='alert success'>Aviso: La orden ha sido pagada.</div>")
	setTimeout(function(){
		jQuery('.alert').addClass('exit')
		jQuery('.alert').remove()
	},5000)
})

jQuery(document).on("click","#agregar",function(){
	var form = jQuery(".add-product")
	var valid = valid_form(form)
	if(valid !== false){
		agregar_producto(valid)
	}
	calcularTotal()
})

function valid_form(form){
	var inputInvalid = 0;
	var valid_product = []
	jQuery(form).each(function(ind,input){
		// console.log(input.attr(""))
		var id =jQuery(input).attr('id')
		if(jQuery(input).val() == '' || jQuery(input).val() == 0){
			jQuery('#'+id).after("<div class='error'>*Requerido</div>")
			inputInvalid++
		}else{
			valid_product[id] = jQuery(input).val()
		}
	})
	if (inputInvalid!=0) {
		return false;
	}else{
		return valid_product;
	}
}

function agregar_producto(valid_product){
	// console.log(valid_product)
	var insert = jQuery(".product").last().attr("id")
	var index = insert.split("-")
	jQuery("#"+insert).after("<tr id='tr-"+(index[1]+1)+"' class='product'>"+
				"<td>"+valid_product.sku+"</td>"+
				"<td>"+valid_product.name.toUpperCase()+"</td>"+
				"<td class='quant' value='"+valid_product.cant+"'>"+valid_product.cant+"</td>"+
				"<td class='price' value='"+valid_product.price+"'>MX$"+valid_product.price+"</td>"+
			"</tr>")
}

function calcularTotal(){
	var totalPublico = 0;
	jQuery(".product").each(function(index, tp){
		var cantidad =parseInt(jQuery(tp).children('.quant').attr("value"));
		var precio =parseInt(jQuery(tp).children('.price').attr("value"));			
			totalPublico+=cantidad*precio

	jQuery("#total").html("MX$"+totalPublico)
	})
	return totalPublico;
}

jQuery("#close").click(function(){
	jQuery(".block-complete-view").css("display","");	
	jQuery(".product").remove()
});