<?php 
include"init.php";
include"conexao.php"; ?>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="span12">
      <div class="head">
        <div class="row-fluid">
            <div class="span12">
                <div class="span6">
                    <h1 class="muted">Peladeiros do IFPE</h1>

                </div>

                <div class="span4 offset2" style="margin-top:15px;">
                   <!--  <button  href="cadastro.php" class="btn pull-right" type="button">Sign In</button> -->
                </div>
            </div>
        </div>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li>
                            <a href="cadastro.php">Cadastre-se</a>
                        </li>
  <?php if (is_logged()): ?>
            <li><a href="editar.php"><?=($_SESSION['user-logged'])?></a></li>
            <li><a href="logout.php">sair </a></li>
          <?php else: ?>
            <li><a href="login.php">login</a></li>
          <?php endif ?>

                        <li>
                            <a href="jogador.php">Participantes</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
