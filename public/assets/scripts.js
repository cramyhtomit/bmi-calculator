
let radios = document.getElementsByName('unit');
let input = document.getElementsByClassName('input-container')[0];
console.log(radios);

radios.forEach(radio => {
  radio.addEventListener('click', () => {
    if (radio.value == 'metric') {
      input.classList.remove('active');
      console.log(radio.value);
    } else {
      input.classList.add('active');
      console.log(radio.value);
    }
  });
});
