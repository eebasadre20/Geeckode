jQuery(document).ready(function() {
    $('#code').click( function(e){
        e.preventDefault();
        var data = $("#form-id").serialize(),
            source = $('textarea#source').val();
        console.log(data);
       /* if( source == '' ) {
            alert( 'No source code provided');
            return false;
        }*/

        $('#form-id').append('<div class="loading">Processing...</div>');

        $.ajax({
            type: 'post',
            url: 'http://localhost/geeckode/user/challenge',
            dataType: 'json',
            data: data,
            cache: false,
            success: function(response){
                $('.loading').remove();
                $('.cmpinfo').remove();
                $('#response').show();
                //alert(response);
                console.log(response.raw);
                if( response.status == 'success' ) {

                   if(response.confirm === 'Congratulations!') {
                     $('.basic.small.modal').modal('show');
                     $('.header').html('Congratulations! You solve the problem ' + response.challenge);
                     $('.points').html(response.points + ' POINTS');
                     $('.output').html(response.output);
                   } else {
                      $('.error').html('<strong>Output</strong>: <br><br><pre>' + response.confirm + '</pre>');
                   }

                    if( response.cmpinfo ) {
                        $('.cmpinfo').remove();
                        $('.meta').after('<div class="cmpinfo"></div>');
                        $('.cmpinfo').html('<strong>Compiler Info: </strong> <br><br>' + response.cmpinfo );
                    }



                } else {
                    //$('.output').html('<pre>' + response + '</pre>');
                    alert(response.output);
                }
                //alert( response.msg );
            }
        });

        return false;
    });
});
