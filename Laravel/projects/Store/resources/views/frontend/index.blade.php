@extends('frontend.master_dashboard')
@section('main')

 @include('frontend.home.home_slider')

        <!--End hero slider-->
@include('frontend.home.home_features_category')


<!--Products Tabs-->
@include('frontend.home.home_vendor_list')
 <!--End Vendor List -->


@endsection