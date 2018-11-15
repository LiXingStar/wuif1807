$(function () {
    let oid = location.search.split('=')[1];
    let total = 0;
    $.ajax({
        url: '/sdk/index.php/shop/orderdetail',
        type: 'POST',
        dataType: 'json',
        data: {oid},
        success: function (res) {
             total = res.order.discount;
             setshopname(res.shopname);
             rendergoods(res.goods);
             setorder(res.order.discount , res.order.total-res.order.discount);
        }
    });

    $('.footer-r').on('click',function(){
        /*$.ajax({
            url:'/sdk/index.php/shop/pay',
            type:'post',
            data:{
                oid,
                total
            },
            success:function(res){
                console.log(res);
            }
        })*/
        location.href = `/sdk/index.php/shop/paysuccess?money=${total}&oid=${oid}`;
    });

    function setshopname(value) {
        $('.bottom > h1').text(value);
    }

    function rendergoods(arr) {
        let html = '';
        let four = $('.four');
        four.empty();
        arr.forEach(ele => {
            html += `
             <li>
                <a href="/sdk/index.php/shop/gooddetail?id=${ele.id}"><img src="${ele.thumb}" alt="" /></a>
                <div class="price">
                    <h1>${ele.title}</h1>
                 <span><i class="iconfont icon-chenghaoshixin"></i></span>
                 <s>¥ ${ele.discount}</s><p>¥ ${ele.price}</p>
                </div>
             </li>
           `;
        })

        four.html(html);
    }

    function setorder(price,dis){
        $('.footer-l > p').text('¥ '+ price);
        $('.footer-l > span').text('|  已优惠¥ '+ dis);
    }
});