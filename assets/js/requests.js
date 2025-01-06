const tableOption = {
    // "pageLength": 50,
    // "paging": false,
    // responsive: true,
    responsive: true,
    // rowReorder: {
    //     selector: 'td:nth-child(2)'
    // },
    "language": {
        "lengthMenu": "نمایش _MENU_ مورد",
        "zeroRecords": "فیلدی با این مشخصات یافت نشد!",
        "info": "نمایش صفحه _PAGE_ از _PAGES_",
        "infoEmpty": "رکوردی موجود نیست!",
        "search": "",
        "searchPlaceholder": "جستجو...",
        "infoFiltered": "(filtered from _MAX_ total records)",
        "paginate": {
            "first": "اول", "last": "آخر", "next": "بعدی", "previous": "قبلی", buttons: {
                pageLength: {
                    _: "Afficher %d éléments", '-1': "Tout afficher"
                }
            }
        },
    }
}

// $('.accordion-item .active-item-menu').closest(".collapse").removeClass("collapse");
// // $('.active-item-menu').closest(".collapse").removeClass("collapsed");
// $('.nav-item .active-item-menu').closest(".collapse").addClass("show");
// $('.nav-item .active-item-menu').parents(".sub-menu").last().addClass("show");

//Do Async Ajax

const post = async (uri, args) => {
    const result = await $.ajax({
        url: uri,
        type: 'POST',
        data: args,
        async: false,
    });
    return result;
}


function separate(Number) {
    Number += '';
    Number = Number.replace(',', '');
    x = Number.split('.');
    y = x[0];
    z = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(y))
        y = y.replace(rgx, '$1' + ',' + '$2');
    return y + z;
}

// $(window).on('orientationchange resize', function () {
//    alert("صفحه رو چرخوندی ;)");
// });

// $(document).on("pagecreate",function(event){
//     $(window).on("orientationchange",function(){
//         alert("صفحه رو چرخوندی ;)");
//
//     });
// });