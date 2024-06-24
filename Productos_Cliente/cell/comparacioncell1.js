var productosSeleccionados = [];

function comparar(productoId, productoDatos) {
    if (productosSeleccionados.length >= 5) {
        alert("Ya has seleccionado el máximo de 5 productos.");
        return;
    }

    if (productosSeleccionados.some(p => p.id === productoId)) {
        alert("Este producto ya está seleccionado.");
    } else {
        productosSeleccionados.push({ id: productoId, datos: productoDatos });
        var aceptar = confirm("Producto agregado a la comparación. Haz clic en Aceptar para ver los resultados.");

        if (aceptar) {
            if (productosSeleccionados.length >= 2) {
                // Construye la URL con los IDs de los productos seleccionados
                var ids = productosSeleccionados.map(p => p.id).join(',');
                window.open('comparacioncelulares.php?ids=' + encodeURIComponent(ids), '_blank');
            } else {
                alert("Selecciona al menos 2 productos para comparar.");
            }
        }
    }
}
