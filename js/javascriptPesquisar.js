$(function()
{
    $('#pesquisa').keyup (function()
    {
        var pesquisa = $(this).val();
        if(pesquisa != '')
        {
            var dados = {
                palavra : pesquisa
            }
            $.post('../view/busca.php', dados, function(retorna){
                $('.table-results').html(retorna);
            });
        }
        else
        {
            var dados = 
            {
                palavra : "tudo"
            }
            $.post('../view/busca.php', dados, function(retorna)
            {
                $('.table-results').html(retorna);
            });
        }

    });
});