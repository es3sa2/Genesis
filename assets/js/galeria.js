const fulImgBox = document.getElementById('fulImgBox');
const fullImg = document.getElementById('fullImg');

function openFullImg(reference) {
	fulImgBox.style.display = 'flex';
	fullImg.src = reference;
}

function closeImg() {
	fulImgBox.style.display = 'none';
}
