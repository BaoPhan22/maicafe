const tick = document.querySelector('.item')

const product = document.querySelector('#list-products')
const productItem = document.querySelectorAll('#list-page .item')
var translateY = 0
var count = productItem.length

next.addEventListener('click', function(event) {
    event.preventDefault()
    if(count == 1){
        return false
    }
    translateY += -400
    comment.style.transform = `translateY(${translateY}px)`
    count--
})

prev.addEventListener('click', function(event) {
    event.preventDefault()
    if(count ==3){
        return false
    }
    translateY += 400
    comment.style.transform = `translateY(${translateY}px)`
    count++
})