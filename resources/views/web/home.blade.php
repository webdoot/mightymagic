@extends('template.tmpl-web')

@section('title', 'Home')

@push('head')
@endpush

@section('content')

      @include('template.web-inc.slider')

      @include('template.web-inc.feature')

      @include('template.web-inc.best-slider')

      @include('template.web-inc.team-people')

      @include('template.web-inc.get-in-touch')

      @include('template.web-inc.map')

@endsection


@push('footer')
@endpush