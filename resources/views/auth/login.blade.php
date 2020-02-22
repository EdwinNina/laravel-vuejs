@extends('layouts.app')

@section('content')
<b-container>
    <b-row class="justify-content-center">
        <b-col cols="8">
            <b-card title="{{ __('Login') }}" class="text-center mt-4">
                <b-form method="POST" action="{{ route('login') }}">
                    @csrf
                    <b-form-group label-cols="4"
                        label="{{ __('E-Mail Address') }}"
                        label-for="email"
                    >
                        <b-form-input
                        id="email"
                        type="email"
                        name="email"
                        placeholder="Ingresa tu correo electronico"
                        class="@error('email') is-invalid @enderror"
                        value="{{ old('email') }}" autocomplete="email" autofocus
                        required
                        ></b-form-input>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </b-form-group>   
                    <b-form-group label-cols="4"
                        label="{{ __('Password') }}"
                        label-for="password"
                    >
                        <b-form-input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Ingresa tu contraseña"
                        class="@error('password') is-invalid @enderror"
                        value="{{ old('password') }}" autocomplete="current-password"
                        required
                        ></b-form-input>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </b-form-group>   
    
                    <b-form-group>
                        <b-form-checkbox-group>
                          <b-form-checkbox value="me" name="remember" {{ old('remember') ? 'checked="true"' : '' }}
                          >{{ __('Remember Me') }}
                        </b-form-checkbox>
                        </b-form-checkbox-group>
                      </b-form-group>
                
                    <b-button type="submit" variant="primary">{{ __('Login') }}</b-button>
        
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </b-form>        
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
