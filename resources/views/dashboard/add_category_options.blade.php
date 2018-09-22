@include('dashboard.layout.html_header')
@include('dashboard.layout.header')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">Dashboard</h3>
        </div>
        <div>
            <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                <span class="m-subheader__daterange-label">
                    <span class="m-subheader__daterange-title"></span>
                    <span class="m-subheader__daterange-date m--font-brand">
                    </span>
                </span>
                <a href="#"class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                    <i class="la la-angle-down"></i>
                </a>
            </span>
        </div>
    </div>
</div>

<!-- END: Subheader -->
<div class="m-content">




    <!--begin:: General -->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Options
                    </h3>
                </div>
            </div>
        </div>


        <div class="m-portlet__body">
            <div class="form-group m-form__group row ">
                <label class="col-lg-2 col-form-label">Group Name :</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-input" name="options_group_name"
                           placeholder="Enter Options Group Name">
                    <span class="m-form__help">Options Group Name </span>
                </div>
            </div>
            <div id="attr_repeater">
                <div class="form-group  m-form__group row" >
                    <div data-repeater-list="" class="col-lg-12">
                        <div data-repeater-item class="form-group m-form__group row align-items-center">
                            <div class="col-md-3">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label>Name:</label>
                                    </div>
                                    <div class="m-form__control">
                                        <input type="option_name" class="form-control m-input" placeholder="Enter Option Name">

                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>
                            <div class="col-md-2">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label class="m-label m-label--single">Type:</label>
                                    </div>
                                    <div class="m-form__control">
                                        <select class="form-control" id="option_type" name="option_type">
                                            <option value="AK">color radio</option>
                                            <option value="AK">size radio</option>
                                            <option value="AK">select</option>
                                            <option value="AK">radio</option>
                                            <option value="AK">checkbox</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

                            <div class="col-md-3">
                                <div class="m-radio-inline">
                                    <label class="m-checkbox m-checkbox--state-success">
                                        <input type="checkbox"> required
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div data-repeater-delete="" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill">
																<span>
																	<i class="la la-trash-o"></i>
																	<span>Delete</span>
																</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-form__group form-group row">
                    <label class="col-lg-2 col-form-label"></label>
                    <div class="col-lg-4">
                        <div data-repeater-create="" class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide">
														<span>
															<i class="la la-plus"></i>
															<span>Add</span>
														</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        </div>
    <!--end:: General -->

</div>


@include('dashboard.layout.footer')
<script src="{{URL::asset('dashboard/assets/')}}/vendors/custom/datatables/datatables.bundle.js"
        type="text/javascript"></script>

<script src="{{URL::asset('dashboard/assets/')}}/vendors/custom/vuejs/vue.min.js" type="text/javascript"></script>

<script src="{{URL::asset('dashboard/assets/')}}/js/pages/add_category.js" type="text/javascript"></script>


@include('dashboard.layout.end_page')



