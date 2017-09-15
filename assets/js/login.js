$(function(){
	$('#slogin').click(function()
	{
		$.post($('#flogin').attr('action'),
		function(info){
		login();
		$('#dialog').dialog('open');
		});
	});
	function login()
	{
		$('#dialog').html(info);
		$('#dialog').dialog({
			dialogClass : 'no-close',
			autoOpen : true,
			modal : true,
			title : "Pesan"
		});
	}
});