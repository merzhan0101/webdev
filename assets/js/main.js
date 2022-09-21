var offset = 0;//смещение от левого края
const sliderLine = document.querySelector('.slider-line');//вызов класса sliderline

//NEXT
document.querySelector('.slider-next').addEventListener('click', function(){
    offset += 256;
    if(offset > 1024){/* 4 картинки по 256 */ 
        offset = 0;
    }
    sliderLine.style.left = -offset + 'px';//positon - left
});

//PREV
document.querySelector('.slider-prev').addEventListener('click', function(){
    offset -= 256;
    if(offset < 0){
        offset = 768;
    }
    sliderLine.style.left = -offset + 'px';
});