@extends('layouts.app')

@section('content')
<b-container fluid style="height: calc(100vh - 107px);">
    <b-row class="h-100 no-gutters" >
        <b-col cols="4">
            <lista-contactos-component></lista-contactos-component>
        </b-col>
        <b-col cols="8" >
            <conversacion-activa-component></conversacion-activa-component>
        </b-col>
    </b-row>
</b-container>
@endsection
