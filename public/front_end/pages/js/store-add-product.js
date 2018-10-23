$(document).ready(function () {
   var HostUrl      =   $(location).attr('host');
   var HostProtocol =  $(location).attr('protocol');
   var WebUrl  =    HostUrl; // HostProtocol + "://" + HostUrl;

    $('#main_category').change(function () {
        var MainCategorySelect = $(this);
        var Category_ID = $(this).val();

        var AjaxUrl = "http://"+ WebUrl+"/categories/"+Category_ID+"/sub-categories";

        console.log(AjaxUrl);

        $.get( AjaxUrl, function( data ) {
            $('#sub_category').find('option').remove();
            var SelectOption = new Option("Select Sub Category", "0");
            $('#sub_category').append(SelectOption);

            for(i=0; i < data.length ; i++){
                var Value = data[i].id;
                var Text = data[i].description[0].name;
                SelectOption = new Option(Text, Value);
                $('#sub_category').append(SelectOption)
            }

        });

    });




    $('#sub_category').change(function () {
        var Category_ID = $(this).val();

        var AjaxUrl = "http://"+ WebUrl+"/categories/"+Category_ID+"/sub-categories";

        console.log(AjaxUrl);

        $.get( AjaxUrl, function( data ) {
            $('#sub_sub_category').find('option').remove();
            var SelectOption = new Option("Select Sub Category", "0");
            $('#sub_sub_category').append(SelectOption);

            for(i=0; i < data.length ; i++){
                var Value = data[i].id;
                var Text = data[i].description[0].name;
                SelectOption = new Option(Text, Value);
                $('#sub_sub_category').append(SelectOption)
            }

        });

    });




    $('#sub_sub_category').change(function () {
        var SubCategorySelect = $(this);
        var SubCategory_ID = $(this).val();

        var AjaxUrl = "http://"+ WebUrl+"/categories/sub-categories-data/"+SubCategory_ID;
        console.log(AjaxUrl);

        $.get( AjaxUrl, function( data ) {
            CategoryAttributeInputs(data[0].attribute);
        });

    });



});






function CategoryAttributeInputs(Attributes) {

    $.each(Attributes, function( index, value ) {

        var InputLabel = value.name;
        var InputName =  "attribute["+index+"]["+value.id+"]";
        var InputId = "attr-"+index+'-'+value.id;
        var AutoCompleteFields = value.values;

        var TheInput = TextInput(InputLabel,InputId,InputName,AutoCompleteFields);

        $('#specifications_area').append(TheInput);
        setTimeout(SetAutoComplete(InputId,AutoCompleteFields),500000)
    });

}

function SetAutoComplete(ID,AutoCompleteFields){
    var InputElemant  = $('#'+ID);
    var Tags = AutoCompleteFields.split(",");

    InputElemant.autocomplete({
        source: Tags
    });


}

function TextInput(InputLabel,ID,Name, AutoComplete) {
    var InputText = ' <div class="col-md-4">' +
    '<div class="form-group">' +
    '<label for="first_name" class="field-label">'+InputLabel+':</label>' +
    '<input type="text" class="form-control field-control" name="'+Name+'" id="'+ID+'" value="" placeholder="" data-values="'+AutoComplete+'">' +
    '</div>' +
    '</div>';


    return InputText;
}





$( function() {

} );
