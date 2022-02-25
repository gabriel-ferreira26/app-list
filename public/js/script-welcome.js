$("#btn-add-task").click(function(){
  $(".btn-close-modal").click();

  $("#form-add-task").attr('action', '/tasks');
  $("#form-add-task").submit();
});
