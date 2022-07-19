var table;

//function that is always executed at the start
function init(){
    mostrarform(false);
    listing();
}
function clean(){
    $("#idgame").val("");
    $("#name").val("");
    $("#duration").val("");
    $("#description").val("");
}
function showform(flag){
    clean();
    if (flag)
    {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#formularioguardar").prop("disabled",false);
    
    }
    else
    {
        $("#listadoregistros").show();
        $("#formularioregistros").hide();    
    }

}
//create function to cancel a form
function cancelform(){
clean();
showform(false);

}

//List function
function listing()
{
    table=$('#tbllistado').dataTable(
        {
            "aProcessing": true,
            "aServerSide": true,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
            "ajax":
            {
                url: '../ajax/games.php?op=listing',
                type:"get",
                dataType:"json",
                error: function(e){
                    console.log(e.responseText);
                }
            },
            "bDestroy":true,
            "iDisplayLength": 5,
            "order":[[0,"desc"]]
            }).DataTable();
    
}

init();