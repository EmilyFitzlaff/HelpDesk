<?php 

    class View_ChamadoTipo {
        /**
         * função para montar a consulta dos Tipos de Chamados cadastrados no banco de dados
         */
        public function montaConsulta() {
            echo '
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Observação</th>
                            <th scope="col">Data Cadastro</th>
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