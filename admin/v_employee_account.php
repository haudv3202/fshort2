<table id="example" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        <th>Tên</th>
        <th>Email</th>
        <th>Trạng thái</th>
        <th>Chức vụ</th>
        <th>Ngày tạo</th>
        <th>Lượt login</th>
        <th>Chức năng</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($allData as $value){
        if(($value['role_id'] == 1 || $value['role_id'] == 2) && totalBan($value['id'])['totalband'] == 0 ){
            ?>
            <tr>
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
                    <span class="badge badge-success rounded-pill d-inline">Active</span>
                </td>
                <td><?php echo Role($value['role_id'])[0]['name'] ?></td>
                <td><?php echo $value['create_date']?></td>
                <td><?php echo $value['login_views']?></td>
                <td>
                    <?php if($value['role_id'] == 1){?>
                        <button type="button" id_user="<?php echo $value['id']?>" role_id="2" onclick="permission(<?php echo $value['id']?>)" class="btn btn-success btn-status<?php echo $value['id']?>">Cài nhân viên</button>
                    <?php }else {?>
                        <button type="button" id_user="<?php echo $value['id']?>" role_id="1" onclick="permission(<?php echo $value['id']?>)" class="btn btn-danger btn-status<?php echo $value['id']?>">Bỏ set</button>
                    <?php }?>
                </td>
            </tr>
        <?php  } }?>
    </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

