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
{{ Form::open(array('url' => 'admin/add-category/submit-category', 'id' => 'personal_info', 'enctype' => 'multipart/form-data')) }}

<!--begin:: General -->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Category Data
                    </h3>
                </div>
            </div>
        </div>

        <div class="m-portlet__body">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#" data-target="#description_tabs_en">English</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#" data-target="#description_tabs_ar" >عربي</a>
                </li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane active " id="description_tabs_en" role="tabpanel">
                    <div class="form-group m-form__group row ">
                        <label class="col-lg-2 col-form-label">Category Name :</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control m-input" name="description[1][category_name]"
                                   placeholder="Enter Category Name">
                            <span class="m-form__help">Category Name </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row  ">
                        <label class="col-form-label col-lg-2">DESCRIPTION</label>
                        <div class="col-lg-9">
                            <textarea class="category_description" name="description[1][category_description]"></textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group row ">
                        <label class="col-lg-2 col-form-label">Meta Title :</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control m-input" name="description[1][meta_title]"
                                   placeholder="Enter Meta Title">
                            <span class="m-form__help">Meta Title </span>
                        </div>
                    </div>

                    <div class="form-group m-form__group row ">
                        <label class="col-lg-2 col-form-label">Meta Description :</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control m-input" name="description[1][meta_description]"
                                   placeholder="Enter Meta Description">
                            <span class="m-form__help">Meta Description </span>
                        </div>
                    </div>

                </div>


                <div class="tab-pane " id="description_tabs_ar" role="tabpanel">
                    <div class="form-group m-form__group row ">
                        <label class="col-lg-2 col-form-label">Category Name :</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control m-input" name="description[2][category_name]"
                                   placeholder="Enter Category Name">
                            <span class="m-form__help">Category Name </span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row  ">
                        <label class="col-form-label col-lg-2">DESCRIPTION</label>
                        <div class="col-lg-9">
                            <textarea class="category_description" name="description[2][category_description]"></textarea>
                        </div>
                    </div>

                    <div class="form-group m-form__group row ">
                        <label class="col-lg-2 col-form-label">Meta Title :</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control m-input" name="description[2][meta_title]"
                                   placeholder="Enter Meta Title">
                            <span class="m-form__help">Meta Title </span>
                        </div>
                    </div>

                    <div class="form-group m-form__group row ">
                        <label class="col-lg-2 col-form-label">Meta Description :</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control m-input" name="description[2][meta_description]"
                                   placeholder="Enter Meta Description">
                            <span class="m-form__help">Meta Description </span>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!--end:: General -->


    <!--begin:: General -->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Category General
                    </h3>
                </div>
            </div>
        </div>


        <div class="m-portlet__body">
            <div class="m-form__content">
                <div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert"
                     id="m_form_1_msg">
                    <div class="m-alert__icon">
                        <i class="la la-warning"></i>
                    </div>
                    <div class="m-alert__text">
                        Oh snap! Change a few things up and try submitting again.
                    </div>
                    <div class="m-alert__close">
                        <button type="button" class="close" data-close="alert" aria-label="Close">
                        </button>
                    </div>
                </div>
            </div>

            <div class="form-group m-form__group row ">
                <label class="col-lg-2 col-form-label">Parent :</label>
                <div class="col-lg-4">
                    <select class="form-control m-select2" id="parent_id" name="parent_id"
                            placeholder="Select Category">
                            <option value="0">Main Category</option>
                        @if(!empty($Categories))
                        @foreach($Categories as $Category)
                            <option value="0">This is Root</option>
                        @endforeach
                        @endif
                    </select>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                </div>
            </div>
            <div class="form-group m-form__group row ">
                <label class="col-lg-2 col-form-label">Icon :


                </label>
                <div class="col-lg-4">
                    <select class="form-control m-select2" id="category_icon" name="category_icon"
                            placeholder="Select Icon">
                        <option></option>
                        <option value="flaticon-email-black-circular-button" data-icon="flaticon-email-black-circular-button">email</option>

                    </select>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                </div>
            </div>

        </div>

    </div>
    <!--end:: General -->


    <!--begin:: General -->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Attribute
                    </h3>
                </div>
            </div>
        </div>


        <div class="m-portlet__body">
            <div id="attribute_repeater">
                <div class="form-group  m-form__group row" >
                    <div data-repeater-list="attribute" class="col-lg-12">
                        <div data-repeater-item class="form-group m-form__group row align-items-center">
                            <div class="col-md-3">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label>Name:</label>
                                    </div>
                                    <div class="m-form__control">
                                        <input type="text" name="attribute_name" class="form-control m-input" placeholder="Enter Attribute name">
                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label class="m-label m-label--single">Value:</label>
                                    </div>
                                    <div class="m-form__control">
                                        <input type="text" name="attribute_values" class="form-control m-input" placeholder="Enter Values Like this opt1,opt2">
                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="m-radio-inline">
                                    <label class="m-checkbox m-checkbox--state-success">
                                        <input type="checkbox" value="1" name="required"> required
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div data-repeater-delete="" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill">
																<span>
																	<i class="la la-trash-o"></i>
																	<span>X</span>
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
            <div id="options_repeater">
                <div class="form-group  m-form__group row" >
                    <div data-repeater-list="options" class="col-lg-12">
                        <div data-repeater-item class="form-group m-form__group row align-items-center">
                            <div class="col-md-3">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label>Name:</label>
                                    </div>
                                    <div class="m-form__control">
                                        <input type="text" name="option_name" class="form-control m-input" placeholder="Enter Option Name">

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
                                            <option value="color" selected="selected" >color radio</option>
                                            <option value="size">size radio</option>
                                            <option value="select">select</option>
                                            <option value="radio">radio</option>
                                            <option value="checkbox">checkbox</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

                            <div class="col-md-3">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label>Name:</label>
                                    </div>
                                    <div class="m-form__control">
                                        <input type="text" name="option_values" class="form-control m-input" placeholder="Enter Option Name">

                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

                            <div class="col-md-3">
                                <div class="m-radio-inline">
                                    <label class="m-checkbox m-checkbox--state-success">
                                        <input type="checkbox"name="required" > required
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div data-repeater-delete="" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill">
																<span>
																	<i class="la la-trash-o"></i>
																	<span>X</span>
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

    <!--begin:: Submit Area -->
    <div class="m-portlet">
        <div class="m-portlet__body">

            <div class="m-form__actions m-form__actions">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--end:: Submit Area -->

    {{ Form::close() }}

</div>


@include('dashboard.layout.footer')
<script src="{{URL::asset('dashboard/assets/')}}/vendors/custom/datatables/datatables.bundle.js"
        type="text/javascript"></script>

<script src="{{URL::asset('dashboard/assets/')}}/vendors/custom/vuejs/vue.min.js" type="text/javascript"></script>

<script src="{{URL::asset('dashboard/assets/')}}/js/pages/add_category.js" type="text/javascript"></script>


@include('dashboard.layout.end_page')



