var initSubscribeForm = function (id) {
    $('#' + id).submit(function () {
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
            if (result.status === 'success') {
                var event = new Event('subscribe-form-success');
                document.dispatchEvent(event)
            }
        });
        return false;
    });
}
$(window).on('load', function () {
    initSubscribeForm('subscribe-form');
});