function splideInit(config) {
	let splideId = config.id;
	let params = config.params;
	let splideContainer = document.getElementById(splideId);
	return new Splide(splideContainer, params).mount();
}
