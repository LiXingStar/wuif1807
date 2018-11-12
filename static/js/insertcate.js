// 解构
let {$, upload, form, layer} = layui;

let thumb = $('input:hidden');
let imgbox = $('.imgBox')

upload.render({
    elem: '#test1',
    url: '/sdk/index.php/upload',
    acceptMime: 'image/jpg, image/png, image/webp',
    exts:'jpg|png|gif|bmp|jpeg|webp',
    done: function (res) {
        let html = `
            <img src="${res.msg}" alt="" id="thumb" width="100">
            <div class="mask"></div>
            <div class="button">
                <i class="layui-icon layui-icon-search"></i>
                <i class="layui-icon layui-icon-delete"></i>
            </div>
                      
        `;
        thumb.val(res.msg);

        $('<li>').html(html).appendTo(imgbox);

    }
});



imgbox.on('click','.layui-icon-delete',function(){
    $(this).closest('li').remove();
    thumb.val('');
});



form.on('submit(submit)', function (data) {
    // let qs = data.field;
    console.log(data.field);
    if(!data.field.thumb){
        layer.alert('请上传图片');
        return false;
    }

    let qs = $('form').serialize();

    $.ajax({
        url: '/sdk/index.php/managecate/insert1',
        data: qs,
        dataType: 'json',
        success: function (res) {
            if (res.code == 0) {
               /* layer.open({
                    title: res.msg,
                    type: 1,
                    icon: 1
                })*/
               location.href='/sdk/index.php/managecate/insert'
            } else {
                layer.open({
                    title: res.msg,
                    type: 1,
                    icon: 5
                })
            }
        }

    })


    return false;
});



