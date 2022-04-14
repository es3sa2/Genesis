<?php include("./includes/header.php")  ?>
<?php include("./includes/menu_navegacion.php")  ?>



<div class="carousel">
	<div class="carousel__contenedor">
		<button aria-label="Anterior" class="carousel__anterior">
			<i class="fas fa-chevron-left"></i>
		</button>

		<div class="carousel__lista">
			<div class="carousel__elemento">
				<img src="assets/img/BANNER 01.jpg" alt="" />
			</div>
			<div class="carousel__elemento">
				<img src="assets/img/BANNER 02.jpg" alt="" />
			</div>
			<div class="carousel__elemento">
				<img src="assets/img/BANNER 03.jpg" alt="" />
			</div>

			<div class="carousel__elemento">
				<img src="assets/img/BANNER 04.jpg" alt="" />
			</div>

			<div class="carousel__elemento">
				<img src="assets/img/BANNER 05.jpg" alt="" />
			</div>
		</div>

		<button aria-label="Siguiente" class="carousel__siguiente">
			<i class="fas fa-chevron-right"></i>
		</button>
	</div>

	<div role="tablist" class="carousel__indicadores"></div>
</div>
</header>

<section id="contacto" class="planGenesis">
	<div class="planGenesis__info">
		<h3 class="planGenesis__title">PLAN GENESIS, TU MEJOR OPCION.</h3>
		<p class="planGenesis__paragraphe">Si quieres saber más sobre el plan, comunicate con nosotros</p>
	</div>
	<div class="planGenesis__btn">
		<a href="/view/contacto.php" class="planGenesis__btns">CONTACTANOS</a>
	</div>
</section>
<!-- 
<section class="planes">
	<div class="img"></div>

	</div>
</section> -->

<section class="stayHouse">
	<div class="stayHouse__info">
		<h2 class="stayHouse__title">QUEDATE EN CASA</h2>

		<p class="stayHouse__content">
			Nuestro equipo de atencion estara disponible para asesorarte en todo lo que necesites
		</p>

		<a class="stayHouse__btn" href="/view/contacto.php"> CONTACTANOS </a>

	</div>

	<div class="stayHouse__img"> </div>
</section>

<section class="modelosDestacados">
	<div class="modelosDestacados__title">
		<h3>MODELOS DESTACADOS</h3>
		<hr />


	</div>

	<div id="carousel3d">
		<carousel-3d :perspective="0" :space="400" :display="3" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" :controls-width="50" :controls-height="80" :clickable="true">
			<slide :index="0">
				<img src="assets/img/HONDA XR 150L 2.png" alt="" />
				<div class="container_info">
					<h3>HONDA GLH 150</h3>
					<button class="btn">
						<a href="view/product.php">VER MOTO</a>

					</button>
				</div>
			</slide>
			<slide :index="1">
				<img src="assets/img/HONDA WAVE S 110 2.png" alt="" />
				<div class="container_info">
					<h3>HONDA WAVE S 110</h3>
					<button class="btn">
						<a href="view/product.php">VER MOTO</a>
					</button>
				</div>
			</slide>
			<slide :index="2">
				<img src="assets/img/HONDA GLH 150 3.png" alt="" />
				<div class="container_info">
					<h3>HONDA GLH 150</h3>
					<button class="btn">
						<a href="view/product.php">VER MOTO</a>
					</button>
				</div>
			</slide>
			<slide :index="3">
				<img src="assets/img/HONDA XR 150L 2.png" alt="" />
				<div class="container_info">
					<h3>HONDA XR 150L</h3>
					<button class="btn">
						<a href="view/product.php">VER MOTO</a>
					</button>
				</div>
			</slide>
			<slide :index="4">
				<img src="assets/img/HONDA GLH 150 3.png" alt="" />
				<div class="container_info">
					<h3>HONDA GLH 150</h3>
					<button class="btn">
						<a href="view/product.php">VER MOTO</a>
					</button>
				</div>
			</slide>
		</carousel-3d>
	</div>

	<!-- partial:index.partial.html -->

</section>

<section class="categoria">

	<div class="categoria__title">
		<h2>CATEGORIA</h2>
		<hr />
	</div>

	<div class="categoria__container">

		<a href="/view/scooter.php">
			<div class="categoria__item1">
				<h3>CUB / SCOOTERS</h3>
			</div>
		</a>

		<a href="/view/nake_sport.php">
			<div class="categoria__item2">
				<h3>NAKED / SPORT</h3>
			</div>
		</a>

		<a href="/view/enduro.php">
			<div class="categoria__item3">
				<h3>ENDURO</h3>
			</div>
		</a>
	</div>
</section>

<section class="preguntasFrecuentes" id="preguntas">
	<div class="preguntasFrecuentes__container">
		<div class="accordion">
			<!-- item 1 -->
			<div class="accordion-item" id="question1">
				<a href="#question1" class="accordion-link">
					¿Qué marcas comercializamos?
					<i class="bx bx-plus"></i>
					<i class="bx bx-minus"></i>
				</a>
				<div class="answer">
					<p>
						Genesis Motors actualmente cuenta con planes de pagos que brindan accesibilidad a vehículos con valores equivalentes de venta al público de los modelos correspondientes a las marcas HONDA, YAMAHA, y BAJAJ.
					</p>
				</div>
			</div>

			<!-- item 2 -->
			<div class="accordion-item" id="question2">
				<a href="#question2" class="accordion-link">
					¿Qué modelos tenemos disponibles?
					<i class="bx bx-plus"></i>
					<i class="bx bx-minus"></i>
				</a>
				<div class="answer">
					<p>
						Comercializamos los planes de pagos por vehículos que se encuentren vigentes en el mercado en todo el país.
					</p>
				</div>
			</div>

			<!-- item 3 -->
			<div class="accordion-item" id="question3">
				<a href="#question3" class="accordion-link">
					¿Cómo es nuestra financiación?
					<i class="bx bx-plus"></i>
					<i class="bx bx-minus"></i>
				</a>
				<div class="answer">
					<p>
						Tenemos un plan de pago apto para todo aquel que tenga interés de acceder a una capitalización real.
						Bajo ningún concepto deberá acceder a créditos ni financieras.
					</p>
				</div>
			</div>

			<!-- item 4 -->
			<div class="accordion-item" id="question4">
				<a href="#question4" class="accordion-link">
					¿Qué beneficios tiene adquirir o ingresar a nuestro sistema?
					<i class="bx bx-plus"></i>
					<i class="bx bx-minus"></i>
				</a>
				<div class="answer">
					<p>
						Como se menciona en el punto anterior, el Sistema Plan Genesis te permitirá congelar
						el precio de tu vehículo desde el momento en que ingresas al Plan.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include("./includes/footer.php")  ?>