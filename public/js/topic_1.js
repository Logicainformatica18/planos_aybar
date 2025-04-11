function topicDetail(id, registry_detail_id) {
  var formData = new FormData(document.getElementById("topic"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "../topic_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "certificados_mantenimiento";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function topicDetailStudent(id, registry_detail_id) {
  var formData = new FormData(document.getElementById("topic"));
  formData.append("id", id);
  formData.append("registry_detail_id", registry_detail_id);
  axios({
    method: "post",
    url: "../topic_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "Socio Comercial-certificados";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
function topicStore() {
  var formData = new FormData(document.getElementById("topic"));

  // Mostrar la barra de progreso y el mensaje de "Cargando..."
  // document.getElementById("progress-container").style.display = 'block'; // Asegura que la barra y el mensaje estén visibles
  // document.getElementById("progress-message").innerText = "Cargando...";

  axios({
    method: "post",
    url: "../topicStore",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }

  })
    .then(function(response) {


      // Handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      // Carga PDF, CSV, Excel, etc.
      datatable_load();
      alert("Registrado Correctamente");

    })
    .catch(function(response) {
      // En caso de error
      console.log(response);
    });
}

function topicEdit(id) {

    var formData = new FormData(document.getElementById("topic"));
    formData.append("id", id);

    axios({
        method: "post",
        url: "../topicEdit",
        data: formData,
        headers: {
            "Content-Type": "multipart/form-data"
        }
    })
    .then(function(response) {
        // Setear valores básicos
        document.getElementById("id").value = response.data["id"];
        document.getElementById("description").value = response.data["description"];
        document.getElementById("detail").value = response.data["detail"];
        document.getElementById("type").value = response.data["type"];
        if (response.data["image_1"]) {
            document.getElementById("blah").src = response.data["image_1"];
        } else {
            document.getElementById("blah").src = "https://placehold.co/500x350"; // o deja vacío
            // document.getElementById("blah").src = "";
        }

        document.getElementsByClassName("note-editable")[0].innerHTML = response.data["post"];

       // Asignar categorías seleccionadas en el select2
        if (Array.isArray(response.data["categories"])) {
            $('#category').val(response.data["categories"].map(String)).trigger('change');
        }

    })
    .catch(function(response) {
        console.log(response);
    });
}







function topicUpdate() {
       // Sincroniza contenido de Summernote
       $('#my-textarea').val($('.note-editable').html());
  var formData = new FormData(document.getElementById("topic"));
  axios({
    method: "post",
    url: "../../topicUpdate",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      datatable_load();
      alert("Modificado Correctamente");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function topicDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("topic"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "../topicDestroy",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        //handle success
        var contentdiv = document.getElementById("mycontent");
        contentdiv.innerHTML = response.data;
        //carga pdf- csv - excel
        datatable_load();
        alert("Eliminado Correctamente");
      })
      .catch(function(response) {
        //handle error
        console.log(response);
      });
  }
}

function topicShow() {
  var formData = new FormData(document.getElementById("show"));
  axios({
    method: "post",
    url: "../topicShow",
    data: formData
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      datatable_load();
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
