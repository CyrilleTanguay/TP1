(function(){
    let bout1 = document.getElementById('un')
    let bout2 = document.getElementById('deux')
    let bout3 = document.getElementById('trois')
    let bout4 = document.getElementById('quatre')
    let bout5 = document.getElementById('cinq')
    let carrousel = document.querySelector('.carrousel')
    bout1.addEventListener('mousedown', function(){
carrousel.style.transform = "translateX(0)"
    })
    bout2.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-100vw)"
})
bout3.addEventListener('mousedown', function(){
carrousel.style.transform = "translateX(-200vw)"
})
bout4.addEventListener('mousedown', function(){
    carrousel.style.transform = "translateX(-300vw)"
    })
    bout5.addEventListener('mousedown', function(){
        carrousel.style.transform = "translateX(-400vw)"
        })
}())