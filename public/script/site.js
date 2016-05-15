$(function(){
    //---SLIDER
    var $slides = $('.fc-slides');
    var $slide = $('.slide');
    var $pagination = $('.fc-slides .pager ul');
    var widthSlide = $('#fc_slider').width();
    var numSlide = $slide.length;
    var widthSlides = numSlide * widthSlide;
    var current = 0;

    $slide.css({'width':widthSlide});
    $slides.css({'width': widthSlides});
    var li ='';
    for (var i = 0; i < numSlide; i++) {
        li+='<li></li>';
    };
    $pagination.html(li);
    var $pager = $pagination.find('li');
    $pager.first().addClass('active');
    $pager.on('click', function(){
        var $pagerActive = $pagination.find('li.active');
        var indexOfActive = $pagerActive.index()+1;
        $pager.removeClass('active');
        $(this).addClass('active')
        var indexThis = $(this).index()+1;
        current = indexThis-1;
        if(indexThis > indexOfActive){
            console.log('this '+indexThis+'- active: '+ indexOfActive+'to right '+(indexThis-indexOfActive));
            $slides.stop(1000).animate({'margin-left':'-='+(indexThis-indexOfActive)*widthSlide}, 1000);
        }else{
            console.log('this '+indexThis+'- active: '+ indexOfActive+'to left '+(indexOfActive-indexThis));
            $slides.stop(1000).animate({'margin-left':'+='+(indexOfActive-indexThis)*widthSlide}, 1000);
        }
    });

    var interval = setInterval(function(){
        current++;
        var $pagerActiveInterval = $pagination.find('li.active');
        $pager.removeClass('active');
        $pagerActiveInterval.next().addClass('active');
        
        $slides.animate({'margin-left':'-='+widthSlide}, 1000);
        if(current === numSlide){
            $pager.removeClass('active');
            $pager.first().addClass('active');
            current=0;
            $slides.stop(1000).animate({'margin-left':'0'}, 1000);

        }
    }, 5000);



});