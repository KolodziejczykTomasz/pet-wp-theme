let $form = $("form"),

    $successMsg = $(".alert");
$.validator.addMethod("letters", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
});


$form.validate({
    rules: {
        name: {
            required: true,
            minlength: 3,
            letters: true
        },
        lastName: {
            required: true,
            letters: true
        },
        email: {
            required: true,
            email: true
        },
        message: {
            required: true,
            letters: true
        },
    },

    messages: {
        name: "Required field your name",
        lastName: "Required field your lastname",
        email: "Required field email address",
        message: "Required field your massage"
    },

    errorElement: "div",
    errorPlacement: function(error, element) {
        error.appendTo(element.closest("div"));
        error.addClass("error");
    },
});

$("input").click(function(){
    $(".form__label").addClass('active');
});
