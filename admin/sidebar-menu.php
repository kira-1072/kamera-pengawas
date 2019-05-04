	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>

	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu home dipilih, menu home aktif
	if ($_GET["module"]=="home") { ?>
		<li class="active">
			<a href="?module=home"><i class="fa fa-home"></i> Home </a>
	  	</li>
	<?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
		<li>
			<a href="?module=home"><i class="fa fa-home"></i> Home </a>
	  	</li>
	<?php
	}


	// jika menu streaming dipilih, menu streaming aktif
	if ($_GET["module"]=="streaming" || $_GET["module"]=="form_streaming") { ?>
		<li class="active">
			<a href="?module=streaming"><i class="fa fa-video-camera"></i> Streaming</a>
	  	</li>
	<?php
	}
	// jika tidak, menu streaming tidak aktif
	else { ?>
		<li>
			<a href="?module=streaming"><i class="fa fa-video-camera"></i> Streaming</a>
	  	</li>
	<?php
	}

	// jika menu recording dipilih, menu recording aktif
	if ($_GET["module"]=="recording" || $_GET["module"]=="form_recording") { ?>
		<li class="active">
			<a href="?module=recording"><i class="fa fa-hdd-o"></i> Recording</a>
	  	</li>
	<?php
	}
	// jika tidak, menu recording tidak aktif
	else { ?>
		<li>
			<a href="?module=recording"><i class="fa fa-hdd-o"></i> Recording</a>
	  	</li>
	<?php
	}

		// jika menu pictures dipilih, menu pictures aktif
	if ($_GET["module"]=="pictures" || $_GET["module"]=="form_pictures") { ?>
		<li class="active">
			<a href="?module=pictures"><i class="fa fa-picture-o"></i> Pictures</a>
	  	</li>
	<?php
	}
	// jika tidak, menu pictures tidak aktif
	else { ?>
		<li>
			<a href="?module=pictures"><i class="fa fa-picture-o"></i> Pictures</a>
	  	</li>
	<?php
	}

	// jika menu setting dipilih, menu setting aktif
	if ($_GET["module"]=="setting" || $_GET["module"]=="form_setting") { ?>
		<li class="active">
			<a href="?module=setting"><i class="fa fa-cogs"></i> Setting</a>
	  	</li>
	<?php
	}
	// jika tidak, menu setting tidak aktif
	else { ?>
		<li>
			<a href="?module=setting"><i class="fa fa-cogs"></i> Setting</a>
	  	</li>
	<?php
	}

	// jika menu message dipilih, menu message aktif
	if ($_GET["module"]=="message" || $_GET["module"]=="form_message") { ?>
		<li class="active">
			<a href="?module=message"><i class="fa fa-envelope"></i> Message </a>
	  	</li>
	<?php
	}
	// jika tidak, menu message tidak aktif
	else { ?>
		<li>
			<a href="?module=message"><i class="fa fa-envelope"></i> Message </a>
	  	</li>
	<?php
	}
	?>
	</ul>
	<!--sidebar menu end-->