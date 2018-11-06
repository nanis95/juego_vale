var fin=0;
var bandera = false;

//Juego sopa
$( function() {
    $("#dona").draggable({ revert: "valid",
      stop: function(){
        fin = fin;
      }
    });

    $("#papa").draggable({ revert: "invalid",
      stop: function(){
        fin = fin + 1;
        bandera = true;
      }
    });

    $("#sandwich").draggable({ revert: "valid",
      stop: function(){
        fin = fin;
      }
    });

    $("#brocoli").draggable({ revert: "invalid",
      stop: function(){
        fin = fin + 1;
        bandera = true;
      }
    });

    $("#perro").draggable({ revert: "valid",
      stop: function(){
        fin = fin;
      }
    });

    $("#zanahoria").draggable({ revert: "invalid",
      stop: function(){
        fin = fin + 1;
        bandera = true;
      }
    });

    $("#alverja").draggable({ revert: "invalid",
      stop: function(){
        fin = fin + 1;
        bandera = true;
      }
    });

    $("#espinaca").draggable({ revert: "invalid",
      stop: function(){
        fin = fin + 1;
        bandera = true;
      }
    });


    $("#cuadro-sopa").droppable({
      drop: function(event, ui) {tamaño(ui.draggable);}
    });
} );
function tamaño($item){
  if (fin == 4 && bandera == true) {
    $( "#dialog-message" ).dialog({
      modal: true,
    });
  document.getElementById('dialog-message').innerHTML="<p>Ganaste, preparaste correctamente la sopa</p><br><a href='sopaBebe.php'>CONTINUAR</a>";
  }
}

// Juego Sala

var final = 0;

$( function() {
    $("#florero").draggable({ revert: "invalid",
      stop: function(){
        ajuste();
      }
    });

    $("#lib1").draggable({ revert: "invalid"});

    $("#lib2").draggable({ revert: "invalid"});

    $("#lib3").draggable({ revert: "invalid"});

    $("#cuadros").draggable({ revert: "invalid",
      stop: function(){
        ajuste();
      }
    });

    $("#cuadro-florero").droppable({accept:"#florero",
        drop: function(event, ui){final += 1;}              
    });

    $("#cuadro-cuadros").droppable({accept:"#cuadros",
        drop: function(event, ui){final += 1;}              
    });
} );

function ajuste(){
   if (final == 2) {
    $( "#dialog-win-message" ).dialog({
      modal: true,
    });
    document.getElementById('dialog-win-message').innerHTML="<p>Ganaste, juntos lograron terminar con los deberes</p><br><a href='final.php'>CONTINUAR</a>";
  }  
}

//Registro
function registrar() {
  nickname = document.getElementById('nickname').value;
  sexf = document.getElementById('sexof').checked;
  sexm = document.getElementById('sexom').checked;
  rural = document.getElementById('ubi-rural').checked;
  urbana = document.getElementById('ubi-urbano').checked;
  edad = document.getElementById('edad').value;

  if (nickname == "" || sexf == false || sexm == false || rural == false || urbana == false || edad == "") {
    document.getElementById('iniciar').innerHTML = "<h2 id='titulos-form'>Ingresa todos los datos</h2>";
  }
  else{
    $.ajax({
      type: "POST",
      data: $("#form").serialize(), 
      url: "regisAjax.php", 
      success: function(result){
        $("#iniciar").html(result);        
      }
    });
  }
}

//login
function sesion() {
  nickname = document.getElementById('nickname').value;
  if (nickname != "") {
    document.getElementById('msg').innerHTML = "";
    $.ajax({
      type: "POST",
      data: $("#form").serialize(), 
      url: "loginAjax.php", 
      success: function(result){
        if (result == true) {
          location.href ="inicio.php";
        }else{
          $("#msg").html(result);
        }
      }
    });
  }
  else{
    document.getElementById('msg').innerHTML = "<h2 id='titulos-form'>Debes ingresar tu nickname</h2>";
  }
}

//validar pregunta
function pregunta1(){
  casosi = document.getElementById('casosi').checked;
  casono = document.getElementById('casono').checked;
  razon = document.getElementById('resp').value;
  caso = false;

  if ((casosi == true && casono == false) || (casosi == false && casono == true)) {
    caso = true;
  }

  if (caso == true && razon != "") {
    document.getElementById('msg').innerHTML = "";
    $.ajax({
      type: "POST",
      data: $("#form").serialize(), 
      url: "respuestaAjax.php", 
      success: function(result){
        if (result == true) {
          location.href ="juegoSi.php";
        }else{
          $("#msg").html(result);
        }
      }
    });
  }

}

function boton() {
  document.getElementById('btn-resp').innerHTML="<img id='boton-pregunta' src='source/img/boton-texto-respuesta.png'>";
  document.getElementById('btn-resp-next').innerHTML="<a href='pregunta.php'><img id='boton-next-pre' class='img-fluid' src='source/img/boton-continuar.png'>";
}

function boton2() {
  document.getElementById('btn-resp-next').innerHTML="<a href='grado.php'><img id='boton-next-pre' class='img-fluid' src='source/img/boton-continuar.png'>";
}

function boton3() {
  document.getElementById('btn-resp-next').innerHTML="<a href='viaje.php'><img id='boton-next-pre' class='img-fluid' src='source/img/boton-continuar.png'>";
}

function boton4() {
  document.getElementById('btn-resp-next').innerHTML="<a href='juegoSopa.php'><img id='boton-next-pre' class='img-fluid' src='source/img/boton-continuar.png'>";
}

function boton5() {
  document.getElementById('btn-resp-next').innerHTML="<a href='juegoSala.php'><img id='boton-next-pre' class='img-fluid' src='source/img/boton-continuar.png'>";
}

function botonfin() {
  document.getElementById('btn-resp-next').innerHTML="<a href='cerrar.php'><img id='boton-next-pre' class='img-fluid' src='source/img/boton-continuar.png'>";
}

function ayuda() {
  $( "#dialog-error-message" ).dialog({
      modal: true,
      buttons: {
        "Llamar a papá": function () {
          $(this).dialog("close");
          document.getElementById('img-juego').innerHTML=" ";
          document.getElementById('s1').innerHTML=" ";
          document.getElementById('s2').innerHTML=" ";
          document.getElementById('s3').innerHTML=" ";
          document.getElementById('img-juego').innerHTML="<img id='sala' class='img-fluid' src='source/img/sala-gana.jpg'>";
        },
        "Cerrar": function () {
          $(this).dialog("close");
          location.reload();
        },
        
      }
    });
  document.getElementById('dialog-error-message').innerHTML="<p>Perdiste, se acabó el tiempo, recuerda que siempre cuentas con tú familia</p>";
}

function si(){
  preg = document.getElementById('casosi').checked;

  if (preg == true) {
    document.getElementById('audio').innerHTML="<audio src='source/audio/porque.mp3' autoplay>";
    document.getElementById('otra-preg').innerHTML="<p id='titulos-form'>Cuéntanos porqué?</p>";
    document.getElementById('resp').innerHTML="<select id='resp' name='resp'><option value='' disabled selected><p>Selecciona una respuesta</p></option><option value='embarazo'>Quedó embarazada</option><option value='trabajar'>Tenía que trabajar</option><option value='ayudar'>Tenía que ayudar en la casa</option><option value='nose'>No sé</option></select>";
  }
}