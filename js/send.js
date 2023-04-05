const wrapper = document.querySelector('.wrapper');

// Заменяем значение попапа на имя кнопки (значение попапа добавляем в тему сообщения на почту)
wrapper.addEventListener('click', function(evt){
    let target = evt.target;
    const buttonName = target.getAttribute('name');
    document.querySelector('.nameProduct').setAttribute('value', buttonName);
});