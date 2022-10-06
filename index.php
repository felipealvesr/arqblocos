<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Biblioteca de Blocos 3D Gratuita</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="icons/favicon.webp" type="image/x-icon" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>	
	<script>
		document.addEventListener("DOMContentLoaded", function() {

			/*new Glide('.glide',{
				perView: 4,
				autoplay: 3000,
				type: 'carousel',
				breakpoints:{
					800: {
						perView: 4,
					},
					600: {
						perView: 1,
					},
				}
			}).mount()*/


			new Glide('.slide-banner', {
				perView: 3,
				type: 'carousel',
				autoplay: 3000,
				breakpoints: {
					800: {
						perView: 4,
					},
					600: {
						perView: 1,
					},
				}
			}).mount()
		});

		function toogleColapse(el) {
			console.log(el)
			$(el).collapse('toggle');
		}
	</script>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '3880422962067558');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=3880422962067558&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '880321669248949');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=880321669248949&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '110836377524134');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=110836377524134&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>
	<header>
		<div class="container">
			<nav class="navbar-novo">
				<img src="images/logo.webp" />
				<a href="#contact" class="btn-nav pulse">Baixar Grátis</a>
			
			</nav>
		</div>
		<section id="head-section">
			<div class="container">
				<div class="d-flex flex-column">
					<h2 class="title center">Baixe agora de forma gratuita <br />
						a maior e mais completa Biblioteca de Blocos 3D para compor os seus projetos.
					</h2>
					<h4 class="subtitle center">Acabamos de liberar uma Biblioteca inédita e completa de</br>
						Blocos 3D ultra realistas configurados, mapeados e prontos para</br> você utilizar em todos os seus projetos.
					</h4>
					<a id="acesso" class="pulse" href="#contact">Baixar Grátis</a>
					<img src="icons/arrow.webp" alt="" width="5%"/>
					<!-- <a id="godown" href="#contact"></a> -->
				</div>

				<div id="HeadSlide">
					<div class="divisao">
						<div class="txt-slide">
							<h3 id="h3-font">Sabemos a<br class="sumir">
								complexidade<br class="sumir">
								em ter que <span class="letter-white">modelar,<br class="sumir">
									texturizar e ainda<br class="sumir">
									renderizar.</span><br class="sumir">
								Por isso <span class="letter-white">tudo<br class="sumir">
									está configurado<br class="sumir">
									para você usar</span><br class="sumir">
								imediatamente.</h3>
						</div>
						<!--include -->
						<?php 
							include_once("slide.html");
						?>
					</div>
				</div>


		</section>
	</header>
	<main>
		<section class="section-black" id="brands-section">
			<div class="container">
				<h4 class="title center">Separamos blocos incríveis</br>
					dos principais Softwares</br> utilizados
					hoje no mercado.
				</h4>
				<h5 class="subtitle center">
					Não importa o software que você usa, nós vamos
					te entregar Blocos</br> inéditos e ultrarrealistas prontos para
					serem facilmente editados.</h5>
				<div class="slide-banner">
					<div data-glide-el="track" class="glide__track">
						<ul class="glide__slides">
							<?php
							$HeadSlide = [
								[
									"img" => "01.webp"
								], [
									"img" => "02.webp"
								], [
									"img" => "03.webp"
								], [
									"img" => "04.webp"
								]
							];
							$count = 1;

							foreach ($HeadSlide as $slide) {
							?>
								<li class="glide__slide">
									<div>
										<img src="images/blocos/<?php echo $slide['img'] ?>" class="img-fluid" />
									</div>
								</li>
							<?php
								$count++;
							}
							?>
						</ul>
						<!-- <div class="glide__bullets" data-glide-el="controls[nav]">
					    <button class="glide__bullet" data-glide-dir="=0"></button>
					    <button class="glide__bullet" data-glide-dir="=1"></button>
					    <button class="glide__bullet" data-glide-dir="=2"></button>
					  </div> -->

					</div>
				</div>
			</div>

		</section>
		<section class="degrade section" id="gallery1">
			<div class="container">

				<h1 class="title center">Já viu Blocos dessa</br>
					qualidade serem distribuidos</br>
					de forma gratuita?</h1>
				<h2 class="subtitle center">Apartir de agora, todos os seus projetos terão
					esta qualidade ultra realista.</h2>
				<!-- sSlide com texto-->
			</div>
		</section>
			<div class="container">
				<div id="HeadSlide" style="margin-bottom:10px;">
					<div class="divisao">
						<div class="txt-slide">
							<h3 id="h32-font">Pensamos em<br class="sumir">
								todos os detalhes,<br class="sumir">
								e fizemos uma<br class="sumir">
								seleção incrível com<br class="sumir">
								os melhores Blocos<br class="sumir">
								de <span class="letter-white">3DS Max, Lumion,<br class="sumir">
								SketchUp e Autocad.</span><br class="sumir">
								Para <span class="letter-white">V-Ray e<br class="sumir">
								Corona Render.</span>
						</div>
						<!--include -->
						<?php 
							include_once("slide2.html");
						?>
					</div>
				</div>
			</div>
		<section class="section-black section" id="contact">
			<div class="container">
				<h1 class="title center">Faça o Download
					gratuito</br> dos seus Blocos.</h1>
				<h2 class="subtitle center">Preencha os dados abaixo de forma correta</br>
					para efetuar o download do seu material gratuito diretamente</br>
					no seu e-mail e também no WhatsApp.</h2>
				<form class="container form free-form php-email-form " id="formData" action="save.php" method="post">
					<input type="text" name="name" required="required" placeholder="Nome"  />
					<input type="text" name="whatsapp" required="required" placeholder="WhatsApp"  />
					<input type="text" name="email" required="required" placeholder="E-mail"  />
					<input type="hidden" name="list" value="16" />
					<button id="submit" class="button pulse" type="submit">Baixar Agora</button>
				</form>
			</div>
		</section>

	</main>
	<footer>

		<section class="section section-black" id="foo">
			<div class="container">
				<hr style="height:1.5px; border:solid 0.5px #2EB4A0; background:#2EB4A0;">
				<div class="row">
					<section class="section section-black">
						<div class="container">
							<div class="linha">
								<div class="col-4 logo-footer">
									<img src="images/logo.webp" class="logo-footer2" />
								</div>
								<div class="social">
									<a href="" target="_blank"><img id="facebook" src="icons/facebook.webp" alt=""/></a>
									<a href="" target="_blank"><img id="instagram" src="icons/instagram.webp" alt=""/></a>
								</div>
							</div>
						</div>
						
					</section>
					<div class="col-12 col-md-8">
						<ul>
							<li><a href="javascript:;">©2021 Biblioteca 3D ArqBlocos</a></li>
						<!--	<li><a href="javascript:;">Política de Privacidade</a></li>
							<li><a href="javascript:;">Termos de uso</a></li> -->
						</ul>
					</div>
					
					<div class="col-12">
						<p>Todos os nomes de produtos e empresas são marcas comerciais ou registradas de seus respectivos proprietários. O uso deles não implica qualquer afiliação ou endosso por parte deles.</p>
					</div>
				</div>
			</div>
		</section>
	</footer>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
	
	
</body>

</html>