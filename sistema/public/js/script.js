let botones = document.querySelectorAll('.botonDelete');
botones.forEach((boton) => {
   boton.addEventListener("click",(evento) =>{
    if(!confirm("Estas seguro de que deseas eliminar este Elemento?"))
        evento.preventDefault();
   })
});
let botonesEdit = document.querySelectorAll('.btn.btn-light.font-weight-bold.btn-edit');
botonesEdit.forEach((boton) => {
    boton.addEventListener("click",(ev) =>{
        if(!confirm("Estas seguro de que deseas actualizar este Elemento?"))
            ev.preventDefault();
    })
})