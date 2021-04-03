let loader = setInterval(()=>{
    if(document.readyState !== "complete") return;
    clearInterval(loader);

    alert('35 x 2 = 70');

}, 300);