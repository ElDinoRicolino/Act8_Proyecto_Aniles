<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Artculos adquiridos</h1>
			</div>
			<div class="articulo">
				<article>
                <form action="/action_page.php">
                    <label for="fname">Nombre del artículo</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <label for="lname">Número de artículo</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="lname">Fecha de entrega</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="lname">Distribuidor</label>
                    <input type="nbumber" id="lname" name="lname"><br><br>
                    <input type="submit">
                </form>
				</article>
			</div>
			<?php include('aside.php'); ?>
		</div>
	</section>
	<?php include('footer.php'); ?>
