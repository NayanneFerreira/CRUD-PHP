<?php
include_once 'dependencias.php';
?>

<h2 class="text-center">
    Page of Register <i class="fa fa-user-plus"></i>
</h2>
<hr>

<form method="POST" action="../controller/insert_client.php">
    <div class="container">
        <div class="form-row">
            <div class="col-md-6">
                Nome: <i class="fa fa-user"></i>
                <input class="form-control" type="text" name="name" required ><br>
            </div>
            <div class="col-md-6">
                Email: <i class="fa fa-envelope"></i>
                <input class="form-control" type="email" name="email" required ><br>
            </div>
            <div class="col-md-6">
                CPF: <i class="fa fa-address-card" required id="cpf"></i>
                <input class="form-control" type="text" name="cpf" required ><br>
            </div>
            <div class="col-md-6">
                Dt. de Nascimento: <i class="fa fa-calendar"></i>
                <input class="form-control" type="date" name="birth" required><br>
            </div>
            <div class="col-md-6">
                Telefone: <i class="fab fa-whatsapp"></i>
                <input class="form-control" type="text" name="phone" required id="phone"><br>
            </div>
            <div class="col-md-12">
                Endereço: <i class="fa fa-map"></i>
                <input class="form-control" type="text" name="address" required ><br>
            </div>

            <div class="col-md-4">
                <button class="btn btn-primary btn-lg">
                    Insert Client <i class="fa fa-user-plus"></i>
                </button><br><br>
                <a href="..index.php">
                    Voltar
                </a>
            </div>

        </div>
    </div>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
    $(document).ready(function(){

        $("#cpf").mask("000.000.000.00");
        $("#phone").mask("(00) 0000-0000");        

    });
</script>