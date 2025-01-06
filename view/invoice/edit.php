<?php require_once "./view/layouts/header.php"; ?>

<section>
    <div class="container">
        <?php if (isset($message)) { ?>
            <div class="alert alert-success mt-3"><?= $message; ?></div>
        <?php } ?>
        <form method="post">
            <div class="bg-white rounded shadow-sm p-3 mt-4">
                <h4 class="text-center bg-info rounded p-1">مشخصات فرستنده</h4>
                <hr>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">نام و نام خانوادگی:</label>
                    <input type="text" class="form-control" name="sender_full_name" id="sender_full_name" value="<?=$invoiceData['sender_fullname']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">نام شرکت:</label>
                    <input type="text" class="form-control" name="sender_company" id="sender_company" value="<?=$invoiceData['sender_company']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">کد ملی:</label>
                    <input type="text" class="form-control" name="sender_national_code" id="sender_national_code" value="<?=$invoiceData['sender_national_code']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">شماره تماس:</label>
                    <input type="text" class="form-control" name="sender_phone" id="sender_phone" value="<?=$invoiceData['sender_phone']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">آدرس:</label>
                    <input type="text" class="form-control" name="sender_address" id="sender_address" value="<?=$invoiceData['sender_address']?>">
                </div>
            </div>
            <div class="bg-white rounded shadow-sm p-3 mt-4">
                <h4 class="text-center bg-warning rounded p-1">مشخصات گیرنده</h4>
                <hr>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">نام و نام خانوادگی:</label>
                    <input type="text" class="form-control" name="receiver_full_name" id="receiver_full_name" value="<?=$invoiceData['receiver_fullname']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">نام شرکت:</label>
                    <input type="text" class="form-control" name="receiver_company" id="receiver_company" value="<?=$invoiceData['receiver_company']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">کد ملی:</label>
                    <input type="text" class="form-control" name="receiver_national_code" id="receiver_national_code" value="<?=$invoiceData['receiver_national_code']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">شماره تماس:</label>
                    <input type="text" class="form-control" name="receiver_phone" id="receiver_phone" value="<?=$invoiceData['receiver_phone']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">آدرس:</label>
                    <input type="text" class="form-control" name="receiver_address" id="receiver_address" value="<?=$invoiceData['receiver_address']?>">
                </div>
            </div>
            <div class="bg-white rounded shadow-sm p-3 mt-4">
                <h4 class="text-center bg-danger rounded p-1">مشخصات مرسوله</h4>
                <hr>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">تعداد:</label>
                    <input type="text" class="form-control" name="consignment_quantity" id="consignment_quantity" value="<?=$invoiceData['consignment_quantity']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">مبدأ:</label>
                    <input type="text" class="form-control" name="consignment_origin" id="consignment_origin" value="<?=$invoiceData['consignment_origin']?>">
                </div>

                <div class="mb-3">
                    <label for="sender_name" class="form-label">مقصد:</label>
                    <input type="text" class="form-control" name="consignment_destination" id="consignment_destination" value="<?=$invoiceData['consignment_destination']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">نوع:</label>
                    <input type="text" class="form-control" name="consignment_type" id="consignment_type" value="<?=$invoiceData['consignment_type']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">وزن:</label>
                    <input type="text" class="form-control" name="consignment_weight" id="consignment_weight" value="<?=$invoiceData['consignment_weight']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">وزن حساب شده:</label>
                    <input type="text" class="form-control" name="consignment_calculate_weight"
                           id="consignment_calculate_weight" value="<?=$invoiceData['consignment_calculate_weight']?>">
                </div>
                <div class="mb-3">
                    <label for="sender_name" class="form-label">مبلغ کرایه:</label>
                    <input type="text" class="form-control" name="consignment_price_rent" id="consignment_price_rent" value="<?=$invoiceData['consignment_price_rent']?>">
                </div>

                <div class="mb-3">
                    <label for="packaging_cost" class="form-label">هزینه بسته بندی:</label>
                    <input type="text" class="form-control" name="packaging_cost" id="packaging_cost"  value="<?=$invoiceData['packaging_cost']?>">
                </div>
                <div class="mb-3">
                    <label for="maliyat" class="form-label">درصد مالیات:</label>
                    <input type="text" class="form-control" name="maliyat" id="maliyat" value="<?=$invoiceData['maliyat']?>">
                </div>

            </div>
            <button class="btn btn-success w-100 p-2 my-4" name="invoice_submit">بروزرسانی اطلاعات</button>
        </form>
    </div>
</section>
<?php require_once "./view/layouts/footer.php"; ?>

