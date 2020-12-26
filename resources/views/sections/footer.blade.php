<div id="footer">
    <div class="row">
        <div class="col-md-3">
            <h3>About</h3>
            <p></p>
        </div>
        <div class="col-md-3">
            <h3>Links</h3>
            <p><a href="{{ url('about-us') }}">About Us</a></p>
            <p><a href="{{ url('services') }}">Services</a></p>
            <p><a href="{{ url('products') }}">Products</a></p>
        </div>
        <div class="col-md-3">
            <h3>Navigate</h3>
            <p><a href="{{ url('/') }}">Home</a></p>
            <p><a href="{{ url('contacts') }}">Contact Us</a></p>
        </div>
        <div class="col-md-3">
            <h3>Get In Touch</h3>
            <p></p>
        </div>
    </div>
    <div class="row" id="copyright">
        <div class="col-md-12">
            <p>(c) {{ date('Y') }}. All Rights Reserved</p>
        </div>
    </div>
</div>
