class clientes {
  constructor(idCliente, tipoId, nomCliente, apeCliente, fechaNac,
  telefono, correo, contraseña){
    this._idCliente = idCliente;
    this._tipoId = tipoId;
    this._nomCliente = nomCliente;
    this._apeCliente = apeCliente;
    this._fechaNac = fechaNac;
    this._telefono = telefono;
    this._correo = correo;
    this._contraseña = contraseña;
  }
  iniciarSesion(){};
  registrarse(){};
  actualizarPerfil(){};
  buscarProductos(){};
  comprarProducto(){};
  compararProductos(){};
}

class administradores {
  constructor(idAdmin, nomAdmin, apeAdmin, cargo,
  estado, correoAdmin, passAdmin){
    this._idAdmin = idAdmin;
    this._nomAdmin = nomAdmin;
    this._apeAdmin = apeAdmin;
    this._cargo = cargo;
    this._estado = estado;
    this._correoAdmin = correoAdmin;
    this._passAdmin = passAdmin;
  }
  registrarProductos(){};
  modificar(){};
  actualizarProducto(){};
  eliminarProducto(){};
  iniciarSesion(){};
}

class proveedores {
  constructor(NIT, nomProv, correoProv, nomCont, apeCont,
  direccion, telProv, paginaWeb){
    this._NIT = NIT;
    this._nomProv = nomProv;
    this._nomCont = nomCont;
    this._apeCont = apeCont;
    this._direccion = direccion;
    this._telProv = telProv;
    this._paginaWeb = paginaWeb;
  }
  buscarProveedor(){};
  agregarProveedor(){};
  eliminarPtoveedor(){};
}

class productos {
  constructor(nomProd, marca, precio, estado, imagen){
    this._nomProd = nomProd;
    this._marca = marca;
    this._precio = precio;
    this._estado = estado;
    this._imagen = imagen;
  }
  verCaracteristicas(){};
  ordenarProductos(){};
}

class pedidos {
  constructor(fechaPedido, horaPedido, dirPedido, totalPedido){
    this._fechaPedido = fechaPedido;
    this._horaPedido = horaPedido;
    this._dirPedido = dirPedido;
    this._totalPedido = totalPedido;
  }
  confirmarPago(){};
  finalizarPedido(){};
}

class celular extends productos
{
  constructor(nomProd, marca, precio, estado, imagen, tamañoPantalla, almacenamiento,
    memoriaRam, sistemaOperativo, procesador, resolucionCamaras, conectividad, capacidadBateria){
    super(nomProd, marca, precio, estado, imagen);

    this._tamañoPantalla = tamañoPantalla;
    this._almacenamiento = almacenamiento;
    this._memoriaRam = memoriaRam;
    this._sistemaOperativo = sistemaOperativo;
    this._procesador = procesador;
    this._resolucionCamaras = resolucionCamaras;
    this._conectividad = conectividad;
    this._capacidadBateria = capacidadBateria;
  }
  hacerLlamadas(){};
  chatear(){};
  tomarFotos(){};
  grabar(){};
  navegarInternet(){};
}

class tablet extends productos
{
  constructor(nomProd, marca, precio, estado, imagen, tamañoPantalla, almacenamiento,
    memoriaRam, sistemaOperativo, procesador, resolucionCamaras, conectividad, capacidadBateria){
    super(nomProd, marca, precio, estado, imagen);

    this._tamañoPantalla = tamañoPantalla;
    this._almacenamiento = almacenamiento;
    this._memoriaRam = memoriaRam;
    this._sistemaOperativo = sistemaOperativo;
    this._procesador = procesador;
    this._resolucionCamaras = resolucionCamaras;
    this._conectividad = conectividad;
    this._capacidadBateria = capacidadBateria;
  }
  hacerLlamadas(){};
  dibujar(){};
  tomarFotos(){};
  jugarVideoJuegos(){};
  navegarInternet(){};
}

class dispositivoComputo extends productos
{
  constructor(nomProd, marca, precio, estado, imagen, almacenamiento, tipoAlmacenamiento,
    memoria, sistemaOperativo, procesador, resolucionPantalla){
    super(nomProd, marca, precio, estado, imagen);

    this._almacenamiento = almacenamiento;
    this._tipoAlmacenamiento = tipoAlmacenamiento;
    this._memoria = memoria;
    this._sistemaOperativo = sistemaOperativo;
    this._procesador = procesador;
    this._resolucionPantalla = resolucionPantalla;
  }
  jugarVideoJuegos(){};
  verVideos(){};
  documentacion(){};
  editar(){};
  diseñar(){};
}

class parlantes extends productos
{
  constructor(nomProd, marca, precio, estado, imagen, tamaño, rangoBluethooth, duracionBateria){
    super(nomProd, marca, precio, estado, imagen);

    this._tamaño = tamaño;
    this._rangoBluethooth = rangoBluethooth;
    this._duracionBaateria = duracionBateria;
  }
  escucharMusica(){};
  reproducirAudio(){};
}