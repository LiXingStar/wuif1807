let {form,$,jquery,layer} = layui;

form.verify({
    username:function(value,item){
        if(!/[a-z]{3,6}/.test(value)){
            return '请输入3-6位小写字母';
        }
    },
    password:[
        /^[\S]{6,12}$/
        ,'密码必须6到12位，且不能出现空格'
    ]
});
form.on('submit(formDemo)',function(data){
    let qs = $('form').serialize();
    $.ajax({
      url:'/sdk/index.php/adminlogin/check',
      data:qs,
      success:function(res){
          if(res =='success'){
             layer.open({
                 type:0,
                 title:'登陆成功',
                 content:`欢迎${data.field.username}`,
                 skin:'layui-layer-molv',
                 icon:1,
                 shadeClose:true
             });
             // location.replace() ;
             setTimeout(()=>location.href='/sdk/index.php/managecate',2000);
          }else{
              layer.open({
                  type:0,
                  title:'登陆失败',
                  icon:5
              })
          }
      }
    });
    return false;
});
