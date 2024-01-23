function openModal(modalId) {
       var modal = document.getElementById(modalId);
       modal.style.display = "block";
   }

   function closeModal(modalId) {
       var modal = document.getElementById(modalId);
       modal.style.display = "none";
   }

   document.addEventListener("DOMContentLoaded", function() {
       var modalTriggers = document.getElementsByClassName("modal-trigger");
       for (var i = 0; i < modalTriggers.length; i++) {
           modalTriggers[i].addEventListener("click", function(event) {
               var modalId = event.target.getAttribute("data-target");
               openModal(modalId);
           });
       }

       var modals = document.getElementsByClassName("modal");
       for (var i = 0; i < modals.length; i++) {
           modals[i].addEventListener("click", function(event) {
               if (event.target === this) {
                   closeModal(this.id);
               }
           });
       }
   });

function openEditModalC1(id, sub_kriteria, bobot) {
       var modal = document.getElementById("modalEditDataC1");
       var editForm = document.getElementById("editFormC1");
       var editId1 = document.getElementById("editId1");
       var editSubkriteria1 = document.getElementById("editSubkriteria1");
       var editBobot1 = document.getElementById("editBobot1");

       editId1.value = id;
       editSubkriteria1.value = sub_kriteria;
       editBobot1.value = bobot;

       modal.style.display = "block";
}
function openEditModalC2(id, sub_kriteria, bobot) {
       var modal = document.getElementById("modalEditDataC2");
       var editForm = document.getElementById("editFormC2");
       var editId2 = document.getElementById("editId2");
       var editSubkriteria2 = document.getElementById("editSubkriteria2");
       var editBobot2 = document.getElementById("editBobot2");

       editId2.value = id;
       editSubkriteria2.value = sub_kriteria;
       editBobot2.value = bobot;

       modal.style.display = "block";
}
function openEditModalC3(id, sub_kriteria, bobot) {
       var modal = document.getElementById("modalEditDataC3");
       var editForm = document.getElementById("editFormC3");
       var editId3 = document.getElementById("editId3");
       var editSubkriteria3 = document.getElementById("editSubkriteria3");
       var editBobot3 = document.getElementById("editBobot3");
       
       editId3.value = id;
       editSubkriteria3.value = sub_kriteria;
       editBobot3.value = bobot;
       
       modal.style.display = "block";
}
function openEditModalC4(id, sub_kriteria, bobot) {
       var modal = document.getElementById("modalEditDataC4");
       var editForm = document.getElementById("editFormC4");
       var editId4 = document.getElementById("editId4");
       var editSubkriteria4 = document.getElementById("editSubkriteria4");
       var editBobot4 = document.getElementById("editBobot4");
       
       editId4.value = id;
       editSubkriteria4.value = sub_kriteria;
       editBobot4.value = bobot;

       modal.style.display = "block";
}
function openEditModalC5(id, sub_kriteria, bobot) {
       var modal = document.getElementById("modalEditDataC5");
       var editForm = document.getElementById("editFormC5");
       var editId5 = document.getElementById("editId5");
       var editSubkriteria5 = document.getElementById("editSubkriteria5");
       var editBobot5 = document.getElementById("editBobot5");
       
       editId5.value = id;
       editSubkriteria5.value = sub_kriteria;
       editBobot5.value = bobot;
       
       modal.style.display = "block";
}
function openEditModalC6(id, sub_kriteria, bobot) {
       var modal = document.getElementById("modalEditDataC6");
       var editForm = document.getElementById("editFormC6");
       var editId6 = document.getElementById("editId6");
       var editSubkriteria6 = document.getElementById("editSubkriteria6");
       var editBobot6 = document.getElementById("editBobot6");
       
       editId6.value = id;
       editSubkriteria6.value = sub_kriteria;
       editBobot6.value = bobot;
       
       modal.style.display = "block";
}
function closeEditModal() {
       var modal = document.getElementById("modalEditData");
       modal.style.display = "none";
}
window.onclick = function (event) {
       var modal = document.getElementById("modalEditData");
       if (event.target == modal) {
              modal.style.display = "none";
       }
}
