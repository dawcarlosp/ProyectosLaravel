let botonesEliminar = document.getElementsByClassName("botonDelete");
Array.from(botonesEliminar).forEach(boton => {
    boton.addEventListener("click", (evt) => {
        if(!confirm("¿Estas seguro de que desea eliminar este alumno?")){
            evt.preventDefault();
        }
    })
})