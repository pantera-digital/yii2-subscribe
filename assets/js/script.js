$(window).on('load', function () {
    $('#subscribe-form').submit(function () {
        var self = $(this);
        var btn = self.find('button[type="submit"]');
        btn.ladda();
        btn.ladda('start');
        $.ajax({
            method: 'POST',
            url: self.attr('action'),
            data: self.serialize()
        }).always(function (result) {
            $.growl.error({
                title: '',
                message: result.message,
                style: result.style
            });
            btn.ladda('stop');
        });
        return false;
    });
});