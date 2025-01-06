<?php require_once "./view/layouts/header.php"; ?>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">افزودن مشتری</h1>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">نام</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                           placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">نام خانوادگی</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container-fluid">
        <?php if (isset($message)) { ?>
            <div class="alert alert-secondary mt-2"><?= $message; ?></div>
        <?php } ?>
        <div class="shadow-lg p-2 rounded my-4">
            <div class="d-flex justify-content-between">
                <h3 class="mb-4 me-2">مشتریان</h3>
                <!--                <div class="ps-2">-->
                <!--                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">افزودن-->
                <!--                    </button>-->
                <!--                </div>-->
            </div>
            <div>
                <table id="example" class="table table-secondary table-bordered display nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>نام</td>
                        <td>نام خانوادگی</td>
                        <td>نام کامل</td>
                        <td>تلفن</td>
                        <td>تلفن واتس اپ</td>
                        <td>آدرس</td>
                        <!--                        <td>کشور</td>-->
                        <!--                        <td>استان</td>-->
                        <!--                        <td>شهر</td>-->
                        <!--                        <td>منطقه</td>-->
                        <td>گروه مشتری</td>
                        <td>نوع شخصیت</td>
                        <td>جزئیات</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $key => $pr) { ?>
                        <tr>
                            <td><?= $key + 1; ?></td>
                            <td><?= $pr['name']; ?></td>
                            <td><?= $pr['family']; ?></td>
                            <td><?= $pr['full_name']; ?></td>
                            <td><?= $pr['phone']; ?></td>
                            <td><?= $pr['social_number']; ?></td>
                            <td class="w-100">
                                <form method="post">
                                    <textarea name="address" class="form-control" cols="20"
                                              rows="7"><?= $pr['address']; ?></textarea>
                                    <button class="btn btn-success mt-1" name="submit_address"
                                            value="<?= $pr['id']; ?>">ثبت
                                    </button>
                                </form>
                            </td>
                            <!--                            <td>--><?php //= $pr['country']; ?><!--</td>-->
                            <!--                            <td>--><?php //= $pr['state']; ?><!--</td>-->
                            <!--                            <td>--><?php //= $pr['city']; ?><!--</td>-->
                            <!--                            <td>--><?php //= $pr['area']; ?><!--</td>-->
                            <td><?= $pr['customer_group_name']; ?></td>
                            <td><?= $pr['customer_type']; ?></td>
                            <td class="w-100">
                                <a href="<?= $BaseUrl; ?>/customers/detail/<?= $pr['id']; ?>" class="btn btn-success mt-1">نمایش</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
<script src="./assets/js/products.js"></script>
<?php require_once "./view/layouts/footer.php"; ?>

<script>
    new DataTable('#example', tableOption);
</script>