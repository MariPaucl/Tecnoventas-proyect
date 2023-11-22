document.addEventListener("DOMContentLoaded", function () {
        let selectTipoDir = document.getElementById("tipoDir");
        let spanText = document.getElementById("spanText");

        selectTipoDir.addEventListener("change", function () {
            let valorSelected = selectTipoDir.options[selectTipoDir.selectedIndex].text;

            spanText.textContent = `*${valorSelected}`
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        let selectTipoDir = document.getElementById("tipoDir");
        let tipoDirNum = document.getElementById("tipoDirNum");
        let numeroDir = document.getElementById("numeroDir");
        let numeroDir2 = document.getElementById("numeroDir2");
        let barrio = document.getElementById("barrio");
        let extra = document.getElementById("extra");
        let direccion = document.getElementById("direccion");

        selectTipoDir.addEventListener("change", actualizarDireccion);
        tipoDirNum.addEventListener("input", actualizarDireccion);
        numeroDir.addEventListener("input", actualizarDireccion);
        numeroDir2.addEventListener("input", actualizarDireccion);
        barrio.addEventListener("input", actualizarDireccion);
        extra.addEventListener("input", actualizarDireccion);

        function actualizarDireccion() {
            let tipoDirValue = selectTipoDir.options[selectTipoDir.selectedIndex].text;
            let tipoDirNumValue = tipoDirNum.value;
            let numeroDirValue = numeroDir.value;
            let numeroDir2Value = numeroDir2.value;
            let barrioValue = barrio.value;
            let extraValue = extra.value;

            let direccionCompleta = `${tipoDirValue} ${tipoDirNumValue} # ${numeroDirValue}-${numeroDir2Value}, ${barrioValue}`;

            if (extraValue.trim() !== "") {
                direccionCompleta += `, ${extraValue}`;
            }

            direccion.value = direccionCompleta;
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        let totalInput = document.getElementById("total");

        let precioAleatorio = Math.floor(Math.random() * (2000000 - 100000 + 1)) + 100000;

        totalInput.value = precioAleatorio;
    });