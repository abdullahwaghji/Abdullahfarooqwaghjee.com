// let image = document.getElementById('img-1');

// image.addEventListener('click', function() {
//   window.location.href = './index.html';
// });


document.addEventListener('DOMContentLoaded', function() {
    var setBabyImgElement = document.querySelector('.set-baby-img');
    
    setBabyImgElement.addEventListener('click', function() {
      window.scrollTo(0, window.innerHeight);
    });
  });




  
//   document.addEventListener("DOMContentLoaded", function() {
//     document.addEventListener("click", function(event) {
//       if (event.target.classList.contains("but-button")) {
//         var result = confirm("Are you sure you want to buy?");
//         if (result) {
//           alert("Purchase confirmed!");
//           location.reload();
//         }
//       }
//     });
//   });




document.addEventListener("DOMContentLoaded", function() {
    var buyButtons = document.querySelectorAll(".but-button");
    
    buyButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var imageSrc = this.parentNode.querySelector("img").src;
            
            var modalImage = document.querySelector("#modalImage");
            modalImage.src = imageSrc;
            
            var imageModal = new bootstrap.Modal(document.getElementById("imageModal"));
            imageModal.show();
            
            
        });
    });
});


    
 
const formdiv = document.getElementById("formdiv");
const forminput = document.getElementById("forminput");


function closeform(){
    formdiv.style.top ="-100%"
    forminput.value = ""
}
function openform(){
    formdiv.style.top ="0%"
}
function sendform(){
    if(forminput.value == ""){
        alert("Field Is Empty")
    }
    else if(forminput.value == forminput.value){
        var confirmation = confirm("Are You Sure To Send Message");
        if(confirmation){
            alert("Send");
            window.location.reload(true)
        } else {
            alert("Cancel");
            window.location.reload(true)
        }
    }
    
}


AOS.init();



