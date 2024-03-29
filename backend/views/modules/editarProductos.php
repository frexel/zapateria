<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h2>Editar zapato</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre</label>
                            <input type="text" class="form-control" id="modelName" placeholder="Nombre" value=""
                                required>
                            <div class="invalid-feedback">
                                Nombre es requerido.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion">Descripción - Español</label>
                        <textarea type="text" class="form-control" id="descripcion" placeholder="..."
                            required></textarea>
                        <div class="invalid-feedback">
                            Por favor ingresar descripción.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcionIngles">Descripción - Inglés</label>
                        <textarea type="text" class="form-control" id="descripcionIngles" placeholder="..."></textarea>
                        <div class="invalid-feedback">
                            Por favor ingresar descripción.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcionPortugues">Descripción - Portugués</label>
                        <textarea type="text" class="form-control" id="descripcionPortugues"
                            placeholder="..."></textarea>
                        <div class="invalid-feedback">
                            Por favor ingresar descripción.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcionPortugues">Descripción - Alemán</label>
                        <textarea type="text" class="form-control" id="descripcionAleman" placeholder="..."></textarea>
                        <div class="invalid-feedback">
                            Por favor ingresar descripción.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="descripcionPortugues">Descripción - Francés</label>
                        <textarea type="text" class="form-control" id="descripcionFrances" placeholder="..."></textarea>
                        <div class="invalid-feedback">
                            Por favor ingresar descripción.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="talla">Talla</label>
                            <input type="text" class="form-control" id="talla" placeholder="Talla" value="" required>
                            <div class="invalid-feedback">
                                Talla es requerido.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" id="stock" placeholder="Stock" value="" required>
                            <div class="invalid-feedback">
                                Stock es requerido.
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-xs" type="button">Agregar talla</button>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="capellada">Material Capellada</label>
                            <input type="text" class="form-control" id="capellada" placeholder="Capellada" value=""
                                required>
                            <div class="invalid-feedback">
                                El material de la capellada es requerido.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="forro">Material del forro</label>
                            <input type="text" class="form-control" id="forro" placeholder="forro" value="" required>
                            <div class="invalid-feedback">
                                El material del forro es requerido.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="color">Color</label>
                            <input type="text" class="form-control" id="color" placeholder="Color" value="" required>
                            <div class="invalid-feedback">
                                El color es requerido.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="taco">Forma del taco</label>
                            <input type="text" class="form-control" id="taco" placeholder="taco" value="" required>
                            <div class="invalid-feedback">
                                El tipo de taco.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="alturaTaco">Altura del taco</label>
                            <input type="text" class="form-control" id="alturaTaco" placeholder="Altura taco" value=""
                                required>
                            <div class="invalid-feedback">
                                La altura del taco es requerida.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="alturaPlataforma">Altura de la plataforma</label>
                            <input type="text" class="form-control" id="alturaPlataforma"
                                placeholder="Altura plataforma" value="" required>
                            <div class="invalid-feedback">
                                La altura de la plataforma es requerida.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="suela">Suela</label>
                            <input type="text" class="form-control" id="suela" placeholder="Suela" value="" required>
                            <div class="invalid-feedback">
                                La suela es requerida.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="detalle">Detalle</label>
                        <textarea type="text" class="form-control" id="detalle" placeholder="..."> </textarea>
                        <div class="invalid-feedback">
                            Por favor ingresar descripción.
                        </div>
                    </div>

                    <hr class="mb-4">
                    <h4>Imagenes</h4>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="../img/zapato01.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text"><a href="#">Modelo-5</a></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">View</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </div>
                                            <small class="text-muted">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-xs" type="button">Agregar imagen</button>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
</main>