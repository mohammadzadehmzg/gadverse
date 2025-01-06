<?php require_once "./view/layouts/header.php"; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class=" shadow-lg p-2 rounded my-4">
                    <div class="text-center">
                        <img src="<?= $BaseUrl; ?>/assets/img/persons/<?= $imgCode; ?>.png" class="rounded-circle"
                             style="width: 200px" alt="">
                        <div>
                            <?= $userData[0]["name"] . " " . $userData[0]["family"]; ?>
                        </div>
                        <div>
                            کد ملی:
                            <?= $userData[0]["national_code"]; ?>
                        </div>
                        <div>
                            تاریخ تولد:
                            <?= $userData[0]["birth_date"]; ?>
                        </div>

                    </div>

                </div>


            </div>
            <div class="col-md-9">
                <div class=" shadow-lg p-2 rounded my-4">
                    <table class="table table-bordered border-dark">
                        <tbody>
                        <tr>
                            <td>حقوق پایه:</td>
                            <td><?= $fishData["Paye"]; ?></td>

                            <td>بن مسکن:</td>
                            <td><?= $fishData["BonMaskan"]; ?></td>

                            <td>بن خاروبار:</td>
                            <td><?= $fishData["BonKhar"]; ?></td>

                            <td>حق اولاد:</td>
                            <td><?= $fishData["Olad"]; ?></td>
                        </tr>
                        <tr>
                            <td>اضافه کار(ساعتی):</td>
                            <td><?= $fishData["HourEzafekar"]; ?></td>

                            <td>پاداش سیستم:</td>
                            <td><?= $fishData["HardWork"]; ?></td>

                            <td>سختی کار:</td>
                            <td><?= $fishData["SahamCredit"]; ?></td>

                            <td>جمع کل:</td>
                            <td><?= $fishData["Total"]; ?></td>
                        </tr>

                        <tr>
                            <td>اضافه کار:</td>
                            <td><?= $fishData["Ezafekar"]; ?></td>

                            <td>مبلغ اضافه کار:</td>
                            <td><?= $fishData["EzafekarPrice"]; ?></td>

                            <td>آکورد:</td>
                            <td><?= $fishData["Akord"]; ?></td>

                            <td>پاداش:</td>
                            <td><?= $fishData["Padash"]; ?></td>
                        </tr>

                        <tr>
                            <td>بارگیری/کرایه:</td>
                            <td><?= $fishData["Bargiri"]; ?></td>

                            <td>وام صندوق:</td>
                            <td><?= $fishData["VamSandoogh"]; ?></td>

                            <td>وام شرکت:</td>
                            <td><?= $fishData["VamSherkat"]; ?></td>

                            <td>جمع ناخالص:</td>
                            <td><?= $fishData["TotalNakhales"]; ?></td>
                        </tr>


                        <tr>
                            <td>بیمه:</td>
                            <td>
                                <?= $fishData["Bime"]; ?>
                            </td>

                            <td>وام:</td>
                            <td>
                                <?= $fishData["Vam"]; ?>
                            </td>

                            <td>پیش دریافت:</td>
                            <td>
                                <?= $fishData["PishDaryaft"]; ?>
                            </td>
                            <td>مساعده:</td>
                            <td>
                                <?= $fishData["Mosaede"]; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>خرید محصول:</td>
                            <td>
                                <?= $fishData["Kharid"]; ?>
                            </td>

                            <td>مرخصی(منفی):</td>
                            <td>
                                <?= $fishData["MorakhasiManfi"]; ?>
                            </td>

                            <td>قسط صندوق:</td>
                            <td>
                                <?= $fishData["SandooghGhest"]; ?>
                            </td>
                            <td>جمع کسورات:</td>
                            <td>
                                <?= $fishData["TotalKosoorat"]; ?>
                            </td>
                        </tr>


                        <tr>
                            <td>امتیاز مثبت:</td>
                            <td>
                                <?= $fishData["Mosbat"]; ?>
                            </td>

                            <td>امتیاز منفی:</td>
                            <td>
                                <?= $fishData["Manfi"]; ?>
                            </td>

                            <td>مرخصی ماه:</td>
                            <td>
                                <?= $fishData["MorakhasiMah"]; ?>
                            </td>
                            <td>مرخصی سال:</td>
                            <td>
                                <?= $fishData["MorakhasiSal"]; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>مانده مرخصی:</td>
                            <td>
                                <?= $fishData["MandeMorakhasi"]; ?>
                            </td>

                            <td>مانده وام:</td>
                            <td>
                                <?= $fishData["MandeVam"]; ?>
                            </td>

                            <td>جمع خالص دریافتی:</td>
                            <td colspan="5"><?= $fishData["TotalKhales"]; ?></td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="shadow p-2 rounded border border-dark">
                        <form method="post">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <h5>محاسبه پورسانت</h5>
                                </div>

                                <div class="col-4">
                                    <input id="commissionStartDate" name="commissionStartDate"
                                           class="form-control border-dark"
                                           type="text"
                                           placeholder="از تاریخ">
                                </div>
                                <div class="col-4">
                                    <input id="commissionLastDate" name="commissionLastDate"
                                           class="form-control border-dark"
                                           type="text"
                                           placeholder="تا تاریخ">
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-success w-100" name="get_commission">دریافت</button>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($invoiceData[0]["sum_commission"])) { ?>
                            <table class="table border border-danger table-bordered mt-2">
                                <tbody>
                                <tr>
                                    <td>مبلغ پورسانت</td>
                                    <td><?= number_format($invoiceData[0]["sum_commission"] , 0, '', ','); ?>
<!--                                        ریال-->
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<script src="./assets/js/products.js"></script>
<?php require_once "./view/layouts/footer.php"; ?>

<script>
    kamaDatepicker('commissionStartDate', {buttonsColor: "red", forceFarsiDigits: true});
    kamaDatepicker('commissionLastDate', {buttonsColor: "red", forceFarsiDigits: true});
</script>
