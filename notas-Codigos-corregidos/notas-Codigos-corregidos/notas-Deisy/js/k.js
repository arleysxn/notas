const slider = document.querySelector(".slider")
const trail = document.querySelector(".trail").querySelectorAll("div")

let value = 0 
let trailValue =0
let interval = 4000

const slide = (condition) =>{
    clearInterval(start)
    condition === "increase" ? initiateINC(): initiateDEC()
    move(value,trailValue)
    animate()
    start = setInterval(()=>slide("increase"),interval)
}
const initiateINC = () =>{
    trail.forEach(cur=>cur.classList.remove("active"))
    value === 80 ? value =0 : value +=20
    trailUpdapte()
}
const initiateDEC = () =>{
    trail.forEach(cur=>cur.classList.remove("active"))
    value === 0 ? value = 80 : value -=20
    trailUpdapte()
}
 const move = (S,T)=>{
    slider.style.transform = `translateX(-${S}%)`
    trail[T].classList.add("active")
 }
 const tl = gsap.timeline({default: {duration: 0.6, ease: "power2.inOut"}})
 tl.from(".bg",{x:"-100%", opacity: 0})
  .from("p",{opacity: 0},"-=0.3")
  .from("h1",{opacity: 0, y:"30px"}, "-=0.3")
  .from("buttom",{opacity: 0, y:"-40px"}, "-=0.8") 

  const animate = () => tl.restart()

  const trailUpdapte = () =>{
    if(value === 0){
        trailValue=0
    }else if (value === 20){
        trailValue = 1
    }else if (value === 40){
        trailValue = 2
    }else if (value === 60){
        trailValue = 3
    }else {
        trailValue = 4 
    }
  }
  let start = setInterval(()=>slide("increase"), interval)
    
  document.querySelectorAll("svg").forEach(cur=>{
    cur.addEventListener("click", () => cur.classList.cotains("next")? slide ("increase"): slide("decrease"))
  })
const clickCheck = (e) => {
    clearInterval(start)

    trail.forEach(cur => cur.classlist.remove("active"))

    const check = e.target
    check.classList.add("active")
}