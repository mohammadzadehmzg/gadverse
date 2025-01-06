<?php require_once "./view/layouts/header.php"; ?>
<section>
    <div class="container-fluid">


        <div class="text-center">
            <img src="<?= $BaseUrl; ?>/assets/img/logo.png" alt="Logo" width="200"
                 class="d-inline-block align-text-top  mt-2">
            <div class="d-print-none my-2 text-start">
                <button class="btn btn-warning" onclick="window.print();">پرینت</button>
            </div>


            <div class="border border-dark p-2">
                <div class="row">
                    <div class="col-6">
                        شماره بارنامه:
                        <?= $invoiceData['invoice_code']; ?>
                    </div>
                    <div class="col-6">
                        تاریخ ثبت:
                        <?php
                        $date = explode("_", $invoiceData['created_at']);
                        echo $date[0] . " " . $date[1] . " " . $date[2];
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <h5>مشخصات فرستنده</h5>
        <table class="table table-bordered border-dark mt-2">
            <thead>
            <tr>
                <th>نام و نام خانوادگی</th>
                <th> نام شرکت</th>
                <th class="d-print-none">کدملی</th>
                <th> شماره تماس</th>
                <th>آدرس</th>
            </tr>
            </thead>
            <tr>
                <td>
                    <?= $invoiceData['sender_fullname']; ?>
                </td>
                <td>
                    <?= $invoiceData['sender_company']; ?>
                </td>
                <td class="d-print-none">
                    <?= $invoiceData['sender_national_code']; ?>
                </td>
                <td>
                    <?= $invoiceData['sender_phone']; ?>
                </td>
                <td>
                    <?= $invoiceData['sender_address']; ?>
                </td>
            </tr>
        </table>
        <h5>مشخصات گیرنده</h5>
        <table class="table table-bordered border-dark mt-2">
            <thead>
            <tr>
                <th>نام و نام خانوادگی</th>
                <th> نام شرکت</th>
                <th class="d-print-none">کدملی</th>
                <th> شماره تماس</th>
                <th>آدرس</th>
            </tr>
            </thead>

            <tr>
                <td>
                    <?= $invoiceData['receiver_fullname']; ?>
                </td>
                <td>
                    <?= $invoiceData['receiver_company']; ?>
                </td>
                <td class="d-print-none">
                    <?= $invoiceData['receiver_national_code']; ?>
                </td>
                <td>
                    <?= $invoiceData['receiver_phone']; ?>
                </td>
                <td>
                    <?= $invoiceData['receiver_address']; ?>
                </td>
            </tr>

        </table>
        <h5>مشخصات مرسوله</h5>
        <table class="table table-bordered border-dark mt-2">
            <thead>
            <tr>
                <th>مبدا</th>
                <th> مقصد</th>
                <th>نوع</th>
                <th> تعداد</th>
                <th>وزن</th>
                <th>وزن حساب شده</th>
                <th>مبلغ کرایه</th>
            </tr>
            </thead>

            <tr>
                <td>
                    <?= $invoiceData['consignment_origin']; ?>
                </td>
                <td>
                    <?= $invoiceData['consignment_destination']; ?>
                </td>
                <td>
                    <?= $invoiceData['consignment_type']; ?>
                </td>
                <td>
                    <?= $invoiceData['consignment_quantity']; ?>
                </td>
                <td>
                    <?= $invoiceData['consignment_weight']; ?>
                </td>
                <td>
                    <?= $invoiceData['consignment_calculate_weight']; ?>
                </td>
                <td>
                    <?=  "R"."&nbsp;". number_format($invoiceData['consignment_price_rent'], 0, '', ','); ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    هزینه بسته بندی:
                    <?=  "R"."&nbsp;".number_format($invoiceData['packaging_cost'], 0, '', ','); ?>
                </td>
                <td colspan="6">
                    مالیات و ارزش افزوده:
                    %<?= $invoiceData['maliyat']; ?>
                </td>
            </tr>
            <tr>

                <td colspan="12">
                    مبلغ نهایی:
                    <?php
                    if ($invoiceData['maliyat']) {
                        $maliyat = (($invoiceData['consignment_price_rent'] + $invoiceData['packaging_cost']) * $invoiceData['maliyat']) / 100;
                        echo number_format(($invoiceData['consignment_price_rent'] + $invoiceData['packaging_cost']) + $maliyat, 0, '', ',');
                    } else {
                        echo "R"."&nbsp;". number_format($invoiceData['consignment_price_rent'] + $invoiceData['packaging_cost'], 0, '', ',');
                    }
                    ?>
                </td>
            </tr>
        </table>

        <p>گیرنده: بسته را صحیح و سالم تحویل گرفتم.</p>
    </div>
</section>

<?php require_once "./view/layouts/footer.php"; ?>
