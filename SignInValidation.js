jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$("#SignInForm").validate({
    rules:{
        Email:{
           required: true,
            email: true,
        },
        Password:{
            required: true,
        }
    }
});
