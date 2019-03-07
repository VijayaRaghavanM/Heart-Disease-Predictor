@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard- patient #{{ $id }}
                    <a href="{{ url('/test') }}">
                        <button type="button" class="btn">
                            Take test
                        </button>
                    </a>
                </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if(count($tests)!=0)
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>Age</th>
                                  <th><abbr title="Chest Pain">CP</abbr></th>
                                  <th><abbr title="Blood Pressure">BP</abbr></th>
                                  <th><abbr title="Cholestrol">Chol</abbr></th>
                                  <th><abbr title="Fasting Blood Sugar">FBS</abbr></th>
                                  <th><abbr title="ECG Results">ECG</abbr></th>
                                  <th><abbr title="Max. Heart rate">Thalach</abbr></th>
                                  <th><abbr title="Chest pain during Exercise">Exang</abbr></th>
                                  <th><abbr title="ECG after treadmill">Oldpeak</abbr></th>
                                  <th><abbr title="Slope(From ECG)">Slop</abbr></th>
                                  <th><abbr title="Genetic Disorder">Thal</abbr></th>
                                  <th><abbr title="Fluoroscopy-# of Major vessels">CA</abbr></th>
                                  <th>Result</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tests as $test)   
                                <tr>
                                  <td>{{ $test->age }}</td>
                                  <td>{{ chest_pain($test->cp) }}</td>
                                  <td>{{ $test->bp }}</td>
                                  <td>{{ $test->chol }}</td>
                                  <td>{{ blood_sugar($test->fbs) }}</td>
                                  <td>{{ rest_ecg($test->ecg) }}</td>
                                  <td>{{ $test->thalach }}</td>
                                  <td>{{ bool($test->exang) }}</td>
                                  <td>{{ $test->oldpeak }}</td>
                                  <td>{{ slop($test->slop) }}</td>
                                  <td>{{ thal($test->thal) }}</td>
                                  <td>{{ $test->ca }}</td>
                                  <td>{{ predict($test->result) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        You haven't taken any checkups yet!
                    @endif
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
