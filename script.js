$("#audios").hide()

$(".filter_item").on("click", handleCards)

function handleCards(){
    item = $(this)
    itemName = item.attr("id")
    cardName = itemName.replace("li_", "")
    $(".filter_active").removeClass("filter_active")
    item.addClass("filter_active")
    $(".pcw_active").hide();
    $(".pcw_active").removeClass("pcw_active");
    $("#" + cardName).show();
    $("#" + cardName).addClass("pcw_active");
}