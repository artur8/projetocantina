 function dadosCartao(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState===4 && this.status===200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  };
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send(); 
}
function sumir(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState===4 && this.status===200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  };
  xmlhttp.open("GET","sumir.php?vote="+int,true);
  xmlhttp.send();
}
function recarga(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState===4 && this.status===200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  };
  xmlhttp.open("GET","dadosRecarga.php?id="+int,true);
  xmlhttp.send();
};


/*

function Preco(valor, numero){
    var mostraPreco = document.getElementById("divpreco");
    var total = total + (valor*numero);
    mostraPreco.innerText = total;
    xmlhttp.open("GET","atualiza_preco.php?valor="+total,true);
}
*/
function Preco(valor, numero){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
    if (this.readyState===4 && this.status===200) {
      document.getElementById("divpreco").innerHTML=this.responseText;
    }
    };
  var total = valor * numero;
  xmlhttp.open("GET","atualiza_preco.php?valor="+total,true);
  xmlhttp.send();
}

//function categoria(str) {
//    if (str === "") {
//        document.getElementById("cadastraCategoria").innerHTML = "";
//        return;
//    } else { 
//        xmlhttp.onreadystatechange = function() {
//            if (this.readyState === 4 && this.status === 200) {
//                document.getElementById("cadastraCategoria").innerHTML = this.responseText;
//            }
//        }}
//        if (str === 0){
//         xmlhttp.open("GET","cadastrarCategoria.php?q="+str,true);
//         xmlhttp.send();
//        }
//}

function cpfRecarga(str) {
    if (str.length == 0) { 
        document.getElementById("nome").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("recarga").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "montaRecarga.php?cpf=" + str, true);
        xmlhttp.send();
    }
}
