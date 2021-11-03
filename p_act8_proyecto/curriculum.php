<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Envia tu solicitud y trabaja con nosotros!</h1>
			</div>
			<div class="articulo">
				<article>
                <form action="/action_page.php">
                    <label for="fname">Nombres</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <label for="lname">Apellidos</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="lname">Correo</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="lname">Numero de celular</label>
                    <input type="number" id="lname" name="lname"><br><br>
                    <label for="lname">Link de tu curriculum</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <input type="submit">
                </form>
				</article>
			</div>

			<?php include('aside.php'); ?>
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>
