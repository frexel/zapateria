<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2 justify-content-end">
                <button class="btn btn-sm btn-outline-secondary">Exportar</button>
                <button class="btn btn-sm btn-outline-danger">Borrar</button>
            </div>
        </div>
    </div>


    <h2>Pedido <b>id#1</b></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h4>Usuario: <a href="editarUsuario.html">Marcelo Velázques</a></h4>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6>Monto: <b>$4500</b></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6>Medio de pago: <b>Visa</b></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6>Fecha: <b>05/11/2019</b></h6>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6>Hora: <b>14:30hs</b></h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="country">Estado</label>
                            <select class="custom-select d-block w-100" id="estado" required>
                                <option value="">En preparación</option>
                                <option value="">Despachado</option>
                                <option value="">En tránsito</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor selecciones un estado.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="talla">Fecha de entrega</label>
                            <input type="text" class="form-control" id="talla" placeholder="Talla" value="08/10/2019" required>
                            <div class="invalid-feedback">
                                La fecha es requerida.
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <div class="mb-3">
                        <label for="address">Dirección de envio</label>
                        <input type="text" class="form-control" id="address" placeholder="Rivadavia 2401 3ro A" required value="Rivadavia 2401 3ro A">
                        <div class="invalid-feedback">
                            Por favor ingresar dirección de envío.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">País</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Argentina</option>
                                <option value="">Chile</option>
                                <option value="">Brasil</option>
                                <option value="">Uruguay</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor selecciones un país.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">Provincia</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="">CABA</option>
                                <option value="">Buenos Aires</option>
                                <option value="">Santa Fe</option>
                                <option value="">Entre Ríos</option>
                                <option value="">Tucumán</option>
                                <option value="">...</option>
                                <option>California</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor seleccione una provincia.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Código postal</label>
                            <input type="text" class="form-control" id="zip" placeholder="" value="1428" required>
                            <div class="invalid-feedback">
                                El código postal es requerido.
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <h4>Productos</h4>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="../img/zapato01.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text"><a href="#">Modelo-5</a></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </div>
                                            <small class="text-muted">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="talla">Medio de pago</label>
                            <input type="text" class="form-control" id="pago" placeholder="Mediode pago" value="Visa" required>
                            <div class="invalid-feedback">
                                Medio de pago es requerido.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="stock">Monto total</label>
                            <input type="text" class="form-control" id="color" placeholder="Color" value="" required>
                            <div class="invalid-feedback">
                                Monto es requerido.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion">Observaciones</label>
                        <textarea type="text" class="form-control" id="observaciones" placeholder="...">
                                        Ninguna.
                                    </textarea>
                    </div>


                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
</main>