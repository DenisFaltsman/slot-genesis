/**
 * Created by suspiria on 07.10.18.
 */

dataOperation = function(values) {
    var result = '';
    $.ajax({
        url: "/slot/process",
        type: "get",
        data: values,
        headers: {'X-CSRF-TOKEN':  csrfToken.attr('content')},
        async: false,
        datatype: "json",
        success: function (response) {
            result = response;
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
    return result;
};

checkBoxAction = function(el) {
    $('.' + el).on('change',function() {
        var checkBoxValue = ($(this).is(':checked')) ? '1' : '0';

        if (el === "isLazy" && checkBoxValue == 1) {
            showAdv.addClass('show');
            slot.removeClass('show').addClass('hide');
        }
        if (el === "isLazy" && checkBoxValue == 0) {
            showAdv.removeClass('show').addClass('hide');
        }

        if (el === "isAvailable" && checkBoxValue == 0) {
            slot.addClass('hide');
            showAdv.removeClass('show').addClass('hide');
            lazy.attr("disabled", true);
        }
        if (el === "isAvailable" && checkBoxValue == 1) {
            slot.addClass('hide');
            showAdv.removeClass('show').addClass('hide');
            lazy.removeAttr("disabled");
        }

        var obj = {};
        obj[el] = checkBoxValue;
        dataOperation(obj);
    });
};

(function($) {
    $('document').ready(function(){
        lazy      = $('.isLazy');
        available = $('.isAvailable');
        slot      = $('.slot');
        showAdv   = $('.showAdv');
        csrfToken = $('meta[name="csrf-token"]');

        var result = $.parseJSON(dataOperation('')),
            isAvailable = result['isAvailable'],
            isLazy = result['isLazy'];
            slotHtml = '<div>' + result['slotElementId'] +
                       '</div><div>' + result['slotName'] +
                       '</div><div>' + result['slotSizes'] + '</div>';

        slot.html(slotHtml);
        if (isAvailable == 1) {
            available.prop('checked', true);
        }
        if (isAvailable == 0) {
            slot.removeClass('show').addClass('hide');
            showAdv.removeClass('show').addClass('hide');
            lazy.attr("disabled", true);
        }
        if (isLazy == 1) {
            lazy.prop('checked', true);
            showAdv.addClass('show');
            slot.removeClass('show').addClass('hide');
        }
        if (isAvailable == 1 && isLazy == 0) {
            slot.addClass('show');
        }
        if (isAvailable == 0 && isLazy == 1) {
            showAdv.removeClass('show').addClass('hide');
        }

        showAdv.on('click', function(e){
            e.preventDefault();
            if (slot.hasClass('show')) {
                slot.removeClass('show');
                $(this).html('Show Adv');
            } else {
                slot.addClass('show');
                $(this).html('Hide Adv');
            }
        });

        checkBoxAction('isAvailable');
        checkBoxAction('isLazy');

    });
})(jQuery);

