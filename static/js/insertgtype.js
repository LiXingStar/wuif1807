// 解构
let {$, form, layer} = layui;

form.on('submit(submit)', function (data) {
    let qs = $('form').serialize();
     let fd = new FormData($('form')[0]);
     // fd.append('','');
    $.ajax({
        url: '/sdk/index.php/managegtype/insert',
        data: fd ,
        type:'post',
        dataType: 'json',
        processData:false,
        contentType:false,
        success: function (res) {
            if (res.code == 0) {
               // location.href='/sdk/index.php/managegtype'
            } else {
                layer.open({
                    title: res.msg,
                    type: 1,
                    icon: 5
                })
            }
        }

    });
    return false;
});



