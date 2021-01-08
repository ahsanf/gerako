
@include('layouts.app_2')
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <a href="{{ route('home') }}"><img class="login100-pic-img-2" src="images/logo_blue.svg" alt="IMG"></a>
                    <x-jet-validation-errors class="alert-toast inherit bottom-0 right-0 m-8 w-5/6 md:w-full max-w-sm" id="alert"/>

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                 @endif
                </div>

                <form class="login100-form validate-form"  method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title">
						Buat Akun di GERAKO
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter Valid Name">
                        <input class="input100" type="text" name="name" :value="old('name')" placeholder="Nama">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" class="input100" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
                        <input id="password_confirmation" class="input100" type="password" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
                        </span>

                    </div>
                    <div class="text-right">

                        <input type="checkbox" onclick="showPassword()"> <span class="txt2">Tampilkan Password</span>

                    </div>
                    <div class="text-left p-t-40"">
                        <input type="checkbox" class="checkbox" name="check" id="checkbox">
                        <label class="txt3">Dengan membuat akun, Anda menyetujui <a class="txt2" href="#"><b>Persyaratan & Privasi kami.</b></a></label>

                    </div>
                    <div class="container-login100-form-btn">
                        <button disabled class="login100-form-btn" id="btn-regist" type="submit">
							Daftar
						</button>
                    </div>
                    <div class="text-center p-t-136">
                        <span class="txt2">Sudah punya akun ?</span>
                        <a class="txt2" href="{{ route('login') }}">
							<b>Masuk</b>
							<i class="fa fa-long-arrow-right m-l-5 " aria-hidden="true "></i>
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
        var x = document.getElementById("password_confirmation");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>
