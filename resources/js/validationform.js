$(function () {
    $("#createForm1").validate({
        rules: {
            name: {
                required: true,
                minlength: 10,
            },
            description: {
                required: true,
                minlength: 30,
            },
            video: {
                required: true,
                extension: "mp4"
            },
            thumbnail: {
                required: true,
                extension: "png|jpg|jpeg"
            },
        },
        messages: {
            name: {
                required: "Please enter a name of your video",
                minlength: "Your name video too short",
            },
            description: {
                required: "Please enter a description of your video",
                minlength: "Your description video too short",
            },
            video: {
                required: "Please upload your video",
                extension: "Extension video must be MP4",
            },
            thumbnail: {
                required: "Please upload your video thumbnail",
                extension: "Extension thumbnail must be PNG, JPG, JPEG",
            },
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        },
    });
});
