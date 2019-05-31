<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Boibhandar | {{ $headline }}</title>
    

</head>

<body>
    <div class="invoice-box" style="max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;">
    	
        <div style="min-height: 40px;
            background-color: #ff6700;
            color: #ffffff;
            text-align: center;
            border-radius: 4px;">
            <h2 style="padding: 20px; letter-spacing: 2px;">{{ $headline }}  </h2>
        </div>



        <table cellpadding="0" cellspacing="0" style="width: 100%; line-height: inherit; text-align: left;">
            <tr class="top">
                <td colspan="3" style="padding: 5px; vertical-align: top;">
                    <table style="width: 100%; line-height: inherit; text-align: left;">
                        <tr>
                            <td class="title" style="padding: 5px; vertical-align: top;">
                                <img src="\images\logo.svg" style="width:100%; max-width:180px; cursor:pointer;" onclick="window.location='/'">
                                <ul style="list-style: none; padding-left:0;">
                                	<li><span style="background-color: #e5e5e5; padding: 5px 10px 5px 10px; border-radius: 4px;"><strong>Invoice #: {{ 'BOID' . $order->id }} </strong></span></li>
                                	<li style="margin-top: 7px;"><strong> Ordered on: </strong><span> {{ date('M d, Y', strtotime($order->created_at)) }} </span></li>
                                    <li><strong>User:</strong><span> {{ $order->user->fullName }} </span></li>
                                    <li><strong>Recipient:</strong><span> {{ $order->name }} </span></li>
                                    <li><strong>Phone:</strong><span> {{ $order->phone }} </span></li>
                                    <li><strong>Address:</strong><span> {{ $order->address . ' ' . $order->district }} </span></li>                                    
                                	<li><strong>Payment method:</strong><span> {{ strtoupper($order->transaction->pay_type) }} </span></li>
                                </ul>
                            </td>


                            <td style="padding: 5px; vertical-align: top; text-align: right;">

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            

            
            <tr class="heading" style="color: #ffffff;">
                <td style="padding: 5px; padding-left: 10px; vertical-align: top; background: rgb(58, 58, 58); font-weight: bold; border-top-left-radius: 4px; border-bottom-left-radius: 4px;">
                    Item
                </td>

                <td style="padding: 5px; vertical-align: top; background: rgb(58, 58, 58); font-weight: bold; text-align: center;">
                	Quantity
                </td>
                
                <td style="padding: 5px; padding-right: 10px; vertical-align: top; background: rgb(58, 58, 58); font-weight: bold; text-align: right; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">
                    Price
                </td>
            </tr>
            
            @foreach ($order->orderDetails as $detail)

                <tr>
                    <td style="padding: 5px; padding-left: 10px;">
                        {{ $detail->book->title }}
                    </td>

                    <td style="padding: 5px; text-align: center;">
                        {{ $detail->quantity }}
                    </td>
                    
                    <td style="padding: 5px; text-align: right; padding-right: 10px;">
                        {{ $detail->total_price }}
                    </td>
                </tr>
            
            @endforeach            

            <tr class="total">
                <td style="padding: 5px;"></td>
                <td style="padding: 5px;"></td>

                <td style="padding: 5px; text-align: right; border-top: 2px solid #eee; padding-right: 10px;">
                   Subtotal: {{ $total }}
                </td>
            </tr>

            <tr>
                <td style="padding: 5px;"></td>
                <td style="padding: 5px;"></td>
                
                <td style="padding: 5px; text-align: right; padding-right: 10px;">
                   Gift Wrap: {{ $gift }}
                </td>
                
            </tr>


            <tr>
                <td style="padding: 5px;"></td>
                <td style="padding: 5px;"></td>

                <td style="padding: 5px; text-align: right; padding-right: 10px;">
                   Shipping: {{ $order->shipping_charge }}
                </td>
            </tr>


            <tr class="total"   >
                <td style="padding: 5px;"></td>
                <td style="padding: 5px;"></td>

                <td style="padding: 5px; text-align: right; background-color: #e7e7e7; border-radius: 4px; font-weight: bold; padding-right: 10px;">
                   Total: {{ $total + $gift + $order->shipping_charge }}
                </td>
            </tr>

            <tr>
                <td colspan="3" style="padding-top: 30px">
                    <hr>
                </td>
            </tr>
            

            <tr>
                <td colspan="3" style="text-align:center; padding-top:10px;">
                    <span> www.boibhandar.com |</span> 
                    <span> support@boibhandar.com |</span> 
                    <span> <img src="\images\fb.png" style="width: 12px"><img src="\images\insta.png"
                                        style="width: 12px; padding-left: 5px; padding-right: 5px;">/ boibhandar</span>
                </td>
            </tr>


            {{-- <tr class="information">
                <td colspan="3" style="padding: 5px; vertical-align: top;">
                    <table style="width: 100%; line-height: inherit; text-align: left;">
                        <tr>
                            <td style="padding: 5px; vertical-align: top; padding-bottom: 40px;">
                             <ul style="list-style: none; padding-left: 0;">
                                	<li>Boibhandar Ltd.</li>
                                	<li>WASA Circle, Chattogram</li>
                                	<li>Chattogram-4203, Bangladesh</li>
                                </ul>
                            </td>
                            
                            <td style="padding: 5px; vertical-align: top; padding-bottom: 40px; text-align: right;">

                                	<li>www.boibhandar.com</li>
                                	<li>support@boibhandar.com</li>
                                	<li><img src="\images\fb.png" style="width: 12px"><img src="\images\insta.png" style="width: 12px; padding-left: 5px; padding-right: 5px;">/ boibhandar</li>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr> --}}


        </table>

        <div style="min-height: 40px; text-align: center;"><h4 style="padding: 20px; letter-spacing: 1px;">Thank you for shopping with us :)</h4></div>

    </div>
</body>
</html>
