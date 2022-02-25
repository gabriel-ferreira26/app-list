$("#btn-add-task").click(function(){
  $(".btn-close-modal").click();

  $("#form-add-task").attr('action', '/tasks');
  $("#form-add-task").submit();
});

$(".edit-task").click(function(){
  let idtask = $(this).attr('idtask');
  let dataTask = null;

  console.log(idtask);

  $.ajax({
    type    : 'GET', 
    url     : "tasks/search/"+idtask,
    dataType: 'json',
    error: function(){
      alert('Erro');
    },
    success : function(ajaxresponse){
      dataTask = JSON.parse(ajaxresponse);

      $('#edit-task-modal').modal('toggle');
      $("#edit-task-modal").modal('show');

      let formEdit = document.querySelector('#form-edit');
      let inputTitle = document.createElement('input');
      let inputDescription = document.createElement('textarea');
      let inputId = document.createElement('input');
      
      formEdit.innerHTML = "";

      // Adicionando input do titulo
      $(inputTitle).attr('type', 'text');
      $(inputTitle).attr('class', 'form-control');
      $(inputTitle).attr('id', 'title-edit');
      $(inputTitle).attr('name', 'title');
      $(inputTitle).attr('value', dataTask.title);

      $(inputDescription).attr('type', 'text');
      $(inputDescription).attr('class', 'form-control');
      inputDescription.classList.add('mt-3');
      $(inputDescription).attr('id', 'description-edit');
      $(inputDescription).attr('name', 'description');
      inputDescription.innerHTML = dataTask.description;

      $(inputId).attr('type', 'hidden');
      $(inputId).attr('id', 'idEdit');
      $(inputId).attr('value', dataTask.id);

      if(!document.querySelector('#title-edit')){
        formEdit.appendChild(inputTitle);
        formEdit.appendChild(inputDescription);
        formEdit.appendChild(inputId);
      }
     
    }
  })

});

$("#btn-edit-task").click(function(){
  //$(".btn-close-modal").click();
  let idTask = $("#idEdit").val();

  $("#form-edit").attr('action', '/tasks/update/'+idTask);
  $("#form-edit").submit();
});