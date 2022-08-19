const BASEURL = 'http://localhost/posbill_cms/themes/posbill';

// Logo Navbar
const logoContainer = document.querySelector(".logo-navbar");
const uriImg = BASEURL + "/assets/images/logo3.png";
if(window.innerWidth < 949) logoContainer.innerHTML = `<img src="${uriImg}" alt="Logo Posbill" class="w-[200px]">`; 

// Navbar Toggle 
const navbar = document.querySelector(".navbar");
const btnNavOpen = document.querySelector(".btn-open-nav");
const btnNavClose = document.querySelector(".btn-close-nav");

btnNavOpen.addEventListener("click", () => {
    navbar.classList.add("active");
});

btnNavClose.addEventListener("click", () => {
    navbar.classList.remove("active");
});

// Dropdown Mobile
const maxWidth = "1148px";
const x = window.matchMedia(`(max-width: ${maxWidth})`);
const dropdown = document.querySelector(".dropdown");
const dropdownUl = dropdown.querySelector("ul");
const dropdownBtn = dropdown.querySelector(".dropdown-btn");

function myFunction(x) {
  if (!x.matches) return;

  dropdownBtn.addEventListener("click", () => {
      dropdownUl.classList.toggle("active");
  });

//   for (let i = 0; i < dropdownUl.length; i++) {
//     const elementDropdown = dropdown[i];
//     const elementDropdownUl = dropdownUl[i];
//     const dropdownBtn = dropdownBtn[i];

//     dropdownBtn.addEventListener("click", () => {
//       elementDropdownUl.classList.toggle("active");
//     });
//   }
};

myFunction(x);

