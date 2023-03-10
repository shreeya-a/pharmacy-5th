//add to cart
$(document).ready(function () {
    $(".addToCartBtn").click(function (e) {
        e.preventDefault();

        var product_id = $(this)
            .closest(".product_data")
            .find(".prod_id")
            .val();
        var product_qty = $(this)
            .closest(".product_data")
            .find(".qty-input")
            .val();

        if (product_qty > 10) {
            alert("Maximum input :10");
        }
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                product_id: product_id,
                product_qty: product_qty,
            },
            success: function (response) {
                // alert(response.status);
                swal(response.status);
                // sweetalert
            },
        });
    });
});
// increment/decrement
$(document).ready(function () {
    $(".increment-btn").click(function (e) {
        e.preventDefault();

        var inc_value = $(this)
            .closest(".product_data")
            .find(".qty-input")
            .val();

        var value = parseInt(inc_value, 10);

        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            $(this).closest(".product_data").find(".qty-input").val(value);
        }
    });
    $(".decrement-btn").click(function (e) {
        e.preventDefault();

        var dec_value = $(this)
            .closest(".product_data")
            .find(".qty-input")
            .val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            // $("#number").val(value);

            $(this).closest(".product_data").find(".qty-input").val(value);
        }
    });
});

//delete from cart
$(document).ready(function () {
    $(".delete-cart-item").click(function (e) {
        e.preventDefault();

        var prod_id = $(this)
            .closest(".product_data")
            .find(".prod_id")
            .val();
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
           
        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data: {
                'prod_id': prod_id,
            },
            success: function (response) {
                window.location.reload();
                alert(response.status);
                // swal("".response.status."success");
                // sweetalert
            },
        });
    });
});

// Update Cart Data
$(document).ready(function () {
    $('.changeQuantity').click(function (e) {
        e.preventDefault();

        var thisClick = $(this);

        var quantity = $(this)
            .closest('.product_data')
            .find('.qty-input')
            .val();
        var product_id = $(this)
            .closest('.product_data')
            .find('.prod_id')
            .val();

        var data = {
            'prod_qty': quantity,
            'prod_id': product_id,
        };
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            type: "POST",
            url: "update-to-cart",
            data: data,
            success: function (response) {
                window.location.reload();
                // thisClick.closest('.product_data').find('.cart-grand-total-price').val();
                alertify.set("notifier", "position", "top-right");
                alertify.success(response.status);
            },
        });
    });
});
