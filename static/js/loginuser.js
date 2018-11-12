$(function () {
    let submit = $('button[class=register]');

    submit.on('click', function (e) {
        e.preventDefault();
        let form=$('form');
        let fd =  form.serialize();
        $.ajax({
            url:'/sdk/index.php/my/logincheck',
            type:'post',
            data:fd,
            dataType:'json',
            success:function(res){
                console.log(res.msg);
            }
        })

    })
});