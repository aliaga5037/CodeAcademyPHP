/**
 * Created by Root on 6/8/2016.
 */

$(".main").submit(function () {
    var myUser = $("input[name=login]").val();
    var myPass = $("input[name=pswd]").val();
    if (myUser == "" && myPass == "") {
        $(".empty").slideDown();
        return false;
    } else if(myUser !== "root" && myPass !== "root") {
        $(".incorrect").slideDown();
        return false;
    } else {
        return true;
    }
});
$("input").focus(function () {
   $(".empty, .incorrect").fadeOut(1000);
});
