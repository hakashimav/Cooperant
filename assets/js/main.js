const Menu = document.querySelector(".menu");

const Item = document.querySelector(".item");

Menu.addEventListener("click", () => {
   reponse = Item.classList.toggle("active");
   console.log(reponse);
});

const txtAnim = document.querySelector(".h1");

new Typewriter(txtAnim, {
    // deleteSpeed: 17
})
.changeDelay(17)
.typeString(" Tranquilité")
.pauseFor(300)
.typeString(" Surete")
.pauseFor("1000")
.deleteChars(6)
.typeString("Qualité")
.start()