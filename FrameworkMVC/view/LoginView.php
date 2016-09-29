<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="view/css/bootstrap.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
        
    
	<script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrap.min.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
  <script src="view/js/app.js"></script>
  



</head>
<body style="background-color: #d7ccc8  ;">
   <?php include("view/modulos/modal.php"); ?>
     <?php include("view/modulos/head.php"); ?>
       
	
 <form id="form-login" action="<?php echo $helper->url("usuarios","Loguear"); ?>" method="post" class="col-lg-12" style="padding-top:100px;">
                         
    <div id="login-overlay" class="modal-dialog" >
      <div class="modal-content">
          
          <div class="modal-body">
              
              <div class="row" >
               <div class="col-lg-6" >
                      <div class="well">
                              <div class="form-group">
                                  <label for="usuarios" class="control-label">Usuario</label>
                                  <input type="text" class="form-control" id="usuarios" name="usuarios" value=""  placeholder="Usuario">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="clave" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="clave" name="clave" value="" placeholder="Password">
                                  <span class="help-block"></span>
                              </div>
                             
                              <button type="submit" class="btn btn-success btn-block">Login</button>
                          
                      </div>
                  </div>
                  
                		  <div class="col-lg-6">
		                      <p class="lead">Consejos de Seguridad <span class="text-success"></span></p>
		                      <ul class="list-unstyled" style="line-height: 2">
		                          <li><span class="fa fa-check text-success"></span> Recuerda tu usuario y tu clave.</li>
		                          <li><span class="fa fa-check text-success"></span> No enseñes a nadie tu clave.</li>
		                          <li><span class="fa fa-check text-success"></span> La clave es personal.</li>
		                          <li><span class="fa fa-check text-success"></span> Cuidala.</li>
		                     
		                      </ul>
		                  </div>
                  
              </div>
              
          </div>
      </div>
      
		      			  
  </div>
  </form>
        
        <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer> 
</body>
</html>