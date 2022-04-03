let form = document.getElementById('regis');

form.onsubmit = function(e){
    let formData = new FormData(form);
    let namaDepan = formData.get("namaDepan");
    let namaTengah = formData.get("namaTengah");
    let namaBelakang = formData.get("namaBelakang");

    let tempatLahir = formData.get("tempatLahir");
    let tanggalLahir = formData.get("tanggalLahir");
    let nik = formData.get("nik");

    let wargaNegara = formData.get("wargaNegara");
    let email = formData.get("email");
    let nohp = formData.get("nohp");

    let alamat = formData.get("alamat");
    let kodePos = formData.get("kodePos");

    let username = formData.get("username");
    let pass1 = formData.get("pass1");
    let pass2 = formData.get("pass2");

    if(namaDepan.length<1 && namaTengah.length<1 && namaBelakang.length<1 && tempatLahir.length<1 && nik.length<1 && wargaNegara.length<1 && email.length<1 && nohp.length<1 && alamat.length<1 && kodePos.length<1 && username.length<1 && pass1.length<1 && pass2.length<1){
        alert('Field tidak boleh ada yang kosong');
    }



    // let errorLabel = document.getElementById('error-label');

//     if(name.length < 3){
//         errorLabel.innerHTML = "Name must be at least 3 characters long";
//     }else if(age <10){
//         errorLabel.innerHTML = "Age must be at least 10 years old";
//     }
//     else if(!phone.startsWith("+81") && phone.length!=11){
//         errorLabel.innerHTML = "Phone must be started with +81 and 11 characters long";
//     }
//     else if(!email.endsWith(".com") && !email.includes("@")){
//         errorLabel.innerHTML = "Email must have @ and ends with .com"
//     }
//     else{
//         errorLabel.innerHTML = "";
//     }
}