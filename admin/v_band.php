<!-- Export Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Quản lí Bình luận theo tài khoản</h4>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
            <tr>
                <th class="table-plus datatable-nosort">Tên</th>
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
                            <?php echo $value['name']?>
                        </td>
                        <td>
                            <?php echo $value['email']?>
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
    </div>
</div>





