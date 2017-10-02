<!DOCTYPE html>
<html>
    <head>
        <title>teste</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body onload="listarMercadorias();">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2></h2>
                    <h2 style="text-align: center;">Controle de Mercadorias</h2>
                    <br/>
                    <br/>
                    <div id="response"></div>
                    <br/>
                    <br/>
                    <!-- Botão que Modal de Cadastro de Mercadorias -->
                    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">Nova Mercadorias</button>
                    
                    <!-- Modal de Cadastro de Mercadorias-->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Form de Cadastro de Mercadorias</h4>
                                </div>
                                <br/>
                                <br/>
                                <form id="frm_mercadoria">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="codigoDaMercadoria">Codigo:</label>
                                            <input type="number" class="form-control" id="codigoDaMercadoria" placeholder="Código da Mercadoria" name="codigoDaMercadoria" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomeDaMercadoria">Nome:</label>
                                            <input type="text" class="form-control" id="nomeDaMercadoria" placeholder="Nome da Mercadoria" name="nomeDaMercadoria" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tipoDaMercadoria">Tipo</label>
                                            <input type="text" class="form-control" id="tipoDaMercadoria" placeholder="Tipo de Mercadoria" name="tipoDaMercadoria" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantidade">Quantidade:</label>
                                            <input type="number" class="form-control" id="quantidade" placeholder="Qtd da Mercadoria" name="quantidade" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="preco">Preço:</label>
                                            <input type="number" class="form-control" id="preco" placeholder="Preço da Mercadoria" name="preco" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tipoDoNegocio">Tipo de Negocia:</label>
                                            <select class="form-control" id="tipoDoNegocio" name="tipoDoNegocio" required>
                                                <option  selected disabled></option>
                                                <option value="Compra">Compra</option>
                                                <option value="Compra">Venda</option>
                                            </select>
                                        </div>
                                    </div>
                                
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="tbn-clear">Cancelar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-save">Salvar</button>
                                         
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <table id="tableMercadoria" class="table-responsive table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Código</th>
                                <th class="text-center">Nome da Nercadoria</th>
                                <th class="text-center">Tipo da Nercadoria</th>
                                <th class="text-center">Qtd.</th>
                                <th class="text-center">Preço</th>
                                <th class="text-center">Tipo de Negócio</th>
                                <th class="text-center">Ação</th>
                        	</tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div> 
            </div>        
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
</html>