@extends('layouts.app')

@section('content')
    <messenger-component :user-id="{{ Auth::id() }}"></messenger-component>
@endsection
