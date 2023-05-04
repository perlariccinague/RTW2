<script>
  if(document.getElementById('icon_1')) {
    const icon_1 = document.getElementById('icon_1');
    const icon_2 = document.getElementById('icon_2');
    const icon_3 = document.getElementById('icon_3');
    const icon_4 = document.getElementById('icon_4');
    const icon_5 = document.getElementById('icon_5');
    const icon_6 = document.getElementById('icon_6');
    const icon_7 = document.getElementById('icon_7');
    const icon_8 = document.getElementById('icon_8');

    let url_split = String(document.location);

    let foo = url_split.split('#');
    console.log(foo);


    if (icon_1.href === String(document.location) || spl(icon_1) === String(foo[0])) {
      icon_1.getElementsByTagName('img')[0].src = "files/layout/showroom_icons/interieur_blue.svg";
      $('#icon_1').removeClass('effect');
    } else if (icon_2.href === String(document.location) || spl(icon_2) === String(foo[0])) {
      icon_2.getElementsByTagName('img')[0].src = "files/layout/showroom_icons/display_blue.svg";
      $('#icon_2').removeClass('effect');
    } else if (icon_3.href === String(document.location) || spl(icon_3) === String(foo[0])) {
      icon_3.getElementsByTagName('img')[0].src = "files/layout/showroom_icons/lager_blue.svg";
      $('#icon_3').removeClass('effect');
    } else if (icon_4.href === String(document.location) || spl(icon_4) === String(foo[0])) {
      icon_4.getElementsByTagName('img')[0].src = "files/layout/showroom_icons/energie_blue.svg";
      $('#icon_4').removeClass('effect');
    } else if (icon_5.href === String(document.location) || spl(icon_5) === String(foo[0])) {
      icon_5.getElementsByTagName('img')[0].src = "files/layout/showroom_icons/consumer_blue.svg";
      $('#icon_5').removeClass('effect');
    } else if (icon_6.href === String(document.location) || spl(icon_6) === String(foo[0])) {
      icon_6.getElementsByTagName('img')[0].src = "files/layout/showroom_icons/dichtungssysteme_blue.svg";
      $('#icon_6').removeClass('effect');
    } else if (icon_7.href === String(document.location) || spl(icon_7) === String(foo[0])) {
      icon_7.getElementsByTagName('img')[0].src = "files/layout/showroom_icons/lueftung_blue.svg";
      $('#icon_7').removeClass('effect');
    } else if (icon_8.href === String(document.location) || spl(icon_8) === String(foo[0])) {
      icon_8.getElementsByTagName('img')[0].src = "files/layout/showroom_icons/health_blue.svg";
      $('#icon_8').removeClass('effect');
    }

    function spl(x) {
      let q = x.href.split('#');
      return String(q[0]);
    }
  }
</script>

<script>
    const buttons = document.querySelectorAll('.find-checkbox').length;

    for (let t = 0; t < buttons; t++){
        document.getElementsByClassName('showroom_unsichtabares_feld')[t].value =
        document.getElementsByClassName("find-checkbox")[t].getElementsByTagName("h1")[0].innerHTML;
    }
</script>


<script>
    const boxen = document.querySelectorAll('.checkbox').length;
    let wert = "";
    for(let x = 0; x < boxen ;x++){
        wert = document.getElementsByClassName('checkbox')[x];
        //console.log(x + wert + " | PHP = " + '<?= $produkt_vorher ?>');
        if (wert.value === '<?= $produkt_vorher ?>'){
            //console.log("TREFFER");
            wert.checked = true;
            console.log(x);
            //wert.value =  wert.nextSibling.nextSibling.getElementsByTagName('p')[0].innerHTML;
        }
    }

    // let valuetodesc = "";
    // for(let x = 0; x < boxen ;x++){
    //     wert = document.getElementsByClassName('checkbox')[x];
    //     wert.value =  wert.nextSibling.nextSibling.getElementsByTagName('p')[0].innerHTML;
    // }

</script>
