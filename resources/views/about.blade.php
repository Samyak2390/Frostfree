@extends('layouts.app')
@section('title', 'FrostFree | About')
@section('content')

<div class="container" style="margin-top: 7%">
  <div class="card">
    <h1 class="card-title">About Us</h1>
    <p class="card-text" style="font-size:110%;"><br>This is an e-commerce web application for the shops of group of 
      local traders that sell fresh goods in a suburb of Cleckhuddersfax. They felt its need when national chains started to set
       up convenience stores near their shopping area. According to the researcher they hired to study food safety and collection, 
       opening the e-commerce site seems a viable idea that enhances the healthy competition. Despite the presence of large supermarkets
       in a short driving distance, locals still choose to shop at small shops. So, the traders from these shops think this e-commerce
       portal is what their customers need to make the trade easier for both parties.<br><br><br>

      Traders have planned to construct a responsive customer interface where a customer can find products which are unique to 
      the traders. Customers would be able to edit their profile, navigate products by shop or by product type and add-or-remove
       products from their cart without logging in to the application. Products that were previously added to the cart will remain
        in the cart if the customer choose to register and login to the application later. Logged in users can make payment for their
         orders via payment scheme like PayPal. Traders have setup a collection centre where customer can collect purchased items 
         after 24 hours of its payment.<br><br><br>

      With the establishment of this e-commerce portal, customers can enquire about products or place orders anytime from anywhere. 
      Also, customers can compare between similar products to choose better options. Due to healthy competition, products can be 
      bought at cheaper price.<br><br><br>
    </p>
  </div>
</div> 
@endsection

@section('injectJQuery')
  <script>
    const elements = document.querySelectorAll('.underline');
    elements.forEach(element => {
      element.style.color = 'black';
    });

    const search = document.querySelectorAll('.navbar-search-button')[1];
    search.style.color = 'black';

    const cart = document.querySelector('.minicart-link');
    cart.style.color = 'black';
  </script>
@endsection 