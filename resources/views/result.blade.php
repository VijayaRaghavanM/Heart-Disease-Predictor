@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">


<div class="container">
    <div class="row justify-content-center">
        {{ predict_long($prediction) }}

    </div>
    <div class="row">
        <div class="column has-text-centered">
            <a href="{{ url('/home') }}"><button class="button is-primary">View Dashboard</button></a>
            <a href="tel:8754765984"><button class="button is-primary">Contact a Doctor</button></a>
        </div>
    </div>
</div>
@endsection
