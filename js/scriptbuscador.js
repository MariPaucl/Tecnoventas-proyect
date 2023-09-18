// Espera a que el DOM se cargue completamente
document.addEventListener("DOMContentLoaded", function () {

     // Ejecutando funciones
     document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
     document.getElementById("cover-ctn-search").addEventListener ("click", ocultar_buscador);
     document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);

     var bars_search = document.getElementById("ctn-bars-search");
    var cover_ctn_search = document.getElementById("cover-ctn-search");
    var inputSearch = document.getElementById("inputSearch");
    var box_search = document.getElementById("box-search");

      // Mostrar buscador
      function mostrar_buscador() {
        bars_search.style.top = "8px";
        cover_ctn_search.style.display = "block"
        inputSearch.focus();
    }

    //funcion para ocultar el buscador

    function ocultar_buscador(){
        bars_search.style.top = "-50px";
        cover_ctn_search.style.display = "none";
        inputSearch.value = "";
        box_search.style.display = "none";

    }
//creando filtrado de busqueda
function buscador_interno(){

    var filter = inputSearch.value.toUpperCase();
    var li = box_search.getElementsByTagName("li");
    var links = box_search.getElementsByClassName("a");

    //recoriendo elementos a filtrar mediante los "li"

    for(var i =0; i< li.length; i++){

        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if(textValue.toUpperCase(). indexOf(filter) > -1){
            li[i].style.display = ""; 
            box_search.style.display = "block";

            if (inputSearch.value === ""){
                box_search.style.display = "none"
            }
        }else {
            li[i].style.display = "none";
        }
        
    }
    for (var i = 0; i < links.length; i++){
        links[i].addEventListener("click", function (event){
            ocultar_buscador();

            //desplazar a la seccion correspondiente

            var target = this.getAttribute("href");
            var targetElement = document.querySelector(target);
            if (targetElement){
                window.scrollTo({
                    top: targetElement.offsetTop,
                    benhavior: "smooth"
                });
            }
            event.preventDefault();
        })
    }
}
window.addEventListener("scroll", function () {
    if (window.pageYOffset > headerHeight) {
        bars_search.classList.add("fixed-search");
    } else {
        bars_search.classList.remove("fixed-search");
    }
});

});