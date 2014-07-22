<?php
function setFormat($app, $data, $format) {
	switch($format) {
		case "html":
			$app->response->headers->set('Content-Type', 'text/html');
			$html = "";
			foreach($data as $title => $array) {
				$html .= "<h1>".$title."</h1>";
				$html .= array2ul($array);
			}
			$app->response->setBody($html);
			break;
		case "jsonp":
			$callback = $app->request()->get('callback');
			if($callback) {
				$app->response->headers->set('Content-Type', 'application/javascript');
				$app->response->setBody(sprintf("%s(%s)", $callback, json_encode($data)));
			}
			break;
		default:
			$app->response->headers->set('Content-Type', 'application/json');
			$app->response->setBody(json_encode($data));
	}
}


function is_assoc($array) {
  return (bool)count(array_filter(array_keys($array), 'is_string'));
}

function array2ul($array) {
    $out="<ul>";
    foreach($array as $key => $elem){
        if(!is_array($elem)){
        	if(is_assoc($array)) {
                $out=$out."<li><span>$key:[$elem]</span></li>";
            } else {
	            $out=$out."<li>".$elem."</li>";
            }
        }
        else $out=$out."<li>$key".array2ul($elem)."</li>";
    }
    $out=$out."</ul>";
    return $out;
}