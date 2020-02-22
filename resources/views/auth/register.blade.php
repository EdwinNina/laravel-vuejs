@extends('layouts.app')

@section('content')
<b-container>
    <b-row class="justify-content-center">
        <b-col cols="8">
            <b-card class="text-center" title="{{ __('Register') }}">
                <b-form method="POST" action="{{ route('register') }}">
                    @csrf
                    <b-form-group label-cols="4" label="{{ __('Name') }}" label-for="name">
                        <b-form-input type="text" id="name" name="name" required autocomplete="name" autofocus
                            placeholder="Ingresa tu nombre de usuario"
                            class="@error('name') is-invalid @enderror"
                            value="{{ old('name') }}" 
                        ></b-form-input>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </b-form-group>   

                    <b-form-group label-cols="4" label="{{ __('E-Mail Address') }}" label-for="email">
                        <b-form-input type="email" id="email" name="email" required autocomplete="email" autofocus
                            placeholder="Ingresa tu correo electronico"
                            class="@error('email') is-invalid @enderror"
                            value="{{ old('email') }}" 
                        ></b-form-input>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </b-form-group>   

                    <b-form-group label-cols="4" label="{{ __('Password') }}" label-for="password">
                        <b-form-input type="password" id="password" name="password"
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

                    <b-form-group label-cols="4" label="{{ __('Confirm Password') }}" label-for="password-confirm">
                        <b-form-input type="password" id="password-confirm" name="password_confirmation"
                        placeholder="Ingresa tu contraseña"
                        class="@error('password') is-invalid @enderror"
                        value="{{ old('password') }}" autocomplete="new--password"
                        required
                        ></b-form-input>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </b-form-group>   

                    <b-form-group>
                        <b-button type="submit" variant="primary">{{ __('Register') }}</b-button>
                    </b-form-group>
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container 
@endsection
