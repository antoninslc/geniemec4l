let video = document.querySelector('video');
window.addEventListener('scroll', function(){
	let value = 1.2 + window.scrollY/-2000;
	video.style.opacity = value;
})