
// function band($id){
//     var id = $(".btn-status"+$id).attr('id_user');
//     Swal.fire({
//         title: 'Bạn có chắc chắn muốn cấm người dùng này không ?',
//         text: "Vui lòng kiểm tra trước khi cấm !",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, Band it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 url:'?AllAccount',
//                 method:"POST", //First change type to method here
//                 data:{
//                     item_id: id,
//                     band : 1
//                 }
//             });
//             $("#row-"+$id).hide(1000);
//         }
//     })
// }
function bandPost($id){
    var id_user = $(".btn-status"+$id).attr('id_user');
    var id_post = $(".btn-status"+$id).attr('id_post');
    console.log(id_user,id_post);
    Swal.fire({
        title: 'Bạn có chắc chắn muốn cấm người dùng này không ?',
        text: "Vui lòng kiểm tra trước khi cấm !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Band it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:'?posts',
                method:"POST", //First change type to method here
                data:{
                    id_user: id_user,
                    id_post : id_post,
                }
            });
            window.location.href = '?AllAccount';
        }
    })
}
function openBand($id){
    var id = $(".btn-status"+$id).attr('id_user');
    console.log(id);
    Swal.fire({
        title: 'Bạn chắc chắn muốn mở cho người dùng này ?',
        text: "Vui lòng kiểm tra trước khi mở !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Band it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:'?bandAccount',
                method:"POST", //First change type to method here
                data:{
                    item_id: id,
                    open : 0
                }
            });
            $("#row-"+$id).hide(1000);
        }
    })
}

// $(document).ready(function (){
//     $(".search").on('input',function () {
//         text = $('.search').val();
//         console.log(text);
//         $("#button-addon2").click(function(){
//             $.ajax({
//                 url:'?AllAccount',
//                 method:"POST", //First change type to method here
//                 data:{
//                     search: text,
//                 }
//                 // ,
//                 // success: function() {
//                 //     location.reload();
//                 // }
//             });
//
//         })
//     });
// })

function permission($id){
    var id = $(".btn-status"+$id).attr('id_user');
    var role_id = $(".btn-status"+$id).attr('role_id');
    console.log(id,role_id);
    Swal.fire({
        title: 'Bạn chắc chắn muốn cấp người dùng này làm nhân viên !',
        text: "Vui lòng kiểm tra trước khi cập nhật!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Band it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:'?employee',
                method:"POST", //First change type to method here
                data:{
                    item_id: id,
                    status_role : role_id
                },success: function() {
                    location.reload();
                }
            });
        }
    })
}