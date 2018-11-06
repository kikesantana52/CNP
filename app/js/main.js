$(document).ready(function() {

  /*********************AREA DE SELECCION************/

  // AGREGAR CANDIDATOS
  $("#agregarCandidato").click(function(event) {
    if ($("input[name='name']").val() != "" && $("input[name='ap_p']").val() != "" && $("input[name='ap_m']").val()!="") {
      $.ajax({
        url: '/CNP/app/modulos/cgi/agregar_candidato.php',
        type: 'post',
        data: {name: $("input[name='name']").val(),ap_p: $("input[name='ap_p']").val(),ap_m: $("input[name='ap_m']").val()},
      })
      .done(function(response) {
        window.location.replace(window.location + "filtros.php?id="+1);
      })
      .fail(function(response) {
        console.log("error");
        alert(response);
      });
    }else{
      alert("Faltan campos por llenar");
    }
  });

  //
});
