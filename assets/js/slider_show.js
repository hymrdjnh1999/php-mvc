// hero banner
$('.hero__banner-carousels').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 1500,
	nextArrow: $('.banner__btn--hero.next-btn'),
	prevArrow: $('.banner__btn--hero.prev-btn')
});

// middle banner
$('.middle__banner-wrap').slick({
	slidesToShow: 2,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 1500,
	nextArrow: $('.banner__btn--middle.next-btn'),
	prevArrow: $('.banner__btn--middle.prev-btn'),
	infinite: true,
	responsive: [
		{
			breakpoint: 739,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
});
// news
$('.news__item-wrap').slick({
	dots: false,
	infinite: false,
	speed: 300,
	slidesToShow: 4,
	slidesToScroll: 1,
	nextArrow: $('.news__header-btn--next'),
	prevArrow: $('.news__header-btn--prev'),
	responsive: [
		{
			breakpoint: 1023,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: false
			}
		},
		{
			breakpoint: 740,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: false
			}
		}
	]
});
