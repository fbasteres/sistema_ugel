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
                <form action="{{ route('login') }}" method="POST" class="login-form">
                    @csrf
        
                    <h5 class="fw-semibold">Conoce tu nuevo portal.</h5>
                    <!--<p class="">Puedes hacer todo lo que necesitas como funcionario. Revisa tus horarios, eventos, trámites y más. De manera más fácil y sencilla.</p>-->
                    @include('layouts.partials.messages')
                    <label for="" class="form-label">Ingresa tus datos para <b>iniciar sesión.</b></label>
                    <div class="mb-4">
                        <input type="text" class="form-control" name="username" placeholder="Usuario">
                    </div>
                    <div class="mb-2">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                   
                    <div class="d-grid py-3">
                        <input type="submit" class="btn btn-purple btn-log" value="Iniciar Sesión">
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
 
