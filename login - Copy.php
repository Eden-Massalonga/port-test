<!--Header -->
<?php include ("header.php"); ?>

<!--Body-->
    
	<div class="container">
		<br>
		<div class="container-fluid">
			
			<div class="container">
				
				<div class="bg-secondary text-light p-3 border">
					<h3><i class="fas fa-user-alt"></i> Registe a Sua Conta</h3>
				</div>
				
				<div class="row justify-content-center">
					<form action = "php/criarconta.php" method = "POST" class = "">
						<input type="text" name="nome" placeholder="Insira o seu Nome:" value="" class = ""/>
						<br>
						<input type="text" name="email" placeholder="Insira o seu E-mail" value="" class = ""/>
						<br>
						<input type="password" name="password" placeholder="Insira a sua Palavra-Passe" value="" class = ""/>
						<br>
						<input type="submit" name="send" value="Cadastrar" />
					</form>
				</div>								
			</div>
			
		</div>	
			
	</div>

<!--footer-->
<?php include ("footer.php"); ?>