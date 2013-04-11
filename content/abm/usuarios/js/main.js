/**
 * Creado por Alan.
 * User: 4D
 * Date: 5/04/13
 * Time: 16:21
 */

function lanzar(){
    $.post('buscar', function(data) {
        $('#contenido').append(data);
    });
}