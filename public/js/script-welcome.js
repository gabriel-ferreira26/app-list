let divList = document.querySelector("#cards-area");

$("#btn-add-task").click(function(){
  let titleTask = $("#title-task").val();
  let descriptionTask = $("#description-task").val();

  divList.appendChild(addTaskInPage(titleTask, descriptionTask));
  $(".btn-close-modal").click();
});

function addTaskInPage(titleTask, descriptionTask){
  
  let divCol = document.createElement('div');
  divCol.classList.add("col-md-3");

  let divCard = document.createElement('div');
  divCard.classList.add("card");

  let divCardBody = document.createElement('div');
  divCardBody.classList.add("card-body");

  divCardBody.innerHTML ="<h5 class='card-title'>"+titleTask+"</h5> <p class='card-text'>"+descriptionTask+"</p>";

  let divBtn = document.createElement("div");
  divBtn.classList.add('btn-card');

  let btnEdit = document.createElement('button');
  btnEdit.classList.add('btn');
  btnEdit.classList.add('btn-primary');

  let btnDel = document.createElement('button');
  btnDel.classList.add('btn');
  btnDel.classList.add('btn-danger');

  btnDel.innerHTML = "<i class='icons-buttons fa-solid fa-trash'></i>"
  btnEdit.innerHTML = "<i class='icons-buttons fa-solid fa-pen-to-square'></i>"
  
  divBtn.appendChild(btnEdit);
  divBtn.appendChild(btnDel);
  
  divCardBody.appendChild(divBtn);
  divCard.appendChild(divCardBody);
  divCol.appendChild(divCard)

  return divCol;
}
