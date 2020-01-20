<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        @media only screen and (max-width: 767px){
            .modal-body h4{
                font-size: 18px !important;
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
   
</head>
<body>

<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Portôes Guarulhos</h5>
        
      </div>
      <div class="modal-body">
        
        <?php
        if(isset($_SESSION['msg3'])):
            echo $_SESSION['msg3'];
            unset($_SESSION['msg3']);
        endif;
        ?>


        
      
      </div>
      <div class="modal-footer">
        <a href="./index.php"><button type="button" class="btn btn-primary">Voltar ao Site</button></a>
      </div>
    </div>
  </div>
</div>

<script>
        $(document).ready(function(){
            $('#ExemploModalCentralizado').modal('show');
        });
    </script>
    
   
</body>
</html>