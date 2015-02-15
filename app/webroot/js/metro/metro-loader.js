var plugins = [
	'global',
	'core',
	'locale',
	'touch-handler',

	'accordion',
	'button-set',
	'date-format',
	'calendar',
	'datepicker',
	'carousel',
	'countdown',
	'dropdown',
	'input-control',
	'live-tile',

	'progressbar',
	'rating',
	'slider',
	'tab-control',
	'table',
	'times',
	'dialog',
	'notify',
	'listview',
	'treeview',
	'fluentmenu',
	'hint',
	'streamer',
	'stepper',
	'drag-tile',
	'scroll',
	'pull',
	'wizard',

	'initiator'


];

if ((document.location.host.indexOf('my') > -1) || (document.location.host.indexOf('localhost') > -1)) {
	$.each(plugins, function(i, plugin){
		$("<script/>").attr('src', '../js/metro/metro-'+plugin+'.js').appendTo($('head'));
	});
} else {
	$.each(plugins, function(i, plugin){
		$("<script/>").attr('src', 'js/metro/metro-'+plugin+'.js').appendTo($('head'));
	});
}