<?php
require_once('allFonctionForm.php');
function deleteCompte()
{

        echo "<form action='' method='post' >" ."<br/>".
            ajout_champ("text", '', "deleteClient", "numero de comtpe à suprimmer", "deleteClient")."<br/>".
            ajout_champ('submit', 'Envoyer', 'soumission', '', ''). "<br/></form>";
}
function profilClient()
{
    echo '
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   Some user related content goes here...
            </div>
		</div>
	</div>
</div>
<center>
<strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">KeenThemes</a></strong>
</center>
<br>
<br>';

}
function affichePday()
{
    echo '<table><tr><td><img src="../public/cinema-header.jpg"></td> <td>Avengers ou Les Avengers : Le film au Québec 
et au Nouveau-Brunswick (Marvel\'s The Avengers) est un film de super-héros américain écrit et réalisé par Joss Whedon, sorti en 2012. Il se base sur l\'équipe de super-héros
 du même nom (Les Vengeurs en français) apparaissant dans le comic book publié par Marvel Comics et constitue le sixième film de l\'univers cinématographique Marvel 
 (dont il clôt le premier arc, appelé « Phase I »). </td></tr></table>';
    echo '<tr align="center"><td><form action=\'\' methode=\'post\'>
     <input id="filmv" name="filmv" type="hidden" value=""> 
     <input id="planingv" name="planingv" type="hidden" value=""> 
     <input id="placev" name="placev" type="hidden" value=""> 
    <button type="button" class="btn btn-info">Voir le film</button>
    <button type="button" class="btn btn-info">Voir son planning</button>
    <button type="button" class="btn btn-info">Réserver un place</button>
    </form></td></tr></table>';
}