const navbar = document.querySelector('.navbar');
window.addEventListener('scroll',()=>{
    let one = document.documentElement.scrollTop;
    console.log("scroll");
    console.log(one);

    document.addEventListener('scroll',()=>{
        let next = document.documentElement.scrollTop;
        console.log(next);
        if(next>one && next > 50)
        {
            navbar.style.display = 'fixed';
        }
        else{
            navbar.style.display = 'static';
        }
    },{passive:true});

})