$(document).ready(function (){

    let course_img = $("#course-img"),
        course_nm = $("#image-nm")

    course_img.on("change",function (){
        course_nm[0].textContent = course_img[0].files[0].name
    });


});
