var loader = document.getElementById('loader');
var as = document.getElementsByClassName('loaderActivatorLibrary');
for (var i = 0; i < as.length; i++) {
  as[i].addEventListener('click', function(){
    loader.classList.remove('hidden');
    loader.classList.add('flex');
  });
}
