<?php 
    $page_name = array_key_exists('sidepage2', $_GET) && $_GET['sidepage2'] ? $_GET['sidepage2'] : 'index';
    $page_path = "pages/$page_name.php";
    if ( !is_file($page_path) ) {
        $page_path = 'pages/sidepage2.php';
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
