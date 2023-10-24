function deleteRegistroPaginacao(rotaurl, idDoregisto){
    
    if (confirm('Deseja confirmar a exclusão?')) 
    {
        $.ajax({
            url: rotaurl,
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                id: idDoregisto, 
            },
            beforeSend: function (){
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000,
                });
            },
        }).done(function(data){
            $.unblockUI();
            if (data.success == true) {
                window.location.reload();
            }else{
                alert('Não foi Excluir dados');
            }
        }).fail(function (data){
            $.unblockUI();
            alert('Não foi possivel buscar os dados')
        });
    }
}

$('#mascara_valor').mask('#.##0,00', {reverse: true});