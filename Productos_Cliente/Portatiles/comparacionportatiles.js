var productosSeleccionados = [];

function comparar(productoId) {
    if (productosSeleccionados.length >= 5) {
        alert("Ya has seleccionado el máximo de 5 productos.");
        return;
    }

    if (productosSeleccionados.includes(productoId)) {
        alert("Este producto ya está seleccionado.");
    } else {
        productosSeleccionados.push(productoId);
        var aceptar = confirm("Producto agregado a la comparación. Haz clic en Aceptar para ver los resultados.");

        if (aceptar) {
            if (productosSeleccionados.length >= 2) {
                // Redirige a resultado.php con los productos seleccionados
                window.open('ComparacionPortatiles.php?productos=' + productosSeleccionados.join(','), '_blank');
            } else {
                alert("Selecciona al menos 2 productos para comparar.");
            }
        }
    }
}


