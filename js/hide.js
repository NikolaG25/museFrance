let titles = document.querySelectorAll('.clickHide')
console.log('titles', titles);
let texts = document.querySelectorAll('.hideElement')

texts[0].style.display = 'block'

titles.forEach( (title, index) => {
  title.addEventListener('click', () => {
    texts.forEach( (text) => {
      text.style.display = 'none'
    })

    texts[index].style.display = 'block';

  })
})
