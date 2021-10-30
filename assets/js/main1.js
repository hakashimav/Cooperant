const txtAnim = document.querySelector(".h4");

new Typewriter(txtAnim, {
      loop: true,
     deleteSpeed: 20
     
})
.changeDelay(30)
.typeString(" Parce que...,")
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