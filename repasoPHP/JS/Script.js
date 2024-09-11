window.onload = () => {
    const check = document.querySelector("#check");
    const boton = document.querySelector("#enviar");

    check.addEventListener("change", function () {
        if (check.checked) {
            boton.disabled = false;
            //boton.style.background = "black";
        } else {
            boton.disabled = true;
            //boton.style.background = "#474747";
        }
    });
};