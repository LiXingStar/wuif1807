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
                if(location.search){
                    let redirect = location.search.substring(location.search.indexOf('=')+1);
                    location.href = '/sdk/index.php'+redirect;
                }else{
                    location.href='/sdk/index.php';
                }
            }
        })

    })
});