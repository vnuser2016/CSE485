$('.timkiem').keyup(function() {
    var txt = $('.timkiem').val();
    $.post("data.php", { data: txt },
        function(data, textStatus, jqXHR) {
            $('.noidung').html(data)
        },
    );

});