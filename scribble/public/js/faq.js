questions = document.getElementsByClassName('faq-questions')
answers = document.getElementsByClassName('faq-answers')

function clickQuestion(id) {
    // console.log(questions[id].currentStyle.marginBottom.value)
    var style = questions[id].currentStyle || window.getComputedStyle(questions[id]);
    console.log()
    if (style.marginBottom != "2px") {
        // kondisi masih blm ke klik
        questions[id].style.marginBottom = "2px"
        answers[id].style.display = "flex"
        questions[id].lastElementChild.style.transform = "rotate(180deg)"
        console.log(questions[id].lastElementChild);
    }
    else {
        questions[id].style.marginBottom = "2%";
        answers[id].style.display = "none";
        questions[id].lastElementChild.style.transform = "rotate(0deg)";

    }
}
var i = 1
function add(id){
    return id+1;
}
setTimeout(console.log(add(i)),2000)
