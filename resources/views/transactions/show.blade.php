<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/style.css?v=2') }}">
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

<x-styles.invoice />

<body>
<div id="sheet">
    <p class="text-right">
        <a href="javascript:print()" class="btn">Download/Print</a>
    </p>

    <table align="center" class="hidden">
        <tr style="background:none; border:none; ">
            <td>
                <img src="{{ cloudinary_url('nbaconference/misc/2023_Logo', ["transformation" => [["width" => 400]]]) }}" class="image" style="width: 100px; border-radius: 10px ">
            </td>

            <td style="background:none; border:none; text-transform: uppercase; width: 30%">
                <h2 class="column-title" style="font-size: 30px">
                    Invoice {{ $transaction->id }}
                </h2>
            </td>
        </tr>
    </table>

    <table align="center" class="hidden">
        <tr style="background:none; border:none; ">
            <td><span class="text-secondary">FROM:</span> NIGERIAN BAR ASSOCIATION</td>
            <td style="text-align: right">
                <span class="text-secondary">ISSUED:</span>
                {{ $transaction->created_at->toFormattedDateString() }}
            </td>
        </tr>
        <tr style="background:none; border:none;">
            <td class="text-uppercase"><span class="text-secondary">TO:</span> {{ user('organization') }}</td>
            <td style="text-align: right">
                <span class="text-secondary">DUE DATE:</span>
                {{ $transaction->payments->first()->fee->period->expires_at->toFormattedDateString() }}
            </td>
        </tr>
    </table>

    <br>
    <br>
    <div class="table_holder">
        <table cellpadding="0" cellspacing="0">
            <tbody>
            @foreach ($transaction->payments as $payment)
                <tr>
                    <td>
                        <b>{{ $payment->user->name.' | '.$payment->user?->enrol->scn }}</b>
                        <br>
                        <small class="text-secondary">
                            {{ $payment->fee->name }} | {{ $payment->fee->attendance }} Attendance
                        </small>
                    </td>
                    <td align="right">
                        NGN @money($payment->fee->amount)
                    </td>
                </tr>
            @endforeach
            <tr>
                <td><i><b>TOTAL</b></i></td>
                <td align="right"><b>NGN @money($transaction->amount)</b></td>
            </tr>
            </tbody>
        </table>
    </div>

    <br><br>

    <p style="color: darkgreen;"><b>PAYMENT:</b></p>

    <p>To pay for this invoice, please visit <b><a href="{{ $route = route('transactions.pay', $transaction) }}" class="text-success">{{ $route }}</a></b>
    </p>
    <hr>
    <p><b>OR,</b> Scan the QR code below with a smartphone;</p>
    <p><img src="{{ qr($route) }}" alt="qrcode"></p>
</div>
</body>
