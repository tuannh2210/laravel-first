@extends('layout.admin')
@section('content')

<div class="container">

    <h3>Laravel Ajax Request using X-editable bootstrap Plugin Example</h3>

    <table class="table table-bordered">

        <tr>

            <th>Name</th>

            <th>Email</th>

            <th width="100px">Action</th>

        </tr>

        @foreach($users as $user)

            <tr>
                    
                <td>
                    <a class="edit-post-button" href="#">EDIT TEXT</a>
                    <span  class="update a" data-name="name" data-title='Sửa tên' data-pk="{{ $user->id}}">
                        {{ $user->name }}
                    </span>
                    
                </td>

                <td>
                    <a class="edit-post-button" href="#">EDIT TEXT</a>
                    <span class="update a" data-name="slug" data-title='Sửa slug' data-pk="{{ $user->id }}">
                        {{ $user->slug }}
                    </span>
                    
                </td>

                <td>
                    <a href="" id="is_menu" class="update" data-name="is_menu" data-type="select" data-pk="{{ $user->id }}" data-title="Enter email">
                        @if($user->is_menu == 1)
                            Hiện
                        @else
                            Ẩn
                        @endif
                    </a>
                </td>

                <td><button class="btn btn-danger btn-sm">Delete</button></td>

            </tr>
       
        @endforeach        

    </table>

</div>
@endsection

@section('js')


<script type="text/javascript">

    // X-CSRF-TOKEN 
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    // Kiểu edit (inline)
    $.fn.editable.defaults.mode = 'popup';

    $('.update').editable({
        container:'body',

        url: '/update-user',

        type: 'text',

        pk: 1,

        name: 'name',

        title: 'Enter name',

        source: [
            {value: 1, text: 'Hiện'},
            {value: 0, text: 'Ẩn'},
        ],
        validate:function(value){
        if ($.trim(value) === '') {
           return "Field is required";
            }
                    
         },
          success:function(data){
                console.log(data);
          } ,
          error:function(data) {
            $('#fail').text('The was and error please try again');
       }

    });

     $('.a').editable({
        rows: 10
    });
    $('.a').off('click');
    
    $('.edit-post-button').on('click', function(e) {
        e.stopPropagation();
        $textarea = $(this).closest('tr td').find('.a');
        $textarea.editable('toggle');        
    });
    $('td *').css('border','none');

    $('.update').validate({
            rules:{
                name:{
                    required:true,
                    checkExist: "{{route('cate.check.name')}}"
                },
                slug:'required',
            },
            messages:{
                name:{
                    required: 'Vui lòng nhập danh mục' 
                }
            },
        });



</script>

@endsection