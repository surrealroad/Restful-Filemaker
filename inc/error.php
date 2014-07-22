<?php

function showError($app, $fmresult, $format) {
	$error = array(
		"error" => true,
		"code" => $fmresult->code,
		"message" => $fmresult->getMessage()
	);
	setFormat($app, $error, $format);
	exit();
}