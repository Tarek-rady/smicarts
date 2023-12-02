@extends('layouts.backend.master')

@section('title')
 Add Category Banner
@endsection


@section('style')

@endsection




@section('content')

    <div class="card shadow mb-4">

        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary"> Category banners </h6>
            <div class="ml-auto">
                <a href="{{ route('category-banners.index') }}" class="btn btn-primary">
                <span><i class="fa fa-home"></i></span>
                <span> Category banners </span>
            </a>
            </div>
        </div>

        <div class="card-body">

            <form action="{{ route('category-banners.store') }}" method="POST" class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="d-flex col-6 flex-column mb-7 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">
                           {{ trans('defult.arabic name') }}    </span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-solid" placeholder="Enter name" >
                        @error('name') <span class="text-danger">{{ $message }}</span>  @enderror
                    </div>

                    <div class="d-flex col-6 flex-column mb-7 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">
                           {{ trans('defult.english name') }}
                            </span>
                        </label>
                        <input type="text"  name="name_en" value="{{ old('name_en') }}" class="form-control form-control-solid" placeholder="Enter name" >
                        @error('name_en') <span class="text-danger">{{ $message }}</span>  @enderror

                    </div>


                </div>

               <div class="row">


                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">Companies</label>
                        <select class="form-select form-select-solid"  data-hide-search="true" data-placeholder="Select a Branches" name="company_id" id="company_id">
                            <option value="">Select companies...</option>

                            @foreach ($companies as $company)
                               <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                            @endforeach



                        </select>
                        @error('company_id') <span class="text-danger">{{ $message }}</span>  @enderror

                    </div>

                    <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-bold mb-2">categories</label>
                        <select class="form-select form-select-solid"  data-hide-search="true" data-placeholder="Select a Branches" name="category_id" id="category_id">
                            <option value="">Select categories...</option>

                            @foreach ($categories as $category)
                               <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach



                        </select>
                        @error('category_id') <span class="text-danger">{{ $message }}</span>  @enderror

                    </div>

               </div>

               <div class="row">
                    <div class="d-flex col-6 flex-column mb-7 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">
                            URL
                            </span>
                        </label>
                        <input type="text"  name="url" value="{{ old('url') }}" class="form-control form-control-solid" placeholder="Enter URL" >
                        @error('url') <span class="text-danger">{{ $message }}</span>  @enderror
                    </div>
               </div>



                <div class="row pt-4">

                    <div class="col-6">
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">
                                Banner Image
                            </span>
                        </label>
                        <div >
                            <input type="file" name="img" class="form-control" >
                            <span class="form-text text-muted">Image with should be jpg , jpeg , png</span>
                            @error('img') <span class="text-danger">{{ $message }}</span>  @enderror

                        </div>
                    </div>

                </div>


                <div class="text-center pt-15">
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">{{ trans('users.Submit') }}</span>
                        <span class="indicator-progress">Please wait...</span>
                    </button>
                </div>

            </form>

        </div>

    </div>


@endsection



@section('script')

@endsection
