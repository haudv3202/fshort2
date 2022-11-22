<table id="example" class="table table-striped" style="width:100%">
    <thead >
    <tr>
        <th>Tên</th>
        <th>Email</th>
        <th>Trạng thái</th>
        <th>Chức vụ</th>
        <th>Ngày khóa</th>
        <th>Ngày mở</th>
        <th>Lượt login</th>
        <th>Người cấm</th>
        <th>Chức năng</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($allData as $value){
        if($value['level_ban'] > 0 && $value['role_id'] == 1 ){
            ?>
            <tr id="row-<?php echo $value['id']?>">
                <td>
                    <div >
                        <div class="ms-3">
                            <p class="fw-bold mb-1"><?php echo $value['name']?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="text-muted mb-0"><?php echo $value['email']?></p>
                </td>
                <td>
                    <span class="badge badge-danger rounded-pill d-inline"><?php echo $value['level_ban'] > 0 ? "Đã ban" : "Error"?></span>
                </td>
                <td><?php echo Role($value['role_id'])[0]['name'] ?></td>
                <td><?php echo timeBand($value['id'])[0]['time_ban']  ;?></td>
                <td><?php echo timeBand($value['id'])[0]['time_open']  ;?></td>
                <td><?php echo $value['login_views']?></td>
                <td><?php echo nameUser(id_admin($value['id'])['id_person_ban'])['name']?></td>
                <td>
<!--                    onclick="open(--><?php //echo $value['id']?><!--)"-->
                    <button type="button"  id_user="<?php echo $value['id']?>" onclick="openBand(<?php echo $value['id']?>)" class="btn btn-success btn-rounded btn-status<?php echo $value['id']?> ">
                    Mở
                    </button>
                </td>
            </tr>
        <?php } }?>

    </tbody>

</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
