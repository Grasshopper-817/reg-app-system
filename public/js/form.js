var articleBtn = document.getElementById("article-btnproceed");
var documentBtn = document.getElementById("document-btnproceed");
var stats = document.getElementById('inputStudentStatus');
var graduate = document.getElementById('input-gradYear');
var undergrad = document.getElementById('input-acadYear');


function articleSect(){
    var documentSect = document.getElementById("document-section");
    var articleSect = document.getElementById("articles-section");
    articleSect.style.display = 'block';
    documentSect.style.display = 'none';
}

function documentSect(){
    var documentSect = document.getElementById("document-section");
    var articleSect = document.getElementById("articles-section");
    articleSect.style.display = 'none';
    documentSect.style.display = 'block';
    alert("This is being pressed.");
}



function updateForm(){
  if(stats.value === 'Graduate'){
      graduate.style.display = 'block';
      undergrad.style.display = 'none';
  }else{
      graduate.style.display = 'none';
      undergrad.style.display = 'block';
  }
}stats.addEventListener('change', updateForm);








// var stats = document.getElementById('inputStudentStatus');
// var collegeForm = document.getElementById('college-form');

// function updateForm() {
//     if (stats.value === 'Undergraduate' || stats.value === 'Graduate') {
//         collegeForm.style.display = 'block';
//     } else {
//         collegeForm.style.display = 'none';
//     }
// }stats.addEventListener('change', updateForm);


// var aTransferSchool = document.getElementById('ATransferSchool');
// var bTransferSchool = document.getElementById('BTransferSchool');

// var aTransfer = document.getElementsByName('isATransfer');
// var bTransfer = document.getElementsByName('isBTransfer');

// function updateATransfer(){
//     if(aTransfer[0].checked && aTransfer[0].value === 'yes'){
//         aTransferSchool.style.display = 'block';
//     }else{
//         aTransferSchool.style.display = 'none';
//     }
// }for (var i = 0; i < aTransfer.length; i++) {
//     aTransfer[i].addEventListener('change', updateATransfer);
// }

// function updateBTransfer(){
//     if(bTransfer[0].checked && bTransfer[0].value === 'yes'){
//         bTransferSchool.style.display = 'block';
//     }else{
//         bTransferSchool.style.display = 'none';
//     }
// }for (var i = 0; i < bTransfer.length; i++) {
//     bTransfer[i].addEventListener('change', updateBTransfer);
// }


