<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Dashboard');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}
]);
	Route::get('index', [
		'as' => 'admin.index.page', function () {
			$content = 'Define index';

			return AdminSection::view($content, 'Information');
}]);