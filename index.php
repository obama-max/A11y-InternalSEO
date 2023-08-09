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
	</head>

	<body>
        <?php
	    	include __DIR__ . '/builders/header.php';
	    ?>

        <main>
            <section>
                <div class="container-xl pt-5 pb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-9 border border-2 fs-4 flex-column border-dark d-flex rounded-4 me-2 pb-5 " tabindex="0">
                            <?php 
                                include $page_path;
                            ?>
                        </div>

                        <div class="col-md-2 border border-2 fs-3 flex-column border-dark d-flex rounded-4 me-2 pb-5 ms-2 " tabindex="0">
                            <?php
	                        	include __DIR__ . '/builders/more.php';
	                        ?>
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php
		    include __DIR__ . '/builders/footer.php';
	    ?>       
	</body>
</html>
