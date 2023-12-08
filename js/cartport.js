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
            codProd: 10,
            nomProd: "Portatil ASUS X415EA",
            precio:1399000,
            quanty: 1,
            img: "imagenes/productos/asusx415port.png"
        },
        {
            codProd: 11,
            nomProd: "Portatil Acer A315",
            precio:1299000,
            quanty: 1,
            img: "imagenes/productos/acerA315.png"
        },
        {
            codProd: 12,
            nomProd: "Portátil LENOVO IdeaPad 1",
            precio:1399000,
            quanty: 1,
            img: "imagenes/productos/portatil_lenovo.png"
        },
        {
            codProd: 13,
            nomProd: "Portátil ACER T36F3",
            precio:1999000,
            quanty: 1,
            img: "imagenes/productos/Portátil ACER T36F3.png"
        },
        {
            codProd: 14,
            nomProd: "Portátil ACER 544K",
            precio:1999000,
            quanty: 1,
            img: "imagenes/productos/portátil ACER 544K.png"
        },
        {
            codProd: 15,
            nomProd: "Portátil HP Em0006la",
            precio:1999000,
            quanty: 1,
            img: "imagenes/productos/Portátil HP Em0006la.png"
        },
        {
            codProd: 16,
            nomProd: "Portátil Gamer LENOVO",
            precio:3159000,
            quanty: 1,
            img: "imagenes/productos/Portátil Gamer LENOVO.png"
        },
        {
            codProd: 17,
            nomProd: "Portátil ASUS TUF Gaming",
            precio:3149000,
            quanty: 1,
            img: "imagenes/productos/Portátil ASUS TUF Gaming.png"
        },
        {
            codProd: 18,
            nomProd: "Portátil Gamer ACER",
            precio:7899000,
            quanty: 1,
            img: "imagenes/productos/Portátil Gamer ACER.png"
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
