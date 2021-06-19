const real_dolar_btn = document.querySelector('#real-dolar-btn');
const dolar_real_btn = document.querySelector('#dolar-real-btn');
const container = document.querySelector('.container');
const input_real = document.querySelector('#qtd-reais');
const btn_reais = document.querySelector('#btn-reais');
const input_dolar = document.querySelector('#qtd-dolar');
const btn_dolar = document.querySelector('#btn-dolar');

dolar_real_btn.addEventListener('click', () => {
  container.classList.add('sign-up-mode');
});

real_dolar_btn.addEventListener('click', () => {
  container.classList.remove('sign-up-mode');
});

btn_dolar.addEventListener('click', (event) => {
  validarInputDolar();
});

btn_reais.addEventListener('click', (event) => {
  validarInputReal();
});

function validarInputReal(event) {
  if (!input_real.value) {
    new Attention.Alert({
      title: 'Atenção!',
      content: 'Preencha a quantia de moeda...',
    });
  }
}

function validarInputDolar(event) {
  if (!input_dolar.value) {
    new Attention.Alert({
      title: 'Atenção!',
      content: 'Preencha a quantia de moeda...',
    });
  }
}
