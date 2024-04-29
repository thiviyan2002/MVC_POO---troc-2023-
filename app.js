const modalContainer=document.querySelector(".modal-container");
const modalTriggers=document.querySelectorAll(".modal-trigger");
modalTriggers.forEach(trigger => trigger.addEventListener("click", togglemodal))

function togglemodal(){
  modalContainer.classList.toggle("active")
}