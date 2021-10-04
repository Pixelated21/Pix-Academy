$(document).ready(function () {

    let qualName = $("#qual_name"),
        passportName = $("#passport_name");



    $("#qualDocInput").on('change', function (event) {

        let qualDocInput = $("#qualDocInput");
        qualName[0].textContent = qualDocInput[0].files[0].name
        qualDocInput.submit()

    });

    $("#passportImgInput").on('change', function (event) {

        let passportImage = $("#passportImgInput");
        passportName[0].textContent = passportImage[0].files[0].name
        $("#passportOutput")[0].src = URL.createObjectURL(event.target.files[0]);

        // imageChangerForm.submit()


    });


});
