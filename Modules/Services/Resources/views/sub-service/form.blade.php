@extends('admin.layouts.app')
@section('content')

<div class="mb-1 mt-2">
  <ul class="breadcrumb">
    <li><a href="/project/tunesline-yii2-1786/">Home</a></li>
    <li class="active">Sub Service</li>
  </ul>
</div>

<div class="col-md-12">
  <div class="page-head-text">
    <div class="ProfileHader d-flex flex-wrap align-items-center">
      <h3 class="font_600 font-18 font-md-20 mr-auto pr-20">Sub Service</h3>
    </div>
  </div>
  <div class="card">
    <div class="card-header ">
    </div>
    <form method="post" action="{{url('/services/store/sub-service')}}" id="subservice-form" enctype="multipart/form-data">
      @csrf
      <input type='hidden' name='service_id' value='{{ $serviceID }}'>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
            {!!$errors->first("name", "<span class='text-danger'>Please enter a name</span>")!!}
          </div>
        </div>
        
        
        <div class="col-lg-12">
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="desc" rows="6"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-bg mt-4 " name="submit" value="Submit">
          </div>

        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@push('scripts')

<script>
  jQuery(document).ready(function($) {
    jQuery('#subservice-form').validate({
      onkeyup: function(element) {
        jQuery(element).valid()
      },
      rules: {
        name: {
          required: true,
        },
        desc: {
          required: true
        },
        price: {
          required: true,
          min:1
        }
      },
      messages: {
        name: {
          required: "The title is required."
        },
        desc: {
          required: "The description is required."
        },
        price: {
          required: "The price is required.",
        }
      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        jQuery(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        jQuery(element).removeClass('is-invalid');
      }
    });
  });
</script>

@endpush