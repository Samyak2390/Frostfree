<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('create-payment', function () {
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AZfqn96KlpKVgUiXzbg5hcW24C_JhShHOHDbWom2SH-yayh4X1eM9jzXCTdt7madS8bjEVhOVvTJz-pY',     // ClientID
            'EAAgwoNnt1AaN2k9N9mKX60emOVoq-F_NJIe6nBIuqMgSlZ5CujtKZKCeBTfenbBOEAXvV1G3vAQh9Nh'      // ClientSecret
        )
    );

    $payer = new Payer();
    $payer->setPaymentMethod("paypal");

    // $item1 = new Item();
    // $item1->setName('Ground Coffee 40 oz')
    //     ->setCurrency('GBP')
    //     ->setQuantity(1)
    //     ->setSku("123123") // Similar to `item_number` in Classic API
    //     ->setPrice(7.5);
    // $item2 = new Item();
    // $item2->setName('Granola bars')
    //     ->setCurrency('GBP')
    //     ->setQuantity(5)
    //     ->setSku("321321") // Similar to `item_number` in Classic API
    //     ->setPrice(2);

    // $itemList = new ItemList();
    // $itemList->setItems(array($item1, $item2));

    $details = new Details();
    $details->setShipping(0)
        ->setTax(0)
        ->setSubtotal(0.1);

    $amount = new Amount();
    $amount->setCurrency("GBP")
        ->setTotal(0.1)
        ->setDetails($details);

    $transaction = new Transaction();
    // ->setItemList($itemList)
    $transaction->setAmount($amount)
        ->setDescription("Payment description")
        ->setInvoiceNumber(uniqid());

    $redirectUrls = new RedirectUrls();
    $redirectUrls->setReturnUrl(route('checkout.success'))
        ->setCancelUrl(route('carts.show'));

    // Add NO SHIPPING OPTION
    $inputFields = new InputFields();
    $inputFields->setNoShipping(1);

    $webProfile = new WebProfile();
    $webProfile->setName('test' . uniqid())->setInputFields($inputFields);

    $webProfileId = $webProfile->create($apiContext)->getId();

    $payment = new Payment();
    $payment->setExperienceProfileId($webProfileId); // no shipping
    $payment->setIntent("sale")
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions(array($transaction));

    try {
        $payment->create($apiContext);
    } catch (Exception $ex) {
        echo $ex;
        exit(1);
    }

    return $payment;
});

Route::post('execute-payment', function (Request $request) {
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AZfqn96KlpKVgUiXzbg5hcW24C_JhShHOHDbWom2SH-yayh4X1eM9jzXCTdt7madS8bjEVhOVvTJz-pY',     // ClientID
            'EAAgwoNnt1AaN2k9N9mKX60emOVoq-F_NJIe6nBIuqMgSlZ5CujtKZKCeBTfenbBOEAXvV1G3vAQh9Nh'      // ClientSecret
        )
    );

    $paymentId = $request->paymentID;
    $payment = Payment::get($paymentId, $apiContext);

    $execution = new PaymentExecution();
    $execution->setPayerId($request->payerID);

    // $transaction = new Transaction();
    // $amount = new Amount();
    // $details = new Details();

    // $details->setShipping(2.2)
    //     ->setTax(1.3)
    //     ->setSubtotal(17.50);

    // $amount->setCurrency('USD');
    // $amount->setTotal(21);
    // $amount->setDetails($details);
    // $transaction->setAmount($amount);

    // $execution->addTransaction($transaction);

    try {
        $result = $payment->execute($execution, $apiContext);
    } catch (Exception $ex) {
        echo $ex;
        exit(1);
    }

    // session()->flash('snackbar-message', "Quantity is updated");
    // session()->flash('snack-style', 'background-color: #28B463');
    // return redirect()->route('customer');

    return $result;
});