
$(document).ready(function (){

    let visible = false;
    const passView = $("#pwdView");
    let viewPassBtn = $("#viewPwdBtn");
    let hidePassBtn = $("#hidePwdBtn");

    viewPassBtn.hide();
    hidePassBtn.hide();

    passView.keydown(function(event) {
        const key = event.key;
        if (key === "Backspace" || key === "Delete") {

            if(passView.val().length <= 0 ){
                console.log(1)
                viewPassBtn.hide()
                hidePassBtn.hide()

            }

        }
        else{
            console.log(2)
            viewPassBtn.show()
            hidePassBtn.hide()

        }
    });


        viewPassBtn.click(function () {


            if (visible === false) {
                passView.attr("type", "text");
                hidePassBtn.show();
                viewPassBtn.hide();
                visible = true;
            }


        });

    hidePassBtn.click(function () {

    if (visible === true) {
            passView.attr("type", "password");
            hidePassBtn.hide();
            viewPassBtn.show();
            visible = false;
        }

    });

    });
