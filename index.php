<!DOCTYPE HTML>
<html>
<head>
	<title>BlogNet</title>
	<link rel="stylesheet" type="text/css" href="css/template.css">
</head>

<body>
	<div class="container">
			<div class="content">
				<header class="header">
                    <div class="logo">
                    	<a href="#"><h1>Blog Net</h1></a>
                    </div>
                    <div class="search">
                    	<form action="" method="post">
                        	<input type="text" class="q" name="q"/>
                            <input type="submit" class="btn" value="buscar"/>
                        </form>
                    </div>
                </header><!-- Header -->

			<nav class="menu bg_bluedark">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">categoria 1</a></li>
					<li><a href="#">categoria 2</a></li>
					<li><a href="#">categoria 3</a></li>
					<li><a href="#">categoria 4</a></li>
					<li><a href="#">categoria 5</a></li>
				</ul>
			</nav><!-- Menu -->

			<div class="pagina bg_white">
				<section class="posts">
                <?php for( $i = 0; $i < 10; $i++):?>
					<article class="lia">
                    	
                        	<div class="img">
                            	<img src="#" title="" alt=""/>
                            </div>
                            <div class="metatitles">
            
                                <header>
                                    <a href="">
                                    	<h2>Meu primeiro artigo a ser publicado no blog 2</h2>
                                    </a>
                                </header>
                                <p> texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui  texto aqui </p>
                            </div>
                        
                    </article><!-- lia -->
                    <?php endfor;?>
				</section><!-- Posts -->

				<div class="sidebar">
					<div class="widget">
                    	<h3>MAIS LIDAS</h3>
                    	algum coisa aqui
                    </div><!-- widget -->
                    
                    <div class="widget">
                    	<h3>FIQUE CONECTADO</h3>
                    	alguma coisa aqui
                    </div><!-- widget -->
				</div><!-- Sidebar -->
			</div><!-- Pagina -->

			<div class="clear"></div><!-- Clear -->
			<footer class="footer bg_bluedark">
				<div class="footer-bottom">
					<span class="txt-lf">Blog &copy;. Todos os direitos reservados.</span>
					<span class="txt-rg">Desenvolvido com muito trabaho.</span>
				</div>
			</footer><!-- Footer -->
		</div><!-- Content -->
	</div><!-- Container -->
</body>
</html>
