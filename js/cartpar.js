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
            codProd: 46,
            nomProd: "Parlante Sonos Era 300",
            precio:590000,
            quanty: 1,
            img: "imagenes/productos/parlanteSonosEra300.png"
        },
        {
            codProd: 47,
            nomProd: "Parlante BOSE SoundLink Flex",
            precio:599900,
            quanty: 1,
            img: "imagenes/productos/Parlante BOSE SoundLink Flex.png"
        },
        {
            codProd: 48,
            nomProd: "Parlante JBL PARTYBOX",
            precio:1199900,
            quanty: 1,
            img: "imagenes/productos/Parlante JBL PARTYBOX.png"
        },
        {
            codProd: 49,
            nomProd: "KALLEY K-SPK400",
            precio:1699900,
            quanty: 1,
            img: "imagenes/productos/Kalley.png"
        },
        {
            codProd: 50,
            nomProd: "Parlante SONOS ERA 100 Blanco",
            precio:1399900,
            quanty: 1,
            img: "imagenes/productos/Parlante SONOS ERA 100 Blanco.png"
        },
        {
            codProd: 51,
            nomProd: "Parlante BOSE S1 PRO",
            precio:3599900,
            quanty: 1,
            img: "imagenes/productos/Parlante BOSE S1 PRO+.png"
        },
        {
            codProd: 52,
            nomProd: "Parlante KALLEY K-SPK50BL2",
            precio:394000,
            quanty: 1,
            img: "imagenes/productos/Parlante KALLEY K-SPK50BL2.png"
        },
        {
            codProd: 53,
            nomProd: "Parlante KALLEY K-SPK30BL2",
            precio:399900,
            quanty: 1,
            img: "imagenes/productos/Parlante KALLEY K-SPK30BL2.png"
        },
        {
            codProd: 54,
            nomProd: "Parlante LG XBOOM GO XG7QBK",
            precio:549900,
            quanty: 1,
            img: "imagenes/productos/Parlante LG XBOOM GO XG7QBK.png"
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