$(window).scroll(function() {
    if($(window).scrollTop() > 100) {
        $('.nav-link').removeClass('topbarnav');
        $('.dummyclass').removeClass('orderacablink');
        $('.dummypicclass').removeClass('fulidpic');
        $('.nav-link').addClass('smallnavitems');
        $('.dummyclass').addClass('smallordercabclass');
        $('.dummypicclass').addClass('forsmalleringpic');
    }
    if($(window).scrollTop() < 100) {
        $('.nav-link').removeClass('smallnavitems');
        $('.dummyclass').removeClass('smallordercabclass');
        $('.dummypicclass').removeClass('forsmalleringpic');
        $('.nav-link').addClass('topbarnav');
        $('.dummyclass').addClass('orderacablink');
        $('.dummypicclass').addClass('fulidpic');
    }
 });