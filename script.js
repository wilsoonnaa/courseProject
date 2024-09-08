function showSidebar(){
    const sidebar = document.querySelector('.nv-sidebar');
    const hide = document.querySelector('.hideOnMobile');
    sidebar.style.display = 'flex';
}

function closeSidebar(){
    const sidebar = document.querySelector('.nv-sidebar');
    sidebar.style.display = 'none';
}