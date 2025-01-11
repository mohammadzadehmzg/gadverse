<?php require_once "./view/layouts/header.php"; ?>
<style>
    .comparison-table {
        margin-top: 20px;
    }

    .card {
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .product-image {
        max-width: 100%;
        max-height: 150px;
        object-fit: contain;
    }

    .selected {
        border: 2px solid #007bff !important;
    }
</style>

<div class="container">
    <h1 class="text-center my-4">Product Comparison</h1>

    <!-- Category Selection -->
    <div class="row mb-4">
        <div class="col-md-6">
            <label for="main-category" class="form-label">Select Main Category</label>
            <select id="main-category" class="form-select">
                <option value="">Select a category</option>
            </select>
        </div>
    </div>

    <!-- Product Cards -->
    <div class="row" id="product-list">
        <!-- Cards will be dynamically loaded here -->
    </div>
    <button id="clear-comparison" class="btn btn-danger mt-3">Clear Comparison</button>

    <!-- Comparison Table -->
    <div class="comparison-table">
        <h3 class="text-center mt-4">Comparison Table</h3>
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
    let selectedDevices = [];

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

        // تغییر دسته‌بندی و نمایش کارت‌های محصولات
        $('#main-category').change(function () {
            const categoryId = $(this).val();

            if (!categoryId) {
                $('#product-list').html('');
                return;
            }

            $.ajax({
                url: 'compare_device/compare',
                data: { category_id: categoryId },
                success: function (products) {
                    const cards = products.map(product => `
                        <div class="col-md-4 mb-3">
                            <div class="card h-100" data-id="${product.id}">
                                <img src="${product.image}" class="card-img-top product-image" alt="${product.name}">
                                <div class="card-body">
                                    <h5 class="card-title">${product.name}</h5>
                                    <p class="card-text">${product.description || 'No description available.'}</p>
                                </div>
                            </div>
                        </div>
                    `).join('');
                    $('#product-list').html(cards);
                },
                error: function () {
                    alert('Error fetching products.');
                }
            });
        });

        // انتخاب کارت محصول برای مقایسه
        $(document).on('click', '.card', function () {
            const card = $(this);
            const deviceId = card.data('id');

            if (selectedDevices.includes(deviceId)) {
                selectedDevices = selectedDevices.filter(id => id !== deviceId);
                card.removeClass('selected');
            } else if (selectedDevices.length < 2) {
                selectedDevices.push(deviceId);
                card.addClass('selected');
            } else {
                alert('You can only compare two products at a time.');
            }

            // به‌روزرسانی جدول مقایسه
            updateComparison();
        });

        function updateComparison() {
            $('#comparison-body').empty();
            selectedDevices.forEach((deviceId, index) => {
                const side = index === 0 ? 'device1' : 'device2';

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
            });
        }

        // عملکرد دکمه پاک کردن مقایسه
        $('#clear-comparison').click(function () {
            selectedDevices = [];
            $('.card').removeClass('selected');
            $('#comparison-body').empty();
        });
    });
</script>
