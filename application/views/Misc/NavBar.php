<nav class="navbar navbar-default navbar-fixed-top" role="banner">
	<div class="container-fluid">

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a href="#" class="navbar-brand" title="Trófea" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Feltétel: egy témakör összes küldetésének teljesítése.">
				<img src="<?php echo base_url();?>assets/images/trophy.png" alt="shield" width="17">
			</a>

			<a class="navbar-brand" href="#" title="Trófea" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Feltétel: egy témakör összes küldetésének teljesítése."><b class="results"><?php echo $trophies;?></b></a>

			<a href="#" class="navbar-brand" title="Pajzs" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Feltétel: egy küldetés összes feladatának teljesítése.">
				<img src="<?php echo base_url();?>assets/images/shield.png" alt="shield" width="15">
			</a>

			<a class="navbar-brand" href="#" title="Pajzs" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Feltétel: egy küldetés összes feladatának teljesítése."><b class="results"><?php echo $shields;?></b></a>

			<a href="#" class="navbar-brand" title="Arany" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Feltétel: egy feladat jó megoldása.">
				<img src="<?php echo base_url();?>assets/images/coin.png" alt="coin" width="15">
			</a>

			<a class="navbar-brand" href="#" title="Arany" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Feltétel: egy feladat jó megoldása."><b class="results"><?php echo $points;?></b></a>

		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right small"><?php

			if ($this->Session->CheckLogin()) {?>

				<li>
					<a href="<?php echo base_url().'application/clearresults/'.
						(isset($type) ? $type : '').
						(isset($id) ? '/'.$id : '');?>">
						<span class="glyphicon glyphicon-remove"></span>&nbsp;Pontok törlése
					</a>
				</li>
				<li>
					<a href="<?php echo base_url().'update/database/'.
						(isset($type) ? $type : '').'/'.
						(isset($id) ? '/'.$id : '');?>">
						<span class="glyphicon glyphicon-refresh"></span>&nbsp;Adatbázis frissítése
					</a>
				</li>
				<li>
					<a href="<?php echo base_url().'application/logout';?>">
						<span class="glyphicon glyphicon-log-out"></span>&nbsp;Kijelentkezés
					</a>
				</li><?php

			} else {?>

				<li>
					<a href="#" data-toggle="modal" data-target="#login">
						<span class="glyphicon glyphicon-user"></span>&nbsp;Bejelentkezés
					</a>
				</li>
				<li>
					<a href="#" data-toggle="modal" data-target="#info">
						<span class="glyphicon glyphicon-info-sign"></span>&nbsp;Mi ez?
					</a>
				</li><?php

			}?>
			
			</ul>
		</div>
	</div>
</nav>
