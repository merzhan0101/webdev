const maxImg = document.querySelector('.right-panel img'); 
const select = document.querySelector('select');
const allLang = ['en', 'ru', 'kz'];//допустимые языки

document.querySelectorAll('.left-panel img').forEach(item => item.onmouseenter = (event) => maxImg.src = event.target.src);//анимация при наведении на изобр

//при выборе яз изм и ссылка 
select.addEventListener('change', changeURLLanguage);

//перенаправить на url с указ языка
function changeURLLanguage(){
    let lang = select.value;
    location.href = window.location.pathname + '#' + lang;
    location.reload();//перезагр стр с выбранным переводом
}

function changeLanguage(){//функ показ на какой яз переключ
    let hash = window.location.hash;
    hash = hash.substr(1);//показ без #
    console.log(hash);
    if(!allLang.includes(hash)){
        location.href = window.location.pathname + '#kz';//если не правильно ввели хэш перебрасывает на яз по упом, выб яз по умол
        location.reload();
    }
    select.value = hash;//присвоить нужный яз
    document.querySelector('title').innerHTML = langArr['unit'][hash]; //перевод title(вручную)  
    document.querySelector('.lng-chip').innerHTML = langArr['chip'][hash];
    for(let key in langArr){//с пом функ переб знач
        let elem = document.querySelector('.lng-' + key);
        if(elem){
            elem.innerHTML = langArr[key][hash];
        }
    }
}

changeLanguage();