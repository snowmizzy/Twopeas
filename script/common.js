$(document).ready(function()
{
	var ticker = function()
	{
		setTimeout(function(){
			$('#ticker li:first').animate( {marginBottom: '-350px'}, 1700, function()
			{
				$(this).detach().appendTo('ul#ticker').removeAttr('style');	
			});
			ticker();
		}, 5000);
	};
	ticker();

	var quote= $('#quote')
	quote.hide();
	$(window).load(function(){
		quote.fadeIn(1500, "linear")
	});
	
});