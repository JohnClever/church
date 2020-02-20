
$(document).ready(function() {

    $('input, textarea, select').on('click change keypress', function() {
        $(this).css({
            'border': ''
        })
    })

    $("button").on('click', function () {
        switch ($(this).attr('data')) {
            case 'editEvent':
                $.redirect('editevents.php', {id: $(this).attr('value')});
                
                break;
            case 'editSermon':
                $.redirect('editsermons.php', {id: $(this).attr('value')});

                break;
            case 'deleteEvent':
                var options = {
                    url: 'back.php',
                    type: 'post',
                    data: {
                        target: $(this).attr('data'),
                        id: $(this).attr('value')
                    },
                    dataType: 'json',
                    success: function(response) {
                        if(response['status'] == 'success') {
                            swal.fire({
                                icon: response['status'],
                                title: 'Success',
                                text: response['message']
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            swal.fire({
                                icon: response['status'],
                                title: 'Error',
                                text: response['message']
                            });
                        }
                    }
                }
        
                $.ajax(options);

                break;
            case 'deleteSermon':
                var options = {
                    url: 'back.php',
                    type: 'post',
                    data: {
                        target: $(this).attr('data'),
                        id: $(this).attr('value')
                    },
                    dataType: 'json',
                    success: function(response) {
                        if(response['status'] == 'success') {
                            swal.fire({
                                icon: response['status'],
                                title: 'Success',
                                text: response['message']
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            swal.fire({
                                icon: response['status'],
                                title: 'Error',
                                text: response['message']
                            });
                        }
                    }
                }
        
                $.ajax(options);
                
                break;
            default:
                break;
        }
    })

    $("#form").on('submit', function(e) {
        e.preventDefault();

        parent = $(this);

        var formData = new FormData(this);

        formData.append('target',$(this).attr('class'));
        formData.append('id',$(this).attr('data'));

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
                    }).then(() => {
                        switch (parent.attr('class')) {
                            case 'addSermon':
                                window.location = 'sermons.php';
                                
                                break;
                            case 'editSermon':
                                window.location = 'sermons.php';
                            
                                break;
                            case 'addEvent':
                                window.location = 'events.php';
                        
                                break;
                            case 'editEvent':
                                window.location = 'events.php';
                    
                                break;
                            default:
                                window.location = 'index.php';

                                break;
                        }
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