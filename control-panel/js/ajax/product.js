$(document).ready(function () {

//Create 
    $("#create").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();
        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#image').val() || $('#image').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  image..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#short_description').val() || $('#short_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter short description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });

        } 
//        else if ($('#name').val().includes("'")) {
//            swal({
//                title: "Error!",
//                text: "Sorry, Invalid character found ( ' ) in name. Please remove that character.",
//                type: 'error',
//                timer: 3500,
//                showConfirmButton: false
//            });
//        } else if ($('#short_description').val().includes("'")) {
//            swal({
//                title: "Error!",
//                text: "Sorry, Invalid character found ( ' ) in short description. Please remove that character.",
//                type: 'error',
//                timer: 3500,
//                showConfirmButton: false
//            });
//        } else if ($('#description').val().includes("'")) {
//            swal({
//                title: "Error!",
//                text: "Sorry, Invalid character found ( ' ) in description. Please remove that character.",
//                type: 'error',
//                timer: 3500,
//                showConfirmButton: false
//            });
//        } 
        else {
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/product.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    swal({
                        title: "Success!",
                        text: "Your data was saved successfully!.....",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("./view-products.php?id=" + result.id);
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
    //update  
    $("#update").click(function (event) {
        event.preventDefault();
        tinymce.triggerSave();
        if (!$('#name').val() || $('#name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter title..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#image').val() || $('#image').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter  image..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#short_description').val() || $('#short_description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter short description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter description..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "post-and-get/product.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    swal({
                        title: "Success!",
                        text: "Your changes saved successfully!...",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("edit-product.php?id=" + result.id);
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});
 