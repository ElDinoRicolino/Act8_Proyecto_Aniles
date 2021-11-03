<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Crea tu cuenta!</h1>
			</div>
			<div class="articulo">
				<article>
                <form action="/action_page.php">
                    <label for="fname">Tu nombre</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <label for="lname">Apellidos</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="lname">Correo</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="lname">Nombre del pedido</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="lname">Numero del articulo</label>
                    <input type="nbumber" id="lname" name="lname"><br><br>
                    <label for="lname">Direccion</label>
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
