
const container = document.querySelector("#container-b");
const titulo = document.querySelector("#titulo");
const absolutos = document.querySelectorAll(".position-absolute.absoluto");

// Aplicar estilos de forma responsive
window.addEventListener("resize", function() {

    if(window.innerWidth >= 1800) {
        container.classList.add("rounded-pill");
        titulo.textContent = "Pantallas Grandes, Desktop y TV´s: 1800px +";
        absolutos.forEach((elemento) => elemento.classList.add("rounded-top-pill"));
    } else if (window.innerWidth < 1800 && window.innerWidth >= 1400) { 
        container.classList.add("rounded-pill");
        titulo.textContent = "Pantallas genericas de laptop 1800px <-> 1400px";
        absolutos.forEach((elemento) => elemento.classList.add("rounded-top-pill"));
    } else if (window.innerWidth < 1400 && window.innerWidth >= 1200) { 
        container.classList.add("rounded-pill");
        titulo.textContent = "Pantallas genericas de laptop pequeñas 1400px <-> 1200px";
        absolutos.forEach((elemento) => elemento.classList.add("rounded-top-pill"));
    } else if (window.innerWidth < 1200 && window.innerWidth >= 992) { 
        container.classList.add("rounded-pill");
        titulo.textContent = "Pantallas pequeñas 1200px <-> 992px";
        absolutos.forEach((elemento) => elemento.classList.add("rounded-top-pill"));
    } else if (window.innerWidth < 992 && window.innerWidth >= 768) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Tabletas grandes y en horizontal 992px <-> 768px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else if (window.innerWidth < 768 && window.innerWidth >= 576) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Tabletas y telefonos en horizontal 768px <-> 576px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else if (window.innerWidth < 576 && window.innerWidth >= 480) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Telefonos 576px <-> 480px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else if (window.innerWidth < 480 && window.innerWidth >= 320) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Telefonos 480px <-> 320px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else if (window.innerWidth < 320 && window.innerWidth >= 0) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Telefonos y smarth watch 320px <-> 0px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else {

    }

});

// Aplicar estilos al cargar la página
window.addEventListener("load", function() {
    
    if(window.innerWidth >= 1800) {
        container.classList.add("rounded-pill");
        titulo.textContent = "Pantallas Grandes, Desktop y TV´s: 1800px +";
        absolutos.forEach((elemento) => elemento.classList.add("rounded-top-pill"));
    } else if (window.innerWidth < 1800 && window.innerWidth >= 1400) { 
        container.classList.add("rounded-pill");
        titulo.textContent = "Pantallas genericas de laptop 1800px <-> 1400px";
        absolutos.forEach((elemento) => elemento.classList.add("rounded-top-pill"));
    } else if (window.innerWidth < 1400 && window.innerWidth >= 1200) { 
        container.classList.add("rounded-pill");
        titulo.textContent = "Pantallas genericas de laptop pequeñas 1400px <-> 1200px";
        absolutos.forEach((elemento) => elemento.classList.add("rounded-top-pill"));
    } else if (window.innerWidth < 1200 && window.innerWidth >= 992) { 
        container.classList.add("rounded-pill");
        titulo.textContent = "Pantallas pequeñas 1200px <-> 992px";
        absolutos.forEach((elemento) => elemento.classList.add("rounded-top-pill"));
    } else if (window.innerWidth < 992 && window.innerWidth >= 768) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Tabletas grandes y en horizontal 992px <-> 768px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else if (window.innerWidth < 768 && window.innerWidth >= 576) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Tabletas y telefonos en horizontal 768px <-> 576px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else if (window.innerWidth < 576 && window.innerWidth >= 480) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Telefonos 576px <-> 480px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else if (window.innerWidth < 480 && window.innerWidth >= 320) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Telefonos 480px <-> 320px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else if (window.innerWidth < 320 && window.innerWidth >= 0) { 
        container.classList.remove("rounded-pill");
        titulo.textContent = "Telefonos y smarth watch 320px <-> 0px";
        absolutos.forEach((elemento) => elemento.classList.remove("rounded-top-pill"));
    } else {

    }

});

