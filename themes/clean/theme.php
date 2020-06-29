<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="<?= $Wcms->page('description') ?>">
        <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
    	<meta http-equiv="imagetoolbar" content="no"/>
    	<meta name="MSSmartTagsPreventParsing" content="false"/>

        <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    	<!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">

        <?= $Wcms->css() ?>

    </head>

    <body>
        <?= $Wcms->settings() ?>
        <?= $Wcms->alerts() ?>

        <div class="bg-light py-4" role="navigation">
    		<div class="container text-center">
    			<div class="row">
					<div class="col-md-12">
						<h1><span class="text-primary">FISMEDICA s.r.o </span><small>MUDr. Jitka Skotáková - praktická lékařka Blansko</small></h1>
					</div>
    			</div>
    		</div>
    	</div>

    	<div class="container py-4">
			<div class="row">
				<div class="col-md-12 text-center py-4 text-muted">
					<h4>Poskytujeme preventivní prohlídky a diagnostickou a léčebnou péči se zajištěním návaznosti na odborná lékařská pracoviště.</h4>
				</div>
				<div class="col-sm-7">
					<div>
						<?= $Wcms->page('content') ?>
					</div>
				</div><!-- /.col-lg-8 -->
				<div class="col-sm-5">
					<div class="alert alert-warning">
						<?= $Wcms->block('subside') ?>
					</div>
				</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
    	</div><!-- /.container -->

		<footer class="bg-light"> 
			<div class="container">
				<div class="text-center py-5">
					<h3 class="text-primary">FISMEDICA s.r.o</h3>
						<p>IČ: 29222303<br>
						sídlo:  Vilémovice 156, 679 06 Vilémovice<br>
						datová schránka: kfmr26u<br>
						Spisová značka C 66713/KSBR, Krajský soud v Brně</p>
				</div>
			</div>
    	</footer>

    	<!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <?= $Wcms->js() ?>

    </body>
</html>
