//TODO EL CONDIGO QUE HACE QUE FUNCIONE EL CAROUSELS

window.addEventListener('load', function () {
	const glider = new Glider(document.querySelector('.carousel__lista'), {
		slidesToShow: 1,
		dots: '.carousel__indicadores',
		arrows: {
			prev: '.carousel__anterior',
			next: '.carousel__siguiente',
		},
		responsive: [
			{
				// screens greater than >= 775px
				breakpoint: 800,
				settings: {
					// Set to `auto` and provide item width to adjust to viewport
					slidesToShow: 1,
					slidesToScroll: 1,
					duration: 0.25,
				},
			},
			{
				// screens greater than >= 1024px
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	function sliderAuto(slider, miliseconds) {
		const slidesCount = slider.track.childElementCount;
		let slideTimeOut = null;
		let nextIndex = 1;

		function slide() {
			slideTimeOut = setTimeout(function () {
				if (nextIndex >= slidesCount) {
					nextIndex = 0;
				}
				slider.scrollItem(nextIndex++);
			}, miliseconds);
		}

		slider.ele.addEventListener('glider-animated', function () {
			window.clearInterval(slideTimeOut);
			slide();
		});

		slide();
	}

	//Este llamado a la función es el que inicia el autoplay del slider principal
	sliderAuto(glider, 2000);
});
