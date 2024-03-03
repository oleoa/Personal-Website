var buttons = document.getElementsByClassName('loaderActivator');

for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', function() {
    var loadingDiv = document.getElementById('loader');
    loadingDiv.style.display = (loadingDiv.style.display === 'hidden' || loadingDiv.style.display === '') ? 'flex' : 'hidden';
  });
}
