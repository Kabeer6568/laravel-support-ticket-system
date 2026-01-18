@extends('layouts.app')

@section('content')
<div class="container">
<section class="content">
	<div class="row">
		<h3>
            Only admins can access this page
        </h3>
        <h4>
            <a href="{{route('account.create')}}"> Login Or Create Account</a>
        </h4>
	</div>
</section>
</div>
@endsection