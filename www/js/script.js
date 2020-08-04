$(document).ready(function(){
    $('#click-order').on('click', function() {

        $("#tel").mask("+38(999) 999-9999");

        $('#click-order').hide();
        $('.main-class').fadeIn(0);
        var x = 1;
        $('#Add').on('click', function() {
            x++;
            $('#numOrders').text(x);
        });
        $('#Clear').on('click', function() {
            if(x > 1) x--;
            $('#numOrders').text(x);
        });
    
        $('#order').on('click', function() {
            if($('#tel').val() == false) {
                $('#tel').toggleClass('error-tel');
            } else {
                $.ajax({
                    url: "orders/orders.php",
                    type: "POST",
                    data: ({ count: x, tel: $('#tel').val() }),
                    dataType: "html",
                    success: function() {
                        $('.main-class').hide();
                        $("#popup").fadeIn(200, function() {
                            setTimeout(function() {
                                $('#popup').fadeOut(0);
                                $('.main').hide();
                                $('#click-order').fadeIn(500);
                                $('.main').show(0);
                            }, 3000);
                        }); 
                        $('#tel').val('');
                        $('.main-class').load('index.php .main-class');
                    }
                });
            }
        });
    });
});