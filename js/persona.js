$.post(baseurl+"cciudad/getCiudades",
	{
		"sitReg": 1	
	},
	function (data){
		var c = JSON.parse(data);
		$.each(c, function(i, item){
			$('#cbo_ciudad').append('<option value="'+item.idCiudad+'">'+item.ciudad+'</option>');
		});		
	});

$('#cbo_ciudad').change(function(){
	$('#cbo_ciudad option:selected' ).each(function(){
		var id = $('#cbo_ciudad').val();
		//alert(id);

	});
});

$('#btn_getPersona').click(function(){
	$('#tbl_persona tbody').html(
				'<tr>'+
				'	<th style="width: 10px">#</th>'+
				'	<th>Nombre</th>'+
				'	<th>Paterno</th>'+
				'	<th>Materno</th>'+
				'	<th>DNI</th>'+
				'	<th>Ciudad</th>'+				
				'</tr>'
		);
	$.post(baseurl+"cpersona/getPersona",
		function(data){
			var p = JSON.parse(data);	
			$.each(p, function(i, item){
				var ix = i+1;
				$('#tbl_persona').append(					
				'<tr>'+
					' <td>'+ix+'</td>'+
					' <td>'+item.nombre+'</td>'+
					' <td>'+item.appaterno+'</td>'+
					' <td>'+item.apmaterno+'</td>'+
					' <td>'+item.dni+'</td>'+
					' <td>'+item.ciudad+'</td>'+
				'</tr>'

					);
			});
		});
});


