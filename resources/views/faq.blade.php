@extends('layouts.app')
@section('title', 'FrostFree | FAQS')
@section('content')
	<section class="accordion-section clearfix mt-3" aria-label="Question Accordions" style="margin-top: 7%">
		<div class="container">
			<h3>General Questions :</h3>
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading p-3 mb-3" role="tab" id="heading0">
				<h3 class="panel-title">
					<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0" style="font-size:70%;">
					<i class="fa fa-plus-square"></i>&nbsp;&nbsp;How do I contact you?
					</a>
				</h3>
				</div>
				<div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
				<div class="panel-body px-3 mb-4">
					<p>You can email us at frostfree@customercare.com or you can call us at 1234 567 </p>
				</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading p-3 mb-3" role="tab" id="heading1">
				<h3 class="panel-title">
					<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1" style="font-size:70%;">
					<i class="fa fa-plus-square"></i>&nbsp;&nbsp;Where are you located?
					</a>
				</h3>
				</div>
				<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
				<div class="panel-body px-3 mb-4">
					<p>We&#8217;re located in King St, Huddersfield HD1 2QB, United Kingdom </p>
				</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading p-3 mb-3" role="tab" id="heading2">
				<h3 class="panel-title">
					<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2" style="font-size:70%;">
					<i class="fa fa-plus-square"></i>&nbsp;&nbsp;What forms of payment do you accept?
					</a>
				</h3>
				</div>
				<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
				<div class="panel-body px-3 mb-4">
					<p>We mostly accept payment directly from Paypal.</p>
				</div>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading p-3 mb-3" role="tab" id="heading3">
				<h3 class="panel-title">
					<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3" style="font-size:70%;">
					<i class="fa fa-plus-square"></i>&nbsp;&nbsp;Do you have more than current vendors?
					</a>
				</h3>
				</div>
				<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
				<div class="panel-body px-3 mb-4">
					<p>Currently we have 5 vendor, we're looking for other vendors as well.</p>
				</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading p-3 mb-3" role="tab" id="heading4">
				<h3 class="panel-title">
					<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4" style="font-size:70%;">
					<i class="fa fa-plus-square"></i>&nbsp;&nbsp;How do I cancel an order?
					</a>
				</h3>
				</div>
				<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
				<div class="panel-body px-3 mb-4">
					<p>Write us as soon as possible at frostfree@customercare.com. Once something has shipped, we can no longer cancel and refund an order.</p>
				</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading p-3 mb-3" role="tab" id="heading5">
				<h3 class="panel-title">
					<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5" style="font-size:70%;">
					<i class="fa fa-plus-square"></i>&nbsp;&nbsp;What if something is wrong with my order?
					</a>
				</h3>
				</div>
				<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
				<div class="panel-body px-3 mb-4">
					<p>Please contact us as soon as possible at frostfree@customercare.com. Once something has shipped, we can no longer make changes to your order.</p>
				</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading p-3 mb-3" role="tab" id="heading6">
				<h3 class="panel-title">
					<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6" style="font-size:70%;">
					<i class="fa fa-plus-square"></i>&nbsp;&nbsp;Do you have more than current vendors?
					</a>
				</h3>
				</div>
				<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
				<div class="panel-body px-3 mb-4">
					<p>Currently we have 5 vendor, we're looking for other vendors as well.</p>
				</div>
				</div>
			</div>

		<div class="col-span-12">
			<h1><br></h1>
		</div>

		<h3>Collection Questions :</h3>
		<div class="panel panel-default">
			<div class="panel-heading p-3 mb-3" role="tab" id="heading7">
			<h3 class="panel-title">
				<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7" style="font-size:70%;">
				<i class="fa fa-plus-square"></i>&nbsp;&nbsp;How do I contact you for Collection informations?
				</a>
			</h3>
			</div>
			<div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
			<div class="panel-body px-3 mb-4">
				<p>You can email us at frostfree@customercare.com or you can call us at 1234 567 </p>
			</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading p-3 mb-3" role="tab" id="heading8">
			<h3 class="panel-title">
				<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapse8" style="font-size:70%;">
				<i class="fa fa-plus-square"></i>&nbsp;&nbsp;Where are you collection located?
				</a>
			</h3>
			</div>
			<div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
			<div class="panel-body px-3 mb-4">
				<p>We&#8217;re located in King St, Huddersfield HD1 2QB, United Kingdom </p>
			</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading p-3 mb-3" role="tab" id="heading13">
			<h3 class="panel-title">
				<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13" style="font-size:70%;">
				<i class="fa fa-plus-square"></i>&nbsp;&nbsp;What time do we have to collect the products?
				</a>
			</h3>
			</div>
			<div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
			<div class="panel-body px-3 mb-4">
				<p>All timming will be provided by the site.</p>
			</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading p-3 mb-3" role="tab" id="heading9">
			<h3 class="panel-title">
				<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapse9" style="font-size:70%;">
				<i class="fa fa-plus-square"></i>&nbsp;&nbsp;Do you have a other collection spots?
				</a>
			</h3>
			</div>
			<div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
			<div class="panel-body px-3 mb-4">
				<p>Currently we have only one collection spot.</p>
			</div>
			</div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading p-3 mb-3" role="tab" id="heading10">
			<h3 class="panel-title">
				<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10" style="font-size:70%;">
				<i class="fa fa-plus-square"></i>&nbsp;&nbsp;How do I collect my product?
				</a>
			</h3>
			</div>
			<div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
			<div class="panel-body px-3 mb-4">
				<p>You just have to go to the collection center and recieve your product.</p>
			</div>
			</div>
		</div>
		</div>

		<div class="panel panel-default">
					<div class="panel-heading p-3 mb-3" role="tab" id="heading11">
					<h3 class="panel-title">
						<a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11" style="font-size:70%;">
						<i class="fa fa-plus-square"></i>&nbsp;&nbsp;My product is not at the collection center, then what do I do?
						</a>
					</h3>
					</div>
					<div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
					<div class="panel-body px-3 mb-4">
						<p>Please contact us as soon as possible at frostfree@customercare.com and ainform us about your missing item. </p>
					</div>
					</div>
				</div>
		</div>
	</section>
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