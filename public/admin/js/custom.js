$(document).ready(function () {
    $('select.edit-field.edit-select.filter-select').click(function () {
        $(this).toggleClass('active');
    });
});


$(document).ready(function () {
    $(".word-limited").on("input", function () {
        let maxWords = 100; // Set word limit
        let words = $(this).val().trim().split(/\s+/).filter(word => word.length > 0);

        if (words.length > maxWords) {
            $(this).val(words.slice(0, maxWords).join(" "));
        }

        $(this).next(".wordCount").text(`${words.length}/${maxWords}`);
    });
});
// upload js
// PASSOWRD-EYE

$(function () {

    $('.eye').click(function () {
        if ($(this).hasClass('eye-close')) {
            $(this).removeClass('eye-close');
            $(this).addClass('eye-open');
            $(this).parent().parent().find('.password').attr('type', 'text');
        } else {
            $(this).removeClass('eye-open');
            $(this).addClass('eye-close');
            $(this).parent().parent().find('.password').attr('type', 'password');
        }
    });
});

// PASSOWRD-EYE

$(document).ready(function () {
    const fileUploadBox = $('.file-upload-box');
    const fileList = $('.file-list');
    const fileInput = $('.file-upload-input');

    // Handle drag and drop events
    fileUploadBox
        .on('dragover dragenter', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass('drag-over');
        })
        .on('dragleave dragend drop', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('drag-over');
        });

    // Handle file selection
    fileInput.on('change', function (e) {
        const files = e.target.files;
        handleFiles(files);
    });

    // Handle dropped files
    fileUploadBox.on('drop', function (e) {
        const files = e.originalEvent.dataTransfer.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        Array.from(files).forEach(file => {
            // Create progress bar element
            const progressBar = $('<div class="upload-progress"></div>');

            const fileItem = $(`
                        <div class="file-item">
                            <i class="fas fa-file file-icon"></i>
                            <span class="file-name" title="${file.name}">${file.name}</span>
                            <i class="fas fa-times remove-file"></i>
                            ${progressBar.prop('outerHTML')}
                        </div>
                    `);

            fileList.append(fileItem);

            // Remove progress bar after animation
            setTimeout(() => {
                fileItem.find('.upload-progress').remove();
            }, 1000);

            // Handle file removal
            fileItem.find('.remove-file').on('click', function (e) {
                e.stopPropagation();
                fileItem.fadeOut(300, function () {
                    $(this).remove();
                });
            });

            // Get appropriate FontAwesome icon based on file type
            const fileIcon = fileItem.find('.file-icon');
            const fileExtension = file.name.split('.').pop().toLowerCase();

            const iconMap = {
                'pdf': 'fa-file-pdf',
                'doc': 'fa-file-word',
                'docx': 'fa-file-word',
                'xls': 'fa-file-excel',
                'xlsx': 'fa-file-excel',
                'ppt': 'fa-file-powerpoint',
                'pptx': 'fa-file-powerpoint',
                'jpg': 'fa-file-image',
                'jpeg': 'fa-file-image',
                'png': 'fa-file-image',
                'gif': 'fa-file-image',
                'zip': 'fa-file-archive',
                'rar': 'fa-file-archive',
                'txt': 'fa-file-alt'
            };

            if (iconMap[fileExtension]) {
                fileIcon.removeClass('fa-file').addClass(iconMap[fileExtension]);
            }
        });
    }
});



// upload js



$(function () {
    $("#datepicker-1").datepicker();
    $("#datepicker-2").datepicker();
    $("#datepicker-3").datepicker();
    $("#datepicker-4").datepicker();
});

// SIDEBAR-DROPDOWN

$(document).ready(function () {
    $('.sidebar-dropdown-icon').click(function () {
        $(this).toggleClass('active');
        $(".sidebar-dropdown-list").slideToggle('fast');
    });
});

// SIDEBAR-DROPDOWN

// DATPICKER

$(function () {

    $('input[name="datefilter"]').daterangepicker({
        autoUpdateInput: false,
        opens: 'left',
        startDate: moment().startOf('hour'),
        locale: {
            cancelLabel: 'Clear'
        }
    });
});

$('input[name="datefilter"]').on('apply.daterangepicker', function (ev, picker) {
    $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
});

$('input[name="datefilter"]').on('cancel.daterangepicker', function (ev, picker) {
    $(this).val('');
});


$(document).ready(function () {
    $('.applyBtn').click(function () {
        $('.daterange-btn input').css("width", "210px");
    });
    $('.cancelBtn').click(function () {
        $('.daterange-btn input').css("width", "160px");
    });
});

$(document).ready(function () {
    $('.applyBtn').click(function () {
        $('.daterange-btn-2 input').css("width", "210px");
    });
    $('.cancelBtn').click(function () {
        $('.daterange-btn-2 input').css("width", "100px");
    });
});


// DATPICKER


// DROPDOWN

$(document).ready(function () {
    $('.influ-drop-btn').click(function () {
        $(".influ-drop-list").not($(this).parent().find(".influ-drop-list").slideToggle('fast')).slideUp();
        event.stopPropagation();
    });

    $('.influ-drop-btn').click(function () {
        $(".far").not($(this).parent().find(".far").toggleClass('active')).removeClass('active');
    });

    $(document).click(function () {
        $('.influ-drop-list').slideUp('fast');
        $(".far").removeClass('active');
    });
    $('.influ-drop-list').click(function () {
        event.stopPropagation();
    });
});

// DROPDOWN


// MORE-DROPDOWN

$(document).ready(function () {
    $('.influ-more-drop-btn').click(function () {
        $(".influ-more-drop-list").not($(this).parent().find(".influ-more-drop-list").slideToggle('fast')).slideUp();
        event.stopPropagation();
    });

    $(document).click(function () {
        $('.influ-more-drop-list').slideUp('fast');
    });
    $('.influ-more-drop-list').click(function () {
        event.stopPropagation();
    });
});

// MORE-DROPDOWN

// FAQ-POP-SERVICE-DROPDOWN

$(document).ready(function () {
    $('.faq-dropdown-btn').click(function () {
        $(".faq-dropdown-list").slideToggle('fast');
        $(this).toggleClass('active');
        event.stopPropagation();
    });

    $(document).click(function () {
        $('.faq-dropdown-list').slideUp('fast');
        $('.faq-dropdown-btn').removeClass('active');
    });
});

// FAQ-POP-SERVICE-DROPDOWN

// PASSOWRD-HIDE-SHOW

$(function () {
    $('#eye').click(function () {
        if ($(this).hasClass('fa-eye-slash')) {
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
            $('#password').attr('type', 'text');
        } else {
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
            $('#password').attr('type', 'password');
        }
    });
});

// PASSOWRD-HIDE-SHOW




// TOGGLE SIDEBAR

const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
    sidebar.classList.toggle('hide');
})

// TOGGLE SIDEBAR

// FAQ-MODAl

function openSuccessModal() {
    // Dismiss the first modal
    var firstModal = document.getElementById('add-faq-pop');
    var bootstrapModal = bootstrap.Modal.getInstance(firstModal);
    bootstrapModal.hide();

    // Open the second modal
    var secondModal = new bootstrap.Modal(document.getElementById('add-faq-succ-popup'));
    secondModal.show();
}

// FAQ-MODAl


jQuery(function ($) {
    $(".tutorial-video").each(function () {
        const $container = $(this);
        const $video = $container.find("video");
        const $playBtn = $container.find(".play-btn");

        $video.removeAttr("controls");

        $playBtn.on("click", function () {
            const videoEl = $video.get(0);
            videoEl.play();
            videoEl.controls = false;
            $playBtn.css("visibility", "hidden");
            return false;
        });

        $video.on("click", function () {
            const videoEl = $video.get(0);
            videoEl.pause();
            videoEl.controls = false;
            $playBtn.css("visibility", "visible");
            return false;
        });

        // Video end event
        $video.on("ended", function () {
            const videoEl = $video.get(0);
            videoEl.controls = false;
            $playBtn.css("visibility", "visible");
        });
    });
});



