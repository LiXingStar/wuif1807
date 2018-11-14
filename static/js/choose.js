$(function () {
    let scrollr = $('.scrollr');
    let menu = $('.left');
    let arr = [];
    let list = null;
    let scrollright = null;


    cancelCar();
    $.ajax({
        url: '/sdk/index.php/shop/detail',
        data: {sid: location.search.split('=')[1]},
        dataType: 'json',
        success: function (res) {
            let titles = res.map(ele => ele.title);
            renderTitle(titles);
            renderLists(res);
            initScroll();
            calcheight();
        }
    });

    // initiscroll
    function initScroll() {
        list = $('.scrollr > li');
        let scrollleft = new IScroll('.scrleft', {
            click: true
        });
        scrollright = new IScroll('.scrright', {
            click: true,
            probeType: 3
        });
        scrollright.on('scroll', function () {
            let scrolly = Math.abs(Math.round(this.y));
            let index = scroll(scrolly);
            $('li', menu).removeClass('hot').eq(index).addClass('hot');
        });
    }

    // i
    function scroll(y) {
        for (let i = 0; i < list.length; i++) {
            let tops = arr[i], bottom = arr[i + 1];
            if (!bottom || y >= tops && y < bottom) {
                return i;
            }
        }

        return 0;
    }


    /* menu */
    menu.on('click', 'li', function () {
        let index = $(this).index();
        $('li', menu).removeClass('hot').filter(this).addClass('hot');
        scrollright.scrollTo(0, -arr[index], 1000, IScroll.utils.ease.quadratic);
    });

    /*  购物车 */
    let car = {
        total: 0,
        discount: 0,
        fee: 3,
        numbers: 0,
        goods: []
    };

    scrollr.on('click', '.jia', function () {
        let _this = $(this);
        let id = _this.closest('li').attr('id');
        let goodsinfo = JSON.parse(_this.closest('li').attr('data'));
        let data = car.goods.filter(ele => ele.id == id);


        if (data.length) {
            let numbers = ++data[0].numbers;
            _this.prev('.numbers').text(numbers);
        } else {
            goodsinfo.numbers = 1;
            car.goods.push(goodsinfo);
            _this.prev('.numbers').text(1).css('display', 'block');
            _this.prevAll('.jian').css('display', 'block');
        }

        calcTotal();
        calcNumbers();
        renderCar(car.goods);
        saveCar();
    });


    scrollr.on('click', '.jian', function () {
        let _this = $(this);
        let id = _this.closest('li').attr('id');
        let goodsinfo = JSON.parse(_this.closest('li').attr('data'));
        let data = car.goods.filter(ele => ele.id == id);
        let numbers = --data[0].numbers;
        if (numbers) {
            _this.next('.numbers').text(numbers);
        } else {
            _this.css('display', 'none').next('.numbers').css('display', 'none');
            car.goods = car.goods.filter(ele => ele.id != id)

        }
        calcTotal();
        calcNumbers();
        renderCar(car.goods);
        saveCar();
    });

    /* 计算总价  折扣价 */
    function calcTotal() {
        let total = 0;

        car.goods.forEach(ele => {
            total += ele.discount * ele.numbers
        });
        car.total = Math.round(total * 100) / 100;
        car.discount = Math.round(total * 100 * 0.9) / 100;

        $('.nowprice').text('¥ ' + car.total);
        $('.bfprice').text('¥ ' + car.discount);

        if (car.discount >= 20) {
            $(".footer-r").text('去支付').addClass('hot');
        } else {
            $(".footer-r").text(`还差${20 - car.discount}`).removeClass('hot');
        }

    }

    /* 计算数量 */
    function calcNumbers() {
        let numbers = 0;
        car.goods.forEach(ele => {
            numbers += ele.numbers;
        });

        car.numbers = numbers;
        $('span.nums').text(car.numbers);
        if (car.numbers) {
            $('span.nums').css('display', 'block');
            $('.neiceng').addClass('hot');
            $('.gouwuche').css('background', '#f9b626');
        } else {
            $('span.nums').css('display', 'none');
            $('.neiceng').removeClass('hot');
            $('.gouwuche').css('background', 'rgba(61, 61, 63, 1)');
        }
    }

    /* 结算  */
    $('.footer').on('click', '.footer-r.hot', function () {
        $.ajax({
            url:'/sdk/index.php/shop/car',
            type:'POST',
            data:car,
            dataType:'json',
            success:function(res){
               if(res.code == 1){
                   location.href = '/sdk/index.php/my?redirect=/shop?sid='+location.search.split('=')[1];
               }else if(res.code == 2){

               }else if(res.code == 0){
                   location.href = '/sdk/index.php/shop/confirm?oid='+res.orderid
               }
            }
        })
    });

    /* 购物车  */
    let flag = true;
    $('.tab').css('top', window.innerHeight - $('.manjian').outerHeight() - $('.footer').outerHeight());

    $('.footer').on('click', '.neiceng.hot', function () {
        if (flag) {
            let height = $('.manjian').outerHeight() - $('.tab').outerHeight();
            $('.tab').css('transform', `translate3d(0,${height}px,0)`);
        } else {
            $('.tab').css('transform', `translate3d(0,0,0)`);
        }
        flag = !flag;
    });
    /* 购物车加减 */
    $('.tab').on('click', '.jia', function () {
        let id = $(this).closest('li').attr('cid');
        $('#' + id).find('.jia').trigger('click');
    });
    /* 清空 */
    $('.oldchoose:last').on('click', function () {
        flag = true;
        $('.tab').css('transform', `translate3d(0,0,0)`);
        $('.tab').on('webkitTransitionEnd', function () {
            $(this).off('webkitTransitionEnd');
            clearCar();
            cancelCar();
        })
    });

    /* 清空购物车 */
    function clearCar() {
        car.goods = [];
        car.numbers = 0;
        car.total = 0;
        car.discount = 0;
        $('.lxCar').empty();
        $('.jian').css('display', 'none');
        $('.numbers').text(1).css('display', 'none');
        $('.nums').text(0).css('display', 'none');
        $('.gouwuche').css('background', 'rgba(61, 61, 63, 1)');
        $('.neiceng').removeClass('hot');
        $('.bfprice').text(0);
        $('.nowprice').text(0);
        $('.footer-r').removeClass('hot');
    }

    /* 渲染购物车 */

    function renderCar(arr) {
        let lxCar = $('.lxCar');
        lxCar.empty();
        let html = '';
        arr.forEach(ele => {
            html += `
                <li class="lxcarList" cid="${ele.id}">
                <span class="lxName">${ele.title}</span>
                <span class="lxPrice">¥ ${ele.discount * ele.numbers}</span>
                <span class="lxOpetion">
                    <div class="jiaj">
                        <div class="jian">
                            <img src="/sdk/static/images/jian.png"/>
                        </div>
                        <p class="numbers" style="display: block;">${ele.numbers}</p>
                        <div class="jia"><img src="/sdk/static/images/jia.png"/></div>
                    </div>
                </span>
            </li>
            `;
        })
        lxCar.html(html);

    }

    /* 计算高度 */
    function calcheight() {
        let height = 0;
        arr.push(height);
        for (let i = 0; i < list.length; i++) {
            height += list[i].offsetHeight;
            arr.push(height);
        }
    }

    /* 渲染 标题  */
    function renderTitle(arr) {
        menu.empty();
        let html = '';
        for (let i = 0; i < arr.length; i++) {
            if (i === 0) {
                html += `<li class="hot">${arr[i]}</li>`
            } else {
                html += `<li>${arr[i]}</li>`
            }
        }
        menu.html(html);
    }

    /* 渲染列表 */
    function renderLists(arr) {
        scrollr.empty();
        let html = '';
        for (let i = 0; i < arr.length; i++) {
            html += `
             <li>
                    <h3 class="section-title">${arr[i]['title']}</h3>
                    <ul class="right">
                       ${_rendergoods(arr[i]['goods'])}    
                    </ul>
                </li>
             `;

        }
        scrollr.html(html);
    }

    function _rendergoods(arr) {
        let html = '';
        for (let i = 0; i < arr.length; i++) {
            html += `
              <li id="${arr[i]['id']}" data=${JSON.stringify(arr[i])}>
                            <a href="details.html">
                               <img src="${arr[i]['thumb']}" alt=""/>
                            </a>
                            <div class="right-r">
                                <h1>${arr[i]['title']}</h1>
                                <div class="haocount">
                                    <p class="rate">好评率98%</p>
                                    <p class="count">月售${arr[i]['count']}</p>
                                </div>
                                <span>
										<h4 class="one">¥${arr[i]['discount']}</h4>
											<div class="jiaj">
												<div class="jian">
												   <img src="/sdk/static/images/jian.png"/>
												   </div>
                                                <p class="numbers">1</p>
										       <div class="jia"><img src="/sdk/static/images/jia.png"/></div>
											</div>
								        </span>
                            </div>
                        </li> 
            `;

        }
        return html;
    }

    /* 保存 */

    function saveCar() {
        localStorage.car = JSON.stringify(car);
    }

    function cancelCar() {
        let car = {
            total: 0,
            discount: 0,
            fee: 3,
            numbers: 0,
            goods: []
        };
        localStorage.car = JSON.stringify(car);
    }
});

