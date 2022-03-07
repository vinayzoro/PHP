let loadingHtml = "<i class='fa fa-spinner fa-spin ml-1'></i>";
let emailExpr = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
let mobileExpr = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
let urlExpr = /^(?:(?:(?:https?|http):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:[/?#]\S*)?$/i;
function buttonLoading(loadingElement) {
    $(loadingElement).append(loadingHtml);
    $(loadingElement).prop('disabled', true);
}

function removeButtonLoading(loadingElement) {
    loadingElement.prop('disabled', false);
    $("i").remove(".fa-spinner");
}

let eye = 'img/eye.png';
let eyeSlash = 'img/eye-slash.png';
let bookmark = 'far';
let bookmarkFill = 'fas';
let fullScreen = 'img/fullscreen.png';
let exitfullScreen = 'img/exit-fullscreen.png';
let sliderWidth = Math.ceil($('#productsCarousel').width());
console.log('slider width:' + sliderWidth);
let owlImage = $('#detailsCarousel').find('img').height();
$('.owl-video-wrapper').css('height', owlImage);
$(document).ready(function () {
    $('.loading-spinner').hide();
    new WOW().init();
	$(".drop-down .selected a").click(function() {
    $(".drop-down .options ul").toggle();
});

//SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
$(".drop-down .options ul li a").click(function() {
    var text = $(this).html();
    $(".drop-down .selected a span").html(text);
    $(".drop-down .options ul").hide();
}); 


//HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
$(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("drop-down"))
        $(".drop-down .options ul").hide();
});
});
$(document).on('hidden.bs.modal', function () {
    if ($('.modal.show').length) {
        $('body').addClass('modal-open');
    }
});
$(window).on('scroll', function () {
    if ($(this).scrollTop() > 600) {
        $('.scroll-top').css('transform', 'scale(1)');
    } else {
        $('.scroll-top').css('transform', 'scale(0)');
    }
});
$('body').on('click', '.scroll-top', function () {
    $("html,body").animate({scrollTop: 0}, 500);
    return false;
}).on('click', '.navbar-toggler', function () {
    $('.c-hamburger').toggleClass('is-active');
}).on('click', '.nav-link', function () {
    $('.nav-item').removeClass('dropdown--open');
    $(this).closest('.nav-item').toggleClass('dropdown--open');
    $('.nav-item .navbaritem-dropdown').removeClass('d-inline-flex');
    $(this).closest('.nav-item').find('.navbaritem-dropdown').toggleClass('d-inline-flex');
}).on('click', '.navbaritem-maincategory li a', function () {
    $(this).parentsUntil('.navbaritem-maincategory').find('li a').removeClass('activemenu');
    $(this).addClass('activemenu');
    $(this).closest('.navbaritem-dropdown').find('.navbaritem-subcategory').addClass('subcategory--active');
}).on('click', '.navbaritem-subcategory li a', function () {
    $(this).parentsUntil('.navbaritem-subcategory').find('li a').removeClass('activemenu');
    $(this).addClass('activemenu');
    $(this).closest('.navbaritem-dropdown').find('.navbaritem-detailcategory').addClass('detailcategory--active');
}).on('click', '.navbaritem-subbackarrow', function () {
    $(this).closest('.navbaritem-dropdown').find('.navbaritem-subcategory').removeClass('subcategory--active');
}).on('click', '.navbaritem-detailbackarrow', function () {
    $(this).closest('.navbaritem-dropdown').find('.navbaritem-detailcategory').removeClass('detailcategory--active');
}).on('blur', '.modal-formcontrol, .feedback-formcontrol', function () {
    var $this = $(this);
    if ($this.val()) {
        $this.addClass('used');
    } else {
        $this.removeClass('used');
    }
}).on('click', '.eye-btn', function () {
    let src = $(this).find('img').attr('src');
    if (src == eye) {
        $(this).find('img').attr('src', eyeSlash);
        $(this).parent().find('input').attr('type', 'text');
    } else {
        $(this).find('img').attr('src', eye);
        $(this).parent().find('input').attr('type', 'password');
    }
}).on('click', '.bookmark-btn, .singlestore-bookmark', function () {
    let bookmarkClass = $(this).find('svg').attr('data-prefix');
    $(this).parent().find('.servicesingle-img, .service-img, .service-sliderimg, .morestore-img').toggleClass('overlay');
    if (bookmarkClass == bookmark) {
        $(this).find('svg').attr('data-prefix', bookmarkFill);
        $(this).css('color', 'var(--color-primary)');
        $(this).css('transform', 'scale(1)');
    } else {
        $(this).find('svg').attr('data-prefix', bookmark);
        $(this).css('color', '');
        $(this).css('transform', 'scale(0)');
    }
}).on('click', '.fullscreen-btn', function () {
    $(this).parent('.single-fluid').toggleClass('fullscreen--active');
    $(this).parent('.single-fluid').find('.owl-item img, .owl-item .big-img').toggleClass('d-none');
    $('body').toggleClass('overflow-hidden');
    let owlImage = $('#detailsCarousel').find('img.big-img').height();
    $('.owl-video-wrapper').css('height', owlImage);
    //let screen = $(this).find('img').attr('src');
    //if (screen == fullScreen) {
     //   $(this).find('img').attr('src', exitfullScreen);
    //} else {
     //   $(this).find('img').attr('src', fullScreen);
   // }
}).on('keyup', function (e) {
    if (e.which == 27) {
        $('.fullscreen-btn').parent('.single-fluid').removeClass('fullscreen--active');
        $(this).parent('.single-fluid').find('.owl-item img, .owl-item .big-img').toggleClass('d-none');
        $('body').removeClass('overflow-hidden');
        let owlImage = $('#detailsCarousel').find('img').height();
        $('.owl-video-wrapper').css('height', owlImage);
       // let screen = $('.fullscreen-btn').find('img').attr('src');
        //if (screen == fullScreen) {
          //  $('.fullscreen-btn').find('img').attr('src', exitfullScreen);
       // } else {
       //     $('.fullscreen-btn').find('img').attr('src', fullScreen);
       // }
    }
}).on('click', '.singleslider', function () {
    $(this).parent('.slider').toggleClass('fullscreen--active');
    $(this).parent('.slider').find('.owl-item img').removeClass('d-none');
    $('#productsCarousel').css('width', sliderWidth);
   // let screenImg = $(this).find('img').attr('src');
    //console.log(screenImg);
   // if (screenImg == fullScreen) {
     //   $(this).find('img').attr('src', exitfullScreen);
   // } else {
    //    $(this).find('img').attr('src', fullScreen);
   // }
}).on('keyup', function (e) {
    if (e.which == 27) {
        $('.fullscreen-btn').parent('.slider').removeClass('fullscreen--active');
        $(this).parent('.slider').find('.owl-item img').removeClass('d-none');
        $('body').removeClass('overflow-hidden');
        //let screenImg = $('.fullscreen-btn').find('img').attr('src');
       // if (screenImg == fullScreen) {
        //    $('.fullscreen-btn').find('img').attr('src', exitfullScreen);
       // } else {
          //  $('.fullscreen-btn').find('img').attr('src', fullScreen);
       // }
    }
}).on("keyup", '#searchbyLocation', function () {
    let value = $(this).val().toLowerCase();
    $("#locationName li").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

function messageDisplay(message, timeOut, type) {
    type = $.trim(type);
    if (type == "") {
        type = "error";
    }

    if ($.trim(timeOut) == "") {
        timeOut = 1500;
    }

    var element = $("#wTdOl5MnWz");
    var color = "#dc3545";
    if (type == "success") {
        color = "#28a745";
    } else if (type == "error") {
        color = "#dc3545";
    }
    element.attr("style", "background-color:" + color);
    $("div#wTdOl5MnWz span").html(message);
    element.animate({
        height: 70
    }, 300).show();
    if (timeOut != -1) {
        setTimeout(function () {
            element.animate({
                height: 0
            }, 300, function () {
                element.hide();
            });
        }, timeOut);
    }
}

/* subscribe */

let userSubscribeElement = $('#userSubscribebtn');
let userEmailElement = $('#userSubscribeEmail');
userSubscribeElement.on('click', function () {
    subscribeSubmit();
});
userEmailElement.on('keyup', function (e) {
    if (e.which == 13) {
        subscribeSubmit();
    }
});
function subscribeSubmit() {
    let userSubscribeEmail = $('#userSubscribeEmail').val();
    if (userSubscribeEmail === "" || userSubscribeEmail === null) {
        $('#userSubscribeEmail').focus();
        messageDisplay('Please enter email', 1500, 'error');
        return false;
    }
    if (!emailExpr.test(userSubscribeEmail)) {
        $("#userSubscribeEmail").focus();
        messageDisplay("Please enter valid email", 1500, "error");
        return false;
    }
    $('#userSubscribeEmail, #userSubscribebtn').attr('disabled', true);
}
/* Login */

let loginSubmitElement = $('#loginModalsubmit');
let loginEmailElement = $('#loginUseremail');
let loginPasswordElement = $('#loginUserpassword');
loginSubmitElement.on('click', function () {
    loginSubmit();
});
loginEmailElement.on('keyup', function (e) {
    if (e.which == 13) {
        loginSubmit();
    }
});
loginPasswordElement.on('keyup', function (e) {
    if (e.which == 13) {
        loginSubmit();
    }
});
function loginSubmit() {
    let loginUseremail = $('#loginUseremail').val();
    let loginUserpassword = $('#loginUserpassword').val();
    if (loginUseremail === "" || loginUseremail === null) {
        $('#loginUseremail').focus();
        messageDisplay('Please enter email', 1500, 'error');
        return false;
    }
    if (!emailExpr.test(loginUseremail)) {
        $("#loginUseremail").focus();
        messageDisplay("Please enter valid email", 1500, "error");
        return false;
    }
    if (loginUserpassword === "" || loginUserpassword === null) {
        $('#loginUserpassword').focus();
        messageDisplay('Please enter password', 1500, 'error');
        return false;
    } else {
        buttonLoading('#loginModalsubmit');
    }
    $('#loginUseremail, #loginUserpassword').attr('disabled', true);
    $('#loginModal').modal('hide');
}

/* Forgot Password */

let forgotSubmitElement = $('#forgotModalSubmit');
let forgotEmailElement = $('#forgotUseremail');
forgotSubmitElement.on('click', function () {
    forgotSubmit();
});
forgotEmailElement.on('keyup', function (e) {
    if (e.which == 13) {
        forgotSubmit();
    }
});
function forgotSubmit() {
    let forgotUseremail = $('#forgotUseremail').val();
    if (forgotUseremail === "" || forgotUseremail === null) {
        $('#forgotUseremail').focus();
        messageDisplay('Please enter email', 1500, 'error');
        return false;
    }
    if (!emailExpr.test(forgotUseremail)) {
        $("#forgotUseremail").focus();
        messageDisplay("Please enter valid email", 1500, "error");
        return false;
    } else {
        buttonLoading('#forgotModalsubmit');
    }
    $('#forgotUseremail').attr('disabled', true);
    $('#forgotPasswordModal').modal('hide');
    $('#settingsModal').modal('show');
}

/* Settings */

$('body').on('click', '#settingsModalSubmit', function () {
    let settingsUsername = $('#settingsUsername').val();
    let settingsUseremail = $('#settingsUseremail').val();
    let settingsUserpassword = $('#settingsUserpassword').val();
    let settingsUserconfirm = $('#settingsUserconfirm').val();
    let settingsUsercity = $('#settingsUsercity').val();
    if (settingsUsername === "" || settingsUsername === null) {
        $('#settingsUsername').focus();
        messageDisplay('Please enter name', 1500, 'error');
        return false;
    }
    if (settingsUseremail === "" || settingsUseremail === null) {
        $('#settingsUseremail').focus();
        messageDisplay('Please enter email', 1500, 'error');
        return false;
    }
    if (!emailExpr.test(settingsUseremail)) {
        $("#settingsUseremail").focus();
        messageDisplay("Please enter valid email", 1500, "error");
        return false;
    }
    if (settingsUserpassword === "" || settingsUserpassword === null) {
        $('#settingsUserpassword').focus();
        messageDisplay('Please enter password', 1500, 'error');
        return false;
    }
    if (settingsUserconfirm === "" || settingsUserconfirm === null) {
        $('#settingsUserconfirm').focus();
        messageDisplay('Please enter confirm password', 1500, 'error');
        return false;
    }
    if (settingsUserpassword != settingsUserconfirm) {
        $('#settingsUserconfirm').focus();
        messageDisplay('New password and Confirm password should match', 1500, 'error');
        return false;
    }
    if (settingsUsercity === "" || settingsUsercity === null) {
        $('#settingsUsercity').focus();
        messageDisplay('Please select city', 1500, 'error');
        return false;
    } else {
        buttonLoading('#settingsModalSubmit');
    }
    $('#settingsUsername, #settingsUseremail, #settingsUserpassword, #settingsUserconfirm, #settingsUsercity').attr('disabled', true);
}).on('click', '#referModalSubmit', function () {
    let referServicename = $('#referServicename').val();
    let referServicedescription = $('#referServicedescription').val();
    let referServicecity = $('#referServicecity').val();
    let referServicelocation = $('#referServicelocation').val();
    let referPersonename = $('#referPersonename').val();
    let referPersonnumber = $('#referPersonnumber').val();
    let referWeblink = $('#referWeblink').val();
    if (referServicename === "" || referServicename === null) {
        $('#referServicename').focus();
        messageDisplay('Please enter service name', 1500, 'error');
        return false;
    }
    if (referServicedescription === "" || referServicedescription === null) {
        $('#referServicedescription').focus();
        messageDisplay('Please enter service description', 1500, 'error');
        return false;
    }
    if (referServicecity === "" || referServicecity === null) {
        $('#referServicecity').focus();
        messageDisplay('Please select city', 1500, 'error');
        return false;
    }
    if (referServicelocation === "" || referServicelocation === null) {
        $('#referServicelocation').focus();
        messageDisplay('Please select location', 1500, 'error');
        return false;
    }
    if (referPersonename === "" || referPersonename === null) {
        $('#referPersonename').focus();
        messageDisplay('Please enter person name', 1500, 'error');
        return false;
    }
    if (!mobileExpr.test(referPersonnumber)) {
        $("#referPersonnumber").focus();
        messageDisplay("Please enter valid number", 1500, "error");
        return false;
    }
    if (referWeblink === "" || referWeblink === null) {
        $('#referWeblink').focus();
        messageDisplay('Please enter web link', 1500, 'error');
        return false;
    }
    if (!urlExpr.test(referWeblink)) {
        $("#referWeblink").focus();
        messageDisplay("Please enter valid URL", 1500, "error");
        return false;
    } else {
        buttonLoading('#referModalSubmit');
    }
    $('#referServicename, #referServicedescription, #referServicecity, #referServicelocation, #referPersonename, #referWeblink').attr('disabled', true);
}).on('click', '#signupModalsubmit', function () {
    let signupUsername = $('#signupUsername').val();
    let signupUseremail = $('#signupUseremail').val();
    let signupUserpassword = $('#signupUserpassword').val();
    let signupUserconfirm = $('#signupUserconfirm').val();
    let signupUsercity = $('#signupUsercity').val();
    if (signupUsername === "" || signupUsername === null) {
        $('#signupUsername').focus();
        messageDisplay('Please enter name', 1500, 'error');
        return false;
    }
    if (signupUseremail === "" || signupUseremail === null) {
        $('#signupUseremail').focus();
        messageDisplay('Please enter email', 1500, 'error');
        return false;
    }
    if (!emailExpr.test(signupUseremail)) {
        $("#signupUseremail").focus();
        messageDisplay("Please enter valid email", 1500, "error");
        return false;
    }
    if (signupUserpassword === "" || signupUserpassword === null) {
        $('#signupUserpassword').focus();
        messageDisplay('Please enter password', 1500, 'error');
        return false;
    }
    if (signupUserconfirm === "" || signupUserconfirm === null) {
        $('#signupUserconfirm').focus();
        messageDisplay('Please enter confirm password', 1500, 'error');
        return false;
    }
    if (signupUserpassword != signupUserconfirm) {
        $('#signupUserconfirm').focus();
        messageDisplay('Password and Confirm password should match', 1500, 'error');
        return false;
    }
    if (signupUsercity === "" || signupUsercity === null) {
        $('#signupUsercity').focus();
        messageDisplay('Please select city', 1500, 'error');
        return false;
    } else {
        buttonLoading('#signupModalsubmit');
    }
    $('#signupUsername, #signupUseremail, #signupUserpassword, #signupUserconfirm, #signupUsercity').attr('disabled', true);
}).on('click', '#feedbackSubmitbtn', function () {
    let feedbackUseremail = $('#feedbackUseremail').val();
    let feedbackUsernumber = $('#feedbackUsernumber').val();
    let feedbackUsercategory = $('#feedbackUsercategory').val();
    let feedbackUsermessage = $('#feedbackUsermessage').val();
    if (feedbackUseremail === "" || feedbackUseremail === null) {
        $('#feedbackUseremail').focus();
        messageDisplay('Please enter email', 1500, 'error');
        return false;
    }
    if (!emailExpr.test(feedbackUseremail)) {
        $("#feedbackUseremail").focus();
        messageDisplay("Please enter valid email", 1500, "error");
        return false;
    }
    if (feedbackUsernumber === "" || feedbackUsernumber === null) {
        $('#feedbackUsernumber').focus();
        messageDisplay('Please enter mobile number', 1500, 'error');
        return false;
    }
    if (!mobileExpr.test(feedbackUsernumber)) {
        $("#feedbackUsernumber").focus();
        messageDisplay("Please enter valid mobile number", 1500, "error");
        return false;
    }
    if (feedbackUsercategory === "" || feedbackUsercategory === null) {
        $('#feedbackUsercategory').focus();
        messageDisplay('Please select category', 1500, 'error');
        return false;
    }
    if (feedbackUsermessage === "" || feedbackUsermessage === null) {
        $('#feedbackUsermessage').focus();
        messageDisplay('Please enter message', 1500, 'error');
        return false;
    } else {
        buttonLoading('#feedbackSubmitbtn');
    }
    $('#feedbackUseremail, #feedbackUsernumber, #feedbackUsercategory, #feedbackUsermessage').attr('disabled', true);
});
$('body').on('click', '#signupModalbtn', function () {
    $('#loginModal').modal('hide');
    $('#signupModal').modal('show');
}).on('click', '#forgotPasswordModalbtn', function () {
    $('#loginModal').modal('hide');
    $('#forgotModal').modal('show');
}).on('click', '#loginModalbtn', function () {
    $('#signupModal').modal('hide');
    $('#loginModal').modal('show');
});

$("a.selected").click(function() {
   $(this).toggleClass('visible');
   $(this).next('.cities ').toggleClass('visible');
}); 