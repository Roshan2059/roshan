// const letterProvider = function(n)
// {
//     letters = 'abcdefghijklmnopqrstuvwxyz';
//     each = letters.split('');
//     len = each.length;
//     if(n<len && n>=0)
//     {
//         return each[n].toUpperCase();
//     }
//     return 0;
// }
// function createData(num){
//     let arr = new Array();
    

//     const statusProvider = function()
//     {
//         state = ["available","reserved","booked"];
//         return state[Math.floor(Math.random()*3)];
//     }

//     for(i=0;i<num;i++)
//     {
//         col = i%15;
//         row = Math.floor(i/15);
        
//         arr.push({
//             "seat_id":`${letterProvider(row)}${col+1}`,
//             "status":statusProvider()
//         });
//     }
//     return arr;
// }

// const todayData = createData(120);
// console.log(todayData);

let selectedSeats = [];


const container = document.getElementById('seat-container');
const zeroBox  = document.getElementById('zero-box');
const firstBox  = document.getElementById('first-box');
const secondBox  = document.getElementById('second-box');
const thirdBox  = document.getElementById('third-box');
const buyButton = document.getElementById('buy-button');
const reserveButton = document.getElementById('rsrv-button');
const seats = document.getElementsByClassName('seats');


//Billing details
const seats_id_info = document.getElementById('seats_id_info');
const seats_quantity = document.getElementById('seats_quantity');
const total_amount = document.getElementById('total_amount');

function upadateBill(idList,price=100){
    if(idList.length>10)
    {
        seats_id_info.textContent = idList.slice(0,10).toString() + "...";
    }
    else
    {
        seats_id_info.textContent = idList.toString();
    }
    seats_quantity.textContent = idList.length;
    total_amount.textContent = idList.length*price;

}

window.addEventListener('DOMContentLoaded',()=>{
    // #40e3a7
    const colormap = {
        "available":"none",
        "reserved":"#2EB086",
        "booked":"#f55142"
    }
});


container.addEventListener('click',(event)=>{
    console.log(event);
    const isSeat = Object.keys(event.target.classList).some((k)=>(event.target.classList[k]==='seats'));
    console.log(event.target.classList);
    console.log(isSeat);
    const value = event.target.dataset.status;
    if(isSeat && !(value=='reserved' || value=='booked'))
    {
        seatText = event.target.innerText;
        if(!selectedSeats.includes(seatText))
        {
            event.target.className = 'seats selected';
            selectedSeats.push(seatText);
            upadateBill(selectedSeats);
            console.log(selectedSeats);
        }
        else
        {
            
            event.target.className = 'seats available';
            selectedSeats = selectedSeats.filter(item=>item!==seatText);
            upadateBill(selectedSeats);
            console.log(selectedSeats);
        }
    }
});

reserveButton.addEventListener('click',()=>
{
    console.log(selectedSeats);
    fetch('reserve.php',{
        method: 'POST',
        body: selectedSeats
    })
    .then((res)=>res.json())
    .then(res=>console.log(res))
    .catch(()=>console.log("some error"));
});

buyButton.addEventListener('click',()=>
{
    console.log(selectedSeats);

    fetch('book.php',{
        method: 'POST',
        body: selectedSeats
    })
    .then((res)=>res.json())
    .then(res=>console.log(res))
    .catch(()=>console.log("some error"));
});