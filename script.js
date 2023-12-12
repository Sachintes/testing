"use strict";

const forms = document.forms;
if (forms.length) {
  for (const form of forms) {
    form.addEventListener('submit', formSubmitAction);
  }
}

async function formSubmitAction(e) {
  e.preventDefault();
  const form = e.target;
  const formAction = form.getAttribute('action') ? form.getAttribute('action').trim() : "#";
  const formMethod = form.getAttribute('method') ? form.getAttribute('method').trim() : "GET";
  const formData = new FormData(form);

  form.classList.add('form-sending');

  const response = await fetch(formAction, {
    method: formMethod,
    body: formData
  });

  if (response.ok) {
    alert('Form sent!');
    form.classList.remove('form-sending');
    form.reset();
  } else {
    alert('Error');
    form.classList.remove('form-sending');
  }
}
