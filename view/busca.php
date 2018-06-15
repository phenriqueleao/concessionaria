<?php
    include '../model/crudEstoque.php';

    $pesquisa = $_POST["palavra"];

    if($pesquisa == "tudo")
    {
    	$resultado = mostrarProduto();
    }
    else
    {
    	$resultado = mostrarConcessionariaPesquisar($pesquisa);
    }

    if(mysqli_num_rows($resultado) <= 0)
    {
    	echo '<td class="text-light">Nenhuma descrição/marca encontrada</td>';
    }
    else
    {
    	while($linha = mysqli_fetch_assoc($resultado))
    	{
    		$codigoEstoque = $linha['codigoEstoque'];
            $nome = $linha['nome'];
    		$preco = $linha['preco'];
            $ano = $linha['ano'];

    		echo "
    			<tr>
    				<td class='text-light'>".$nome."</td>
                    <td class='text-light'>".$ano."</td>
                   <td class='text-light'>".$preco."</td>
                    <td>
                      <a class='btn btn-primary' href='editarEstoque.php?codigoEstoque=".$codigoEstoque."'>Editar</a>
                    </td>
    			</tr>
    		";
    	}
    }
?>