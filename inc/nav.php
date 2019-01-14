				<ul>
					<li class="menu_onglet" id="menu_onglet_2" onclick="change_onglet('2');">
						<p>Liste compte-rendus</p>
					</li>
					<?php if($_SESSION['fonction'] != "responsable"){ ?>
					<li class="menu_onglet" id="menu_onglet_6" onclick="change_onglet('6');">
						<p>Compte rendu</p>
					</li>
					<?php }else if($_SESSION['fonction'] != "visiteur"){?>
					<li class="menu_onglet" id="menu_onglet_3" onclick="change_onglet('3');">
						<p>Gestion de stock</p>
					</li>
					<?php } ?>
					<li class="menu_onglet" id="menu_onglet_4" onclick="change_onglet('4');">
						<p>Documentation</p>
					</li>
					<li class="menu_onglet" id="menu_onglet_5" onclick="change_onglet('5');">
						<span class="glyphicon glyphicon-comment" aria-hidden="false"></span>
						<p>Messagerie</p>
					</li>
					<li class="menu_onglet" id="menu_onglet_1" style="display: none;" onclick="change_onglet('1');">
						<span class="glyphicon glyphicon-comment" aria-hidden="false"></span>
						<p>Accueil</p>
					</li>
				</ul>