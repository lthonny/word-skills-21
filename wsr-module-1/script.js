//block 1
const time1 = 1000; 
const step1 = 5;
function outNum1(num,elem) {
    let l1 = document.querySelector('#out-1');
    n1 = 0;
    let t1 = Math.round(time1 / (num / step1));
    let interval1 = setInterval(() => { 
        n1 = n1 + step1;
        if (n1 == num) {
            clearInterval(interval1);
        }
        l1.innerHTML = n1;
    },
    t1);
}
outNum1(5090, 'out-1');

// block 2
const time2 = 1000; 
const step2 = 5;
function outNum2(num,elem) {
    let l2 = document.querySelector('#out-2');
    n2 = 0;
    let t2 = Math.round(time2 / (num / step2));
    let interval2 = setInterval(() => {
        n2 = n2 + step2;
        if (n2 == num) {
            clearInterval(interval2);
        }
        l2.innerHTML = n2;
    },
    t2);
}
outNum2(5590, 'out-2');

// block 3
const time3 = 1000; 
const step3 = 5;
function outNum3(num,elem) {
    let l3 = document.querySelector('#out-3');
    n3 = 0;
    let t3 = Math.round(time3 / (num / step3));
    let interval3 = setInterval(() => {
        n3 = n3 + step3;
        if (n3 == num) {
            clearInterval(interval3);
        }
        l3.innerHTML = n3;
    },
    t3);
}
outNum3(100590, 'out-3');


window.onscroll = function showHeader() {
    let header = document.querySelector('.header');
    if(window.pageYOffset > 0){
        header.classList.add('header_fixed');
    } else{
        header.classList.remove('header_fixed');
    }
}


const handleChange = (input) => {
    if (input.value < 0) input.value = 0;
    if (input.value >= 8) input.value = 8;
}


document.querySelector('.test-0-sbs').onclick = function() {
    alert('Вы подписались на рассылку FlightPool')
}
