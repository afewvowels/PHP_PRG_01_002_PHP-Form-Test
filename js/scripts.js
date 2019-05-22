var form = document.getElementById('main-form');

function hide_form() {
  form.style.display = 'none';
};

form.onsubmit = function() {hide_form()};
