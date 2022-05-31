<!DOCTYPE html>
<html>
    <body>
        <?php
            //Função de filtro
            function filtra_valor($valor)
            {
                if ($valor==="Cachorro")
                {
                    return "Dog";
                }
                
                return $valor;
            }
            //Declarando o vetor
            $vetor_de_valores=array("Cavalo","Cachorro","Gato");
            //Executando o filtro
            $teste = array_map("filtra_valor",$vetor_de_valores);
            echo var_dump($teste);            
        ?>
    </body>
</html>