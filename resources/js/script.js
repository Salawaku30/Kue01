document.addEventListener('DOMContentLoaded', function () {
    let isSidebarActive = localStorage.getItem('isSidebarActive');
    if (isSidebarActive === 'true') {
        document.querySelector('.toggle').classList.add('active');
        document.querySelector('.navigation').classList.add('active');
        document.querySelector('.main').classList.add('active');
    }
});

function toggleMenu(){
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toggle.classList.toggle('active');
    navigation.classList.toggle('active');
    main.classList.toggle('active');

    let isSidebarActive = toggle.classList.contains('active');
        localStorage.setItem('isSidebarActive', isSidebarActive);
}
