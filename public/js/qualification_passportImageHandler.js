$(document).ready(function () {

    let qualUpload = $("#qualChanger"),
        passportUpload = $("#passChanger");




    $("#qualImgInput").on('change', function (event) {

        let qualImage = $("#qualOutput")[0];
        qualImage.src = URL.createObjectURL(event.target.files[0]);

        qualUpload.submit()

    });

    $("#passportImgInput").on('change', function (event) {

        let qualImage = $("#passportOutput")[0];
        qualImage.src = URL.createObjectURL(event.target.files[0]);

        // imageChangerForm.submit()


    });


});
