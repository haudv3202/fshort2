<!-- Export Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Quản lí tài khoản</h4>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
            <tr>
                <th class="table-plus datatable-nosort">Tên</th>
                <th>Email</th>
                <th>Chức vụ</th>
                <th>Ngày tạo</th>
                <th>Lượt login</th>
                <th>Chức năng</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($allData as $value){
                if($value['role_id'] == 1 ){
                    ?>
                    <tr id="row-<?php echo $value['id']?>">
                        <td class="table-plus"><?php echo $value['name']?></td>
                        <td>
                            <?php echo $value['email']?>
                        </td>
                        <td><?php echo Role($value['role_id'])[0]['name'] ?></td>
                        <td><?php echo $value['create_date']?></td>
                        <td><?php echo $value['login_views']?></td>
                        <td>

                            <button type="button" onclick="location.href='?posts&id=<?php echo $value['id']?>'"  class="btn btn-success btn-rounded" >
                                Bài đăng
                            </button>
                        </td>
                    </tr>
                <?php  } }?>
            </tbody>
        </table>
    </div>
</div>




