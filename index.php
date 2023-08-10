<?php 
    $page_name = array_key_exists('page', $_GET) && $_GET['page'] ? $_GET['page'] : '404';
    $page_path = "pages/$page_name.php";
    if ( !is_file($page_path) ) {
        $page_path = 'pages/404.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <?php include 'builders/head.php'; ?>
        <?php include 'builders/styles.php'; ?>
	</head>

	<body>
       

        <main>
            <section>           
                            <?php 
                                include $page_path;
                            ?>
                               
                            <?php
	                        	include __DIR__ . '/builders/test 1.php';
	                        ?>
                                          
            </section>
        </main>

        <?php		  
            include 'builders/scripts.php'; 
	    ?>       
	</body>
</html>
