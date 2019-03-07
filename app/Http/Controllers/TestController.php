<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;

use Illuminate\Http\Request;

use App\Test;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function new(TestRequest $request)
    {
        $data = $request->all();
        $query = "python model/predict.py --age " . $data["age"]. " --sex " . $data["sex"]. " --cp " . $data["cp"]. " --trestbps " . $data["bp"]. " --chol ". $data["chol"]. " --fbs " . $data["fbs"]. " --restecg " . $data["ecg"]. " --thalach " . $data["thalach"]. " --exang " .$data["exang"] . " --oldpeak " .$data["oldpeak"] . " --slope " . $data["slop"]. " --ca " . $data["ca"] . " --thal " . $data["thal"];
        $prediction = exec($query, $retval);
        $userId = \Auth::id();
        $test = new Test;
        $test->age = $data["age"];
        $test->sex = $data["sex"];
        $test->cp = $data["cp"];
        $test->bp = $data["bp"];
        $test->chol = $data["chol"];
        $test->fbs = $data["fbs"];
        $test->ecg = $data["ecg"];
        $test->thalach = $data["thalach"];
        $test->exang = $data["exang"];
        $test->oldpeak = $data["oldpeak"];
        $test->slop = $data["slop"];
        $test->ca = $data["ca"];
        $test->thal = $data["thal"];
        $test->result = $prediction;
        $test->user_id = $userId;
        $test->save();
        return view('result',compact('prediction'));
    }
}
