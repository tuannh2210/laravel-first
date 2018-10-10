var isSuccess = false;
jQuery.validator.addMethod("checkExist",
	function(value, element , attr){
		$.ajax({
			url:attr,
			method: 'post',
			data:{
				name : value,
				_token:$('#token').val()
			},
			dataType: 'JSON',
			success :function(rs){
				// // debugger;
				// console.log(rs);

				isSuccess = rs;
			},
			error: function(err,xhr){
				console.log(err);
			}
		});

		return isSuccess;
	}
);

// kiểm tra dã liệu dã tồn tại chưa