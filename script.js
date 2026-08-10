$("#audios").hide()
$("#blender").hide()
$('#code').hide()

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

$(".portfolio-card").on("click", function (){

    var title = $(this).find("h3").text();
    var tag = $(this).find("h4").text();
    var imgPath = $(this).find("img").attr("src");
    var imgAlt = $(this).find("img").attr("alt");
    var description = $(this).find("p.description").text();
    var addition_info = $(this).find("p.additional_info").text() ?? null;
    var link = $(this).find("p.link").text();

    $("#overlay").show();
    $("#overlay_card").addClass("is-open");
    $("#overlay_card").append(`<img id="overlay_card_image" src="${imgPath}" alt="${imgAlt}">`);
    $("#overlay_card").append(`<div id="overlay_card_info"></div>`);
    $("#overlay_card_info").append(`<div id="overlay_card_wrapper"></div>`);
    $("#overlay_card_wrapper").append(`<h1 id="overlay_title">${title}</h1>`);
    $("#overlay_card_wrapper").append(`<button onclick="overlayClose()" id="overlay_cancel"><i class="fa fa-times" aria-hidden="true"></i></button>`);
    $("#overlay_card_info").append(`<h2 id="overlay_tag">${tag}</h2>`);
    $("#overlay_card_info").append(`<p id="overlay_description">${description}</p>`);
    $("#overlay_card_info").append(`<p id="overlay_additional_info">${addition_info}</p>`);
    link != "" ? $("#overlay_card_info").append(`<a id="overlay_link" href="${link}">See media here</a>`) : $("#overlay_card_info").append(`<p id="overlay_link">Media currently not available.</p>`);
})

function overlayClose(){
    $("#overlay").hide();
    $("#overlay_card").empty();
    $("#overlay_card").removeClass("is-open");
}