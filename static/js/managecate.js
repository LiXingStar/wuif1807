let {table, layer, $} = layui;

table.render({
    elem: '#demo',
    cols: [[
        {type: 'checkbox', fixed: 'left'},
        {field: 'cid', title: 'CID', width: 80},
        {field: 'title', title: '栏目名称', width: 120},
        {field: 'thumb', title: '缩略图', templet: '<div><img src="{{d.thumb}}"></div>'},
        {field: 'pid', title: 'PID', width: 120},
        {fixed: 'right', title: '操作', toolbar: '#barDemo', width: 150}
    ]],
    height: 'full-170',
    url: '/sdk/index.php/managecate/query',
    page: {
        prev: '&lsaquo;&lsaquo;',
        next: '&rsaquo;&rsaquo;'
    },
    limit: 3,
    limits: [3, 5, 10],
    loading: true,
    toolbar: '#toolbarDemo',
    id: 'testReload'

});

// 头部工具栏

table.on('toolbar(test)', function (obj) {
    let checkStatus = table.checkStatus(obj.config.id);
    switch (obj.event) {
        case 'getCheckData':
            console.log(checkStatus.data);
            break;
        case 'getCheckLength':
            console.log(checkStatus.data.length);
            break;
        case 'isAll':
            console.log(checkStatus.isAll);
            break;
    }
    ;
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
    let val = $('#demoReload').val();
    let title = $('#title').val();
    let pid = $('#pid').val();
    table.reload('testReload', {
        page: {
            curr: 1,
        },
        where: {
            cid: val,
            title: title,
            pid
        }
    })
});
