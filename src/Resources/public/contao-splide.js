function splideInit(config) {
	let splideId = config.id;
	let params = config.params;

	let splideContainer = document.getElementById(splideId);
	console.log(`id: ${splideId}`);
	console.log(`params:`);
	console.log(params);

	return new Splide(splideContainer, params).mount();
}
