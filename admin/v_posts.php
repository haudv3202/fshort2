<!-- Export Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Quản lí Bình luận theo tài khoản</h4>
    </div>
    <div class="pb-20">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
            <tr>
                <th class="table-plus datatable-nosort">Tiêu đề</th>
                <th>Người đăng</th>
                <th>Kiểu Đăng</th>
                <th>Nội dung</th>
                <th>views</th>
                <th>Like</th>
                <th>Ngày đăng</th>
                <th>Chức năng</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($dataPost as $value){ ?>
                <?php if($value['band_posts'] == 0 && empty(post_ban($_GET['id'],$value['id']))){ ?>
                    <tr id="row-<?php echo $value['id']?>">
                        <td><?php echo $value['title'] ?></td>
                        <td><?php echo account_one_row($value['id_account'])['name']?></td>
                        <td><?php echo category_id($value['cate_id'])['name'];  ?></td>
                        <td><?php echo $value['content'] == "" ? "Không có nội dung" : $value['content']; ?></td>
                        <td><?php echo $value['views'] ?></td>
                        <td><?php echo $value['likes'] ?></td>
                        <td><?php echo $value['create_date'] ?></td>
                        <td>
                            <button type="button" id_user="<?php echo $value['id_account']?>" id_post="<?php echo $value['id']?>"  band="1" onclick="bandPost(<?php echo $value['id']?>)" class="btn btn-danger btn-status<?php echo $value['id']?> btn-rounded" >
                                CẤM
                            </button>
                        </td>
                    </tr>
                <?php }?>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>




