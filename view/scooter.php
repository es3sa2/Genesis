<?php include("../includes/header.php");  ?>
<?php include("../includes/menu_navegacion.php"); 
include '../Dashboard/pages/conexion.php';
$query = mysqli_query($conexion, "SELECT * FROM motos");
?>


<div class="header__content">
	<img src="../assets/img/Seccion 2.png" alt="" class="header__img" />
</div>
</div>

<section class="scooter__product">
	<div class="scooter__categoria">
		<div class="scooter__container">
			<div class="scooter__header">
				<h2>CATEGORÍAS</h2>
			</div>
			<div class="cantegoria__content">
				<a href="/view/scooter.php" class="active">
					<h2>CUB/SCOOTERS</h2>
				</a>
				<hr />
				<a href="/view/nake_sport.php">
					<h2>NAKED/SPORT</h2>
				</a>
				<hr />
				<a href="/view/enduro.php">
					<h2>ENDURO</h2>
				</a>
			</div>
		</div>
	</div>

	<div class="product__list">
		<?php
            while($moto = mysqli_fetch_assoc($query)){
        ?>
		<div class="product__item">
			<div class="item__img">
				<img src="/assets/img/<?php echo $moto['nombre'] ?>.png" alt="" />
			</div>
			<div class="item__container">
				<div class="item__title">
					<h2><?php echo $moto['nombre']; ?></h2>
					<p>Cilindraje: <?php echo $moto['cilindraje']; ?>cc</p>
				</div>
				<a href="/view/product.php" class="btn__detalles">
					<i class="bx bx-chevron-right"></i>
					<p>VER DETALLES</p>
				</a>
			</div>
		</div>
		<?php }?>
	</div>
</section>

<?php include("../includes/footer.php")  ?>
