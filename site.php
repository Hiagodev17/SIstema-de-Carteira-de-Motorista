<html>
    <head>
        <title>.: Meu lindo site :.</title>
    
		<style>

			.sair:link, .sair:visited {
			background-color: white;
			color: black;
			border: 2px solid green;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			}

			.sair:hover, .sair:active {
			background-color: green;
			color: white;
			}
		</style>
	</head>
	
    <body>
		
		<?php
			// iniciar uma sessão
			session_start();

			
				echo '<table>
					<tr>
						<td width=50%>
							<center>
							<span class="corBranca">Bem vindo</span>
							<br>
							
							</center>
						</td>
						
						</tr>
						
				</table>';
			

			$hostname = "127.0.0.1";
			$user = "root";
			$password = "root";
			$database = "carteiramotorista";
		
			$conexao = new mysqli($hostname,$user,$password,$database);

			$sql="SELECT * FROM `carteiramotorista`.`pessoa`;";
                 
			$resultado = $conexao->query($sql);
			
			echo '<hr>';
				
			while($row = mysqli_fetch_array($resultado)){
				echo 'Nome: ';
				echo $row[1];
				echo '<br>';
				echo 'Idade: ';
				echo $row[2];
				echo '<br>';
				echo 'Tem carteira de motorista: ';
				echo $row[3];
				echo '<br>';

				echo '<br>';
				echo '<hr>';
				echo '<br>';
			}
			$conexao -> close();
           
		?>
		<br>
		<a href="sair.php" class='sair'>Sair</a>
	</body>
</html>