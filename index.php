<?php
include('includes/config.inc.php'); // alle konfigurationsvariablen
require('includes/navigation.inc.php'); // menü
require('includes/mysqli_connect.php'); // datenbankverbindung

// Seite aus URL Param holen, wenn nichts angegeben wurde, soll der defaultwert "home" sein:
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; 




?>
<html lang="en-gb" dir="ltr" data-config="{&quot;twitter&quot;:0,&quot;plusone&quot;:0,&quot;facebook&quot;:0,&quot;style&quot;:&quot;red&quot;}" class="uk-notouch"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Super User">
	<meta name="generator" content="Joomla! - Open Source Content Management">
	<title>MyPizza WDD Webshop</title>

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery-noconflict.js" type="text/javascript"></script>
	<script src="js/jquery-migrate.min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/theme.css">

	<script src="js/uikit.js"></script>
	<script src="js/theme.js"></script>
</head>

<body class="tm-sidebar-a-right tm-sidebars-1">

    <div class="uk-container uk-container-center">
		<div class="tm-headerbar uk-text-center uk-clearfix uk-hidden-small">
			<a class="tm-logo" href="index.php"><h1>MyPizza WDD Webshop</h1></a>
		</div>
			
		<nav class="tm-navbar uk-navbar">
			<ul class="uk-navbar-nav uk-hidden-small">
			<?php
				// menü array benützen, um dynamisches Menü zu schreiben
				foreach($menu as $menupunkt) { 
					if($menupunkt['pfad'] == $page){
						$menuClass="active";
					}else{
						$menuClass="";
					}
				?>
				<li class="<?php echo $menuClass; ?>">
					<a href="index.php?page=<?php echo $menupunkt['pfad']; ?>">
						<?php echo $menupunkt['text']; ?>
					</a>
				</li>
				<?php } ?>
				</ul>
			<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""><i class="fas fa-bars"></i></a>
			<div class="uk-navbar-flip">
			<div class="uk-navbar-content uk-hidden-small">
			<a href="index.php?page=checkout">Warenkorb (3)</a>
			</div>  </div>
		</nav>
			
		<div class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
			  <div class="tm-main uk-width-medium-2-3" style="min-height: 716px;">
				
				<section class="tm-main" data-uk-grid-match="{target:' > .uk-panel'}">
				  <div class="uk-panel-box uk-width-1-1">

					<?php
					// content aus der Seite einbinden
					if(is_file('pages/'.$page.'.php')){
						include('pages/'.$page.'.php');
					}?>
				  </div>
					
				</section>
			 </div>
			  <aside class="tm-sidebar-a uk-width-medium-1-3" style="min-height: 716px;">
				<div class="uk-panel uk-panel-box-primary">
					<ul class="uk-nav uk-nav-parent-icon uk-nav-side" data-uk-nav="{}">
						<li><a href="index.php?page=login">Anmelden</a></li>
						<li><a href="index.php?page=registration">Registrieren</a></li>
					</ul>
				</div>
				<div class="uk-panel uk-panel-box uk-margin-top-remove">
				  <!--
				  <h2>Suche</h2>
				  <form class="uk-form uk-form-stacked">
					<div class="uk-form-row">
					  <label class="uk-form-label" for="tm-form-check-in">Suche nach</label>
					  <div class="uk-form-controls">
						<div class="uk-form-icon uk-width-1-1">
						  <input class="uk-width-1-1 uk-form-large" type="text">
						</div>
					  </div>
					</div>
				  </form>
				  <br>
				  <br>
				  <a href="#" class="uk-button uk-button-large tm-button-align-bottom">Suchen</a>
					-->
				</div>
			  </aside>
			</div>	
			
		<div class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">

			
					
			
							
		</div>
			
			
			
		<footer class="tm-footer">
			<a class="tm-totop-scroller" data-uk-smooth-scroll="" href="#">top</a>
			<div class="uk-panel">
				
			</div>
		</footer>

    </div>
    <script>
    (function($) {
        var config = $('html').data('config') || {};
        $("img[alt=Demo]").each(function() {
            var path = this.src.split("/");
                if(path[path.length-3]=="demo"){
                    path[path.length-2] = config.style!="" ? config.style:"default";
                    path = path.join("/").replace('index.php/','');

                    var img = new Image(),
                        $this = this;

                    img.onload = function() { $this.src = path; };
                    img.src    = path;
            }
        });
    })(jQuery);

</script>
<div id="offcanvas" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<div class="uk-panel">
		<form id="search-112" class="uk-search" action="http://yootheme.com/demo/themes/joomla/2014/everest/index.php" method="post" role="search">
			<input class="uk-search-field" type="search" name="searchword" placeholder="search...">
			<input type="hidden" name="task" value="search">
			<input type="hidden" name="option" value="com_search">
			<input type="hidden" name="Itemid" value="107">
		</form>
		</div>
		<ul class="uk-nav uk-nav-offcanvas">		
			<li class="uk-active"><a href="">Home</a></li>
			<li class=""><a href="">Warenkorb</a></li>
			<li class=""><a href="">Login</a></li>
		</ul>
	</div>
</div>
    

</body></html>