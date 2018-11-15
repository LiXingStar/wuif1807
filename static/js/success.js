$(function(){
    let search = location.search.substring(1).split('&');
    let money = search[0].split('=')[1];
    let oid = search[1].split('=')[1];

    $('.success > span').text('¥ '+money);
    $('.two > a').attr('href','/sdk/index.php/order/detail?oid='+oid);
});