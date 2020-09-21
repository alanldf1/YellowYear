/**
*
* Script da página de contato
*
* @author Code Universe
*
**/
(function($, URL,Helpers) {

	var form = $('form[name="formContact"]');

	var submitContact =  function() {

		$('body').on('click', '#btnSubmitContact', function() {

			var name = $('input[name="name"]').val();
			var email = $('input[name="email"]').val();
			var phone = $('input[name="phone"]').val();
			var message = $('textarea[name="message"]').val();

			if(name == ''){
				swal({
					type: 'error',
					title: 'Erro!',
					text: 'Preencha seu nome',
				});
				return false;
			}

			if(email == ''){
				swal({
					type: 'error',
					title: 'Erro!',
					text: 'Preencha seu e-mail',
				});
				return false;
			}

			if(phone == ''){
				swal({
					type: 'error',
					title: 'Erro!',
					text: 'Preencha seu telefone',
				});
				return false;
			}

			if(message == ''){
				swal({
					type: 'error',
					title: 'Erro!',
					text: 'Deixe seu motivo para contato',
				});
				return false;
			}

			$.ajax({
				url: URL + '/submitContact',
				type: 'POST',
				dataType: 'JSON',
				data: form.serialize(),
				complete: function(response) {
					if (response.responseJSON.result) {
						swal({
							title: 'Enviado!',
							text: 'Aguarde o nosso retorno',
							type: 'success'
						}).then(function() {
							window.location.reload();
							return true
						})
					} else {
						swal({
							title: 'Erro!',
							text: 'Ocorreu um erro',
							type: 'error'
						});
						return false;
					}
				}
			});

		});

	}

	$( document ).ready(function() {
		submitContact();
	});

})($, URL, Helpers)