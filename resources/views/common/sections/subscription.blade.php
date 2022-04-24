<!-- Our newslatters start -->
<div class="our-newslatters">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Get Newsletter</h3>
                <p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                <div class="form-info">
                    <form action="{{ url('subscribe') }}" method="post">
                        @csrf
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <button type="submit" >Get it now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="{{ url('subscribe') }}">
    @csrf
    <input type="text" name="email" class="" placeholder="Email">
    <input value="eeee" type="submit" />
</form>
<!-- Our newslatters end -->
