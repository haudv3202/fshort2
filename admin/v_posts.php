<table id="example" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        <th>Tiêu đề</th>
        <th>Người đăng</th>
        <th>Kiểu Đăng</th>
        <th>Hastag</th>
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
        <td>#<b><?php echo $hastag[$value['id']][0] ?></b>#<b><?php echo $hastag[$value['id']][1] ?></b></td>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>