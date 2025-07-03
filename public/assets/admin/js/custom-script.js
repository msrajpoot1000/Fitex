// show image when select from input 
document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("photo1");
    const preview = document.getElementById("image_preview1");

    if (input && preview) {
        input.addEventListener("change", function (event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = "#";
                preview.style.display = "none";
            }
        });
    }
});

 // for show the create section in pages by using button 
 const toggleBtn = document.getElementById("toggleButton");
 const formSection = document.getElementById("create-form-section");

 toggleBtn.addEventListener("click", function() {
     if (
         formSection.style.display === "none" ||
         formSection.style.display === ""
     ) {
         formSection.style.display = "block";
         toggleBtn.textContent = "Close Create";
     } else {
         formSection.style.display = "none";
         toggleBtn.textContent = "Create Blog";
     }
 });





