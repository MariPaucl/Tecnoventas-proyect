$(document).ready(function () {
    let etiquetasActivas = [];
    let categoriaActiva = 'all';
  
    // Mostrar todos los elementos al cargar la página
    $('.item').show();
  
    // Evento para cambiar de categoría
    $('.category_item').click(function () {
      let catProd = $(this).attr('category');
      console.log(catProd);
  
      $('.category_item').removeClass('ct_item-active');
      $(this).addClass('ct_item-active');
  
      categoriaActiva = catProd;
      filtrarElementos();
    });
  
    // Evento para seleccionar etiquetas
    $('.tag').click(function () {
      let elem = $(this);
      elem.toggleClass('active');
      let tag = elem.text();
  
      if (etiquetasActivas.includes(tag)) {
        etiquetasActivas = etiquetasActivas.filter((e) => e !== tag);
      } else {
        etiquetasActivas.push(tag);
      }
  
      filtrarElementos();
    });
  
    // Función para filtrar elementos por categoría y etiquetas
    function filtrarElementos() {
      $('.item').each(function () {
        let elem = $(this);
        let etiquetasElemento = elem.data('tags').split(' ');
        let categoriaElemento = elem.attr('category');
  
        let mostrarCategoria = categoriaActiva === 'all' || categoriaActiva === categoriaElemento;
  
        let mostrarEtiquetas =
          etiquetasActivas.length === 0 ||
          etiquetasActivas.some((etiq) => etiquetasElemento.includes(etiq));
  
        if (mostrarCategoria && mostrarEtiquetas) {
          elem.show();
        } else {
          elem.hide();
        }
      });
    }
  });
  