function agregardatos(nombre, area, sexo, correo) {
    cadena = "nombre=" + nombre + "&area=" + area + "&sexo=" + sexo + "&correo=" + correo;

    $.ajax({
        type: "POST",
        url: '../PHP/agregarDatos.php',
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../componentes/tablas.php');
                alertify.success("Se agregó con exito");
            }
            else {
                alertify.error("Fallo el servidor");
            }
        }
    });
}

function agregaform(datos) {
    d = datos.split('||');
    $('#id').val(d[0]);
    $('#nombre1').val(d[1]);
    $('#area1').val(d[2]);
    $('#sexo1').val(d[3]);
    $('#correo1').val(d[4]);
}

function actualizadatos() {
    id = $('#id').val();
    nombre = $('#nombre1').val();
    area = $('#area1').val();
    sexo = $('#sexo1').val();
    correo = $('#correo1').val();

    cadena = "id=" + id + "&nombre=" + nombre + "&area=" + area + "&sexo=" + sexo + "&correo=" + correo;

    $.ajax({
        type: "POST",
        url: '../PHP/actualizadatos.php',
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../componentes/tablas.php');
                alertify.success("Se actualizo con exito :)");
            }
            else {
                alertify.error("Fallo el servidor :(");
            }
        }

    });

}
function preguntarSiNo(id) {
    alertify.confirm('Eliminar datos', '¿Esta seguro que desea eliminar el registro?',
        function () { eliminardatos(id) }
        , function () { alertify.error('Cancelado') });

}

function eliminardatos(id){

    cadena= "id=" + id;
    $.ajax({
        type:"POST",
        url:"../PHP/eliminardatos.php",
        data: cadena,
        success:function(r){
            if(r==1){
             $('#tabla').load('../componentes/tablas.php');
              alertify.success("Se elimino con exito :)");
            }
            else{
                alertify.error("Fallo el servidor :(");
            }
        }

    });


}