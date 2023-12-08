document.addEventListener("DOMContentLoaded", function() {
  const shopContent = document.getElementById("shopContent");
  if (shopContent) {
    shopContent.style.display = "none";
    const cart = [];

    // Función para mostrar los productos del carrito
    const displayCartProducts = () => {
      const shopContent = document.getElementById("shopContent");
      shopContent.innerHTML = ""; // Limpiar contenido previo

      cart.forEach((product) => {
        const content = document.createElement("div");
        content.className = "cart-product";
        content.innerHTML = `
          <img src="${product.img}">
          <h3>${product.nomProd}</h3>
          <p>${product.precio} $</p>
          <p>Cantidad: ${product.quanty}</p>
        `;
        shopContent.appendChild(content);
      });
    };

    // Obtener botones de compra y asignar eventos
    const buyButtons = document.querySelectorAll(".btn-add-cart");
    buyButtons.forEach((buyButton, index) => {
      buyButton.addEventListener("click", () => {
        const product = productos[index];
        const existingProduct = cart.find((prod) => prod.codProd === product.codProd);

        if (existingProduct) {
          existingProduct.quanty++;
        } else {
          const newProduct = {
            codProd: product.codProd,
            nomProd: product.nomProd,
            precio: product.precio,
            quanty: 1, // Nueva cantidad para un producto recién agregado
            img: product.img,
          };

          cart.push(newProduct);
        }

        // Mostrar los productos del carrito después de agregar uno nuevo
        displayCartProducts();

        console.log(cart);
      });
    });
  }
});