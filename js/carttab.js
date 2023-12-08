document.addEventListener("DOMContentLoaded", function () {
    const modalContainer = document.getElementById("modal-container");
    const modalOverlay = document.getElementById("modal-overplay");
    const cartCounter = document.getElementById("cart-counter");
    let cart = [];

    const hideCart = () => {
        if (modalContainer && modalOverlay) {
            modalContainer.style.display = "none";
            modalOverlay.style.display = "none";
        }
    };

    const clearCart = () => {
        cart = []; // Limpia el array del carrito
    };

    const displayCart = () => {
        modalContainer.innerHTML = "";
        if (modalContainer && modalOverlay) {
            modalContainer.style.display = "block";
            modalOverlay.style.display = "block";

            // Modal header
            const modalHeader = document.createElement("div");
            const modalClose = document.createElement("div");

            modalClose.innerText = "❌";
            modalClose.className = "modal-close";
            modalClose.addEventListener("click", () => {
                hideCart();
                clearCart();
            });

            const modalTitle = document.createElement("div");
            modalTitle.innerText = "Carrito";
            modalTitle.className = "modal-title";

            modalHeader.append(modalClose);
            modalHeader.append(modalTitle);
            modalContainer.append(modalHeader);

            // Mostrar los productos agregados al carrito
            if (cart.length > 0){
            cart.forEach(product => {
                const modalBody = document.createElement("div");
                modalBody.className = "modal-body";
                modalBody.innerHTML = `
                    <div class="product">
                        <img class="product-img" src="${product.img}" />
                        <div class="product-info">
                            <h4>${product.nomProd}</h4>
                        </div>
                        <div class="quantity">
                            <span class="quantity-btn-decrese">-</span>
                            <span class="quantity-input">${product.quanty}</span>
                            <span class="quantity-btn-increse">+</span>
                        </div>
                        <div class="precio">$ ${product.precio * product.quanty}</div>
                        <div class="delete-product">❌</div>
                    </div>`;
                modalContainer.append(modalBody);

                const decrese = modalBody.querySelector(".quantity-btn-decrese")
                decrese.addEventListener("click", ()=>{
                    if(product.quanty !== 1){
                        product.quanty--;
                        displayCart();
                    }

                });
                const increse = modalBody.querySelector(".quantity-btn-increse");
                increse.addEventListener("click", ()=>{
                    product.quanty++;
                    displayCart();
                });

                //delete
            const deleteProduct = modalBody.querySelector(".delete-product");

    deleteProduct.addEventListener("click", () => {
        deleteCartProduct(product.codProd);

                })

                const deleteCartProduct =(codProd)=>{
                    const foundId = cart.findIndex((Element) => Element.codProd === codProd);
                    cart.splice(foundId , 1);
                    displayCart();
                    displayCartCounter();
                }
            });


            const total = cart.reduce((acc, product) => acc + (product.precio * product.quanty), 0);
            const modalFooter = document.createElement("div");
            modalFooter.className = "modal-footer";
            modalFooter.innerHTML = `<span class="total-precio">Total: $ ${total} </span><div><a href="Compra/compra.html"><button class="compra-fin">Finalizar compra</button></a></div>`;
            modalContainer.append(modalFooter);
        }else {
            const modalText = document.createElement("h2");
            modalText.className = "modal-body";
            modalText.innerText = "Tu Carrito esta vacio"
            modalContainer.append(modalText);
        }
    }
    };
    const displayCartCounter = () => {
        const cartLength = cart.reduce((acc, el) => acc + el.quanty, 0);
        if(cartLength > 0){
            cartCounter.style.display = "block";
            cartCounter.innerHTML = cartLength;
        }else{
            cartCounter.style.display = "none";
        }

    }
    const addToCart = (product) => {
        const productInCartIndex = cart.findIndex(item => item.codProd === product.codProd);

        if (productInCartIndex !== -1) {

            cart[productInCartIndex].quanty++;
        } else {

            cart.push({ ...product, quanty: 1 });
        }
        displayCartCounter();
    };


    const productos = [
        {
            codProd: 28,
            nomProd: "Tablet Samsung A8",
            precio:799900,
            quanty: 1,
            img: "imagenes/productos/tabletsamsungA8.png"
        },
        {
            codProd: 29,
            nomProd: "Tablet TCL TAB 8",
            precio:399900,
            quanty: 1,
            img: "imagenes/productos/Tablet TCL 8_ Pulgadas TAB.png"
        },
        {
            codProd: 30,
            nomProd: "Tablet LENOVO M8",
            precio:579000,
            quanty: 1,
            img: "imagenes/productos/Tablet LENOVO 8 Pulgadas M8 2gen LTE Color Gris.png"
        },
        {
            codProd: 31,
            nomProd: "Tablet LENOVO M10 Plus",
            precio:1299000,
            quanty: 1,
            img: "imagenes/productos/Tablet LENOVO 10 Pulgadas M10 Plus Wifi Color Gris.png"
        },
        {
            codProd: 32,
            nomProd: "Tablet SAMSUNG S7Fe",
            precio:3199900,
            quanty: 1,
            img: "imagenes/productos/Tablet SAMSUNG 12.4 Pulgadas S7Fe Wifi Color Plata.png"
        },
        {
            codProd: 33,
            nomProd: "Tablet SAMSUNG S6",
            precio:1999900,
            quanty: 1,
            img: "imagenes/productos/Tablet SAMSUNG 10.3 pulgadas S6 Wifi Color Azul.png"
        },
        {
            codProd: 34,
            nomProd: "iPad Pro 6ta Gen",
            precio:13149000,
            quanty: 1,
            img: "imagenes/productos/iPad Pro 12.9 pulgadas 2TB 6ta Gen Wifi Gris.png"
        },
        {
            codProd: 35,
            nomProd: "Tablet SAMSUNG Galaxy S8 Ultra",
            precio:6299900,
            quanty: 1,
            img: "imagenes/productos/Tablet SAMSUNG Galaxy 14.6 Pulgadas S8 Ultra Wifi 5G color Gris.png"
        },
        {
            codProd: 36,
            nomProd: "Tablet SAMSUNG Galaxy S8 Plus",
            precio:5299900,
            quanty: 1,
            img: "imagenes/productos/Tablet SAMSUNG Galaxy 12.4 Pulgadas S8+ Wifi 5G color Negro.png"
        },
    ];

    const addToCartButtons = document.querySelectorAll(".btn-add-cart");

    addToCartButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
            const product = productos[index];
            addToCart(product);
            console.log("Producto agregado al carrito:", product);
        });
    });


    const cartBtn = document.getElementById("cart-btn");
    if (cartBtn) {
        cartBtn.addEventListener("click", displayCart);
    } else {
        console.error("Elemento 'cart-btn' no encontrado en el DOM.");
    }
});