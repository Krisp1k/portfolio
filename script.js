const navigation = document.querySelectorAll(".nav-li");
const sections = document.querySelectorAll(".sections");

navigation[0].classList.add("active-li");
sections[0].classList.add("active-section");

window.onload = function() {
    return document.title = "Krisp1k - Home";
}

const btn = document.querySelectorAll(".seznam-btn");
const content = document.querySelectorAll(".seznam-child-content");

// nav control
let n;
navigation.forEach(navItem => navItem.addEventListener("click", (elem) => {
    n = elem.target.getAttribute("data-navItem-id");

    switch (n.toString()) {
        case "0":
            document.title = "Krisp1k - Home";
            break;
        case "1":
            document.title = "Krisp1k - About me";
            break;
        case "2":
            document.title = "Krisp1k - FaQ";
            break;
        case "3":
            document.title = "Krisp1k - Services & work";
            break;
        case "4":
            document.title = "Krisp1k - Contact";
            break;
    };

    if (!navigation[n].classList.contains("active-li")) {

        navigation.forEach(function (navElem) {
            navElem.classList.remove("active-li");
        });
        navigation[n].classList.add("active-li");

        sections.forEach(function (sectionElem) {
            sectionElem.classList.remove("active-section");
        });
        sections[n].classList.add("active-section");
    };

    document.body.style.overflowY = "scroll";
    document.body.style.position = "static";
}))

// faq buttons
let i;
btn.forEach(button => button.addEventListener("click", (e) => {
    i = e.target.getAttribute("data-id");
    btn[i].classList.toggle("active-seznam-btn");
    if (content[i].classList.contains("active-seznam")) {
        content[i].classList.remove("active-seznam");
        btn[i].innerHTML = "Open";
    } else {
        content[i].classList.add("active-seznam");
        btn[i].innerHTML = "Close";
    };
}));

// services buttons
const workBtns = document.querySelectorAll(".prices-btn");
const closePopup = document.querySelectorAll(".close-popup");

workBtns.forEach(button => button.addEventListener("click", () => {
    if (document.body.scrollTop >= 0 || document.documentElement.scrollTop >= 0) {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        setTimeout(function() {
            document.body.style.overflowY = "scroll";
            document.body.style.position = "fixed";
        }, 500);
    };
}));

closePopup.forEach(close => close.addEventListener("click", () => {
    setTimeout(function() {
        document.body.style.overflowY = "scroll";
        document.body.style.position = "static";
    }, 50);
}));

// opening popups
function toggleWebsites() {
    setTimeout(function() {
        document.getElementById("popup-1").classList.toggle("active-popup");
    }, 50);
};

function toggleGraphic() {
    setTimeout(function() {
        document.getElementById("popup-2").classList.toggle("active-popup");
    }, 50) ;
};

function toggleOthers() {
    setTimeout(function() {
        document.getElementById("popup-3").classList.toggle("active-popup");
    }, 50) ;
};


const textarea = document.getElementById("textarea");
const wordsContainer = document.getElementById("words");
let words = 666;
wordsContainer.innerHTML = words;

window.onload = () => {
    textarea.value = "";
};

textarea.addEventListener("input", () => {
    let words = 666;
    words = words - textarea.value.length;
    wordsContainer.innerHTML = words;
    if (words > 25) {
        wordsContainer.style.color = "var(--c-pureWhite)";
    };
    if (words <= 25) {
        wordsContainer.style.color = "orange";
    }; 
    if (words <= 10) {
        wordsContainer.style.color = "red";
    };
});




