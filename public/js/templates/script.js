function changeGrid(event, no) {
	document.querySelector(`#item${no}`).classList = "";
	document.querySelector(`#item${no}`).classList.add(event.target.value);
}

$(function(){
	document.addEventListener("scroll", () => {
		$("#menumobile").collapse('hide');
	});
});
