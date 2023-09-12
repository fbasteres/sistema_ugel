$(document).ready(function(){
    /* Departamentos eventos change*/

    $('#region').on('change', function(){
        var idDepartamento = this.value;
        $('#provincia').html('');
        $.ajax({
            url: "{{url('api/fetchProvincias')}}",
            type: "POST",
            data: {
                departamento_id: idDepartamento,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result){
                $('#provincia').html('<option value="">Selecionar Provincia</option>');
                $.each(result.provincias, function(key, value){
                    $('#provincia').append('<option value="' + value.id + '">' + value.name + '</option>');
                });
                $('#distrito').html('<option value="">Selecionar Distrito</option>');
            }
        })
    })


    /* Provincias eventos change */

    $('#provincia').on('change', function(){
        var idProvincia = this.value;
        $('#distrito').html('');
        $.ajax({
            url: "{{url('api/fetchDistritos')}}",
            type: "POST",
            data: {
                departamento_id: idProvincia,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (res){
                $('#distrito').html('<option value="">Selecionar Distrito</option>');
                $.each(res.distritos, function(key, value) {
                    $('#distrito').append('<option value="' + value.id + '">' + value.name + '</option>');
                });
            }
        })
    })
})