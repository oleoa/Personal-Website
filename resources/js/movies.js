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
