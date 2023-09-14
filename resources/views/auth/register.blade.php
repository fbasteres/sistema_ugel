@include('layouts.style')
<title>Paragon +</title>
<body class="fondo">
    <div class="container">
        <div class="row fon">
            <div class="col-lg-8 login-img">
            <img src="{{asset('frontend/img/login.svg')}}" class="">
            </div>
            <div class="col-lg-4 login-form">
                <div class="">
                <h1 class="fw-semibold">Paragon<b style="color:red; font-size:3rem;">+</b></h1>
                </div>
                
                <!-- Login -->
                <form action="{{ route('registro') }}" method="POST" class="login-form">
                    @csrf
                    
                    <label for="" class="form-label">Ingresa tus datos para <b>registrarte.</b></label>
                    <div class="row form-paragon">
                        <div class="col-6 form-col">
                            <input type="text" class="form-control" name="name" placeholder="Nombre">
                        </div> 
                        <div class="col-6 ps-2 form-col">
                            <input type="text" class="form-control" name="last_name" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="my-2">
                        <input type="email" class="form-control" name="email" placeholder="Correo electrónico">
                    </div>
                    <div class="d-flex">
                        <div class="mb-2">
                            <input type="text" class="form-control" name="username" placeholder="Usuario">
                        </div>
                        <div class="mb-2 ms-2 col-7">
                            <input type="text" class="form-control" name="dni" placeholder="Nro DNI">
                        </div>
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña">
                    </div>
                   
                    <div class="d-grid py-3">
                        <input type="submit" class="btn btn-purple btn-log" value="Registrate">
                    </div>
                    
                    <div class="text-center login-form">
                        <p class="">¿Necesitas ayuda? ¡Escríbenos!</p>
                        <button type="button" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Whatsapp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
 
