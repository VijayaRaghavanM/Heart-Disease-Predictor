<?php

function chest_pain($expr){
    if($expr==1){
        return 'Typical Anginal';
    } else if($expr==2){
        return 'Atypical Anginal';
    } else if($expr==3){
        return 'Non Anginal';
    } else {
        return 'Asymptomatic';
    }
}

function blood_sugar($expr){
    if($expr==1){
        return '>120';
    } else{
        return '<120';
    }
}

function rest_ecg($expr){
    if($expr==0){
        return 'Normal';
    } else if($expr==1){
        return 'Having ST-T abnormal';
    } else if($expr==2){
        return 'Left ventricular hypertrophy';
    }
}

function bool($expr){
	if($expr==1){
		return "Yes";
	}
	return "No";
}

function slop($expr){
	if($expr==1){
		return "Upsloping";
	}
	else if($expr==2){
		return "Flat";
	}
	else{
		return "Downsloping";
	}
}

function thal($expr){
	if($expr==3){
		return "Normal";
	} else if($expr==6){
		return "Fixed defect";
	}
	else{
		return "Reversible defect";
	}
}

function predict($expr){
	if($expr==1){
		return "Not safe";
	}
	else{
		return "Safe";
	}
}


function predict_long($expr){
	if($expr==1){
		return "You are prone to Heart Disease";
	}
	else{
		return "You have No problem!";
	}
}


?>