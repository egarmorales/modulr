<?php

//'git pull';


if( ini_get('safe_mode') ){
	// Do it the safe mode way
	echo 'modo seguri';
}else{
	// Do it the regular way
	echo exec('git pull');
}


;
//echo shell_exec('git pull');

// // Init vars
// $LOCAL_ROOT         = "http://www.alfredobarron.com";
// $LOCAL_REPO_NAME    = "prueba";
// $LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
// $REMOTE_REPO        = "git@github.com:egarmorales/modulr.git";
// $DESIRED_BRANCH     = "dev";

// // Delete local repo if it exists
// if (file_exists($LOCAL_REPO)) {
// 	shell_exec("rm -rf {$LOCAL_REPO}");
// }

// // Clone fresh repo from github using desired local repo name and checkout the desired branch
// echo shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO} {$LOCAL_REPO_NAME} && cd {$LOCAL_REPO} && git checkout {$BRANCH}");

// die("done " . mktime());

//echo shell_exec("/etc/var/www/html/prueba/modulr/modulr pull 2>&1");
