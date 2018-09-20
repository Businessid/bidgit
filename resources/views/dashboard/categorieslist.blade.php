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
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#"
                                       class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
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
                        Basic Example
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="/admin/add-category"
                           class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>New Category</span>
												</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <!--begin::Form-->
        <div id="UserList-App" class="m-portlet__body">
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
            <div class="row">
                <div class="col-lg-12">

                    <div id="tabledemo">

                        <table class="table table-striped- table-bordered table-hover table-checkable"
                               id="categories_list_table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Category Icon</th>
                                <th>Category Name</th>
                                <th>Category Parent</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <thead>
                            <tr class="filter">
                                <th>
                                </th>
                                <th>
                                </th>
                                <th>
                                    <input type="text"
                                           class="form-control form-control-sm form-filter m-input"
                                           data-col-index="2">
                                </th>
                                <th>
                                    <select class="form-control form-control-sm form-filter m-input"
                                            title="Select" data-col-index="7">
                                        <option value="">Select</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select>
                                </th>
                                <th>
                                    <button type="button" id="search_button"
                                            onclick="javascript:LoadList();"
                                            class="btn btn-brand m-btn btn-sm m-btn--icon">
							                        <span>
							                            <i class="la la-search"></i>
							                            <span>Search</span>
							                        </span>
                                    </button>
                                    <button class="btn btn-secondary m-btn btn-sm m-btn--icon">
							                        <span>
							                            <i class="la la-close"></i>
							                            <span>Reset</span>
							                        </span>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot style="background-color: #a8cef7">
                            <tr>
                                <th></th>
                                <th>Category Icon</th>
                                <th>Category Name</th>
                                <th>Category Parent</th>
                                <th>action</th>
                            </tr>
                            </tfoot>
                        </table>


                    </div>

                </div>

            </div>


        </div>
        <!--end::Form-->
    </div>
    <!--end:: General -->
</div>


@include('dashboard.layout.footer')
<script src="{{URL::asset('dashboard/assets/')}}/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<script src="{{URL::asset('dashboard/assets/')}}/vendors/custom/vuejs/vue.min.js" type="text/javascript"></script>

<script src="{{URL::asset('dashboard/assets/')}}/js/pages/categories_list.js" type="text/javascript"></script>


@include('dashboard.layout.end_page')



