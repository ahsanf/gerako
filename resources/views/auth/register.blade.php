{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
@include('layouts.app_2')
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <a href="{{ route('home') }}"><img class="login100-pic-img-2" src="images/logo_blue.svg" alt="IMG"></a>

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
                    <div class="text-left">
                        <input type="checkbox" class="checkbox" name="check" id="checkbox">
                        <label class="txt3">Dengan membuat akun, Anda menyetujui <a class="txt2 text-left" href="#">Persyaratan & Privasi kami.</a></label>

                    </div>
                    <div class="container-login100-form-btn">
                        <button disabled class="login100-form-btn" id="btn-regist" type="submit">
							Daftar
						</button>
                    </div>
                    <div class="text-center p-t-136">
                        <span class="txt2">Sudah punya akun ?</span>
                        <a class="txt2" href="{{ route('login') }}">
							Masuk
							<i class="fa fa-long-arrow-right m-l-5 " aria-hidden="true "></i>
						</a>
                    </div>


                </form>
            </div>
        </div>
    </div>
@include('layouts.script')

</body>
