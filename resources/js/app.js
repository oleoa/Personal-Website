import './bootstrap';

var buttons = document.getElementsByClassName('loaderActivator');

for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', function() {
    var loadingDiv = document.getElementById('loading');
    loadingDiv.style.display = (loadingDiv.style.display === 'hidden' || loadingDiv.style.display === '') ? 'flex' : 'hidden';
  });
}

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

var deleting = document.getElementById('deleting');
var editing = document.getElementById('editing');
var listingMoviesForm = document.getElementById('listingMoviesForm');
var deletingMoviesForm = document.getElementById('deletingMoviesForm');
if(deleting) {
    deleting.addEventListener('click', function() {
        event.preventDefault();
        listingMoviesForm.classList.add('hidden');
        deletingMoviesForm.classList.remove('hidden');
    });
}
if(editing) {
    editing.addEventListener('click', function() {
        event.preventDefault();
        listingMoviesForm.classList.remove('hidden');
        deletingMoviesForm.classList.add('hidden');
    });
}
