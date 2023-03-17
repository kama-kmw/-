const btnCountChildren = document.querySelector(
  '.form__real-radio[name="children"]'
);
const formChildrenContainer = document.getElementById(
  'js-form-control__pickup-wrapper'
);

addEventListener('click', () => {
  if (btnCountChildren.checked) {
    formChildrenContainer.style.display = 'block';
  } else {
    formChildrenContainer.style.display = 'none';
  }
});
