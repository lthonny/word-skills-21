const time = 1000; 
const step = 1;
const outPercent = (num,elem) => {
    let l = document.querySelector('#percent');
    n = 0;
    let t = Math.round(time / (num / step));
    let interval = setInterval(() => { 
        n = n + step;
        if (n == num) {
            clearInterval(interval);
        }
        l.innerHTML = n;
    },
    t);
}
outPercent(98, 'test-4-fhh');