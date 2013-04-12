/**
 * Creado por Alan.
 * User: 4D
 * Date: 12/04/13
 * Time: 2:53
 * To change this template use File | Settings | File Templates.
 */
function lanzar(){
    alert('fui lanzado desde login! ! !');
    $('#abrir').click(function(){
        $.post('abrir', function(){
            alert('sesion abierta');
        });
    });
    $('#cerrar').click(function(){
        $.post('cerrar', function(){
           alert('sesion cerrada');
        });
    });
}