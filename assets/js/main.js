const Menu = document.querySelector(".menu");

const Item = document.querySelector(".item");

Menu.addEventListener("click", () => {
   reponse = Item.classList.toggle("active");
   console.log(reponse);
});

const txtAnim = document.querySelector(".h1");

new Typewriter(txtAnim, {
      loop: true,
     deleteSpeed: 20
     
})
.changeDelay(30)
.typeString(" Coopérer en toute,")
.pauseFor(1000)
.typeString(" Sécurité")
.pauseFor(1000)
.deleteChars(8)
.pauseFor(1000)
.typeString("<span style='color:#0e4a68'> Tranquillité</span>")
.pauseFor(1000)
.deleteChars(12)
.pauseFor(1000)
.typeString("<span style='color:red;'> Sûreté</span>")
.pauseFor(1000)
.deleteChars(6)
.pauseFor(1000)
.typeString("<span style='color:#666;'> Qualité</span>")
.pauseFor(1000)
.start()
