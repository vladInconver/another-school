jQuery(document).ready(function ($){
    // mask
    $('input[type="tel"]').attr("autocomplete", "off");
    $('input[type="tel"]').mask('8 (Z99) 999-99-99', {
        translation: {
            'Z': {
                pattern: "9",
                optional: false,
                fallback: '9'
            }
        }
    });
    $('.form-section_form-wrapper').each(function (){
        $(this).find('.wpcf7-checkbox input:checked').parent().addClass('checked');
    })
    $('.form-section_form-wrapper .wpcf7-checkbox input').change(function() {
        if ($(this).prop('checked'))
            $(this).parent().addClass('checked');
        else
            $(this).parent().removeClass('checked');
    })
})