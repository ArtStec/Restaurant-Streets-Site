// Init main slider
new Swiper(".swiper-main", {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: ".slider-button-next",
        prevEl: ".slider-button-prev",
    }
});

// Init all selects
$('select.select2').each(function () {
  let select = $(this);
  let isWhite = select.hasClass('dropdown-white');

    select.select2({
        minimumResultsForSearch: Infinity,
        dropdownAutoWidth: true,
        width: '100%',
        placeholder: function () {
            return select.data('data-placeholder') || '';
        },
        dropdownCssClass: isWhite ? 'dropdown-white' : ''
    });
});

// Open modal window on click 
$('.buttonModalOpen').on('click', function() {
    let targetEl = $(this).attr('data-target');
    let modal = $('body').find(targetEl);
    
    if (modal.length) {
        modal.fadeIn(300);
    }
});

// Close modal window on click
$('.buttonModalClose').on('click', function() {
    $(this).closest('.modal').fadeOut(300);
});

// Show / hide password on click
$('.buttonShowPass').on('click', function() {
    let svgs = $(this).find('svg');
    let inputPass = $(this).siblings('input');
    let isPassword = inputPass.attr('type') === 'password';
    inputPass.attr('type', isPassword ? 'text' : 'password');

    svgs.eq(0).css('display', isPassword ? 'none' : '');
    svgs.eq(1).css('display', isPassword ? '' : 'none');
});

// Copy text on click
$('.buttonCopy').on('click', function() {
    let content = $(this).find('.content').text();
    let button =  $(this);

    if (navigator.clipboard) {
        navigator.clipboard.writeText(content);
    }

    button.addClass('copied');
    setTimeout(function() {
        button.removeClass('copied');
    }, 1000);
});

$('.buttonMobileMenuOpen').on('click', function() {
   $('.mobileMenuContainer').toggleClass('active'); 
});

// Hide error / success messages under input on click
$('.input-group, .select-group').on('click input', function() {
    let msg = $(this).find('.msg');
    $(this).removeClass('error success');
    msg.fadeOut(300);
});

// Update custom file input placeholder on change
$('.file-input input[type="file"]').on('change', function () {
    let fileInput = $(this)[0];
    let files = fileInput.files;
    let filePlaceholder = $(this).closest('.file-input').find('.filePlaceholder');

    if (files.length > 0) {
        filePlaceholder.html(files[0].name);
        $(this).closest('.file-input').attr('data-uploaded', true);
    }
});