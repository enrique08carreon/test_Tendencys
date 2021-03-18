get_orders()
function get_orders(){
	jQuery.ajax({
		url:"model/getData.php",
		type:"POST",
		dataType:"json",
		beforeSend: function(){	

		}
	}).done(function(respuesta){
		console.log(respuesta);
		respuesta.orders.forEach(function(order){
			jQuery("#orders").append(
				"<div class='order-card' id='"+order.number+"' value='"+ JSON.stringify(order.items) +"'>"+
					"<div class='order-content'>"+
							"<div class='info-content'><label class='info-header'>Orden: </label><label class='name-order info-text'>"+order.number+"</label></div>"+
					"</div>"+
				"</div>")
				

		})
		 jQuery(".order-card:even").css("background-color", "#c5c5c5");

	}).fail(function(respuesta){

	})
}