$(document).ready(function () {
    
    $("#roleuser .clearfix .title input[type='checkbox']").change(function () {
        $(this).parent().parent().parent().find("input[name='CheckRoles']").prop("checked", this.checked);
    });

    $("#roleuser .clearfix input[name='CheckRoles']").change(function () {
        if (this.checked) {
            $(this).parent().parent().find(".title input[type='checkbox']").prop("checked", true);
        } else {
            var flag = true;
            $(this).parent().parent().find("input[name='CheckRoles']").each(function () {
                if (this.checked) {
                    flag = false;
                }
            });
            if (flag) {
                $(this).parent().parent().find('.title input').prop("checked", false);
            }
        }
    });

    $("#roleuser .clearfix").each(function () {
        var th = $(this);
        var flag = true;

        th.find("input[name='CheckRoles']").each(function () {
            if (!this.checked) {
                flag = false;
            }
        });
        if (flag) {
            th.find('.title input').prop("checked", true);
        }
    });
});