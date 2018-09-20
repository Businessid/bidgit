var MyDataTable;
var MyRows = [];
var User_List_Table_init = {
    init: function () {
        MyDataTable  = $("#categories_list_table").DataTable({
            data : MyRows,
            responsive: !0,
            dom: "<'row'<'col-sm-12'tr>>\n\t\t\t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>",
            lengthMenu: [5, 10, 25, 50],
            pageLength: 10,
            language: {lengthMenu: "Display _MENU_"},
            order: [[1, "desc"]],
            headerCallback: function (e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML = '\n                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">\n                        <input type="checkbox" value="" class="m-group-checkable">\n                        <span></span>\n                    </label>'
            },
            columnDefs: [{
                targets: 0,
                width: "30px",
                className: "dt-right",
                orderable: !1
            }, {
                targets: -1, title: "Actions", orderable: !1, render: function (e, a, t, n) {
                    return '\n                        <span class="dropdown">\n                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">\n                              <i class="la la-ellipsis-h"></i>\n                            </a>\n                            <div class="dropdown-menu dropdown-menu-right">\n                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\n                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\n                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\n                            </div>\n                        </span>\n                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">\n                          <i class="la la-edit"></i>\n                        </a>'
                }
            }]
        }), MyDataTable.on("change", ".m-group-checkable", function () {
            var e = $(this).closest("table").find("td:first-child .m-checkable"), a = $(this).is(":checked");
            $(e).each(function () {
                a ? ($(this).prop("checked", !0), $(this).closest("tr").addClass("active")) : ($(this).prop("checked", !1), $(this).closest("tr").removeClass("active"))
            })
        }), MyDataTable.on("change", "tbody tr .m-checkbox", function () {
            $(this).parents("tr").toggleClass("active")
        });
        LoadList();
    }

};


function LoadList(){
    $.ajax({
        url: '/admin/categories-list-json',
        success(res) {
            FullTableData(res);
        }
    });
}

jQuery(document).ready(function () {
     User_List_Table_init.init();
});


function FullTableData(res){
    MyRows = [];
    res.forEach(function (item) {
        let row = [];
        row.push('<label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"> <input type="checkbox" value="'+item.category_id+'" class="m-checkable"><span></span></label>');
        row.push(item.category_icon);
        row.push(item.category_name);
        row.push(item.category_parent);
        row.push('');
        MyRows.push(row);
    });

    MyDataTable.clear();
    MyDataTable.clear().draw();
    MyDataTable.rows.add(MyRows);
    MyDataTable.draw();
}

