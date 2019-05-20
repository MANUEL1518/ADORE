<?php 
	class funciones{
		public function conexion(){
			$conexion = new mysqli("localhost","root","password","floreria");
			return $conexion;
		}
		public function ofertas(){
			$conexion = $this->conexion();
			if($conexion){
				$query = "SELECT * FROM ofertas";
				$peticion = $conexion->query($query);
				$resultados = $peticion->num_rows;
				if ($resultados > 0) {
				while($oferta = $peticion->fetch_array()){
					?>
						<div class="oferta">
							<h3><?php echo $oferta['nombre']; ?></h3>
							<p class="descripcion">
								<?php
									echo $oferta['descripcion'];
								?>
							</p>
							<p class="precios">
								<?php echo $oferta['precios']; ?>
							</p>
							<img src='<?php echo $oferta["foto"]; ?>' style='width: 100%;'>
						</div>
					<?php
				}
			}else{
				echo "<center><h1 style='color: #000;'>No hay ofertas por ahora<br>😕</h1></center>";
			}
			}else{
				echo "Problemas al conextar con base de datos";
			}
		}
	}
	function mostrar_ofertas(){
		$funciones = new funciones();
		$funciones->ofertas();
	}
?>