
    <script>
        $('.view-speaker').click(function (e) {
            e.preventDefault();

            $('#speaker-quick-view-holder').html('Loading...');

            var a = $(this);
            getRequest(a.data('url'), function (result) {
                if (result.status) $('#speaker-quick-view-holder').html(result.data);

            }, false);
        });
    </script>
