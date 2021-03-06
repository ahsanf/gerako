

@include('layouts.app_2')
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <a href="{{ route('home') }}"><img class="login100-pic-img" src="{{ asset('images/logo_blue.svg') }}" alt="IMG"></a>
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-center text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>





                <form method="POST" action="{{ route('password.email') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title">
						Reset Password
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100" type="text" name="email" placeholder="Email" :value="old('email')" required autofocus />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="txt1 p-t-12">
                        Beri tahu kami alamat <b>email</b> Anda dan kami akan mengirimkan email berisi tautan pengaturan ulang kata sandi.

                    </div>
                            <button class="container-login100-form-btn" type="submit">
                                <span class="login100-form-btn">Reset Password Link</span>
                            </button>


                    <div class="text-center p-t-12">
                        <span class="txt1">
							Sudah punya akun ?
                        </span>

                        <a class="txt2" href="{{ route('login') }}">
							<b>Masuk ke GERAKO</b>
                        </a>

                    </div>

                    <div class="text-center p-t-136">
                        <span class="txt1">
							Belum Punya Akun ?
                        </span>
                        <a class="txt2" href="{{ route('register') }}">
							Buat Akun
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.script')

</body>

</html>

