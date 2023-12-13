/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

const circleTexts = document.querySelectorAll(".circle-text");
const contactFormContainer = document.querySelector(
    "#contact-form-container"
);
const contactForm = document.querySelector("#contact-form");


// Make height of contact form container equals to contact form 
const resizeObserver = new ResizeObserver(entries => {
    for (let entry of entries) {
        contactFormContainer.style.height = entry.target.clientHeight + "px";
    }
});

resizeObserver.observe(contactForm);

// Rotate circle text
document.addEventListener("scroll", (event) => {
    circleTexts.forEach(circleText => {
        var rotation = document.documentElement.scrollTop * 0.2;
        circleText.style.transform = "rotate(" + rotation + "deg)";
    })
});

// Navigate to thank you page when submit contact form
// var wpcf7Elm = document.querySelector( '.wpcf7' );
document.addEventListener('wpcf7mailsent', function (event) {
    // if ('709e86c' == event.detail.contactFormId) { 
    location = '/thank-you';
    // }
}, false);

// Link buttons to contact form sestion
const linkToContactButtons = document.querySelectorAll('.link-to-contact-button')
linkToContactButtons.forEach(btn => {
    btn.addEventListener('click', (event) => {
        contactFormContainer.scrollIntoView({
            behavior: "smooth"
        })
    })
})

// Counting numbers
function countUp(element, target) {
    const increment = target / 100; 
    const value = +element.textContent;

    if (value < target) {
        element.textContent = Math.ceil(value + increment);
        setTimeout(() => countUp(element, target), 10); 
    } else {
        element.textContent = target;
    }
}

function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            const target = +counter.getAttribute('data-target');
            countUp(counter, target);
            observer.unobserve(counter); // Stop observing after counting
        }
    });
}

const observer = new IntersectionObserver(handleIntersection);

document.querySelectorAll('.counter').forEach(counter => {
    observer.observe(counter);
});

// Nav menu
const navMenuBtn = document.querySelector("#nav-menu-btn")
const navMenuPopup = document.querySelector("#nav-menu-popup")

navMenuBtn.addEventListener('click', () => {
    navMenuPopup.classList.toggle('active')
})

// Hide nav menu
document.addEventListener('click', e => {
    if (!navMenuPopup.contains(e.target) && !navMenuBtn.contains(e.target)) {
        navMenuPopup.classList.remove('active')
    }
})

// Clear feature image when fully in view
function isElementFullyVisible(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

const pageWidth = window.innerWidth;
if (pageWidth <= 1000) {
    const featuresContainer = document.querySelector(".features-container")
    const featureContainers = document.querySelectorAll(".feature-container")
    const overlays = featuresContainer.querySelectorAll(".overlay")
    overlays[0].classList.add('hidden')

    featuresContainer.addEventListener('scroll', () => {
        featureContainers.forEach((featureContainer, index) => {
            if (isElementFullyVisible(featureContainer)) {
                overlays[index].classList.add('hidden')
                overlays[index].classList.remove('block')
            } else {
                overlays[index].classList.add('block')
                overlays[index].classList.remove('hidden')
            }
        })
    })
}