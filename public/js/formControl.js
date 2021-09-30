$(document).ready(function () {



    let personalInfoForm = $("#personalInfo");
    let residentialInfoForm = $("#residentialInfo");
    let socialInfoForm = $("#socialInfo");
    let cardInfoForm = $("#paymentInfo");
    let qualificationsForm = $("#qualificationInfo")

    let personalInfoHeader = $("#personalInfo-Header")
    let piButtonGroup = $("#personalInfoBtnGroup")
    let piUpdateBTN = $("#pi-update-btn");
    let piBackBTN = $("#pi-back-btn");
    let piSubmitBTN = $("#pi-submit-btn");

    let residentialInfoHeader = $("#residentialInfo-Header")
    let riButtonGroup = $("#residentialInfoBtnGroup")
    let riUpdateBTN = $("#ri-update-btn")
    let riBackBTN = $("#ri-back-btn")
    let riSubmitBTN = $("#ri-submit-btn")

    let qualificationsInfoHeader = $("#QualificationInfo-Header")
    let qiButtonGroup = $("#qualificationInfoBtnGroup")
    let qiUpdateBTN = $("#qi-update-btn")
    let qiBackBTN = $("#qi-back-btn")
    let qiSubmitBTN = $("#qi-submit-btn")

    let cardInfoHeader = $("#paymentInfo-Header")
    let ciButtonGroup = $("#cardInfoBtnGroup")
    let ciUpdateBTN = $("#ci-update-btn")
    let ciBackBTN = $("#ci-back-btn")
    let ciSubmitBTN = $("#ci-submit-btn")

    let qualificationImageForm = $("#qualImageChanger"),
        passportImageForm = $("#passImageChanger")

    let update;

    piBackBTN.hide()
    piSubmitBTN.hide()
    riSubmitBTN.hide()
    riBackBTN.hide()
    ciSubmitBTN.hide()
    ciBackBTN.hide()
    qiSubmitBTN.hide()
    qiBackBTN.hide()

    displayFormToggle("personal")


    /// form toggle functions

    function residentialInfoFormDisplayToggle(toggle){
        if (toggle === false) {
            riButtonGroup.hide()
            residentialInfoForm.hide()
        }
        else if(toggle === true){
            riButtonGroup.show()
            residentialInfoForm.show()
        }
    }

    function personalInfoFormDisplayToggle(toggle){
        if (toggle === false) {
            piButtonGroup.hide()
            personalInfoForm.hide()
        }
        else if(toggle === true){
            piButtonGroup.show()
            personalInfoForm.show()
        }
    }

    function qualificationInfoFormDisplayToggle(toggle){
        if (toggle === false) {
            qiButtonGroup.hide()
            qualificationsForm.hide()
        }
        else if(toggle === true){
            qiButtonGroup.show()
            qualificationsForm.show()
        }
    }


    function cardInfoFormDisplayToggle(toggle){
        if (toggle === false) {
            ciButtonGroup.hide()
            cardInfoForm.hide()
        }
        else if(toggle === true){
            ciButtonGroup.show()
            cardInfoForm.show()
        }
    }
/////////////////////

// function that controls specific form displays and resets status on call
    function displayFormToggle(Form) {

        piUpdateBtnToggle(false)
        ciUpdateBtnToggle(false)
        riUpdateBtnToggle(false)
        qiUpdateBtnToggle(false)

        qualificationInfoFormDisplayToggle(false)
        cardInfoFormDisplayToggle(false)
        personalInfoFormDisplayToggle(false)
        residentialInfoFormDisplayToggle(false)




        enableFormInputs(personalInfoForm[0], false)
        enableFormInputs(residentialInfoForm[0], false)
        enableFormInputs(cardInfoForm[0], false)
        enableFormInputs(qualificationsForm[0], false)


        if (Form === "card"){
            activeTab(Form)
            cardInfoFormDisplayToggle(true)
        }
        else if (Form === "personal"){
            activeTab(Form)
            personalInfoFormDisplayToggle(true)
        }
        else if(Form === "residential"){
            activeTab(Form)
            residentialInfoFormDisplayToggle(true)
        }
        else if(Form === "qualification"){
            activeTab(Form)
            qualificationInfoFormDisplayToggle(true)

        }
    }
/////////////////////////////////////////


    //Active Status Function
    function activeTab(Form){
        //purge
        personalInfoHeader.removeClass("text-4xl")
        personalInfoHeader.removeClass("text-pink-500")

        residentialInfoHeader.removeClass("text-4xl")
        residentialInfoHeader.removeClass("text-pink-500")


        cardInfoHeader.removeClass("text-4xl")
        cardInfoHeader.removeClass("text-pink-500")

        qualificationsInfoHeader.removeClass("text-4xl")
        qualificationsInfoHeader.removeClass("text-pink-500")
//


        if(Form === "personal"){
            personalInfoHeader.addClass("duration-300")
            personalInfoHeader.addClass("text-4xl")
            personalInfoHeader.addClass("text-pink-500")
        }
        else if (Form === "residential"){
            residentialInfoHeader.addClass("duration-300")
            residentialInfoHeader.addClass("text-4xl")
            residentialInfoHeader.addClass("text-pink-500")
        }

        else if(Form === "card"){
            cardInfoHeader.addClass("duration-300")
            cardInfoHeader.addClass("text-4xl")
            cardInfoHeader.addClass("text-pink-500")
        }

        else if(Form === "qualification"){
            qualificationsInfoHeader.addClass("duration-300")
            qualificationsInfoHeader.addClass("text-4xl")
            qualificationsInfoHeader.addClass("text-pink-500")
        }
    }

    // Button Control Functions
    function piUpdateBtnToggle(toggle) {
        update = toggle;
        if (update === false) {
            piUpdateBTN.fadeIn(2000);
            piBackBTN.fadeOut();
            piSubmitBTN.fadeOut();
        } else {
            piUpdateBTN.fadeOut();
            piBackBTN.fadeIn(2000);
            piSubmitBTN.fadeIn(2000);
        }
    }

    function riUpdateBtnToggle(toggle) {
        update = toggle;
        if (update === false) {
            riUpdateBTN.fadeIn(2000);
            riBackBTN.fadeOut();
            riSubmitBTN.fadeOut();
        } else {
            riUpdateBTN.fadeOut();
            riBackBTN.fadeIn(2000);
            riSubmitBTN.fadeIn(2000);
        }
    }

    function qiUpdateBtnToggle(toggle) {
        update = toggle;
        if (update === false) {
            qiUpdateBTN.fadeIn(2000);
            qiBackBTN.fadeOut();
            qiSubmitBTN.fadeOut();
        } else {
            qiUpdateBTN.fadeOut();
            qiBackBTN.fadeIn(2000);
            qiSubmitBTN.fadeIn(2000);
        }
    }


    function ciUpdateBtnToggle(toggle) {
        update = toggle;
        if (update === false) {
            ciUpdateBTN.fadeIn(2000);
            ciBackBTN.fadeOut();
            ciSubmitBTN.fadeOut();
        } else {
            ciUpdateBTN.fadeOut();
            ciBackBTN.fadeIn(2000);
            ciSubmitBTN.fadeIn(2000);
        }
    }
///////////////////////////


// universal function to enable inputs for forms
    function enableFormInputs(form, toggle) {

        if (toggle === true)
            for (let i = 0; i < form.length; i++) {
                form[i].removeAttribute("disabled");
                form[i].classList.add("duration-1000");
                form[i].classList.add("transition-border");
                form[i].classList.add("border-pink-400");
                form[i].classList.add("text-gray-700");
                console.log(form)
            }
        else if (toggle === false) {
            for (let i = 0; i < form.length; i++) {
                form[i].setAttribute("disabled", true);
                form[i].classList.remove("border-pink-400");
                form[i].classList.remove("text-gray-700");


            }
        } else {
            console.log("Review Script")
        }
    }
//////////////////


/// Displays Forms On Click
    personalInfoHeader.click(function (){
        displayFormToggle("personal");
    });

    residentialInfoHeader.click(function (){
        displayFormToggle("residential");
    });


    cardInfoHeader.click(function (){
        displayFormToggle("card");
    });

    qualificationsInfoHeader.click(function (){
       displayFormToggle("qualification")
    });

//////////////



    /// Button Controls

    piUpdateBTN.click(function () {
        piUpdateBtnToggle(true)
        enableFormInputs(personalInfoForm[0], true)
    });

    piBackBTN.click(function () {
        piUpdateBtnToggle(false);
        enableFormInputs(personalInfoForm[0], false)
    });

    piSubmitBTN.click(function () {
        personalInfoForm[0].submit()

    });


    riUpdateBTN.click(function () {
        riUpdateBtnToggle(true)
        enableFormInputs(residentialInfoForm[0], true)
    });

    riBackBTN.click(function () {
        riUpdateBtnToggle(false);
        enableFormInputs(residentialInfoForm[0], false)
    });

    riSubmitBTN.click(function () {
        residentialInfoForm[0].submit()

    });


    qiUpdateBTN.click(function () {
        qiUpdateBtnToggle(true)
        enableFormInputs(qualificationImageForm[0], true)
        enableFormInputs(passportImageForm[0], true)
    });

    qiBackBTN.click(function () {
        qiUpdateBtnToggle(false);
        enableFormInputs(qualificationImageForm[0], false)
        enableFormInputs(passportImageForm[0], false)
    });

    qiSubmitBTN.click(function () {
        qualificationImageForm.submit()
        passportImageForm.submit()
    });


    ciUpdateBTN.click(function () {
        ciUpdateBtnToggle(true)
        enableFormInputs(cardInfoForm[0], true)
    });

    ciBackBTN.click(function () {
        ciUpdateBtnToggle(false);
        enableFormInputs(cardInfoForm[0], false)
    });

    ciSubmitBTN.click(function () {
        cardInfoForm[0].submit()

    });
    //////////////////////

});
