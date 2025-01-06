<?php require_once "./view/layouts/header.php"; ?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
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
        <div class="bg-info p-2 rounded my-4">
            <button class="btn btn-success my-2 d-print-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">اضافه کردن
                فرآورده
            </button>
            <?php if (isset($message)) { ?>
                <div class="alert alert-warning">
                    <?= $message; ?>
                </div>
            <?php } ?>
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>نام</td>
                        <td>نوع فرآورده</td>
                        <td>کد فرآورده</td>
<!--                        <td>وزن خالص</td>-->
<!--                        <td>وزن ناخالص</td>-->
                        <td>قیمت</td>
                        <td>سختی فروش</td>
<!--                        <td>بروز رسانی</td>-->
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $key => $pr) { ?>
                        <tr>
                            <td><?= $key + 1; ?></td>
                            <td><?= $pr['name']; ?></td>
                            <td><?= productType($pr['type']); ?></td>
                            <td><?= $pr['code']; ?></td>
<!--                            <td><input type="text" class="form-control weight" value="--><?php //= $pr['g_weight'] ?><!--"></td>-->
<!--                            <td><input type="text" class="form-control nWeight" value="--><?php //= $pr['n_weight'] ?><!--">-->
                            </td>
                            <td><input type="text" class="form-control price" value="<?= $pr['price'] ?>"></td>
                            </td>
                            <td><input type="text" class="form-control hardship" value="<?= $pr['hardship'] ?>">
                            </td>
<!--                            <td>-->
<!--                                <button id="--><?php //= $pr['id']; ?><!--" class="btn btn-success set-details"><i-->
<!--                                            class="bi bi-box-arrow-up-right"></i></button>-->
<!--                            </td>-->
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
