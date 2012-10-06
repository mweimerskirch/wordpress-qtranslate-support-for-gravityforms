<?php
/*
Plugin Name: qTranslate support for GravityForms
Plugin URI: https://github.com/mweimerskirch/wordpress-qtranslate-support-for-gravityforms
Description: Makes qTranslate work with GravityForms
Version: 1.0
Author: Michel Weimerskirch
Author URI: http://michel.weimerskirch.net
License: MIT
*/

add_filter('gform_pre_render', 'qtranslate_gform_pre_render');
add_filter('gform_pre_submission_filter', 'qtranslate_gform_pre_render');
function qtranslate_gform_pre_render($form) {
	if(isset($form['button']['text'])) {
		$form['button']['text'] = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($form['button']['text']);
	}
	if(isset($form['confirmation']['message'])) {
		$form['confirmation']['message'] = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($form['confirmation']['message']);
	}
	foreach($form['fields'] as $id => $field) {
		$form['fields'][$id]['label'] = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($form['fields'][$id]['label']);
		$form['fields'][$id]['description'] = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($form['fields'][$id]['description']);
	}
	return $form;
}

add_filter('gform_form_tag', 'qtranslate_gform_form_tag');
function qtranslate_gform_form_tag($tag) {
	global $q_config;
	$tag = preg_replace_callback(
		"|action='([^']+)'|",
		create_function(
			'$matches',
			'return "action=\'" . qtrans_convertURL($matches[1], '.$q_config['language'].') . "\'";'
		),
		$tag
	);
	return $tag;
}
