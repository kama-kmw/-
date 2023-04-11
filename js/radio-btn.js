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


const btn_transfer_other = document.querySelector(
  '.transfer-other'
);
const form_transfer_other = document.getElementById(
  'js-form_transfer_other'
);

addEventListener('click', () => {
  if (btn_transfer_other.checked) {
    form_transfer_other.style.display = 'block';
  } else {
    form_transfer_other.style.display = 'none';
  }
});