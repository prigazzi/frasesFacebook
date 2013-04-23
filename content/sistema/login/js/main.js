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
        var str = armarObjeto();
        $.post('abrir.php', str ,function(data){
            debugger;
            if(data == 'error'){
                alert('error en login');
            }else{
                window.location = '../../index.php';
            }
        });
    });

    $('#cerrar').click(function(){
        $.post('cerrar.php', function(){
           alert('sesion cerrada');
        });
    });
}

function armarObjeto(){
    objeto =  {
        usuario: $('#nombre').val(),
        pass: $('#pass').val()
    }
    return objeto;
}