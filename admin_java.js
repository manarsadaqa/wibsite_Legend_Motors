let MenuBtn = document.querySelector("#MenuBtn");
let Navbar = document.querySelector(".navbar");

MenuBtn.onclick = () => {
    MenuBtn.classList.toggle("fa-times");
    Navbar.classList.toggle("active");
};

window.onscroll = () => {
    MenuBtn.classList.remove("fa-times");
    Navbar.classList.remove("active");
    ThemeToggle.classList.remove("active");
};

// AddEmployee Form
document.querySelector("#AddEmployee").onclick = () => {
    document.querySelector(".AddEmployeeFormContainer").classList.toggle("active");
};
document.querySelector("#CloseAddEmployee").onclick = () => {
    document.querySelector(".AddEmployeeFormContainer").classList.remove("active");
};

// DeleteEmployee Form
document.querySelector("#DeleteEmployee").onclick = () => {
    document.querySelector(".DeleteEmployeeFormContainer").classList.toggle("active");
};
document.querySelector("#CloseDeleteEmployee").onclick = () => {
    document.querySelector(".DeleteEmployeeFormContainer").classList.remove("active");
};

// AddVehicle Form
document.querySelector("#AddVehicle").onclick = () => {
    document.querySelector(".AddVehicleFormContainer").classList.toggle("active");
};
document.querySelector("#CloseAddVehicle").onclick = () => {
    document.querySelector(".AddVehicleFormContainer").classList.remove("active");
};

// DeleteVehicle Form
document.querySelector("#DeleteVehicle").onclick = () => {
    document.querySelector(".DeleteVehicleFormContainer").classList.toggle("active");
};
document.querySelector("#CloseDeleteVehicle").onclick = () => {
    document.querySelector(".DeleteVehicleFormContainer").classList.remove("active");
};

// Home Parallex

document.querySelector(".home").onmousemove = (e) => {
    document.querySelectorAll(".homeParallexEffect").forEach((el) => {
        let Speed = el.getAttribute("data-speed");
        let X = (window.innerWidth - e.pageX * Speed) / 60;
        let Y = (window.innerHeight - e.pageY * Speed) / 60;

        el.style.transform = `translateX(${Y}px) translateY(${X}px)`;
    });
};

document.querySelector(".home").onmouseleave = (e) => {
    document.querySelectorAll(".homeParallexEffect").forEach((el) => {
        el.style.transform = `translateX(0px) translateY(0px)`;
    });
};

// Swiper JS For Vehicle Slider
var swiper = new Swiper(".VehiclesSlider", {
    grabCursor: true,
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    //This is For Responsive
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

// Swiper JS For Featured Slider
var swiper = new Swiper(".FeatureSlider", {
    grabCursor: true,
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    //This is For Responsive
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

// Swiper JS For Review Slider
var swiper = new Swiper(".ReviewSlider", {
    grabCursor: true,
    spaceBetween: 20,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    //This is For Responsive
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

// Theme Toggle
let ThemeToggle = document.querySelector(".themeToggle");
let ToggleBtn = document.querySelector(".ToggleBtn");

ToggleBtn.onclick = () => {
    ThemeToggle.classList.toggle("active");
    Menu.classList.remove("fa-times");
    Navbar.classList.remove("active");
};
document.querySelectorAll(".themeToggle .themeBtn").forEach((btn) => {
    btn.onclick = () => {
        let color = btn.style.background;
        document.querySelector(":root").style.setProperty("--main", color);
    };
});