<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.css">
   
    </head>
    <body>
    
<div class="jumbotron jumbotron-fluid">
    <div class="container">
       
        <h1 class="display-4">Ótima escolha!</h1>
        <p class="lead">Obrigado por comprar na mirror Fashion!
            Preencha seus dados para efetivar a compra.
        </p>
    </div>
</div>
<div class="container">
   
<div class="card mb-3">
    <div class="card-header">
        <h2>Sua compra</h2>
    </div>
    <div class="card-body">
     
<dl>
    <img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail mb">
    <dt>Produto</dt>
    <dd>Fuzzy Cardigan</dd>

    <dt>Cor</dt>
    <dd>Verde</dd>
    <dt>Tamanho</dt>
    <dd>40</dd>
    <dt>Preço</dt>
    <dd>R$ 129,90</dd>
</dl>
</div>
</div>
<form>
    <fieldset>
        <legend>Dados pessoais</legend>
       
        <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="text" class="form-control" id="nome" name="nome" autofocus>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group mb-3">
                <div class="input-group-pretend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
            </div>
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
        </div>
        <div class="form-group custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
            <label class="custom-control-label" for="newsletter">
                Quero receber Newsletter da Mirror Fashion
            </label> 
        </div>
    </fieldset>
    <fieldset>
        <legend>Cartão de crédito</legend>
        <div class="form-group">
            <label for="numero-cartao">Número - CVV</label>
            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
        </div>
        <div class="form-group">
                <div class="input-group mb-3">
                        <div class="input-group-pretend">
                            <label class="input-group-text" for="bandeira-cartao">Bandeira</label>
                        </div>
                        <select class="custom-select" id="bandeira-cartao">
                            <option disabled selected>Selecione uma opção...</option>
                            <option value="master">MasterCard</option>
                            <option value="visa">VISA</option>
                            <option value="amex">American Express</option>
                        </select>
                </div>            
        </div>
        <div class="form-group">
            <label for="validade-cartao">Validade</label>
            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
        </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">
        <span class="oi oi-tumb-up"></span>
        Confirmar Pedido
    </button>
</form>
</div>
</body>
</html>