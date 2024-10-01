function showSidebar(){
    const sidebar = document.querySelector('.nv-sidebar');
    const hide = document.querySelector('.hideOnMobile');
    sidebar.style.display = 'flex';
}

function closeSidebar(){
    const sidebar = document.querySelector('.nv-sidebar');
    sidebar.style.display = 'none';
}

document.getElementById("emailsub").addEventListener("click", function() {
    alert("Successfully subscribed to newsletter!");
  });