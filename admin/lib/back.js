
$(document).ready(function() {

    $('input, textarea, select').on('click change keypress', function() {
        $(this).css({
            'border': ''
        })
    })

    $("#form").on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        formData.append('target',$(this).attr('class'));


        var options = {
            url: 'back.php',
            type: 'post',
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response) {
                if(response['status'] == 'success') {
                    swal.fire({
                        icon: response['status'],
                        title: 'Success',
                        text: response['message']
                    });
                } else {
                    for (var key in response['data']) {
                        $('input[name="'+key+'"], textarea[name="'+key+'"]').css({
                            'border': 'red solid'
                        })
                    }

                    swal.fire({
                        icon: response['status'],
                        title: 'Error',
                        text: response['message']
                    });
                }
            }
        }

        $.ajax(options);
    })
})