function openContent(evt,id){
    var i, navcontent, navlinks;
    navcontent = document.getElementsByClassName("navcontent");
    for (i = 0; i < navcontent.length; i++) {
        navcontent[i].style.display = "none";
    }
    navlink = document.getElementsByClassName("navlink");
    for (i = 0; i < navlink.length; i++) {
        navlink[i].className = navlink[i].className.replace(" active", "");
    }
    document.getElementById(id).style.display = "block";
    evt.currentTarget.className += " active";
}
function clearData(){
  $('input').val('');
  $('option').remove().end().append('<option value="" selected disabled>Pilih..</option>');
}
function clearNominal(){
  $('input').val('');
}
