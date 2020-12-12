$(function () {

    var form = $('.needs-validation');

    form.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '/ajax.php',
            cache: false,
            data: {data:form.serialize(), method:form.attr('action')},
            success: function (data) {

                let date = JSON.parse(data);
                $("*[class*='errorMessage_']").empty();
                $("*[id*='input_']").removeClass('is-invalid').addClass('is-valid');

                if (date.error) {
                    $.each(date.message, function (id, msg) {
                        $('.errorMessage_' + id).empty().append(msg);
                        $('#input_' + id).addClass('is-invalid');
                    });
                    if(date.message.error)
                    {
                        $('.messageHeader').empty().append('Message Error');
                        $('.fas').removeClass('fa-bell').addClass('fa-times');
                        $('.messageBody').empty().append(date.message.error);
                        $('#modalConfirmAccount').modal();
                    }

                }
                else
                {
                    if (date.message.register)
                    {
                        $('.messageHeader').empty().append('Message Success');
                        $('.fas').removeClass('fa-times').addClass('fa-bell');
                        $('.messageBody').empty().append(date.message.register)
                        $('#modalConfirmAccount').modal();
                    }

                    if (date.message.login)
                    {
                        $('.messageHeader').empty().append('Message Success');
                        $('.fas').removeClass('fa-times').addClass('fa-bell');
                        $('.messageBody').empty().append(date.message.login)
                        $('#modalConfirmAccount').modal();
                    }

                }
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
    });




});
