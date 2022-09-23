document.querySelector('.themetoggle').addEventListener('click', (event)=>{//кнопка перекл проверяет есть ли тема
    event.preventDefault();//нету перехода
    if(localStorage.getItem('theme') === 'dark'){//если есть то удаляем,в прот случ наобр
        localStorage.removeItem('theme');
    }
    else{
        localStorage.setItem('theme', 'dark');
    }
    addDarkClassToHTML();
});

function addDarkClassToHTML(){
    try {
        if(localStorage.getItem('theme') === 'dark'){
            document.querySelector('html').classList.add('dark');
            document.querySelector('.themetoggle span').textContent = 'dark_mode';
        }
        else{
            document.querySelector('html').classList.remove('dark');
            document.querySelector('.themetoggle span').textContent = 'wb_sunny';
        }
        
    } catch(err){}
}

addDarkClassToHTML();