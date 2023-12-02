/*  */
let outline = document.querySelector('.outline');
let cursor = document.querySelector('.cursor');
let links = document.querySelectorAll('div, a');

document.addEventListener('mousemove', function(e) {
    let x = e.clientX;
    let y = e.clientY;
    
    outline.style.transform = `translate( calc(${x}px - 50%) , calc(${y}px - 50%) )`;
    cursor.style.transform = `translate( calc(${x}px - 50%) , calc(${y}px - 50%) )`;  
    
});

links.forEach((link) => {
    link.addEventListener('mouseover', () => {
        cursor.classList.add('hover');
        outline.classList.add('hover');
    });
    link.addEventListener('mouseleave', () => {
        cursor.classList.remove('hover');
        cursor.classList.remove('hover');
    });
});

setTimeout(function() {

    let message = document.getElementById('message');
    message.style.transition = "5s";
    message.style.transform = "translateY(-48px)";
    message.style.opacity = "-1";
 

   let form = document.getElementById('form');
    form.style.transition = "6.8s"
    form.style.transform = "translateY(-74px)";
}, 8000);


gsap.registerPlugin(ScrollTrigger);

gsap.to(".square",{
    
    x: 620,
    y: 100,
    rotate: 360,
    duration: 3,
    scale: 3,
    scrollTrigger: {
        trigger: ".square",
        start: "top 60%",
        end: "top 20%", 
        scrub: true, 
        //markers: true,
        /* pin: true, */ 
         pinSpacing: true,
            pinType: "fixed" 
    },

    stragger:{
        amount: 1,
        from: "center",
        ease: "power2.inOut",
        repeat: -1,
       
    }
});

gsap.to(".square2",{
    x: 620,
    y: 100,
    
    rotateY: 180,
    duration: 7,
    
    scrollTrigger: {
        trigger: ".square",
        start: "top 55%",
        end: "top 15%", 
        scrub: true, 
        //markers: true,
        /* pin: true, */
        /* pinSpacing: true, */
       /*  pinType: "fixed"  */
    },
   
})

gsap.to(".square3",{
    x: 620,
    y: 100,
    rotate: 360,
    duration: 7,
    scrollTrigger: {
        trigger: ".square",
        start: "top 50%",
        end: "top 10%", 
        scrub: true,
        //markers: true,
        /* pin: true, */
        /* pinSpacing: true, */
       /*  pinType: "fixed"  */
    }
})

gsap.to(".square4",{
    x: 620,
    y: 100,
    rotationY: 360,
    duration: 7,
    scale: 3,
    scrollTrigger: {
        trigger: ".square",
        start: "top 45%",
        end: " top 0%", 
        scrub: true, 
        /* markers: true, */
        //pin: true, 
        // pinSpacing: true, 
        //pinType: "fixed" 
    }
})

