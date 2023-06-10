<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Krystal Digital" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pay</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <style>
        body {
            color: #222222;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>

<script src="{{ asset('js/sweetalert.min.js') }}"></script>

<script src="https://js.paystack.co/v1/inline.js"></script>

<script>

    let handler = PaystackPop.setup({
        key: '{{ config('services.paystack.public_key') }}',
        email: '{{ $transaction->payments()->first()->user->email }}',
        amount: '{{ $transaction->amount }}' * 100,
        ref: '{{ $transaction->reference }}',
        onClose: () => {},
        callback: function(response) {
            swal({
                title: "You're All Set!",
                text: "We have sent you a confirmation email.",
                icon: "success",
                closeOnClickOutside: false,
                closeOnEsc: false
            }).then(confirm => {
                location.href = '{{ route('users.show', user()) }}';
            });
        }
    });

    handler.openIframe();
</script>

</body>
</html>

