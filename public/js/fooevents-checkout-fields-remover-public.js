(function( $ ) {
	'use strict';

	$(document).ready(function(){
		var plugin_class 	= 'fooevents-attendee-';
		var field_prefix	= 'billing_';

		$('[id^="' + field_prefix + '"]').each( function(){
			cloneVal($(this));
		});

		$('[id^="' + field_prefix + '"]').on('input', function() {
			cloneVal($(this));
		});

		function cloneVal(el) {
			var element_name = el.attr('id').replace(field_prefix, '').replace('_','-');
			
			if( $('.' + plugin_class + element_name ).length ) {
				$('.' + plugin_class + element_name ).find('input, select, textarea').val(el.val());
				$('.' + plugin_class + element_name ).find('input, select, textarea').prop("readonly", true);
			}
		}

	});
	
})( jQuery );