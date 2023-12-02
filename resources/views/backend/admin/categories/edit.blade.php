@extends('layouts.backend.master')

@section('title')
{{ trans('category.edit category') }}
@endsection


@section('style')

@endsection




@section('content')


    <div class="card shadow mb-4">

        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary"> {{ trans('category.edit category') }} </h6>
            <div class="ml-auto">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">
                <span><i class="fa fa-home"></i></span>
                <span> {{ trans('category.category') }} </span>
            </a>
            </div>
        </div>

        <div class="card-body">

            <form action="{{ route('categories.update' , $category->id) }}" method="POST" class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="row">
                    <div class="d-flex col-6 flex-column mb-7 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">
                           {{ trans('defult.arabic name') }}    </span>
                        </label>
                        <input type="text"  name="name" value="{{$category->getTranslation('name','ar')}}" class="form-control form-control-solid" placeholder="Enter name" >
                        @error('name') <span class="text-danger">{{ $message }}</span>  @enderror
                    </div>

                    <div class="d-flex col-6 flex-column mb-7 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">
                           {{ trans('defult.english name') }}
                            </span>
                        </label>
                        <input type="text"  name="name_en" value="{{$category->getTranslation('name','en')}}" class="form-control form-control-solid" placeholder="Enter name" >
                        @error('name_en') <span class="text-danger">{{ $message }}</span>  @enderror

                    </div>


                </div>

                <div class="row">
                        <div class="d-flex col-6 flex-column mb-7 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">
                                    {{ trans('category.color') }}
                                </span>
                            </label>
                            <input type="color"  name="color" value="{{ old('color' , $category->color ) }}" class="form-control form-control-solid" placeholder="Enter name" >
                            @error('color') <span class="text-danger">{{ $message }}</span>  @enderror

                        </div>
                </div>



                <div class="row pt-4">

                    <div class="col-6">
                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">
                                {{ trans('defult.img') }}
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
