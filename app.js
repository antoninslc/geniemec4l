$('.header__navbar-toggle').click(function(e) {
    e.preventDefault();
    $('header__navbar').toggleClass('is-open');
})

let togg1 = document.getElementById("togg1");
			let video = document.getElementById("video");
			togg1.addEventListener("click", () => {
			if(getComputedStyle(video).display != "none"){
				video.style.display = "none";
			} 
			else {
				video.style.display = "block";
			}
			})