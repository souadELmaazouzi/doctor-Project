
// constants



const body = document.querySelector("body"),
    loader = document.querySelector(".loader-wrap"),
    links = document.querySelectorAll('a[href="#"]'),
    nav = document.querySelector("header nav"),
    navToggle = document.querySelector("header nav .toggle"),
    navSpanMiddle = document.querySelector("header nav .toggle .middle"),
    navNavigationBar = document.querySelector("header nav .navigation-bar"),
    navNavigationBarLi = document.querySelectorAll(
        "header nav .navigation-bar li"
    ),
    headerText = document.querySelector("header .text"),
    headerSection = document.querySelector("header"),
    aboutSection = document.querySelector(".about-us"),
    recipeSection = document.querySelector(".recipes"),
    menuSection = document.querySelector(".menu"),
    fixedImageSection = document.querySelector(".fixed-image"),
    footerSection = document.querySelector("footer"),
 
    logoImage = document.querySelector("header nav .logo img"),
    svgDown = document.querySelector("header .arrow-down"),
    svgUp = document.querySelector(".copyright .arrow-up"),
    menuImgs = document.querySelectorAll(".menu .menu-image-container img"),
    boxModel = document.querySelector(".menu .box-model"),
    menuImageContainer = document.querySelector(".menu-image-container"),
    boxModelArrow = document.querySelector(".menu .box-model .arrow"),
    boxModelImage = document.querySelector(".menu .box-model img"),
    pageTitle = document.querySelector("title");

// remove loader
function fadeOutEffect() {
    const fadeEffect = setInterval(function() {
        if (!loader.style.opacity) {
            loader.style.opacity = 1;
        }
        if (loader.style.opacity > 0) {
            loader.style.opacity -=0.10;
        } else {
            body.classList.remove('stop-scroll');
            loader.classList.add('remove');
            clearInterval(fadeEffect);
        }
    }, 100);
}
window.addEventListener("load", fadeOutEffect);

// prevent links click hash
links.forEach(link =>
    link.addEventListener("click", function(e) {
        e.preventDefault();
    })
);

// toggle hamburger menu button
navToggle.addEventListener("click", () => {
    navToggle.classList.toggle("active");
    navSpanMiddle.classList.toggle("hide");
    navNavigationBar.classList.toggle("show");
});

// show active navigationbar li
navNavigationBarLi.forEach(li =>
    li.addEventListener("click", () => {
        const arr = Array.from(li.parentElement.children);
        arr.forEach(li => li.classList.remove("active"));
        li.classList.add("active");
    })
);


// svg-up smooth scroll
svgUp.addEventListener("click", () => {
    window.scroll({
        top: 0,
        behavior: "smooth"
    });
});

window.onscroll = function() {
    // make navbar fixed & change logo color
    if (window.pageYOffset > headerSection.offsetHeight - 75) {
        nav.classList.add("active");
        logoImage.src = "../img/logowhite.png";
    } else {
        nav.classList.remove("active");
        logoImage.src = "../img/logoblack.png";
    }

    // header welcome fade out and in
    if (window.pageYOffset > 0) {
        headerText.style.opacity = -window.pageYOffset / 300 + 1;
    }
    // home page JS
   
};

// home page JS
