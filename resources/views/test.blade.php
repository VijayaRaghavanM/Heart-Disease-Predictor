@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
<div class="container">
    <h1 class="title has-text-centered">Moctor Online Heart Checkup</h1>
    <div class="row justify-content-center">
        <form action="/test/take" method="POST">
            @csrf
             @if ($errors->any())
                 @foreach ($errors->all() as $error)
                     <div class="notification is-danger">
                      <button class="delete"></button>
                      {{ $error }}
                    </div>
                 @endforeach
            @endif
            <div class="field">
                  <label class="label">Age</label>
                  <div class="control">
                    <input class="input" type="number" name="age" placeholder="Text input">
                  </div>
            </div>

            <div class="field">
                  <label class="label">Sex</label>
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="sex" value="1">
                        Male
                      </label>
                      <label class="radio">
                        <input type="radio" name="sex" value="0">
                        Female
                      </label>
                      <label class="radio">
                        <input type="radio" name="sex" value="0">
                        Other
                      </label>
                    </div>
            </div>

            <div class="field">
                  <label class="label">What was your blood pressure last time you checked?</label>
                  <div class="control">
                    <input class="input" type="number" name="bp" placeholder="Text input">
                  </div>
            </div>

            <div class="field">
                  <label class="label">Ever had chest pain?</label>
                    <div class="control">
                      
                      <label class="radio">
                        <input type="radio" name="cp" value="1">
                        Yes, had pain with burning sensation in the heart
                      </label>
                        <br>
                      <label class="radio">
                        <input type="radio" name="cp" value="2">
                        Yes, had pain with breathing issues and pricky feelings
                      </label>
                      <br>
                      <label class="radio">
                        <input type="radio" name="cp" value="3">
                        Yes, but the pain lasted for a very few seconds
                      </label>
                      <br>
                      <label class="radio">
                        <input type="radio" name="cp" value="4">
                        No pain / No Symptoms
                      </label>
                    <br>
                    </div>
            </div>

            <div class="field">
                  <label class="label">What was your cholesterol rate in the latest test? </label>
                  <div class="control">
                    <input class="input" type="number" name="chol" placeholder="Text input">
                  </div>
            </div>
            <div class="field">
                <label class="label">Blood Sugar level </label>
                    <label class="radio">
                      <input type="radio" name="fbs" value="1">
                      higher than 120
                    </label>
                    <label class="radio">
                      <input type="radio" name="fbs" value="0" checked>
                      lower than 120
                    </label>
            </div>

            <div class="field">
                <label class="label">What was your ECG Result?</label>
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="ecg" value="0">
                        Normal
                      </label>
                      <label class="radio">
                        <input type="radio" name="ecg" value="1">
                        Having ST-T wave abnormal
                      </label>
                      <label class="radio">
                        <input type="radio" name="ecg" value="2">
                        Left ventricular hypertrophy
                      </label>
                    </div>
                    <br>
                <label class="label">Your results after treadmill?</label>
                <div class="control">
                    <input class="input" type="number" name="oldpeak" placeholder="Text input" step=".01">
                  </div>
            </div>

            <div class="field">
                  <label class="label">What is the number of beats on your pulse per minute?</label>
                  <div class="control">
                    <input class="input" type="number" name="thalach" placeholder="Text input">
                  </div>
            </div>

            <div class="field">
                  <label class="label">Do you experience chest pain after exercise?</label>
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="exang" value="1">
                        Yes
                      </label>
                      <label class="radio">
                        <input type="radio" name="exang" value="0">
                        No
                      </label>
                    
                    </div>
            </div>

            <div class="field">
                  <label class="label">How many coloured lines do you see in your X-Ray?</label>
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="ca" value="0">
                        0
                      </label>
                      <label class="radio">
                        <input type="radio" name="ca" value="1">
                        1
                      </label>
                      <label class="radio">
                        <input type="radio" name="ca" value="2">
                        2
                      </label>
                      <label class="radio">
                        <input type="radio" name="ca" value="3">
                        3
                      </label>
                    
                    </div>
            </div>

            <div class="field">
                  <label class="label">In the ecg report, how does your graph lookm like?</label>
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="slop" value="1">
                        Upsloping
                      </label>
                      <label class="radio">
                        <input type="radio" name="slop" value="2">
                        Flat
                      </label>
                      <label class="radio">
                        <input type="radio" name="slop" value="3">
                        Downsloping
                      </label>                    
                    </div>
            </div>

            <div class="field">
                  <label class="label">IWhat do you in the thalassemia column in your hemoglobin test?</label>
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="thal" value="3">
                        Normal
                      </label>
                      <label class="radio">
                        <input type="radio" name="thal" value="6">
                        Fixed defect
                      </label>
                      <label class="radio">
                        <input type="radio" name="thal" value="7">
                        Reversible defect
                      </label>                    
                    </div>
            </div>
            <input class="button is-primary" type="submit" value="Get Results!">
        </form>
    </div>
</div>
@endsection
