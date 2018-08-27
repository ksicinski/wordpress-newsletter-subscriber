jQuery(document).ready(function ($) {
    $('#wns-subscriber-form').submit(function (e) {
        e.preventDefault();

        //Serialize Form
        var
            $subscriberForm = $('#wns-subscriber-form'),
            subscriberData = $subscriberForm.serialize(),
            $formMsg = $('#wns-form-msg')
        ;

        //Submit Form
        $.ajax({
            type: 'post',
            url: $subscriberForm.attr('action'),
            data: subscriberData
        }).done(function (response) {
            //If success
            $formMsg.removeClass('error');
            $formMsg.addClass('success');

            //Set message text
            $formMsg.text(response);

            //Clear form
            $('#name').val('');
            $('#email').val('');
        }).fail(function (data) {
            //If error
            $formMsg.removeClass('success');
            $formMsg.addClass('error');

            //Set message text
            if (data.responseText !== '') {
                $formMsg.text(data.responseText);
            }else{
                $formMsg.text('Message Was Not Sent!');
            }
        });
    });
});