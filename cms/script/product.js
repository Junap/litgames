var tabla1;

//Función que se ejecuta al foto
function init(){
	showform(false);
	listing();

	$("#formulario1").on("submit",function(e)
	{
		saveandedit(e);	
	})
		//función para edición de imagen

    $("#im5").hide();

}

//Función limpiar
function clean()
{
    $("#idgame").val("");
	$("#name").val("");
    $("#duration").val("");
	$("#description").val("");
   
    
}

//Función mostrar formulario
function showform(flag)
{
	clean();
	if (flag)
	{
		$("#listadoregistros1").hide();
		$("#formularioregistros1").show();
		$("#btnGuardar1").prop("disabled",false);
		$("#btnagregar1").hide();
	}
	else
	{
		$("#listadoregistros1").show();
		$("#formularioregistros1").hide();
		$("#btnagregar1").show();
	}
}

//Función cancel form
function cancelform()
{
	clean();
	showform(false);
}

//Función Listar
function listing()
{
	tabla1=$('#tbllistado1').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla1
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/games.php?op=listing',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function saveandedit(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar1").prop("disabled",true);
	var formData = new FormData($("#formulario1")[0]);

	$.ajax({
		url: "../ajax/games.php?op=saveandedit",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          showform(false);
	          tabla1.ajax.reload();
	    }

	});
	clean();
}

function showform(idgame)
{
	$.post("../ajax/games.php?op=show",{idgame : idgame}, function(data, status)
	{
		data = JSON.parse(data);		
		showform(true);

        $("#idgame").val(data.idgame);
        $("#name").val(data.name);
        $("#duration").val(data.duration);
        $("#description").val(data.description);
        

 	})
}




init();