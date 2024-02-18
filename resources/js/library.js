const books = document.querySelectorAll('.book');

books.forEach(book => {
    const buttonHTML = book.querySelector('#html');
    const buttonJS = book.querySelector('#js');
    const iframeHTML = book.querySelector('#html-iframe');
    const iframeJS = book.querySelector('#js-iframe');

    buttonHTML.addEventListener('click', function(){
        buttonHTML.classList.add('bg-neutral-500');
        buttonJS.classList.remove('bg-neutral-500');
        iframeJS.classList.add('hidden');
        iframeHTML.classList.remove('hidden');
    });

    buttonJS.addEventListener('click', function(){
        buttonJS.classList.add('bg-neutral-500');
        buttonHTML.classList.remove('bg-neutral-500');
        iframeHTML.classList.add('hidden');
        iframeJS.classList.remove('hidden');
    });
});

/* Loader Example */
var loader = document.getElementById('loader');
var as = document.getElementsByClassName('loaderActivatorLibrary');
for (var i = 0; i < as.length; i++) {
    as[i].addEventListener('click', function(){
        loader.classList.remove('hidden');
        loader.classList.add('flex');
    });
}
