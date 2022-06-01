function validarConductor() {
    var documento = $('#num_docume').val();
    var nom_conduc = $('#nom_conduc').val();
    var apellidos = $('#apellidos').val();
    var telefono = $('#num_telef').val();
    var ciudad = $('#nom_ciudad').val();

    if (!documento) {
        alert('por favor ingrese documento');
        return false;
    }

    if (!nom_conduc) {
        alert('por favor ingrese primer nombre del conductor');
        return false;
    }

    if (!apellidos) {
        alert('por favor ingrese apellidos del conductor');
        return false;
    }

    if (!telefono) {
        alert('por favor ingrese el telefono');
        return false;
    }

    if (!ciudad) {
        alert('por favor ingrese la ciudad');
        return false;
    }

    return true;
}

function validarPropietario() {
    var documento = $('#num_docume').val();
    var nom_propie = $('#nom_propie').val();
    var apellidos = $('#apellidos').val();
    var telefono = $('#num_telefo').val();
    var ciudad = $('#nom_ciudad').val();

    if (!documento) {
        alert('por favor ingrese documento');
        return false;
    }

    if (!nom_propie) {
        alert('por favor ingrese primer nombre del propietario');
        return false;
    }

    if (!apellidos) {
        alert('por favor ingrese apellidos del propietario');
        return false;
    }

    if (!telefono) {
        alert('por favor ingrese el telefono');
        return false;
    }

    if (!ciudad) {
        alert('por favor ingrese la ciudad');
        return false;
    }

    return true;
}

function validarVehiculo() {
    var placa = $('#num_placa').val();
    var color = $('#nom_color').val();
    var marca = $('#nom_marca').val();
    var tipo_vehicu = $('#tip_vehicu').val();
    var conductor = $('#num_conduc').val();
    var propietario = $('#num_propie').val();

    if (!placa) {
        alert('por favor ingrese la placa');
        return false;
    }

    if (!color) {
        alert('por favor ingrese el color');
        return false;
    }

    if (!marca) {
        alert('por favor ingrese la marca');
        return false;
    }

    if (!tipo_vehicu) {
        alert('por favor ingrese el tipo de vehiculo');
        return false;
    }

    if (!conductor) {
        alert('por favor ingrese el conductor');
        return false;
    }

    if (!propietario) {
        alert('por favor ingrese el propietario');
        return false;
    }

    return true;
           
}