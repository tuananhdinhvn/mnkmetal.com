function readURL_admin_img_1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#preview_img_1_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$("preview_img_1_input").change(function() {
    readURL(this);
});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('.image_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$(".image_input").change(function() {
    readURL(this);
});


//Layout Product Admin
function readURL_product_advertise(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#product_advertise_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$("#product_advertise_input").change(function() {
    readURL_product_advertise(this);
});


function readURL_product_banner(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#product_banner_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$("#product_banner_input").change(function() {
    readURL_product_banner(this);
});



//Layout Homepage Admin
function readURL_homepage_logo(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#homepage_logo_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}

$("#homepage_logo_input").change(function() {
    readURL_homepage_logo(this);
});



function readURL_homepage_favicon(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#homepage_favicon_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#homepage_favicon_input").change(function() {
    readURL_homepage_favicon(this);
});

function readURL_slide_img_1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#slide_img_1_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#slide_img_1_input").change(function() {
    readURL_slide_img_1(this);
});

function readURL_slide_img_2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#slide_img_2_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#slide_img_2_input").change(function() {
    readURL_slide_img_2(this);
});

function readURL_slide_img_3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#slide_img_3_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#slide_img_3_input").change(function() {
    readURL_slide_img_3(this);
});

function readURL_bannertop_img_1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#bannertop_img_1_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#bannertop_img_1_input").change(function() {
    readURL_bannertop_img_1(this);
});

function readURL_bannertop_img_2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#bannertop_img_2_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#bannertop_img_2_input").change(function() {
    readURL_bannertop_img_2(this);
});

function readURL_bannertop_img_3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#bannertop_img_3_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#bannertop_img_3_input").change(function() {
    readURL_bannertop_img_3(this);
});

function readURL_bannertop_img_4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#bannertop_img_4_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#bannertop_img_4_input").change(function() {
    readURL_bannertop_img_4(this);
});

function readURL_aboutus_img(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#aboutus_img_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#aboutus_img_input").change(function() {
    readURL_aboutus_img(this);
});

function readURL_aboutus_icon_1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#aboutus_icon_1_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#aboutus_icon_1_input").change(function() {
    readURL_aboutus_icon_1(this);
});

function readURL_aboutus_icon_2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#aboutus_icon_2_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#aboutus_icon_2_input").change(function() {
    readURL_aboutus_icon_2(this);
});

function readURL_aboutus_icon_3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#aboutus_icon_3_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#aboutus_icon_3_input").change(function() {
    readURL_aboutus_icon_3(this);
});

function readURL_aboutus_icon_4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#aboutus_icon_4_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#aboutus_icon_4_input").change(function() {
    readURL_aboutus_icon_4(this);
});

function readURL_promotion_img(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#promotion_img_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#promotion_img_input").change(function() {
    readURL_promotion_img(this);
});

function readURL_whyus_img(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#whyus_img_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#whyus_img_input").change(function() {
    readURL_whyus_img(this);
});

function readURL_whyus_icon_1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#whyus_icon_1_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#whyus_icon_1_input").change(function() {
    readURL_whyus_icon_1(this);
});

function readURL_whyus_icon_2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#whyus_icon_2_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#whyus_icon_2_input").change(function() {
    readURL_whyus_icon_2(this);
});

function readURL_whyus_icon_3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#whyus_icon_3_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#whyus_icon_3_input").change(function() {
    readURL_whyus_icon_3(this);
});

function readURL_whyus_icon_4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#whyus_icon_4_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#whyus_icon_4_input").change(function() {
    readURL_whyus_icon_4(this);
});

function readURL_whyus_icon_5(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#whyus_icon_5_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#whyus_icon_5_input").change(function() {
    readURL_whyus_icon_5(this);
});

function readURL_whyus_icon_6(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
        $('#whyus_icon_6_output').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}
$("#whyus_icon_6_input").change(function() {
    readURL_whyus_icon_6(this);
});