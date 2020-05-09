<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    
    <style>
    .company{
        font-size: 24px;
        font-weight: bold;
    }

    .title2{
        font-size: 24px;
    }

    .invoice-box {
        max-width: 900px;
        margin: auto;
        padding: 30px;
        /* border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15); */
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table:first-child {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table:last-child {
        width: 100%;
        line-height: inherit;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
        border-radius: 8px;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table:nth-child(2) .heading2 th{
        border-bottom: 2px solid #eee; 
        padding: 8px;
        text-align: center;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
        text-align: center;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
        text-align: center;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    </style>
</head>

<body>
  <?php
    $netTotal = 0;
    if(isset($orderData)){
      extract($orderData);
    }
  ?>
  
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="5">
                    <table>
                        <tr>
                            <td class="title">
                                Invoice<br/>
                                <span class="company">Frost<span style="color:green">Free</span></span>
                            </td>
                            
                            <td class="title2">
                                Order #: {{$orderId}}<br>
                            </td>
                        </tr>
                    </table>
                </td>
                
            </tr>
            <tr class="information">
                <td colspan="5">
                    <table>
                        <tr>
                            <td>
                                <span style="font-weight: bold">Billed To:</span>
                                {{$customerName}}<br>
                                @if(isset($name))
                                    <b>Trader's Name</b>: {{$name}}
                                @endif
                            </td>
                            
                            <td>
                                <?php 
                                    date_default_timezone_set('Asia/Kathmandu');
                                    $date = date('m/d/Y', time());
                                ?>
                                <span style="font-weight: bold">Ordered Date: {{$date}}</span><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <table style="margin-top: 40px;" cellpadding="0" cellspacing="0"> 
                <tr class="heading">
                    <td colspan="5">
                        Order Summary
                    </td>
                </tr>
                
                <tr class="heading2">
                    <th style="text-align: left">Item</th>
                    <th>Price(&pound;)</th>
                    <th>Quantity</th>
                    <th>Discount(%)</th>
                    <th>Total</th>
                </tr>
                @foreach($products as $product)
                    <tr class="item">
                        <td style="text-align: left">{{$product['product_name']}}</td>
                        <td>{{$product['product_price']}}</td>
                        <td>{{$product['quantity']}}</td>
                        <td>{{$product['discount']}}</td>
                        <?php
                            $subTotal = $product['quantity'] * ($product['product_price'] - ($product['discount']/100 * $product['product_price']));
                            $netTotal = $netTotal + $subTotal;
                        ?>
                        <td>{{$subTotal}}</td>
                    </tr>
                @endforeach
                
                <tr class="total">
                    <td colspan="5" style="text-align: right; padding-top: 40px; font-size: 22px;">
                       <b>Net Total: &pound;{{$total ?? $netTotal}}</b>
                    </td>
                </tr>
            </table>
            
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
