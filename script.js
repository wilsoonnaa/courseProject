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

  function shareArticle() {
    navigator.clipboard.writeText(window.location.href).then(function() {
        alert('Link copied to clipboard!');
    }, function() {
        alert('Failed to copy link. Please try again.');
    });
}

function subscribeAlert() {
    alert("Subscribed to newsletter");
}