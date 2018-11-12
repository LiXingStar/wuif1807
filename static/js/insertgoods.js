// 解构
let {$, upload, form, layer} = layui;
let arr = [];
let thumb = $('input:hidden[name=thumb]');

let thumbBox = $('.imgBox:first');

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

thumbBox.on('click', '.layui-icon-delete', function () {
    $(this).closest('li').remove();
    thumb.val('');
});

/* 监听select */

form.on('select(shop)',function(data){
    $.ajax({
        url:'/sdk/index.php/managegoods/goodstype',
        data:{sid:data.value},
        dataType:'json',
        success:function(res){
            renderSelect(res);
        }
    })
});
function renderSelect(data){
    let select = $('select[name=gid]');
    let html = '';
    data.forEach(ele=>{
        html +=`
          <option value="${ele.gid}">${ele.title}</option>
        `
    });
    select.html(html);
    form.render('select', 'test2');
}


/*   */
form.on('submit(submit)', function (data) {
    if (!data.field.thumb) {
        layer.alert('请上传缩略图片');
        return false;
    }

    delete  data.field.file;
    $.ajax({
        url: '/sdk/index.php/managegoods/insert',
        data: data.field,
        dataType: 'json',
        success: function (res) {
            if (res.code == 0) {
                /* layer.open({
                     title: res.msg,
                     type: 1,
                     icon: 1
                 })*/
                location.href = '/sdk/index.php/managegoods'
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



