function tampilkanSapaan() {
    let waktuSekarang = new Date();
    let jam = waktuSekarang.getHours();
    let menit = waktuSekarang.getMinutes();
    
    let waktuDesimal = jam + (menit / 60);
    let elemenSapaan = document.getElementById("sapaan");

    if (waktuDesimal > 0 && waktuDesimal < 11) {
        elemenSapaan.innerHTML = "SELAMAT PAGI";
    } else if (waktuDesimal >= 11 && waktuDesimal < 14) {
        elemenSapaan.innerHTML = "SELAMAT SIANG";
    } else if (waktuDesimal >= 14 && waktuDesimal < 18) {
        elemenSapaan.innerHTML = "SELAMAT SORE";
    } else {
        elemenSapaan.innerHTML = "SELAMAT PETANG";
    }
}

tampilkanSapaan();