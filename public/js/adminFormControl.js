$(document).ready(function (){

    let course_card_btn = $("#course_card_btn"),
        institution_card_btn = $("#institution_card_btn"),
        payment_activity_card_btn = $("#payment_activity_card_btn"),

        all_course_btn = $("#view_all_course-btn"),
        all_user_activity_btn = $("#view_all_user_activity"),

        dash_view = $("#dashboard-view"),
        appli_view = $("#applicant-view"),
        course_view = $("#course-view"),
        institution_view = $("#institution-view"),
        user_activity = $("#user-activity-view"),
        payment_activity = $("#payment-activity-view"),

        show_course_view = $("#show-course-view"),
        add_course_view = $("#add-course-view"),
        course_show_btn = $("#show-course-btn"),
        course_add_btn = $("#add-course-btn"),

        show_institution_view = $("#show-institution-view"),
        add_institution_view = $("#add-institution-view"),
        add_institution_btn = $("#add-institution-btn"),
        show_institution_btn = $("#show-institution-btn"),


        dash_btn = $("#dashboard-btn"),
        appli_btn = $("#applicants-btn"),
        course_btn = $("#course-btn"),
        inst_btn = $("#institution-btn"),
        userActivity_btn = $("#user_activity-btn"),
        payActivity_btn = $("#payment_activity-btn")



    adminFormDisplay("dashboard")




    function coursesBtnControl(toggle){

        course_show_btn.removeClass("bg-red-600")
        course_add_btn.removeClass("bg-pink-600")

        if (toggle === "show"){
            course_show_btn.addClass("bg-red-600")


            show_course_view.show()
            add_course_view.hide()

        }
        else if(toggle === "add"){

            course_add_btn.addClass("bg-pink-600")

            show_course_view.hide()
            add_course_view.show()

        }
    }

    function institutionBtnControl(toggle){

        show_institution_btn.removeClass("bg-red-600")
        add_institution_btn.removeClass("bg-pink-600")

        if (toggle === "show"){
            show_institution_btn.addClass("bg-red-600")


            show_institution_view.show()
            add_institution_view.hide()

        }
        else if(toggle === "add"){

            add_institution_btn.addClass("bg-pink-600")

            show_institution_view.hide()
            add_institution_view.show()

        }
    }

        function adminFormDisplay(form){

            dash_view.hide()
            appli_view.hide()
            course_view.hide()
            institution_view.hide()
            user_activity.hide()
            payment_activity.hide()

            activeTabView(form)

            if (form === "dashboard"){
                dash_view.show()
                appli_view.hide()
                course_view.hide()
                institution_view.hide()
                user_activity.hide()
                payment_activity.hide()
            }
            if (form === "application"){
                dash_view.hide()
                appli_view.show()
                course_view.hide()
                institution_view.hide()
                user_activity.hide()
                payment_activity.hide()
            }
            if (form === "course"){
                coursesBtnControl("show")
                dash_view.hide()
                appli_view.hide()
                course_view.show()
                institution_view.hide()
                user_activity.hide()
                payment_activity.hide()
            }
            if (form === "institution"){
                institutionBtnControl("show")
                dash_view.hide()
                appli_view.hide()
                course_view.hide()
                institution_view.show()
                user_activity.hide()
                payment_activity.hide()
            }
            if (form === "user_activity"){
                dash_view.hide()
                appli_view.hide()
                course_view.hide()
                institution_view.hide()
                user_activity.show()
                payment_activity.hide()
            }
            if (form === "payment_activity"){
                dash_view.hide()
                appli_view.hide()
                course_view.hide()
                institution_view.hide()
                user_activity.hide()
                payment_activity.show()
            }


        }

        function activeTabView(form){

            dash_btn.removeClass("bg-pink-700")
            dash_btn.removeClass("border-l-4")
            dash_btn.removeClass("border-pink-500")


            appli_btn.removeClass("bg-pink-700")
            appli_btn.removeClass("border-l-4")
            appli_btn.removeClass("border-pink-500")

            course_btn.removeClass("bg-pink-700")
            course_btn.removeClass("border-l-4")
            course_btn.removeClass("border-pink-500")

            inst_btn.removeClass("bg-pink-700")
            inst_btn.removeClass("border-l-4")
            inst_btn.removeClass("border-pink-500")

            userActivity_btn.removeClass("bg-pink-700")
            userActivity_btn.removeClass("border-l-4")
            userActivity_btn.removeClass("border-pink-500")


            payActivity_btn.removeClass("bg-pink-700")
            payActivity_btn.removeClass("border-l-4")
            payActivity_btn.removeClass("border-pink-500")

            if (form === "dashboard"){
                dash_btn.addClass("bg-pink-700")
                dash_btn.addClass("border-l-4")
                dash_btn.addClass("border-pink-500")
            }
            if (form === "application"){
                appli_btn.addClass("bg-pink-700")
                appli_btn.addClass("border-l-4")
                appli_btn.addClass("border-pink-500")
            }
            if (form === "course"){
                course_btn.addClass("bg-pink-700")
                course_btn.addClass("border-l-4")
                course_btn.addClass("border-pink-500")
            }
            if (form === "institution"){
                inst_btn.addClass("bg-pink-700")
                inst_btn.addClass("border-l-4")
                inst_btn.addClass("border-pink-500")
            }
            if (form === "user_activity"){
                userActivity_btn.addClass("bg-pink-700")
                userActivity_btn.addClass("border-l-4")
                userActivity_btn.addClass("border-pink-500")
            }
            if (form === "payment_activity"){
                payActivity_btn.addClass("bg-pink-700")
                payActivity_btn.addClass("border-l-4")
                payActivity_btn.addClass("border-pink-500")
            }

        }



        course_card_btn.on("click",function (){
            adminFormDisplay("course")
        });

        institution_card_btn.on("click",function (){
            adminFormDisplay("institution")
        });

        payment_activity_card_btn.on("click",function (){
            adminFormDisplay("payment_activity")
        });



        all_course_btn.on("click",function (){
            adminFormDisplay("course")
        });

        all_user_activity_btn.on("click",function (){
            adminFormDisplay("user_activity")
        });



        dash_btn.on("click",function (){
            adminFormDisplay("dashboard")
        });

        appli_btn.on("click",function (){
            adminFormDisplay("application")
        });

        course_btn.on("click",function (){
            adminFormDisplay("course")
        });

        inst_btn.on("click",function (){
        adminFormDisplay("institution")
        });

        userActivity_btn.on("click",function (){
            adminFormDisplay("user_activity")
        });

        payActivity_btn.on("click",function (){
            adminFormDisplay("payment_activity")
        });


        course_show_btn.on("click",function (){
            coursesBtnControl("show")
        })

        course_add_btn.on("click",function (){
            coursesBtnControl("add")
        })

        show_institution_btn.on("click",function (){
            institutionBtnControl("show")
        });

        add_institution_btn.on("click",function (){
            institutionBtnControl("add")
        });


});
