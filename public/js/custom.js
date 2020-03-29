$("#seeAnotherField").change(function () {
  if ($(this).val() == "1") {
    $('#otherFieldDiv').show();

    $('#otherFieldDiv2').show();
    $('#otherField2').attr('required', '');
    $('#otherField2').attr('data-error', 'This field is required.');
  } else {
    $('#otherFieldDiv').hide();

    $('#otherFieldDiv2').hide();
    $('#otherField2').removeAttr('required');
    $('#otherField2').removeAttr('data-error');
  }
});
$("#seeAnotherField").trigger("change");