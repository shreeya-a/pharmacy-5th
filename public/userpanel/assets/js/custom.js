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
                alert(response.status);
                // swal(response.status);
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
    $(".changeQuantity").click(function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        var quantity = $(this)
            .closest(".product_data")
            .find(".qty-input")
            .val();
        var product_id = $(this)
            .closest(".product_data")
            .find(".product_id")
            .val();

        var data = {
            // '_token': $('input[name=_token]').val(),
            quantity: quantity,
            product_id: product_id,
        };

        $.ajax({
            url: "/update-to-cart",
            type: "POST",
            data: data,
            success: function (response) {
                window.location.reload();
                alertify.set("notifier", "position", "top-right");
                alertify.success(response.status);
            },
        });
    });
});
