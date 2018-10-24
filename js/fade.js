const animatedTags = document.querySelectorAll("h1.home-headline, p.home-subhead, h2.home-section-header, a.circle, a.latest-item-width")

// fade out on load
animatedTags.forEach(tag => {
    tag.style.opacity = 0
})

const fadeIn = function () {
    // loop through all animatedTags and see where getBoundedClientRect
    // see if they are in the window

    let delay = 0.25


    animatedTags.forEach(tag => {
        const tagTop = tag.getBoundingClientRect().top
        const tagBottom = tag.getBoundingClientRect().bottom
        
        // check if tag is in view
        if (tagTop < window.innerHeight && tagBottom > 0) {
            tag.style.animation = `fadein 1s ${delay}s both`
            delay = delay + 0.25
        } else {
            tag.style.opacity = 0
            tag.style.animation = ""
        }

    })

}



// run fadeIn function on load
fadeIn()


// run fadeIn function on scroll
document.addEventListener("scroll", function () {
    fadeIn()
})


// on browser resize, run fadeIn function
window.addEventListener("resize", function () {
    fadeIn()
})