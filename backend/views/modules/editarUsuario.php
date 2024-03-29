<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <h2>Editar usuario</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Nombre" value="Marcelo"
                                required>
                            <div class="invalid-feedback">
                                Nombre es requerido.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Apellido</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="Velazques"
                                required>
                            <div class="invalid-feedback">
                                Apellido es requerido.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required
                            value="mv@mail.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required
                            value="Rivadavia 2401 3ro A">
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

                    <button class="btn btn-primary btn-xs" type="button">Agregar dirección</button>

                    <hr class="mb-4">
                    <h4>Pedidos</h4>

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


                    <hr class="mb-4">
                    <h4>Favoritos</h4>

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



                    <hr class="mb-4">
                    <h4 class="mb-3">Preferencias</h4>

                    <div class="d-block my-3">
                        <p>Taco aguja</p>
                        <p>Cuero</p>
                        <p>zandalias</p>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
</main>
</div>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/holder.min.js"></script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
</body>

</html>