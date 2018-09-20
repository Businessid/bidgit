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
                    <select class="form-control m-select2" id="category_id" name="category_id"
                            placeholder="Select Category">
                        <option value="0"> This is Root Category </option>
                        <option value="AK">Alaska</option>
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                    </select>
                    <span class="m-form__help">Example help text that remains unchanged.</span>
                </div>
            </div>
            <div class="form-group m-form__group row ">
                <label class="col-lg-2 col-form-label">IconType :</label>
                <div class="col-lg-4">
                    <select class="form-control m-select2" id="icon_type" name="icon_type"
                            placeholder="Select Icon Type">
                        <option value="flaticon">Flat Icon</option>
                        <option value="fontawesome5">FontAwesome 5</option>
                        <option value="lineawesome">LineAwesome</option>
                        <option value="socicons">Socicons</option>

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
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
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
            <div id="attr_repeater">
                <div class="form-group  m-form__group row" id="m_repeater_1">
                    <div data-repeater-list="" class="col-lg-12">
                        <div data-repeater-item class="form-group m-form__group row align-items-center">
                            <div class="col-md-3">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label>Name:</label>
                                    </div>
                                    <div class="m-form__control">
                                        <input type="email" class="form-control m-input" placeholder="Enter full name">
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
                                        <select class="form-control m-select2" id="attr_type" name="attr_type"
                                                placeholder="Select Attribute Type">
                                            <option value="flaticon">input</option>
                                            <option value="fontawesome5">color</option>
                                            <option value="lineawesome">select</option>
                                        </select>
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
                                        <input type="email" class="form-control m-input" placeholder="Enter full name">
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



