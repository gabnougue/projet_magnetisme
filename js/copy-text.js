function docopy() {
  // Cible de l'élément qui doit être copié
  var target = '#textToCopy';
  var fromElement = document.querySelector(target);
  if(!fromElement) return;

  var icon = document.querySelector('#icon-copie');

  // Sélection des caractères concernés
  var range = document.createRange();
  var selection = window.getSelection();
  range.selectNode(fromElement);
  selection.removeAllRanges();
  selection.addRange(range);

  try {
    // Exécution de la commande de copie
    var result = document.execCommand('copy');
    if (result) {
      // La copie a réussi
      icon.setAttribute('src', 'assets/img/success.png');
        setTimeout(function() {
            icon.setAttribute('src', 'assets/img/copie.png');
        }, 1000);
    }
  }
  catch(err) {
    // Une erreur est surevnue lors de la tentative de copie
    return;
  }

  // Fin de l'opération
  selection = window.getSelection();
  if (typeof selection.removeRange === 'function') {
    selection.removeRange(range);
  } else if (typeof selection.removeAllRanges === 'function') {
    selection.removeAllRanges();
  }
}