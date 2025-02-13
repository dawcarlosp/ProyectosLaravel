
let botonEdit = document.querySelector("button");
botonEdit.addEventListener("click", (ev) => {
    if (!confirm("¿Estas seguro de que quieres actualizar este registro?")) {
       ev.preventDefault();
    }
});
