<?php session_start(); 
	
?>


<html>
    <head>
        <meta charset="utf-8">
        <title>Cours_Prof n°1</title>
        <link rel="stylesheet" href="StyleCoursProf.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
		<header>
			<h1><a href="index.html">SCHOOLYARD</a></h1>
			<p>compte : <?php echo $_SESSION['nom']; ?> </p>
			<input id = "searchbar" type = "text" placeholder = "recherche">
		</header>
        <div id = "contenue">
			<div id = "navigationClasseInscrit">
				<h3>CLASSE</h3>
				<button onclick="window.location.href = '../admin/formulaire ajout cours.php';">Ajout Cours</button>
				<nav class = "navigation_classe">
					<ul>
						<?php include("../admin/liste cours sommaire.php") ?>
					</ul>
				</nav>
			</div>
			<div id = "espace_classe">
				<table id="tableEspaceClasse">
					<?php include("../admin/liste fichier sommaire.php") ?>
					<tr>
						
						<td width="23.19%"  colspan="2">
							<div class = "LeconChapitre">   
								<center>
									<div id="LeconChapitre" class="right">
										<h3>Chapitre 1</h3>
										<button class="button" role="button">Ajouter </button> LIER AU PHP AVEC LE FORMULAIRE 
										
										<button class="button" role="button">Supprimer </button>

									</div>
									<div id="LeconChapitre" class="right">
										<h3>Chapitre 2</h3>
										<button class="button" role="button">Ajouter </button>										
										<button class="button" role="button">Supprimer </button>

									</div>
									<div id="LeconChapitre" class="right">
										<h3>Chapite 3</h3>
										<button class="button" role="button">Ajouter </button>
										<button class="button" role="button">Supprimer </button>
									</div>
                                    <br>
                                    <br>
                                    <input type="button" value="Ajouter un chapitre"></input>
                                    <input type="button" value="Modifier un chapitre"></input>
								</center>
							</div>
						</td>
					</tr>
					<tr class="wrapper">
						<td class="box" width="23.19%" colspan="2">
							<div id="depotDocuments">
								<h3 class="depotDocumentsTitre"> Ajout d'un chapitre</h3>
								<h4>Telecharger le pdf du cours</h4>
								<form action="" >
									<input type="file" id="upload" accept='.pdf, .doc, .docs' hidden>
									<label for="upload" class="uploadlabel">
										<span><i class=" fa fa-cloud-upload"></i></span>
										<p>Click to upload</p>
									</label>
									<input type="submit" value="Envoyer"></input>
								</form>
							</div>
							<div id="filewrapper">
								<!--<div class="showfilebox">
									<div class="left">
										<span class="filetype">Pdf</span>
										<h3> test.pdf</h3>
									</div>
									<div class="right">
										<span>&#215;</span>

									</div>
								</div>-->
							</div>
						</td>
					</tr>
				</table>
                <!-- 
				<center>
					<div id="titreLecon">
						titre 1
					</div>
				</center>
                <div class = "sommaireLecon">
                    <nav id="sommaireLecon">
						<h2>Sommaire </h2>
						<ul>
							<li>
								Algèbre lien vers le chapitre du cours en question de la base de donnée
							</li>
							<li>
								Geométrie
							</li>
							
						</ul>
                    </nav>
                </div>
                <div class = "LeconChapitre">   
					<div id="LeconChapitre">
						<h3>Chapitre 1</h3>
					</div>
					<div id="LeconChapitre">
						<h3>Chapitre 2</h3>
					</div>
					<div id="LeconChapitre">
						<h3>Chapite 3</h3>
					</div>
                </div>
                <div id="depotDocuments">
                </div>
				-->
			</div>
			<div id = "chatCours">
				<h3>DISCUSSION</h3>
			</div>
		</div>
		<footer>
			<p>
				Copiright &copy; SCHOOLYARD - 2022-2023 - All Right Reserved
			</p>
		</footer>
		<script src="cours_prof.js"></script>
    </body>
</html>