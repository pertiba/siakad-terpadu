$(function () {

	$('#datepicker').pickadate({
		  selectMonths: true,
		  selectYears: true,
		  hiddenName: true
	});

    $('#datepicker')
        .pickadate('picker')
        .on('render', function() {
            $('#form-add-mahasiswa').formValidation('revalidateField', 'birts');
    });

    $('#form-add-mahasiswa').formValidation({
        framework: 'bootstrap',
        locale: 'id_ID',
        fields: { 
            birts: {
                validators: {
                    notEmpty: {
                        message: 'The date of birth is required'
                    }
                }
            }
        }
    });
});