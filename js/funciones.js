

window.addEventListener('load', cargaInicial, false);
function cargaInicial(){
var boton=document.getElementById('guardar'); boton.addEventListener('click', agregarElementos, false);
var validarVacio = false;
var validarEmail = false;
}

function mostrarPrendasAjax(){
        $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'mantenimiento.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP
        data: { key: 'descargar', clima: $('#txt_clima').val(), viaje: $('#txt_viaje').val(), destino: $('#txt_destino').val()}
        }).done(function( datos ) {

            $("#cuerpotabla").html(datos);
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML
        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            $("#msjbox").html("Error al insertar");
        });

}

function mostrarTodasPrendasAjax(){
        $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'mantenimiento.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP
        data: { key: 'mostrar_prendas'}
        }).done(function( datos ) {

            $("#cuerpotabla").html(datos);
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML
        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            $("#msjbox").html("Error al cargar prendas");
        });

}


function insertarPrendasAjax(){
    
    if (validarVacio = true) {
        $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'mantenimiento.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP
        data: { key: 'guardar', nom: $('#txt_nom').val(), clima: $('#txt_clima').val(), viaje: $('#txt_viaje').val(), destino: $('#txt_destino').val()}
        }).done(function( datos ) {
            $('#msjbox').html("Insertado con exito");
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML
            cargarFuncionarios('');
        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            $("#msjbox").html("Error al insertar");
        });
    }
}


//Por medio de AJAX cargamos desde la BD los datos
function cargarFuncionarios(parametro){
	$.ajax({
		type: 'GET', //tipo de paso de parametros
		url: 'mantenimiento.php', //Script PHP donde estan las funciones
		data: {datobusqueda: parametro} //parametros a pasar GET, EJEM: /Page.html?id=2&name=hola
	}).done(function( datos ) {
		$("#cuerpotabla").html(datos); //Cargamos los datos en la tabla html indicada
	}).fail(function (jqXHR, textStatus, errorThrow){
		//En caso de error de carga nos notifica
		$("#msjbox").html(textStatus +": Recurso "+ errorThrow);
	});
}

function eliminarPrendasAjax(){
	$.ajax({
		type: 'POST',
		url: 'mantenimiento.php',
		data: { key: 'eliminar', nom: $('#txt_nom').val(), clima: $('#txt_clima').val(), viaje: $('#txt_viaje').val(), destino: $('#txt_destino').val()}
	}).done(function( datos ) {
		$('#msjbox').html("Eliminado con exito");
		cargarFuncionarios('');
	}).fail(function (jqXHR, textStatus, errorThrow){
		$("#msjbox").html("Error al eliminar");
	});
}

function validarVacio(elemento_id){
	valor = document.getElementById(elemento_id).value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        return false;
	}
}

function validarMaxLength(me,count,e){
	tecla = (document.all) ? e.keyCode : e.which;
	if (tecla==8)
        return true;
    if(me.value.length>=count)
        return false;
}

function validarOnlyLet(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if ((tecla==8)
    || (tecla==241)
    || (tecla==209)
    || (tecla==193)
    || (tecla==201)
    || (tecla==205)
    || (tecla==211)
    || (tecla==218)
    || (tecla==225)
    || (tecla==233)
    || (tecla==237)
    || (tecla==243)
    || (tecla==250))
    return true;
    patron =/[A-Za-z\s]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

function validarOnlyNum(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if ((tecla==8) || (tecla==45))
    	return true;
    patron =/\d/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

function validarEmail(elemento_id){
   valor = document.getElementById("txt_email").value;
    if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor)) ) {
        return false;
    } 
}

function cargarCombos(element){
    var clima = $(element).find("td").eq(1).html();
    var viaje = $(element).find("td").eq(2).html();
    var destino = $(element).find("td").eq(3).html();
    $("#txt_clima option").removeAttr("selected");
    $('#txt_clima [value="2"]').attr('selected',true).trigger("change");;
    //$('#txt_clima').change();
}


