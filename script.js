var bio_title;
var social_links;

$(document).ready(function() {
    bio_title = '';
    social_links = {};
});

$(document).on('click', '.avatar', function(){
    $("#file_input").trigger("click");
});

$(document).on('change', '#file_input', function(){
    if (this.files && this.files[0]) {
        var fileType = this.files[0].type;
        
        if(fileType == "image/jpeg" || fileType == "image/png")
            readURL(this);
        else{
            $(this).val("");
            $('.avatar').attr('style', "z-index:unset;background-image: unset;").addClass("empty");
            $('.avatar svg.fa-camera').css('display', 'block');
            $('.avatar .delete-button').css('display', 'none');
            alert("You can only choose jpg or png images.")
        }
    } else {
        $(this).val("");
        $('.avatar').attr('style', "z-index:unset;background-image: unset;").addClass("empty");
        $('.avatar svg.fa-camera').css('display', 'block');
        $('.avatar .delete-button').css('display', 'none');
    }
});

var readURL = function (input) {
    var imagePath = '';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            imagePath = e.target.result;
            jQuery('.avatar').attr('style', "z-index:9999;background-image: url(" + imagePath + ")").removeClass("empty");
            $('.avatar svg.fa-camera').css('display', 'none');
            $('.avatar .delete-button').css('display', 'block');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).on('click', '.delete-button', function(e){
    e.stopPropagation();
    
    $('#file_input').val("");
    $('.avatar').attr('style', "z-index:unset;background-image: unset;").addClass("empty");
    $('.avatar svg.fa-camera').css('display', 'block');
    $('.avatar .delete-button').css('display', 'none');
});

$(document).on('click', '.bio-title', function(e){
    $(".smartpage-container .action-sheet.title-sheet").addClass("active");
    $("body").addClass("open-modal");

    bio_title = $(this).attr("data-id");
    getTitleValue(bio_title);
});

function getTitleValue(m_bio_title) {
    var flag;
    $('#bio_title_input').val('');

    if(m_bio_title == 'bio-name') {
        flag = $(".bio-name h1").hasClass("empty");
        if(!flag) $('#bio_title_input').val($(".bio-name h1").html());

        $(".smartpage-container .title-sheet .action-sheet-header .action-sheet-title").html('Name');
        $("#bio_title_input").attr("placeholder", "Name");
    } else if(m_bio_title == 'bio-email') {
        flag = $(".bio-email h1").hasClass("empty");
        if(!flag) $('#bio_title_input').val($(".bio-email h1").html());

        $(".smartpage-container .title-sheet .action-sheet-header .action-sheet-title").html('Email');
        $("#bio_title_input").attr("placeholder", "Email");
    } else if(m_bio_title == 'bio-phone') {
        flag = $(".bio-phone h1").hasClass("empty");
        if(!flag) $('#bio_title_input').val($(".bio-phone h1").html());

        $(".smartpage-container .title-sheet .action-sheet-header .action-sheet-title").html('Phone');
        $("#bio_title_input").attr("placeholder", "Phone");
    }
}

$(document).on('click', 'body.open-modal', function(e){
    $(".smartpage-container .action-sheet").removeClass("active");
    $("body").removeClass("open-modal");
});

$(document).on('click', '.smartpage-container .action-sheet-header .clickable-icon.success', function(e){
    $(".smartpage-container .action-sheet").removeClass("active");
    $("body").removeClass("open-modal");
});

$(document).on('click', '.smartpage-container .action-sheet .action-sheet-body', function(e){
    e.stopPropagation();
});

$(document).on('keyup', '#bio_title_input', function(e){
    var val = $(this).val();

    if(bio_title == 'bio-name') {
        if(val.trim() == '')
            $(".bio-name h1").html('<span>Name here</span>').addClass("empty");
        else
            $(".bio-name h1").html(val).removeClass("empty");
    } else if(bio_title == 'bio-email') {
        if(val.trim() == '')
            $(".bio-email h1").html('<span>Email here</span>').addClass("empty");
        else
            $(".bio-email h1").html(val).removeClass("empty");
    } else if(bio_title == 'bio-phone') {
        if(val.trim() == '')
            $(".bio-phone h1").html('<span>Phone here</span>').addClass("empty");
        else
            $(".bio-phone h1").html(val).removeClass("empty");
    }
});

$(document).on('click', '.add-social-links', function(e){
    setSocialLinkValues(social_links);

    $(".smartpage-container .action-sheet.link-sheet").addClass("active");
    $("body").addClass("open-modal");
});

function setSocialLinkValues(links) {
    $(".social-link-item").val('');
    
    for (var key in links) {
        if (!links.hasOwnProperty(key)) continue;
    
        var item = links[key];
        $("#" + key).val(item);
    }
}

$(document).on('click', '.social-link-save', function(e){
    $(".social-link-item").each(function(index) {
        social_links[$(this).attr('id')] = $(this).val().trim();
    });

    generateSocialBtns(social_links);
});

function generateSocialBtns(links) {
    var html = '';

    for (var key in links) {
        if (!links.hasOwnProperty(key)) continue;
        if(links[key].trim() == '') continue;

        html += `<div class="links-block" data-id="` + key + `">
                    <div class="block-item layout-button">
                        <div class="block-content">
                            <span>` + links[key] + `</span>
                        </div>
                    </div>
                </div>`;
    }

    $(".link-btns").html(html);
}