<?php 

    class View_Chamado {
        /**
         * função para montar a tabela de consulta dos Chamados cadastrados no banco de dados
         */
        public function montaConsulta() {
            echo '
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Data Abertura</th>
                            <th scope="col">Usuário Atual</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações Disponíves</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Alterar | Excluir </td>
                        </tr>
                    </tbody>
                </table>
            ';
        }
    }
    
?>