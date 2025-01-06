<?php require_once "./view/layouts/header.php"; ?>
<section>

    <div class="container">
        <div class="shadow rounded mt-5 p-2 text-white bg-danger">
            <div>
                <a href="<?= $BaseUrl; ?>/invoice" class="text-decoration-none btn btn-outline-warning" style="font-size: 20px"> <i
                            class="bi bi-clipboard2-plus"></i>
                    ثبت فاکتور
                </a>
            </div>

        </div>
        <div class="row">
            <div>

                <div class="shadow rounded mt-3 p-4">
                    <h5 class="mb-4">لیست ارسالی ها</h5>
                    <div>
                        <table id="example" class="table table-secondary table-bordered display nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>فرستنده</td>
                                <td>گیرنده</td>
                                <td>مقصد</td>
                                <td>عملیات</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($invoiceData as $key => $pr) { ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $pr['sender_fullname']; ?></td>
                                    <td><?= $pr['receiver_fullname']; ?></td>
                                    <td><?= $pr['consignment_destination']; ?></td>
                                    <td>
                                        <a class="btn btn-success" href="<?= $BaseUrl; ?>/invoice/print/<?= $pr['id']; ?>">پرینت</a>
                                        <a class="btn btn-info" href="<?= $BaseUrl; ?>/invoice/edit/<?= $pr['id']; ?>">ویرایش</a>
                                        <form method="post" class="d-inline" onsubmit="return confirm('آیا مطمئن هستید؟');">
                                            <button class="btn btn-danger" name="delete_invoice" value="<?= $pr['id']; ?>">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once "./view/layouts/footer.php"; ?>
<script>
    new DataTable('#example', tableOption);
</script>