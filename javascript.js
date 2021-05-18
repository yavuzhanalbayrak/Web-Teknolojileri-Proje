function denetim(){
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  var form= document.forms["formiletisim"];

  if((form["ad"].value=="" ||form["soyad"].value=="" ||form["telefon"].value=="" ||form["email"].value==""
||form["sehir"].value=="secim") || (form["cbMail"].checked!=true && form["cbTelefon"].checked!=true)){
      
    alert("Lütfen Bütün Alanları Doldurunuz...");
      return false;

  }
  if(!form["email"].value.match(pattern)&&form["email"].value!=""){
    alert("Lütfen E-Mailinizi Doğru Formatta Giriniz.");
    return false;
  }
}
