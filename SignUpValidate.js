jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$("#myForm").validate({
    rules:{
        firstName:{
            minlength:2,
            required:true,
        },
        lastName:{
            minlength:2,
            required:true,
        },
        SignUpEmail:{
            required:true,
            email:true,
        },
        SignUpPassword:{
            minlength:8,
            required:true,
        },
        ConfirmPassword:{
            minlength:8,
            required:true,
            equalTo: "#pass",
        },
    }
});