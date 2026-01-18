<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Header Start -->
<header class="custom-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="logo-text">Support System</h2>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('account.create') }}" class="btn btn-primary login-btn">
                    <i class="fa fa-sign-in"></i> {{ $user->name }}
                </a>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->