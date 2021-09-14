$(document).ready(function (){
    let sideBarVisible = true;
    let showSideBarBtn = $("#showSideBar");
    let hideSideBarBtn = $("#hideSideBar");
    showSideBarBtn.hide();

    $("#sideBarToggle").click(function (){
        if (sideBarVisible === true){
            $("#sideBar").fadeToggle(1000)
            showSideBarBtn.show(500)
            hideSideBarBtn.hide(500)
            sideBarVisible = false

        }
        else{
            $("#sideBar").fadeToggle(1000)
            hideSideBarBtn.show(500)
            showSideBarBtn.hide(500)
            sideBarVisible = true
        }
    });
});
