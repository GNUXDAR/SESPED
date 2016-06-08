//created by @gnuxdar
        // notificacion en el input
        $(document).ready(function (){
            $('#codigo_equipo').popover({
                'placemenet': 'right',
                'html' : true,
                'trigger' : 'hover',
                'content' : '<ul><li>Ingrese Codigo</li><li>Ejemplo: PC1</li></ul>',
                'title' : 'Ingrese Codigo Equipo'

            });

                $('#pass_usr').popover({
                'placemenet': 'right',
                'html' : true,
                'trigger' : 'focus',
                'content' : '<ul><li>debe contener letras, numeros, caracter especial</li><li>Minimo 8 caracteres</li></ul>',
                'title' : 'Ingrese Su Clave'

            });

                $('#pass_usr2').popover({
                'placemenet': 'right',
                'html' : true,
                'trigger' : 'focus',
                'content' : '<ul><li>La clave debe ser igual a la anterior</li></ul>',
                'title' : 'Vuelva a Ingresar Su Clave'

            });

                
        });