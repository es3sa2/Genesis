//TODO EL CONDIGO QUE HACE QUE FUNCIONE EL CAROUSELS

window.addEventListener('load', function () {
	new Glider(document.querySelector('.carousel__lista'), {
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
});
