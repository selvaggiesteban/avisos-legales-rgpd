(function( $ ) {
    'use strict';

    $(function() {
        // Mostrar/ocultar campo de nombre del responsable
        function toggleResponsableNombre() {
            if ($('#responsable_tipo').val() === 'persona_fisica') {
                $('#responsable_nombre_field').show();
            } else {
                $('#responsable_nombre_field').hide();
            }
        }

        // Mostrar/ocultar campo de empresas compartidas
        function toggleEmpresasCompartidas() {
            if ($('#compartir_datos').val() === 'si') {
                $('#empresas_compartidas_field').show();
            } else {
                $('#empresas_compartidas_field').hide();
            }
        }

        // Inicializar campos al cargar la página
        toggleResponsableNombre();
        toggleEmpresasCompartidas();

        // Actualizar campos cuando cambian los selectores
        $('#responsable_tipo').on('change', toggleResponsableNombre);
        $('#compartir_datos').on('change', toggleEmpresasCompartidas);

        // Validación del formulario
        $('form').on('submit', function(e) {
            var isValid = true;
            $('input[required], select[required], textarea[required]').each(function() {
                if ($(this).val() === '') {
                    isValid = false;
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Por favor, complete todos los campos requeridos.');
            }

            // Validar que al menos una página legal esté seleccionada al crear páginas
            if (e.originalEvent.submitter.name === 'create_pages') {
                var pagesSelected = $('input[name="pages_to_create[]"]:checked').length > 0;
                if (!pagesSelected) {
                    e.preventDefault();
                    alert('Por favor, seleccione al menos una página legal para crear.');
                }
            }
        });
    });

})( jQuery );