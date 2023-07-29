@extends('website.layouts.app')
@section('content')
    <main aria-live="polite" aria-atomic="true" class="position-relative">
    <div class="container-fluid p-0" id="contatti-page">

        <section class="contact-container container-fluid my-4" id="contact-form">
            <div class="container">
                <h3 class="h3 fw-bold text-uppercase text-center mb-4">تواصل معنا</h3>
                <div class="row">
                    <div class="col-md-12">
                        @if(session('message'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <span>{{ session('message')}}</span>

                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                    <div class="col-md-12">
                        <i>الحقول المطلوبة مُشار إليها بعلامة <strong>*</strong></i>
                        <form method="post" action="{{route('website.contact.store')}}" class="form-horizontal" role="form"
                              enctype="multipart/form-data" data-count="#">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"
                                               class="text-right col-form-label font-weight-bold name"> الاسم                  *
                                        </label>
                                        <input
                                            type="text"
                                            name="name"
                                            id="name"
                                            value=""
                                            class="form-control  "
                                            required
                                        >
                                    </div>                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="surname"
                                               class="text-right col-form-label font-weight-bold surname"> اسم العائلة                  *
                                        </label>
                                        <input
                                            type="text"
                                            name="surname"
                                            id="surname"
                                            value=""
                                            class="form-control  "
                                            required
                                        >
                                    </div>                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company"
                                               class="text-right col-form-label font-weight-bold company"> الشركة  </label>
                                        <input
                                            type="text"
                                            name="company"
                                            id="company"
                                            value=""
                                            class="form-control  "
                                        >
                                    </div>                          </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address"
                                               class="text-right col-form-label font-weight-bold address">  عنوان  </label>
                                        <input
                                            type="text"
                                            name="address"
                                            id="address"
                                            value=""
                                            class="form-control  "
                                        >
                                    </div>                          </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country"
                                               class="text-right col-form-label font-weight-bold country"> بلد  </label>
                                        <input
                                            type="text"
                                            name="country"
                                            id="country"
                                            value=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city"
                                               class="text-right col-form-label font-weight-bold city">  مدينة  </label>
                                        <input
                                            type="text"
                                            name="city"
                                            id="city"
                                            value=""
                                            class="form-control  ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telephone"
                                               class="text-right col-form-label font-weight-bold telephone"> رقم الهاتف  </label>
                                        <input
                                            type="tel"
                                            name="telephone"
                                            id="telephone"
                                            value=""
                                            class="form-control  "
                                        >
                                    </div>                          </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fax"
                                               class="text-right col-form-label font-weight-bold fax"> فاكس  </label>
                                        <input
                                            type="tel"
                                            name="fax"
                                            id="fax"
                                            value=""
                                            class="form-control  "
                                        >
                                    </div>                          </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"
                                               class="text-right col-form-label font-weight-bold email"> البريد الالكتروني                  *
                                        </label>
                                        <input
                                            type="email"
                                            name="email"
                                            id="email"
                                            value=""
                                            class="form-control  "
                                            required
                                        >
                                    </div>                          </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message" class="text-right col-form-label font-weight-bold"> رسالة              * </label>
                                        <textarea name="message"
                                                  id="message"
                                                  class="form-control"
                                                  required
                                        ></textarea>
                                    </div>                            </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 text-center mb-lg-5">
                                    <button type="submit" class="btn btn-dark">  ارسال</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="d-sm-flex my-4">
                    <div class="flex-fill text-center my-4 border p-3">
                        <p class="m-0"><i class="fas fa-info fa-2x"></i></p>
                        <p class="fw-bold m-0">طلب معلومات</p>
                        <a href="mailto:sales@grandgate-doors.com" title="sales@grandgate-doors.com">sales@grandgate-doors.com</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
