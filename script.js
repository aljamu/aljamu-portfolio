$("#li_audio").on("click", handleAudio)
$("#li_film").on("click", handleVideo)
$("#audios").hide()

function handleAudio(){
    $(".filter_active").removeClass("filter_active")
    $("#li_audio").addClass("filter_active")
    $(".pcw_active").hide();
    $(".pcw_active").removeClass("pcw_active");
    $("#audios").show();
    $("#audios").addClass("pcw_active");
}

function handleVideo(){
    $(".filter_active").removeClass("filter_active")
    $("#li_film").addClass("filter_active")
    $(".pcw_active").hide();
    $(".pcw_active").removeClass("pcw_active");
    $("#videos").show();
    $("#videos").addClass("pcw_active");
}