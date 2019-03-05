$(document).ready(function () {
    if ($('#dateci').length > 0) {
        if ($('#dateci').val() != '') {
            SetDateToDiv($('#dateci'));
            SetDateToDiv($('#dateco'));
        }

        $('#lbWelcome').text('Welcome Member');


        $('.hasDatepicker').change(function () {
            SetDateToDiv(this);
        });

        $('.pickadate-container').click(function (e) {
            e.stopPropagation();
            $('.hasDatepicker').each(function () {
                $(this).data().pickadate.close();
            });
            var inputdate = $('.hasDatepicker', this);
            inputdate.data().pickadate.open()
        });
    }
});

function SetDateToDiv(obj) {
    var dateformat = $(obj).val();
    var strDate = dateformat.split(' ')[0];
    var strMM = dateformat.split(' ')[1];
    var strYYYY = dateformat.split(' ')[2];
    $(obj).parent().find('.pickadate-dd').text(strDate);
    $(obj).parent().find('.pickadate-mm').text(strMM.replace(',', ' '));
    $(obj).parent().find('.pickadate-yy').text(strYYYY);
}
