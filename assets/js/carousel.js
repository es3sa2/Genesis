console.log('saludos desde vue');

new Vue({
	el: '#carousel3d',
	data: {
		slides: 5,
	},
	components: {
		'carousel-3d': window['carousel-3d'].Carousel3d,
		slide: window['carousel-3d'].Slide,
	},
});
