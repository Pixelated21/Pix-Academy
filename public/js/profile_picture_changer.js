$(document).ready(function () {

    let imageChangerForm = $("#imageChanger");

    $("#file").on('change', function (event) {

        let image = $("#output")[0];
        image.src = URL.createObjectURL(event.target.files[0]);

        imageChangerForm.submit()



    });


});

