 // Initialisation du carousel (boutton)

 let slidePosition = 0;
 const slides = document.getElementsByClassName('carousel_item');
 const totalSlides = slides.length;
 
 document.
     getElementById('next')
     .addEventListener("click", function(){
         moveToNextSlide();
     })
 
     document.
     getElementById('prev')
     .addEventListener("click", function(){
         moveToPrevSlide();
     })
 //
 // Fonction 
 
 function updateSlidePosition(){
     for (let slide of slides) {
         slide.classList.remove('carousel_item--visible');
         slide.classList.add('carousel_item--hidden')
     }
 
 
 
     slides[slidePosition].classList.add('carousel_item--visible');
 }
 
 
 
 // Fonction pour l'image suivante
 
 function moveToNextSlide() {   
     if (slidePosition == totalSlides - 1) {
         slidePosition = 0;
     } else {
         slidePosition++;
     }
     updateSlidePosition();
 }
 
 //
 //Fonction pour l'image d'avant
 function moveToPrevSlide() {
     if (slidePosition == 0) {
         slidePosition = totalSlides - 1;
     } else {
         slidePosition--;
     }
     updateSlidePosition()
 }
 