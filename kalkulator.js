function tambah(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 + a2 ;
    frm.hasil.value = total;
     
            // var a1 = document.getElementById('kalkulator'); // contoh pembuatan element value
            // var a2 = document.getElementById('kalkulator');
            // var input = 'Selamat Pagi'  + a1;
            // var no_input = 'Maaf nama anda belum terisi';
            // var total = (a1 && a2 !='')? input : no_input;
            // document.getElementById('total').innerHTML = total;
}
function kurang(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 - a2 ;
    frm.hasil.value = total;
    
}

function pembagian(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 / a2 ;
    
    frm.hasil.value = total;

            
}
function perkalian(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 * a2 ;
    frm.hasil.value = total;
    
}
function pangkat(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 ^ a2 ;
    frm.hasil.value = total;
    
}
