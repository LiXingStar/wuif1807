$(function () {
    let store = $('ul.store');
    let load = $('.loadBox');
    let lists = $('.sp-list>li');
    let orderList = $('.tt>li');
    /* cid order page  limit */
    let cid = 0, order = 'id', page = 0, limit = 5;
    let pages = 1; // 页数
    let iscroll = new IScroll('.list', {
        probeType: 3,
        scrollbars: true,
        click: true,
        fadeScrollbars: true
    });
    // 是否需要
    let scrollUp = $('.scrollUp');
    let scrollDown = $('.scrollDown');
    let flag = false, flag1 = true;
    /*
    *  下拉
    * */
    iscroll.on('scroll', function () {
        if (this.y > 50) {
            scrollUp.css('display', 'block');
            flag = true;
            return;
        }
        if (this.y > 0 && this.y < 50) {
            scrollUp.css('display', 'none');
            return;
        }

        if (this.maxScrollY - this.y > 50) {
            scrollDown.css('display', 'block');
            flag = true;
            return;
        }
        if (this.maxScrollY - this.y > 0 && this.maxScrollY - this.y < 50) {
            scrollDown.css('display', 'none');
            return;
        }

    });
    iscroll.on('scrollEnd', function () {
        if (flag && flag1) {
            getData();
        }

    });

    /*  点击分类
    *
    *  栏目 排序 第一页
    * */

    lists.on('click',function(){
       cid = $(this).attr('cid');
       order = 'id';
       page = 0;
       pages = 1;
       store.empty();
       getData();


    });

    lists.triggerHandler('click');


    /*  排序 */
     orderList.on('click',function(){
        order = $(this).attr('type');
        page = 0;
        pages = 1;
        store.empty();
        orderList.removeClass('hot').filter(this).addClass('hot');
        getData();

     });


    /*  获取数据 */
    function getData() {
        page++;
        if(page > pages){
            alert('没有更多数据');
            return ;
        }
        flag = false;
        flag1 = false;
        load.css('display', 'flex');
        /*
        *  栏目 排序规则  页码  limit
        * */
        $.ajax({
            url: '/sdk/index.php/food/lists',
            data: {
                page: page,
                limit: limit,
                cid: cid,
                order: order,
                pid:location.search.split('=')[1]
            },
            dataType: 'json',
            success: function (res) {
                pages = res.pages
                render(res.result);
            }
        })
    }


    function render(data) {
        flag1 = true;
        load.css('display', 'none');
        let html = '';
        data.forEach(ele => {
            html += `
           <li>
		   	  	<a href="/sdk/index.php/shop?sid=${ele.id}"><img src="${ele.sthumb}"/></a>
		   	  	<div class="right">
		   	  		<h4>${ele.sname}</h4>
		   	  		<span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="/sdk/static/images/stargray.png"/>
							</div>
							<div class="star5" style="width: ${ele.score / 5 * 100}%;">
								<img src="/sdk/static/images/star-yellow.png"/>
							</div>
						</div> 
						<p class="count">月销售${ele.sale}</p> <p class="distance">1.0KM</p></span>
		   	  		<span><p class="send"> ${ele.fee} </p> <p class="free"></p></span>
		   	  		<span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
		   	  		<span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
		   	  	</div>
		   	  </li>
           `;
        });

        store.html(function (index, value) {
            return html + value;
        });

        iscroll.refresh();


    }

});
