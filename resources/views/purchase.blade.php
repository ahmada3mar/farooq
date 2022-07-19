@extends('app')

@section('purchase')
<div>

    <div @if($course->cover)style="background-image: url(/storage/{{ $course->cover }}) ; " @endif class="container single-page-header">
        <div class="container arabic">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-page-header-inner">
                        <div class="header-details flexcolumn">
                            <h3>{{ $course->name }}</h3>
                            <h5>{{ $course->user->name }}</h5>
                        </div>
                        <div class="right-side" style="justify-content:end;">
                            <div style="justify-content:end;box-shadow:none;" class="header-image margin-left-20">
                                <a href="single-company-profile.html"><img src="/storage/{{ $course->image }}"
                                        alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-image-container" :style="'background:url(/storage/' + +')'"></div>
    </div>

    <!-- Page Content
    ================================================== -->
    <div class="container  arabic ">
        <div class="row ">
            <div class="center">
                <h3> التسجيل في المساق </h3>
                <p> للتسجيل يرجى تعبة معلومات البطاقة </p>
                <form id="purchase-form" method="post" action="/confirm/{{ $course->id }}">
                    @if (Session::has('errors'))
                        <span class="error-msg">{{ Session::get('errors') }}</span>
                    @endif
                    @csrf
                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-money"></i>
                        <input value="{{ old('serial_number') }}" type="text" class="input-text with-border"
                            name="serial_number" placeholder=" الرقم التسلسلي " required />
                    </div>


                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input value="{{ old('password') }}" type="password" class="input-text with-border"
                            name="password" placeholder="كلمة السر" required />
                    </div>
                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10 " type="submit"
                        form="purchase-form">
                        <i class="icon-material-outline-arrow-back"></i>
                        شراء
                    </button>
                </form>

            </div>
        </div>
        {{-- <div class="offset-8  col-xl-4 col-lg-4">
    <div class="sidebar-container p-0 arabic">
        <div class="row arabic">
            <!-- Content -->
            @foreach ($course->units as $unit)
                <div class="px-0 accordion__item js-accordion-item arabic">
                    <div class="accordion-header js-accordion-header">
                        {{ $unit->name }}
                    </div>

                    <!-- Accordtion Body -->
                    <div class="accordion-body js-accordion-body ">
                        <!-- Accordion Content -->
                        @foreach ($unit->lectures as $lectur)
                            <div class="accordion-body__contents link">
                                {{ $lectur->name }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> --}}
    </div>
    </div>

    <!-- Sidebar -->

    </div>
    </div>
    </div>

@endsection
