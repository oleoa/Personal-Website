var buttonHTML = document.getElementById('html');
var buttonJS = document.getElementById('js');
var iframeHTML = document.getElementById('html-iframe');
var iframeJS = document.getElementById('js-iframe');

if(buttonHTML){
    buttonHTML.addEventListener('click', function(){
        buttonHTML.classList.add('bg-neutral-500');
        buttonJS.classList.remove('bg-neutral-500');
        iframeJS.classList.add('hidden');
        iframeHTML.classList.remove('hidden');
    });
}

if(buttonJS){
    buttonJS.addEventListener('click', function(){
        buttonJS.classList.add('bg-neutral-500');
        buttonHTML.classList.remove('bg-neutral-500');
        iframeHTML.classList.add('hidden');
        iframeJS.classList.remove('hidden');
    });
}
