const galleryImages = document.querySelectorAll(".gallery-popup-img");
const popupImage = document.getElementById("popupImage");

galleryImages.forEach((img) => {

    img.addEventListener("click", function(){

        popupImage.src = this.src;

    });

});
