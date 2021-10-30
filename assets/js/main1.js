const message = document.querySelector(".h4");

new Typewriter(message, {
    loop: true,
   deleteSpeed: 20
})
.changeDelay(30)
.typeString(" Parce que l'envie...")
.pauseFor(1000)
.typeString("de Coopérer vous,")
.pauseFor(1000)
.typeString(" de passer")
.pauseFor(1000)
.typeString(" alors,")
.pauseFor(1000)
.typeString("rejoignez-nous!")
.pauseFor(1000)
.typeString("en vous")
.pauseFor(1000)
.typeString("inscrivant ici!")
.start()