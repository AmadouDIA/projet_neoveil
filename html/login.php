<!DOCTYPE html>
<html>

<head>
    <title>Néoveille - connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/themes/flat-blue.css">
    
<style type="text/css" class="init">
    
td.details-control {
    background: url('images/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('images/details_close.png') no-repeat center center;
}

td.details-control2 {
    background: url('images/statistiques-neo.png') no-repeat center center;
    width:20px;
    height:20px;
    cursor: pointer;
}
tr.shown td.details-control2 {
    #background: url('images/details_close.png') no-repeat center center;
}

	</style>

    
</head>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li>Néoveille, plateforme de repérage, analyse et suivi des néologismes en sept langues</li>
                        </ol>
                    </div>

                </div>
            </nav>
            <!-- side menu -->
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-paper-plane"></div>
                                <div class="title">Néoveille</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" id="accueil" onclick="jQuery('div#neovalsynth').hide();jQuery('div#signupbox').hide(); jQuery('div#loginbox').hide();jQuery('div#neo-search2').hide();jQuery('div#neoval').hide();jQuery('div#presentation-gen').show();">
                                    <span class="glyphicon glyphicon-home"></span><span class="title">Accueil</span>
                                </a>
                            </li>
                            <!-- neologismes valides -->
			    <li>
				<a href="#" id="neo-search2">
				   <span class="glyphicon glyphicon-search"></span><span class="title">Recherche</span>
				</a>
		            </li>

                            <li>
                                <a href="#" id="neoval">
                                    <span class="glyphicon glyphicon-eye-open"></span><span class="title">Néologismes récents</span>
                                </a>
                            </li>
<!--			      <li>
                                <a href="#" id="neovalsynth">
                                    <span class="glyphicon glyphicon-signal"></span><span class="title">Synthèse</span>
                                </a>
                            </li>
-->
                            <!-- Connexion-->
                            <li>
                            	<a href="#" id="login2" onclick="jQuery('div#neovalsynth').hide();jQuery('div#signupbox').hide();jQuery('div#neoval').hide();jQuery('div#neo-search2').hide(); jQuery('div#loginbox').show();jQuery('div#presentation-gen').hide();">
                            	<span class="glyphicon glyphicon-user"></span><span class="title">Connexion</span></a>
                            </li>
                                            <!--<li><a href="#" id="login3" onclick="jQuery('div#signupbox').show(); jQuery('div#loginbox').hide();jQuery('div#neo-search2').hide();jQuery('div#presentation-gen').hide();">Enregistrement</a>
                                            </li>-->
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">
	   <!-- search neologisms -->
                <div id="neo-search2" style="display:none;" class="side-body"></div>
            <!-- recent neologisms -->
            	<div id="neoval" style="display:none;" class="side-body"></div>
           <!-- synthesis neologisms -->
                <div id="neovalsynth" style="display:none;" class="side-body"></div>

            <!-- presentation generale -->
            	<div id="presentation-gen" class="side-body">
                    <div class="page-title">
                        <span class="title">Présentation</span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div role="tabpanel">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Généralités</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Publications</a></li>
                                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Tutoriels</a></li>
                                            <li role="presentation"><a href="#links" aria-controls="links" role="tab" data-toggle="tab">Liens</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
<!-- présentation -->
<div role="tabpanel" class="tab-pane active" id="home">
<p>Ce projet collaboratif, financé pour trois ans (juin 2015 - juin 2018) par la COMUE Sorbonne Paris Cité, regroupe plusieurs laboratoires de Sorbonne-Paris-Cité (LIPN, LDI, CLILLAC-ARP, ERTIM), les acteurs du groupe EMPNEO et l'Université de São Paulo (USP).</p>
<p>Le projet vise à :</p>
<ul>
<li>mettre en place une plateforme multilingue de veille et de suivi des néologismes à partir de corpus contemporains de très grande taille dans sept langues (français, grec, polonais, tchèque -langues du groupe EmpNéo- portugais du Brésil, chinois et russe) ;</li>
<li>utiliser cette plateforme pour mener une étude des emprunts (notamment mais pas exclusivement anglicismes) dans différentes langues (français, grec, polonais, tchèque, portugais du Brésil, chinois et russe) ;</li>
<li>utiliser cette plateforme pour étudier la notion d'innovation sémantique et pour proposer de nouvelles procédures d’identification de nouveaux emplois ;</li>
</ul>
<div class="alert alert-info" role="alert">
Vous pouvez consulter les tutoriels vidéo présentant la plateforme et l'interface publique dans l'onglet "tutoriels".
</div>
<h2>Architecture générale</h2>
<p>L'architecture générale du système est présentée dans la figure 2. </p>
<img src="images/archi.png" width="50%" border="1" align="center"/>
<p>Dans cette architecture, le trait horizontal sépare les composants où l'expert linguiste pourra intervenir (partie basse) des composants où il n'aura pas accès (domaine de l'expert linguiste informaticien).</p>
<p>On distingue ainsi six grands modules :</p>
<ol>
<li><b>Le gestionnaire de corpus :</b> l'expert linguiste peut déterminer (ajouter, supprimer, modifier) les corpus qu'il souhaite faire analyser par le système, actuellement soit un fil RSS, soit un site web. Il peut expliciter par ailleurs un certain nombre de méta-informations : nom du journal, url d'entrée, catégorie des informations fournies (presse générale ou spécialisée à l'heure actuelle), domaine (informatique, santé, économie, mode, etc.), langue (parmi les sept langues du projet), pays du journal (cette information pourra servir ultérieurement à étudier des différences néologiques par pays pour une même langue), type de la ressource (site web ou fil RSS actuellement), fréquence de parution. Ces informations sont associées à chaque unité d'information (« article ») qui sera récupérée et pourront permettre de filtrer les résultats dans le moteur de recherche. (voir onglet correspondant) </li>
<li><b>La récupération des fils RSS, des articles liés et leur analyse linguistique :</b> ce module permet d'effectuer la récupération régulière des articles de presse explicités dans les fils RSS et les pages web et d'effectuer différents traitements linguistiques : segmentation en mots,  analyse morphosyntaxique puis syntaxique. Ce module permet d'ajouter à chaque fil de presse des éléments de contenu : titre de l'article, description de l'article (dénotant soir un résumé du contenu, soit une accroche), contenu de l'article lui-même, contenu étiqueté morphosyntaxiquement, lemmes du document (restreints aux catégories nom, verbe et adjectif), noms propres du document.</li>
<li><b>Le repérage automatique de néologismes par la méthode du dictionnaire de référence pris comme corpus d'exclusion :</b> ce module permet, à la suite de l'analyse morphosyntaxique, de ne conserver que des candidats néologismes après plusieurs filtres : noms propres, erreurs typographiques, puis précatégorisations des néologismes candidats en emprunts et néologismes ‘internes’.</li>
<li><b>Le moteur de recherche et d'analyse des néologismes :</b> cette interface permet de fouiller les résultats obtenus par les étapes précédentes via un moteur de recherche comprenant différentes propriétés (voir onglet correspondant)</li>
<li><b>Le gestionnaire de néologismes :</b>il s'agit d'une base de données préexistante au projet développée en collaboration avec Jean-François Sablayrolles au LDI. Nous renvoyons à (Cartier et Sablayrolles, 2010) pour le détail de ce module. Neologia est en interaction avec le moteur Neoveille de deux façons principales : d'une part, les néologismes présentés et leurs contextes peuvent être directement exportés dans la base Neologia ; d'autre part, il est toujours possible d'obtenir des informations sur le cycle de vie des néologismes après son insertion dans Neologia, par retour au moteur Neoveille.</li>
<li><b>Le repérage des néologismes sémantiques par la méthode du profil combinatoire</b> est lancé sur les lexies cibles et sera également disponible dans l'interface de recherche et d'analyse.</li>
</ol>
</div>
<!-- publications -->
<div role="tabpanel" class="tab-pane" id="profile">
<div class="row">
  <div class="col-sm-12">
    <div class="sub-title"><strong>Présentation générale de Néoveille</strong></div>
	<div>
<p>Cartier, Emmanuel (2016), « Neoveille, système de repérage et de suivi des néologismes en sept langues », Neologica 10, p. 101-131. <a href="../docs/Neoveille_neo
logica2016.pdf" target="new">Pre-print (ce document expose le projet à son démarrage. Pour une version récente, consulter l'article de 2018)</a></p>
<p>Cartier, Emmanuel (2017), Neoveille, <u><a href="https://www.aclweb.org/anthology/E/E17/E17-3024.pdf" target="new">a Web Platform for Neologism Tracking, Proceedi
ngs of the EACL 2017 Software Demonstrations, Valencia, Spain, April 3-7 2017.</a></u></p>
<p>Cartier, Emmanuel (2018, à paraître), « Neoveille, plateforme de détection, de repérage et de suivi des néologismes en dix langues », <a href="../docs/Neoveille_n
eologica2018.pdf" target="new">pdf</a></p>

	</div>
 </div>
 <div class="col-sm-12">
    <div class="sub-title"><strong>Etudes effectuées à partir de Néoveille</strong></div>
	<div> 
<p>Boutmgharine Idyassner, Najet (2016), « Les stratégies de glose sur l’emprunt en discours », Colloque Emprunts néologiques et équivalents autochtones. Mesure de leurs circulations respectives, Universytet Łódzki, 10-12 octobre 2016, Łódz, Pologne. http://neologie.uni.lodz.pl.</p>
<p>Tallarico Giovanni (2016), « Cinquante nuances de board : les anglicismes néologiques et leurs équivalents dans le domaine des sports de glisse ». Colloque Emprunts néologiques et équivalents autochtones. Mesure de leurs circulations respectives, Universytet Łódzki, 10-12 octobre 2016, Łódz, Pologne. http://neologie.uni.lodz.pl</p>
<p>Viaux Julie, Cartier Emmanuel (2016), « Étude linguistique et quantitative de la pénétration des anglicismes de type (N,ADJ)-Ving dans sept langues à partir d’un corpus contemporain journalistique », Colloque international Emprunts néologiques et équivalents autochtones. Mesure de leurs circulations respectives, Universytet Łódzki, 10-12 octobre 2016, Łódz, Pologne. http://neologie.uni.lodz.pl</p>
<p>Lejeune Gaël, Cartier Emmanuel (2017), <u><a href="http://aclweb.org/anthology/W17-4103" target="new">Character Based Pattern Mining for Neology Detection</a></u>,Proceedings of the First Workshop on Subword and Character Level Models in NLP , EMNLP 2017, Copenhagen, p.25-30. </p>
	</div>
</div>
</div> <!-- end row-->											

											
											
											</div>
<!-- tutoriels -->
<div role="tabpanel" class="tab-pane" id="messages">
<div class="row">
  <div class="col-sm-6">
    <div class="sub-title">Présentation vidéo de la plateforme Néoveille</div>
	<div>
		<video width="480" height="320" controls="controls">
  			<source src="../docs/neoveille-gen.m4v" type="video/mp4" />
			<source src="../docs/neoveille-gen.webm" type="video/webm" />
			<source src="../docs/neoveille-gen.ogv" type="video/ogg" />
			Votre navigateur ne prend pas en charge les formats vidéo proposés.
		</video>
	</div>
 </div>
 <div class="col-sm-6">
    <div class="sub-title">Présentation vidéo de l'interface publique</div>
	<div> 
		<video width="480" height="320" controls="controls">
  			<source src="../docs/neoveille-public.m4v" type="video/mp4" />
			<source src="../docs/neoveille-public.webm" type="video/webm" />
			<source src="../docs/neoveille-public.ogv" type="video/ogg" />
			Votre navigateur ne prend pas en charge les formats vidéo proposés.
		</video>
	</div>
</div>
</div> <!-- end row-->
                                    </div>                                        
<!-- tutoriels -->
<div role="tabpanel" class="tab-pane" id="links">
                                    </div>                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<!-- loginbox et signupbox -->
		        <div id="loginbox" style="display:none;" class="side-body"> 
        			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Connexion</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Mot de passe oublié?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-info" class="info col-sm-12"></div>
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" type="text" class="form-control" name="username" value="" placeholder="nom d'utilisateur">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="mot de passe">
                                    </div>
                                    
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                      <!--<a id="btn-login" href="#" class="btn btn-success">Connexion  </a>-->
                                      <button id="btn-login" type="button" class="btn btn-info">Connexion</button>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                           Si vous souhaitez obtenir un compte, merci de nous contacter à admin@neoveille.org<!-- Pas encore de compte! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Enregistrez-vous ici
                                        </a>-->
                                        </div>
                                    </div>
                                </div>    
                            </form>     
                        </div>                     
                    </div>  
        </div>
        			<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Enregistrement</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Connexion</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" data-toggle="validator">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erreur:</p>
                                    <span></span>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">Nom d'utilisateur</label>
                                    <div class="col-md-9">
                                        <input type="text" data-error="Ce nom d'utilisateur est déjà utilisé"  data-remote="ajaxLoginRegister.php?action=checkuser" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur" required>
                                        <div class="help-block with-errors">Minimum de 5 caractères sans espace</div>
                                    </div>
                                </div>                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" data-error="cet email est déjà utilisé"  data-remote="ajaxLoginRegister.php?action=checkemail" required>
                                        <div class="help-block with-errors">Pensez à saisir une adresse email valide</div>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Prénom</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Nom</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Mot de passe</label>
                                    <div class="col-md-9">
                                        <input type="password" data-toggle="validator" data-minlength="5" class="form-control" id="passwd" name="passwd" placeholder="Mot de passe" required>
                                    	<div class="help-block">Minimum de 6 caractères</div>
                                    	<input type="password" class="form-control" id="passwordConfirm" data-match="#passwd" data-match-error="Les deux mots de passe ne sont pas identiques" placeholder="Confirmez le mot de passe" required>
							            <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                                  
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Enregistrement</button>
                                    </div>
                                </div>
                                                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    			</div>
    		</div>
        </div>
        <footer class="app-footer">
            <div class="wrapper">
                <table border="0" width="100%">
                	<tr>
                		<td>&copy; Néoveille 2015-<?php echo date("Y"); ?></td>
                		<td><img src="images/idex.png" width="150px"/></td>
                		<td><img src="images/uspc.png" width="150px"/></td>
                		<td><img src="images/up13.png" width="150px"/></td>
                		<td><img src="images/up7.png" width="130px"/></td>
                		<td><img src="images/inalco.png" width="150px"/></td>
                		<td><img src="images/saopaulo.png" width="150px"/></td>
                		<td>groupe EMPNEO</td>
                	</tr>
                	<tr>
                	   <td colspan="2">&nbsp;</td>
                       <td><a href="https://lipn.univ-paris13.fr/fr/rcln-3" target="new"><img src="images/lipn.png" width="40px"/></a></td>
                		<td><a href="http://www.clillac-arp.univ-paris-diderot.fr" target="new"><img src="images/clillacarp.png" width="40px"/></a></td>
                		<td><a href="http://www.er-tim.fr" target="new"><img src="images/ertim.png" width="30px"/></a></td>
                		<td><a href="http://ldi.cnrs.fr/index.php?lang=fr" target="new"><img src="images/ldi.png" width="40px"/></a></td>
                		<td colspan="2">&nbsp;</td>
                	</tr>
                </table>

            </div>
        </footer>
        <div>
            <!-- Javascript Libs -->
            <script type="text/javascript" src="../lib/js/jquery.min.js"></script>
            <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../lib/js/validator.min.js"></script>


            <!-- Javascript Libs -->
            <script type="text/javascript" src="../lib/js/Chart.min.js"></script>
            <script type="text/javascript" src="../lib/js/bootstrap-switch.min.js"></script>
            <script type="text/javascript" src="../lib/js/jquery.matchHeight-min.js"></script>
 			<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/s/dt/jqc-1.12.0,moment-2.11.2,dt-1.10.11,b-1.1.2,se-1.1.2/datatables.min.js"></script>
<!--            <script type="text/javascript" src="../lib/js/jquery.dataTables.min.js"></script>-->
            <script type="text/javascript" src="../lib/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
	    	<script type="text/javascript" src="js/jquery.dataTables.columnFilter.js"></script>

            <script type="text/javascript" src="../lib/js/select2.full.min.js"></script>
            <script type="text/javascript" src="../lib/js/ace/ace.js"></script>
            <script type="text/javascript" src="../lib/js/ace/mode-html.js"></script>
            <script type="text/javascript" src="../lib/js/ace/theme-github.js"></script>
            <!-- Javascript -->
            <script type="text/javascript" src="../js/app.js"></script>
           <!-- <script type="text/javascript" src="../js/index.js"></script>-->
            <script type="text/javascript" src="js/menus.js"></script>



            <!-- Javascript -->
            	<script>
			$(document).ready(function() {
			
			$('#btn-login').click(function()
			{
			var username=$("form#loginform #username").val();
			var password=$("form#loginform #password").val();
		    var dataString = 'username='+username+'&password='+password+'&action=login';
		    //alert(dataString);
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			$.ajax({
            type: "POST",
            url: "ajaxLoginRegister.php",
            data: dataString,
            cache: false,
            beforeSend: function(){$("#btn-login").val('Connecting...');},
            success: function(data){
            //alert(data);
            if(data)
            {
            //alert("ok");
            window.location = "index.php"
//            $("body").load("../index.php").hide().fadeIn(1500).delay(6000);
            }
            else
            {
            //	alert ("No data");
             /*$('#box').shake();*/
             $("#login-info").show();
			 $("#login-info").html('<div class="alert fresh-color alert-danger" role="alert">Utilisateur ou mot de passe invalide</div>');
            }
            }
            });
			
			}
			return false;
			});
			
			
			
			$('#signup').click(function()
			{
			var username=$("form#signupform #username").val();
			var password=$("form#signupform #passwd").val();
			var firstname=$("form#signupform #firstname").val();
			var lastname=$("form#signupform #lastname").val();
			var email=$("form#signupform #email").val();
		    var dataString = 'username='+username+'&password='+password+'&firstname='+firstname+'&lastname='+lastname+'&email='+email+'&action=signup';
		    //alert(dataString)
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			$.ajax({
            type: "POST",
            url: "ajaxLoginRegister.php",
            data: dataString,
            cache: false,
            beforeSend: function(){$("#signup").val('Enregistrement en cours...');},
            success: function(data){
            //alert(data);
            if(data)
            {
            $('#loginbox').show(); $('#signupbox').hide();$("#login-info").show();
            $("#login-info").html('<div class="alert fresh-color alert-info" role="alert">'+data + '</div>');
//            $("body").load("../index.php").hide().fadeIn(1500).delay(6000);
            }
            else
            {
             /*$('#box').shake();*/
             $("#signup-alert").show();
			 $("#signup-alert").html('<div class="alert fresh-color alert-danger" role="alert">Utilisateur ou mot de passe invalide.</div>');
            }
            }
            });
			
			}
			return false;
			});		
			
$('#neoval').click(function()
			{
					//alert($("#container-fluid").html());
					jQuery('div#signupbox').hide(); 
					jQuery('div#loginbox').hide();
					jQuery('div#presentation-gen').hide();
					jQuery('div#neo-search2').hide();
					jQuery('div#neovalsynth').hide();
					jQuery('div#neoval').show();
        	    	$("div#neoval").load("table/datatable-neologismes-demo.php",function(responseTxt, statusTxt, xhr)
        	    	{
        			//if(statusTxt == "success")
            			//alert("External content loaded successfully!");
        			if(statusTxt == "error")
            			alert("Error: " + xhr.status + ": " + xhr.statusText);
    				});
});

$('#neo-search2').click(function()
                        {
                                        //alert($("#container-fluid").html());
                                        jQuery('div#signupbox').hide(); 
                                        jQuery('div#loginbox').hide();
                                        jQuery('div#presentation-gen').hide();
                                        jQuery('div#neoval').hide();
					jQuery('div#neovalsynth').hide();
					jQuery('div#neo-search2').show();
                        $("div#neo-search2").load("table/datatable-search-demo.php",function(responseTxt, statusTxt, xhr)
                        {
                                //if(statusTxt == "success")
                                //alert("External content loaded successfully!");
                                if(statusTxt == "error")
                                alert("Error: " + xhr.status + ": " + xhr.statusText);
                                });
});

$('#neovalsynth').click(function()
                        {
                                        //alert($("#container-fluid").html());
                                        jQuery('div#signupbox').hide(); 
                                        jQuery('div#loginbox').hide();
                                        jQuery('div#presentation-gen').hide();
                                        jQuery('div#neoval').hide();
                                        jQuery('div#neo-search2').hide();
					jQuery('div#neovalsynth').show();
                        $("div#neovalsynth").load("table/datatable-neo-db-dev-demo.php",function(responseTxt, statusTxt, xhr)
                        {
                                //if(statusTxt == "success")
                                //alert("External content loaded successfully!");
                                if(statusTxt == "error")
                                alert("Error: " + xhr.status + ": " + xhr.statusText);
                                });
});


					
			});
			
		</script>
</body>

</html>


