$(document).ready(function(){




$("p:contains(codenousk:)").addClass("codensk");



$('.codensk').each(function() {

 $(this).replaceWith($('<div class="codenk">' +this.innerHTML +'</div>'));

});



$('.codenk').each(function(){
        var pai = this;
        var filhos  = $(this).first().nextUntil(".codenk");
	filhos.each(function(){
		console.log(this);
		$(this).addClass('bg-vermelho');
	});

});


});
