<?php require_once "./view/layouts/header.php"; ?>

<section>
    <div class="container-fluid">
        <?php if (isset($message)) { ?>
            <div class="alert alert-secondary mt-2"><?= $message; ?></div>
        <?php } ?>
        <div class="shadow-lg p-2 rounded my-4">

            <div>
                <h4>فاکتورهای ثبت شده</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th>کد فاکتور</th>
                        <th>مبلغ کل</th>
                        <th>مبلغ نهایی</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($invoiceList as $item) { ?>
                        <tr>
                            <td>
                                <?= $item["code"]; ?>
                            </td>
                            <td>
                                <?= $item["total_price"]; ?>
                            </td>
                            <td>
                                <?= $item["final_total_price"]; ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <h4>فاکتورهای مرجوعی</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th>کد فاکتور</th>
                        <th>مبلغ کل</th>
                        <th>مبلغ نهایی</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($invoiceReturnsList as $item) { ?>
                        <tr>
                            <td>
                                <?= $item["code"]; ?>
                            </td>
                            <td>
                                <?= $item["total_price"]; ?>
                            </td>
                            <td>
                                <?= $item["final_total_price"]; ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

<?php require_once "./view/layouts/footer.php"; ?>

<script>
    new DataTable('#example', tableOption);
</script>