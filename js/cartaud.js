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
            codProd: 37,
            nomProd: "Audifonos Sony In Ear WFC700N",
            precio:290000,
            quanty: 1,
            img: "imagenes/productos/audifonosSonyInEarWFC700N.png 	"
        },
        {
            codProd: 38,
            nomProd: "Audifonos BOSE In Ear  EarbudsII",
            precio:1799900,
            quanty: 1,
            img: "imagenes/productos/Audifonos BOSE In Ear QuietComfort EarbudsII Gris.png"
        },
        {
            codProd: 39,
            nomProd: "Audífonos APPLE AirPods Pro 2.ª Generación",
            precio:1229000,
            quanty: 1,
            img: "imagenes/productos/Audífonos APPLE AirPods Pro 2.ª Generación.png"
        },
        {
            codProd: 40,
            nomProd: "Audífonos PANASONIC In Ear",
            precio:14900,
            quanty: 1,
            img: "imagenes/productos/Audífonos PANASONIC Alámbricos In Ear RP-HV096P Negro.png"
        },
        {
            codProd: 41,
            nomProd: "Audífonos XIAOMI Alámbricos InEar Basic Plateado",
            precio:32900,
            quanty: 1,
            img: "imagenes/productos/Audífonos XIAOMI Alámbricos InEar Basic Plateado.png"
        },
        {
            codProd: 42,
            nomProd: "Audífonos SONY Alámbricos In Ear",
            precio:39900,
            quanty: 1,
            img: "imagenes/productos/Audífonos SONY Alámbricos In Ear Manos Libres MDR-EX15AP Blanco.png"
        },
        {
            codProd: 43,
            nomProd: "Audífonos de Diadema SONY Inalámbricos Over Ear",
            precio:999900,
            quanty: 1,
            img: "imagenes/productos/SONY Inalámbricos Bluetooth Over Ear WH-1000XM4.png"
        },
        {
            codProd: 44,
            nomProd: "Audífonos de Diadema SONY Inalámbricos  On Ear",
            precio:199900,
            quanty: 1,
            img: "imagenes/productos/SONY Inalámbricos Bluetooth On Ear WH-CH520.png"
        },
        {
            codProd: 45,
            nomProd: "Audífonos de Diadema BOSE Inalámbricos  Over Ear 7",
            precio:1799900,
            quanty: 1,
            img: "imagenes/productos/BOSE Inalámbricos Bluetooth Over Ear 700.png"
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