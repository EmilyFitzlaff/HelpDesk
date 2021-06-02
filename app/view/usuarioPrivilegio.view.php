<?php 

    class View_UsuarioPrivilegio {
        /**
         * função para montar a consulta dos Tipos de Privilégios cadastrados no banco de dados
         */
        public function montaConsulta() {
            echo '
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações Disponíves</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Alterar | Excluir </td>
                        </tr>
                    </tbody>
                </table>
            ';
        }
    }
    
?>