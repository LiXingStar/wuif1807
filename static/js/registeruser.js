$(function () {
    let submit = $('button[class=register]');

    $.validator.addMethod('password',function(value,element){
         return this.optional(element) || /^[a-z0-9A-Z]{6,8}$/.test(value);
    },'helloworld');

    $('#myform').validate({
        rules:{
           phone:{
               required:true,
               minlength:5,
               remote:{
                   url:'/sdk/index.php/my/checkusername',
                   type:'post',
                   data:{
                       phone:function(){
                           return $('input[name=phone]').val();
                       }
                   }
               }
           },
           password:{
               required:true,
               password:true,
           },
           password1:{
               required:true,
               equalTo:'#password'
           }
        },
        messages:{
           phone:{
               required:"请输入手机号",
               minlength:'最少输入5个字符',
               remote:'手机号已注册'
           },
           password:{
               required:'请输入密码',
               password:'请输入正确的密码'
           },
           password1:{
               required:'请输入密码',
               equalTo:'俩次密码保持一致'
           }
        },
        submitHandler:function(forms){
            let form=$('form[id=myform]');
            let fd =  new FormData(form[0]);
            $.ajax({
                url:'/sdk/index.php/my/registercheck',
                type:'post',
                data:fd,
                processData:false,
                contentType:false,
                dataType:'json',
                success:function(res){
                    if(res.code == 0){
                        alert(res.msg);
                    }else{
                        alert(res.msg);
                    }
                }
            })
        }
    })

   /* submit.on('click', function (e) {
        e.preventDefault();
        let form=$('form[id=myform]');
        let fd =  new FormData(form[0]);
        $.ajax({
            url:'/sdk/index.php/my/registercheck',
            type:'post',
            data:fd,
            processData:false,
            contentType:false,
            dataType:'json',
            success:function(res){
                console.log(res);
            }
        })

    })*/
});