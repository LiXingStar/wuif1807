// 解构
let {$, upload, form, layer} = layui;
let arr = [];
let thumb = $('input:hidden[name=sthumb]');
let views =$('input:hidden[name=views]');
let thumbBox = $('.imgBox:first');
let viewsBox = $('.imgBox:last');
upload.render({
    elem: '#test1',
    url: '/sdk/index.php/upload',
    acceptMime: 'image/jpg, image/png, image/webp',
    exts: 'jpg|png|gif|bmp|jpeg|webp',
    done: function (res) {
        let lis = $('.imgBox:first >li');
        if (lis.length) {
            // 替换
            $('img', lis).attr('src', res.msg);
            thumb.val(res.msg);
        } else {
            let html = `
            <img src="${res.msg}" alt="" id="thumb" width="100">
            <div class="mask"></div>
            <div class="button">
                <i class="layui-icon layui-icon-search"></i>
                <i class="layui-icon layui-icon-delete"></i>
            </div>
                      
        `;
            thumb.val(res.msg);

            $('<li>').html(html).appendTo(thumbBox);
        }

    }
});
/*
* 多图上传
* */

upload.render({
    elem: '#test2',
    url: '/sdk/index.php/upload',
    acceptMime: 'image/jpg, image/png, image/webp',
    exts: 'jpg|png|gif|bmp|jpeg|webp',
    multiple: true,
    done: function (res) {
        let html = `
            <img src="${res.msg}" alt="" id="thumb" width="100">
            <div class="mask"></div>
            <div class="button">
                <i class="layui-icon layui-icon-search"></i>
                <i class="layui-icon layui-icon-delete"></i>
            </div>

        `;

        let val = views.val();
        if(!val){
            views.val(res.msg);
        }else{
            views.val(val+','+res.msg);
        }
        arr.push(res.msg);
        $('<li>').html(html).appendTo(viewsBox);
    }

});


thumbBox.on('click', '.layui-icon-delete', function () {
    $(this).closest('li').remove();
    thumb.val('');
});

viewsBox.on('click', '.layui-icon-delete', function () {
   let lis = $(this).closest('li');
   let index = lis.index();
   lis.remove();
   arr.splice(index,1);
   views.val(arr.join(','));
});


form.on('submit(submit)', function (data) {
    if (!data.field.sthumb) {
        layer.alert('请上传缩略图片');
        return false;
    }
    if (!data.field.views) {
        layer.alert('请上传实景图片');
        return false;
    }

    delete  data.field.file;
    $.ajax({
        type: 'post',
        url: '/sdk/index.php/manageshop/insert',
        data: data.field,
        dataType: 'json',
        success: function (res) {
            if (res.code == 0) {
                /* layer.open({
                     title: res.msg,
                     type: 1,
                     icon: 1
                 })*/
                location.href = '/sdk/index.php/manageshop'
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



