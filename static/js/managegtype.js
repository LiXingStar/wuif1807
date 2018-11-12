let {table, layer, $, laytpl} = layui;

table.render({
    elem: '#demo',
    cols: [[
        {field: 'gid', title: 'ID'},
        {field: 'title', title: '分类名称', edit: 'text'},
        {field: 'sname', title: '所属店铺'},
        {fixed: 'right', title: '操作', toolbar: '#barDemo', width: 150}
    ]],
    height: 'full-170',
    url: '/sdk/index.php/managegtype/query1',
    page: {
        prev: '&lsaquo;&lsaquo;',
        next: '&rsaquo;&rsaquo;'
    },
    limit: 3,
    limits: [3, 5, 10],
    loading: true,
    id: 'testReload',
    toolbar: '#toolbarDemo'

});

// 头部工具栏

table.on('toolbar(test)', function (obj) {
    let checkStatus = table.checkStatus(obj.config.id);
    if (obj.event == 'zhangsan') {
        let data = checkStatus.data;
        console.log(data);
        let arr = data.map(ele => ele.sname);
        $.ajax({
            url: '/sdk/index.php/manageshop/deletes',
            data: {id: arr.join()},
            success: function (res) {

            }
        })
    }
});

// 行

table.on('tool(test)', function (obj) {
    let data = obj.data;
    if (obj.event == 'del') {
        layer.confirm('真的删除行么', function (index) {
            $.ajax({
                url: '/sdk/index.php/managecate/delete',
                data: {cid: data.cid},
                dataType: 'json',
                success: function (res) {
                    console.log(res);
                    obj.del();
                    layer.close(index);
                }
            });

        })
    } else if (obj.event == 'edit') {
        location.href = '/sdk/index.php/managecate/edit?cid=' + data.cid;
    }

});

$('.demoTable .layui-btn').on('click', function () {
    let id = $('#demoReload').val();
    let sname = $('#title').val();
    let cid = $('#cid').val();
    table.reload('testReload', {
        page: {
            curr: 1,
        },
        where: {
            id,
            sname,
            cid
        }
    })
});

/* 排序 */
table.on('sort(test)', function (obj) {
    table.reload('testReload', {
        initSort: obj //记录初始排序，如果不设的话，将无法标记表头的排序状态。
        , where: { //请求参数（注意：这里面的参数可任意定义，并非下面固定的格式）
            field: obj.field //排序字段
            , order: obj.type //排序方式
        },
        page: {
            curr: 1,
        },
    });
});

/* 单元格编辑 */
table.on('edit(test)', function (obj) {
    let index = layer.load(2);
    let id = obj.data.gid;
    let type = obj.field;
    let value = obj.value;
    let fd = new FormData();
    fd.append('id', id);
    fd.append('type', type);
    fd.append('value', value);
    $.ajax({
        url: '/sdk/index.php/managegtype/update',
        // data:{id,type,value},
        data: fd,
        type: 'post',
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (res) {
            layer.close(index);
            if (res.code == 0) {

            } else {

            }
        }
    })
})
