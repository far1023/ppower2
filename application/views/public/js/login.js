$(document).ready(function () {
	$('form').keyup(function(){
		$('#alert').html('');
	});
});

$('#form-login').on('submit', function(e) {
	e.preventDefault();
	$('#alert').html('');
	var formData = new FormData($('#form-login')[0]);
	formData.append("loginAttempt", true);
	formData.append("<?=$this->security->get_csrf_token_name();?>", "<?= $this->security->get_csrf_hash(); ?>");
	$.ajax({
		contentType: false,
		processData: false,
		data: formData,
		url : '<?= site_url() ?>' + 'login',
		type: "POST",
		dataType: 'json',
		beforeSend:function(){
			$('#cta_login').prop("disabled", true).html('memeriksa');
		},
		success: function(kis) {
			if (kis.error) {
				if (kis.msg != '') {
					let gagal = '<div class="alert alert-danger show fade text-sm"><div class="alert-body">'+kis.msg+'</div></div>';
					$('#alert').html(gagal);
				} else {
					$('#alert').html('');
				}
				$('#captcha-here').html(kis.captcha);
				$('#cta_login').prop("disabled", false).html('MASUK');
			} else {
				$('#cta_login').html('mengalihkan...');
				let ok = '<div class="alert alert-success show fade text-sm"><div class="alert-body">'+kis.msg+'</div></div>';
				$('#alert').html(ok);
				window.setTimeout(function () {
					location.href = kis.href;
				}, 1000);
			}
			$('#captcha').val('');
		},
		error: function () {
			let gagal = '<div class="alert alert-danger show fade text-sm"><div class="alert-body">Terjadi kesalahan, <a href="<?= site_url() ?>">muat ulang halaman</a></div></div>';
			$('#alert').html(gagal);
			$('#captcha').val('');
			$('#cta_login').prop("disabled", false).html('MASUK');
		}
	});
});