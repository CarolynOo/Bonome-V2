(function($){

/*	$('.addPanier').click(function(event){
		event.preventDefault();
		$.get($(this).attr('href'),{},function(data){
			if(data.error){
				alert(data.message);
			}else{
				if(confirm(data.message + '. Voulez vous consulter votre panier ?')){
					// mettre une route car c'est un affichage côté client
					location.href = 'panier/';
				}else{
					$('#total').empty().append(data.total);
					$('#count').empty().append(data.count);
				}
			}
		},'json');
		return false;
	});
*/
})(jQuery);