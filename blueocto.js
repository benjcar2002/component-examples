document.addEventListener('DOMContentLoaded', (event) => {
	// Off-canvas Search toggle
	function toggleOffSearch(){
		var isChecked = document.getElementsByClassName('off-search-input')[0].checked;
		if(isChecked){
			//checked
			document.getElementById('offSearchLabel').classList.toggle('opened');
			document.getElementsByClassName('off-search')[0].classList.toggle('opened');
			document.getElementsByClassName('header')[0].classList.toggle('search-opened');
		} else {
			//unchecked
		}
	}
	document.getElementById('offSearchLabel').addEventListener("click", toggleOffSearch, false);
});