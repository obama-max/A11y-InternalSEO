<?php 
    $page_name = array_key_exists('page', $_GET) && $_GET['page'] ? $_GET['page'] : 'index';
    $page_path = "pages/$page_name.php";
    if ( !is_file($page_path) ) {
        $page_path = 'pages/404.php';
    }
?>
<!DOCTYPE html>
<html>
	<head>
        <?php include 'builders/head.php'; ?>
	</head>
	<body>
        <?php include $page_path; ?>
	</body>
</html>
