let botones = document.querySelectorAll('.botonDelete');
botones.forEach((boton) => {
   boton.addEventListener("click",(evento) =>{
    if(!confirm("Estas seguro de que deseas eliminar este Elemento?"))
        evento.preventDefault();
   })
});