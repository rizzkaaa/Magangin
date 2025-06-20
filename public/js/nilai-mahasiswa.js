const inputNilaiBox = document.getElementById("input-nilai");
const overlayNilai = document.getElementById("overlay-nilai");

const inputBimbinganBox = document.getElementById("input-bimbingan");
const overlayBimbingan = document.getElementById("overlay-bimbingan");


overlayNilai.addEventListener('click', () => inputNilaiBox.style.display = "none")
overlayBimbingan.addEventListener('click', () => inputBimbinganBox.style.display = "none")

console.log(overlayBimbingan);

function inputNilaiBoxShow(){
    inputNilaiBox.style.display = "flex"
}
function inputBimbinganBoxShow(){
    inputBimbinganBox.style.display = "flex"
}
