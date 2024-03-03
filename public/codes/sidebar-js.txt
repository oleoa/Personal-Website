const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
const openSidebarBtn = document.getElementById('openSidebar');
const closeSidebarBtn = document.getElementById('closeSidebar');

if(openSidebarBtn) {
  openSidebarBtn.addEventListener('click', () => {
    overlay.classList.remove('-translate-x-full');
    sidebar.classList.remove('-translate-x-full');
  });
}

if(closeSidebarBtn) {
  closeSidebarBtn.addEventListener('click', () => {
    overlay.classList.add('-translate-x-full');
    sidebar.classList.add('-translate-x-full');
  });
}

if(overlay) {
  overlay.addEventListener('click', () => {
    overlay.classList.add('-translate-x-full');
    sidebar.classList.add('-translate-x-full');
  });
}
