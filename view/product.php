<?php include("../includes/header.php")  ?>
<?php include("../includes/menu_navegacion.php")  ?>



<div class="header__content">
	<img src="../assets/img/SECCION WAVE_01.jpg" alt="" class="header__img" />
</div>

<div class="header__menu">
	<a href="#" class="header__link active">PORTADA</a>
	<a href="#description" class="header__link">DESCRIPCIÓN</a>
	<a href="#galeria" class="header__link">GALERÍA</a>
	<a href="#vista_360" class="header__link">VISTA 360°</a>
	<a href="#ficha" class="header__link">FICHA TECNICA</a>
	<a href="#" class="header__link header__link--red">COTIZAR</a>
</div>
</div>

<section class="product">
	<div class="producto__img">
		<img src="/assets/img/WAVEs110_10.png" alt="" />
	</div>
	<div class="producto__info" id="description">
		<div class="product__info-header">
			<h3 class="product__name">WAVE S</h3>
			<p class="product__cilindraje">Cilindraje: 110cc</p>
		</div>

		<div class="container__prince">
			<p class="product__price"> $000.000</p>
			<p>CREDI HONDA PLUS</p>
		</div>

		<div class="product__plan">
			<p>Aprobación automática, sin entrada y sin garante</p>
			<p>Cuotas desde $144.00</p>
		</div>

		<div class="product__general">
			<ul>
				<li>Seguro por pérdida total</li>
				<li>Seguro de desgravamen</li>
				<li>Incluye Matrícula y Casco</li>
				<li>Conéctate a tu Honda con GPS Satelital (Honda Satelital EC)</li>
				<li>La CB125F twister sorprende con un diseño deportivo que te hará
					ganar mas que miradas, autonomia superior para llegar mas lejos y
					toda la calidad que caracteriza a Honda</li>
				<li>Estása un paso de llegar mucho más lejos</li>
			</ul>
		</div>

		<a href="#" class="product__link">Descargar ficha tecnica</a>

		<div class="description__container">
			<div class="description__color">
				<p class="description__title">Colores disponibles</p>
				<div class="colores">
					<div class="color-red"></div>
					<div class="color-black"></div>
					<div class="color-white"></div>
				</div>
			</div>

			<div class="compartir">
				<p class="compartir__title">Compartir</p>
				<i class="bx bxl-facebook-circle"></i>
				<i class="bx bxl-whatsapp"></i>
			</div>
		</div>

		<a href="#" class="btn__cotizar">COTIZAR</a>
	</div>
</section>

<section class="product__icon">
	<div class="product__items item-2"> </div>
	<div class="product__items item-3"> </div>
	<div class="product__items item-4"> </div>
	<div class="product__items item-5"> </div>
</section>

<section class="product__imagenes" id="galeria">

	<div class="full-img" id="fulImgBox">
		<img src="/assets/img/Rectangle 30.png" id="fullImg" alt="" />
		<span onclick="closeImg()">X</span>
	</div>

	<div class="product__imagen imagen-1">
		<img src="/assets/img/Rectangle 30.png" onclick="openFullImg(this.src)" alt="" />
	</div>

	<div class="product__imagen imagen-2">
		<img src="/assets/img/Rectangle 36.png" onclick="openFullImg(this.src)" alt="" />
	</div>
	<div class="product__imagen imagen-3">
		<img src="/assets/img/Rectangle 33.png" onclick="openFullImg(this.src)" alt="" />
	</div>
	<div class="product__imagen imagen-4">
		<img src="/assets/img/Rectangle 37.png" onclick="openFullImg(this.src)" alt="" />
	</div>
	<div class="product__imagen imagen-5">
		<img src="/assets/img/Rectangle 34.png" onclick="openFullImg(this.src)" alt="" />
	</div>
	<div class="product__imagen imagen-6">
		<img src="/assets/img/Rectangle 41.png" onclick="openFullImg(this.src)" alt="" />
	</div>
	<div class="product__imagen imagen-7">
		<img src="/assets/img/Rectangle 32.png" onclick="openFullImg(this.src)" alt="" />
	</div>
	<div class="product__imagen imagen-8">
		<img src="/assets/img/Rectangle 35.png" onclick="openFullImg(this.src)" alt="" />
	</div>
</section>

<section class="view__product" id="vista_360">
	<div class="view__container">
		<h2>VISTA 360°</h2>
		<hr />
	</div>

	<!-- Slider main container -->
	<div class="swiper">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_11.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_10.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_09.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_08.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_07.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_06.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_05.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_04.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_03.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_02.png" class="product__view" alt="" />
			</div>

			<div class="swiper-slide">
				<img src="/assets/img/WAVEs110_01.png" class="product__view" alt="" />
			</div>
		</div>
		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</section>

<section class="fichaTecnica" id="ficha">

	<div class="table">

		<div class="header__table">
			<h2>FICHA TÉCNICA</h2>
			<hr />
		</div>

		<table class="table__body">

			<thead>
				<tr>
					<td>Motors</td>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>Tipo de motors</td>
					<td>Monocilí­ndrico, 4 tiempos, 2 válvulas, OHC, refrigerado
						aire</td>
				</tr>

				<tr>
					<td>Cilindrada</td>
					<td>109,1 cc</td>
				</tr>

				<tr>
					<td>Potencia máxima</td>
					<td>9,3 cv @ 7,500 rpm</td>
				</tr>

				<tr>
					<td>Velocidad máxima</td>
					<td>85 km/h</td>
				</tr>

				<tr>
					<td>Alimentación</td>
					<td>Carburador</td>
				</tr>

				<tr>
					<td>Encendido</td>
					<td>CDI y avance electrónico</td>
				</tr>

				<tr>
					<td>Arranque</td>
					<td>Electrico y pedal</td>
				</tr>

				<tr>
					<td>Transmisión</td>
					<td>4 velocidades</td>
				</tr>
			</tbody>


		</table>
	</div>
</section>

<?php include("../includes/footer.php")  ?>