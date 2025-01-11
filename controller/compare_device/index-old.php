
<?php require_once "./view/layouts/header.php"; ?>
<style>

    .comparison-table {
        margin-top: 20px;
    }
    .select-device {
        margin: 20px 0;
    }
    .product-image {
        max-width: 100px;
        max-height: 100px;
        object-fit: cover;
    }
</style>
<div class="container">
    <h1 class="text-center my-4">Product Comparison</h1>

    <!-- Category Selection -->
    <div class="row select-device">
        <div class="col-md-6">
            <label for="main-category" class="form-label">Select Main Category</label>
            <select id="main-category" class="form-select">
                <option value="">Select a category</option>
            </select>
        </div>
    </div>

    <!-- Device Selection -->
    <div class="row select-device">
        <div class="col-md-6">
            <label for="device1" class="form-label">Select First Product</label>
            <select id="device1" class="form-select">
                <option value="">Select a product</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="device2" class="form-label">Select Second Product</label>
            <select id="device2" class="form-select">
                <option value="">Select a product</option>
            </select>
        </div>
    </div>

    <!-- Comparison Table -->
    <div class="comparison-table">
        <table class="table table-bordered text-center">
            <thead class="table-light">
            <tr>
                <th>Feature</th>
                <th id="device1-name">Product 1</th>
                <th id="device2-name">Product 2</th>
            </tr>
            </thead>
            <tbody id="comparison-body">
            <tr>
                <td>Image</td>
                <td><img id="device1-image" class="product-image" src="" alt="No image"></td>
                <td><img id="device2-image" class="product-image" src="" alt="No image"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<?php require_once "./view/layouts/footer.php"; ?>

<script>
    $(document).ready(function () {
        // دریافت دسته‌بندی‌ها هنگام بارگذاری صفحه
        $.ajax({
            url: 'compare_device/compare',
            success: function (categories) {
                categories.forEach(category => {
                    $('#main-category').append(`<option value="${category.id}">${category.name}</option>`);
                });
            },
            error: function () {
                alert('Error fetching categories.');
            }
        });

        // تغییر دسته‌بندی و به‌روزرسانی لیست محصولات
        $('#main-category').change(function () {
            const categoryId = $(this).val();

            if (!categoryId) {
                $('#device1, #device2').html('<option value="">Select a product</option>');
                return;
            }

            $.ajax({
                url: 'compare_device/compare',
                data: { category_id: categoryId },
                success: function (products) {
                    const productOptions = products.map(product => `<option value="${product.id}">${product.name}</option>`).join('');
                    $('#device1, #device2').html('<option value="">Select a product</option>' + productOptions);
                },
                error: function () {
                    alert('Error fetching products.');
                }
            });
        });

        // به‌روزرسانی جدول مقایسه
        function updateComparison(deviceId, side) {
            if (!deviceId) {
                $(`#${side}-name`).text('-');
                $(`#${side}-image`).attr('src', '').attr('alt', 'No image');
                return;
                console.log(deviceId, side)
            }


            $.ajax({
                url: 'compare_device/compare',
                data: { product_id: deviceId },
                success: function (data) {
                    const deviceData = data[0];
                    $(`#${side}-name`).text(deviceData.name || '-');
                    $(`#${side}-image`).attr('src', deviceData.image || '').attr('alt', deviceData.name || 'No image');

                    const features = JSON.parse(deviceData.features || '{}');
                    Object.entries(features).forEach(([key, value]) => {
                        let row = $(`#comparison-body tr[data-feature='${key}']`);
                        if (!row.length) {
                            row = $(`<tr data-feature="${key}"><td>${key}</td><td>-</td><td>-</td></tr>`);
                            $('#comparison-body').append(row);
                        }
                        row.find(`td:nth-child(${side === 'device1' ? 2 : 3})`).text(value);
                    });
                },
                error: function () {
                    alert('Error fetching product details.');
                }
            });
        }

        $('#device1').change(function () {
            updateComparison($(this).val(), 'device1');
        });

        $('#device2').change(function () {
            updateComparison($(this).val(), 'device2');
        });
    });
</script>
