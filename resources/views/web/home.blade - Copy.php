@extends('template.tmpl-web')

@section('title', 'Home')

@push('head')
<style type="text/css">
	.navbar-brand img {
		max-width: 95px;
		height: auto;
	}

	#brand-logo-1 {
		display: none;
	}
</style>
@endpush

@section('content')

      @include('template.web-inc.slider')

      // @include('template.web-inc.feature')

      @include('template.web-inc.best-slider')

      @include('template.web-inc.team-people')

      @include('template.web-inc.get-in-touch')

      @include('template.web-inc.map')

@endsection


@push('footer')
@endpush