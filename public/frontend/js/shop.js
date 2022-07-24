jQuery(document).ready(function(){
	let $ = jQuery;
	$('[data-target="#productModal"]').click(function(){
		$('#productModal .modal-title').html($(this).data("title"));
		$('#productModalImage').attr("src",$(this).data("image"));
		$('#productModal .modal-body p').html($(this).data("description"));
		$('#productModal #dropdownname').html($(this).data("dropdownname"));
		$('#productModal .modal-footer [name="id"]').val($(this).data("id"));
		$('#productModal .modal-footer select').html('');
		$('#productModal .modal-footer button').prop('disabled',true);
		$('#productModal .modal-footer button').toggleClass("btn-success btn-secondary");
		$('#productModal .modal-footer select').append("<option value='0'>Please select a "+$(this).data("dropdownname")+"</option>");
		let options = $(this).data("dropdown").split("__DROPDOWN_SEPARATOR__");
		options.forEach(function(single){
			$('#productModal .modal-footer select').append("<option value='"+single+"'>"+single+"</option>");
		});
	});
	$('#productModal .modal-footer select').change(function(){
		$('button',$(this).closest('#productModal')).prop("disabled", ($(this).val()!=0 ? false : true));
		if($(this).val()!=0){
			$('#productModal .modal-footer button').addClass("btn-success");
			$('#productModal .modal-footer button').removeClass("btn-secondary");
		} else {
			$('#productModal .modal-footer button').removeClass("btn-success");
			$('#productModal .modal-footer button').addClass("btn-secondary");
		}
	});
});