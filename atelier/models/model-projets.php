<?php

function get_project($id) {
	$project = null;

	if (file_exists(__DIR__.'/../views/projets/'.$id.'.html')) {
		ob_start();
		require __DIR__.'/../views/projets/'.$id.'.html';

		$project = ob_get_clean();
	}

	return $project;
}
