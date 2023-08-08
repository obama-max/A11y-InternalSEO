
   <?php
		if ( isset($_GET['a']) && $_GET['a']=="aria") {
            include('aria.php');
        } else {
            include('404.php');
        }

        $morefile = "captions.php";
	?>

    <?php
		include __DIR__ . '/../builders/header.php';
	?>
<article>
    <section>
        <div class="container-xl pt-5 pb-5">
            <div class="row d-flex justify-content-center">
        <?php
	    	include __DIR__ . '/../pages/semantic.php';
	    ?>

        <?php
	    	include __DIR__ . '/../builders/more.php';
	    ?>
            </div>
        </div>
    </section>

</article> 

	<?php
		include __DIR__ . '/../builders/footer.php';
	?>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="./assets/slick/slick.js"></script>
	<script src="./assets/scripts/sidepage2script.js"></script>

 