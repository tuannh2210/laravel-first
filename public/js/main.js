//Tinymce
tinymce.init({
    selector: 'textarea',
    height: 300,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools wordcount",
        "codesample","textcolor colorpicker"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample forecolor backcolor"
    
    });
 // CONFIRM
 function confirm(url){
 	bootbox.confirm({
 		message: "Bạn có chắc chắn muốn xóa không",
 		buttons: {
 			confirm: {
 				label: 'Có',
 				className: 'btn-danger'
 			},
 			cancel: {
 				label: 'Không',
 				className: 'btn-info'
 			}
 		},
 		callback: function (result) {
 			if(result == true ){
 				swal(
 					'Deleted !',
 					'Your file has been deleted.',
 					'success',
 					)
 				window.location.href = url;
 			}
 			else if(result == false){
 				swal(
 					'Cancelled',
 					'Your imaginary file is safe :)',
 					'error',
 				)
 			}
 		}
 	});
 };
// Validate form login
 $('#login-form').validate({
	rules:{
		name:{
			required:true,
			minlength:6,
		},
		password:{
			required:true,
			minlength:6,
		},
	},
	messages:{
		name:{
			required: 'Vui lòng nhập danh mục',
			checkExist:'Tên đã tồn tại'
		},
		slug:{
			checkExist:'Đường dẫn đã tồn tại'
		}
	},

});

 // Get Slug
 function ChangeToSlug(){
    var title, slug;

    //Lấy text từ thẻ input title
    title = $("#name").val();

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/g, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/g, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/g, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/g, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/g, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/g, 'y');
    slug = slug.replace(/đ/g, 'd');

    //Xóa các ký tự đặt biệt
    slug = slug.replace(/([^0-9a-z-\s])/g, '');

    //Đổi khoảng trắng thành ký tự gạch ngang
   	slug = slug.replace(/(\s+)/g, '-');

    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = slug.replace(/-+$/g, '');
    slug = slug.replace(/(\s+)/g, '-');

    // slug = '@' + slug + '@';
    // slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value  = slug;
}


