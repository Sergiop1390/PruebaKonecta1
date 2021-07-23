/*$(document).ready(function () {
    $('#id_form').submit(function (e) {
        e.preventDefault();
        var data = $(this).serializeArray();
        data.push({name: 'num', value: '2'});
        console.log(data);
        $.ajax({
            url: '../Controller/EmpleadoController.php',
            method: 'post',
            dataType: 'json',
            data: data,
            beforeSend: function() {
                $(location).attr('href', '../Controller/EmpleadoController.php');
              },
        })
        .done(function(){
            $('span').html("si llegó");
        })
        .fail(function(){
            $('span').html("ni llegó");
        })
    });

});*/