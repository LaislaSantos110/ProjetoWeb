<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    
	<!-- Facebook https://developers.facebook.com/docs/sharing/opengraph -->
	<meta property="og:site_name"     content="Happy Tour"/>
	<meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Your Website Title" />
	<meta property="og:description"   content="Your description" />
	<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
  
	 
	<!-- Bootstrap -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  	<!-- Libraries -->
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-social.css">
	<title>Convidados</title>
</head>

<body style="background-size:100% 100%" background="fundo.jpg">
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container wow fadeInUp title"> 
	<div class="row"> 
		<div class="col-md-12">
			<div class="container">
				<h3 class="section-title">Compartilhar</h3>
				<center>
					<h2>Divulgue seu happy hour pelo facebook.</h2>
				</center>
				<div class="section-title-divider"></div>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<td>Local do Evento: </td>
								<td> Endereço: </td>
								<td>Data do evento: </td>
								<td>Horário do evento: </td>
							</tr>
						</thead>	
						<tbody>
							<tr>
								<td><?= $evento['nome'];?></td>
								<td><?= $evento['endereco'];?> </td>
								<td><?= $evento['data'];?></td>
								<td><?= $evento['hora'];?></td>
								
							</tr>	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> 
</div>

<div class="container wow fadeInUp title"> 
	<div class="row"> 
		<div class="col-md-12">
			<div class="container">
			<center>
				<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true" style="font-size:4px;" >
					<a class="btn btn-md btn-social btn-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>&amp;src=sdkpreparse">
					<span class = "fa fa-facebook"> </span> 
					Compartilhar
					</a>
				</div>
			</center>
			</div>
		</div>
	</div>
</div>

<br><br>
<footer id="footer" class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              &copy; Copyright <strong>Beer Hour</strong>. All Rights Reserved
            </div>
          </div>
        </div> 
      </div>
</footer>
 
 <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> ( Chafe no final para voltar para o topo) --> 
  
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script> 
  
</body>

</html>
