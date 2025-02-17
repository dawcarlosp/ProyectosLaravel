document.addEventListener("DOMContentLoaded", function() {
let primerInput = document.getElementById("matricula");
primerInput.focus();

let botonEdit = document.querySelector("button");
botonEdit.addEventListener("click", (ev) => {
    if (!confirm("¿Estas seguro de que quieres actualizar este registro?")) {
        ev.preventDefault();
    }
});
/*
let form = document.querySelector("form");
let inputs = form.elements;
Array.from(inputs).forEach(input => {
    input.addEventListener("keypress", (ev) => {
        if (ev.key === "Enter") {
            ev.preventDefault();
            let siguienteInput = input.nextElementSibling;
           while(siguienteInput && siguienteInput.tagName.toLowerCase() !== "input"){
            siguienteInput = siguienteInput.nextElementSibling;
           }
           if(siguienteInput){
            siguienteInput.focus();
           }
        }
    });
});
*/
})