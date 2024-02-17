// Sidebar
const sidebar = document.getElementById('sidebar');
const openSidebarBtn = document.getElementById('openSidebar');
const closeSidebarBtn = document.getElementById('closeSidebar');

if(openSidebarBtn) {
    openSidebarBtn.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
    });
}

if(closeSidebarBtn) {
    closeSidebarBtn.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
    });
}
