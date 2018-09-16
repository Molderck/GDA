$(function () {

    // Lista de Alimentos por nombre
    $.post('../ControlNombreAlimento.php').done(function (respuesta)
    {
        $('#nombreAlimentoGDA').html(respuesta);
    });

    // Lista de Alimentos por tipología	
    $('#nombreAlimentoGDA').change(function ()
    {
        var nombreAlimentoGDAFiltro = $(this).val();

        // Lista de Tipologías
        $.post('../ControlTipologiaAlimento.php', {nombreAlimento: nombreAlimentoGDAFiltro}).done(function (respuesta)
        {
            $('#tipologiaAlimentoGDA').html(respuesta);
        });
    });
});


