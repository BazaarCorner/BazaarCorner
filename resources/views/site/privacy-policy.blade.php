@extends('layout.site')

@section('meta-name')
<meta name="description" content="Bazaar Corner offical website">
@stop

@section('content')
<div class="col-md-9 text-justify">
    <section id="membership">
        <h3>Members Privacy Policy</h3>
        <p>
            Your privacy is very important to us. Accordingly, we have developed
            this Policy in order for you to understand how we collect, use,
            communicate and disclose and make use of personal information. The
            following outlines our privacy policy.
        </p>
        <ul>
            <li>
                Before or at the time of collecting personal information, we will
                identify the purposes for which information is being collected.
            </li>
            <li>
                We will collect and use of personal information solely with the 
                objective of fulfilling those purposes specified by us and for other
                compatible purposes, unless we obtain the consent of the individual
                concerned or as required by law.		
            </li>
            <li>
                We will only retain personal information as long as necessary for
                the fulfillment of those purposes. 
            </li>
            <li>
                We will collect personal information by lawful and fair means and,
                where appropriate, with the knowledge or consent of the individual
                concerned. 
            </li>
            <li>
                Personal data should be relevant to the purposes for which it is to
                be used, and, to the extent necessary for those purposes, should be
                accurate, complete, and up-to-date. 
            </li>
            <li>
                We will protect personal information by reasonable security
                safeguards against loss or theft, as well as unauthorized
                access, disclosure, copying, use or modification.
            </li>
            <li>
                We will make readily available to customers information about
                our policies and practices relating to the management of
                personal information. 
            </li>
        </ul>
        <p>
            We are committed to conducting our business in accordance with these
            principles in order to ensure that the confidentiality of personal
            information is protected and maintained. 
        </p>
    </section>
    <section id="shipping">
        <h3>Shipping Policy</h3>
        <p>
            Seller/Merchant will received an order notification with the desired
            shipping method is included. And from that Seller/Merchant then must
            ship their products within 2 working days from the date of purchase
            with their carrier of choice.
        </p>
        <p>
            Seller/Merchant make sure to specify shipping costs and related
            service charges in your listings. What you can only charge is the
            actual shipping cost, handling cost which there includes also the
            insurance, value added tax or any government fees.
        <p>
            Seller/Merchant is required to provide tracking, delivery
            confirmation or POD (Proof of Delivery)
        </p>
        <p>
            If the shipping cost is too high, please make sure to explain and
            indicate it in your product listing and if there are any dispute or
            if buyer claims that they didn’t receive the shipment please use on
            the tracking number as that will serve as your reference to file a
            claim against this issue.
        </p>
    </section>
    <section id="payment">
        <h3>Payment Policy</h3>
        <p>
            We give our seller/merchant and buyers a convenient payment options.
            To ensure that our market place is free from fraud thus we only
            allow selected and approved payment methods.
        </p>
        <ul>
            <li>VISA</li>
            <li>Master Card</li>
            <li>AMEX</li>
            <li>DISCOVER</li>
            <li>Paypal</li>
        </ul>
        <p>
            If a merchant or buyer doesn’t follow these payment guidelines it
            may automatically lead to suspension of their accounts.
        </p>
    </section>
</div>
<div class="col-md-3">
    <div class="row widget-container" style="position:fixed;">
        <div class="widget-holder">
            <div class="widget-body">
                <h4>Our Policies</h4>
                <ul>
                    <li><a href="#membership">Member's Privacy</a></li>
                    <li><a href="#shipping">Shipping Policy</a></li>
                    <li><a href="#payment">Payment Policy</a></li>
                </ul>
            </div>        
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
@stop

@section('content-inline-script')
@stop