

@include('layouts.app_2')
@include('notification')
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <a href="{{ route('home') }}"><img class="login100-pic-img" src="{{ asset('images/logo_blue.svg') }}" alt="IMG"></a>

                        <x-jet-validation-errors class="alert-toast inherit bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm" id="alert"/>

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                 @endif
                </div>




                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title">
						Masuk ke GERAKO
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100" type="text" name="email" placeholder="Email" :value="old('email')" required autofocus />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password"class="input100" placeholder="Password" type="password" name="password" required autocomplete="current-password">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>

                    </div>
                    <div class="text-right">

                        <input type="checkbox" onclick="showPassword()"> <span class="txt2">Tampilkan Password</span>

                    </div>
                            <button class="container-login100-form-btn" type="submit">
                                <span class="login100-form-btn">Masuk</span>
                            </button>


                    <div class="text-center p-t-12">
                        <span class="txt1">
							Lupa
                        </span>
                        @if (Route::has('password.request'))
                        <a class="txt2" href="{{ route('password.request') }}">
							<b>Password ?</b>
                        </a>
                        @endif
                    </div>

                    <div class="text-center p-t-136">
                        <span class="txt1">
							Belum Punya Akun ?
                        </span>
                        <a class="txt2" href="{{ route('register') }}">
							<b>Buat Akun
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i></b>
						</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.script')
    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        $('#alert').load(function(){
             $('.alert-toast inherit bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm').fadeOut();
        });


    </script>
</body>

</html>
