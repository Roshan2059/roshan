//container, box and row
// import { todayData } from "./data";

function createData(num){
    let arr = new Array();

    const letterProvider = function(n)
    {
        letters = 'abcdefghijklmnopqrstuvwxyz';
        each = letters.split('');
        len = each.length;
        if(n<len && n>=0)
        {
            return each[n].toUpperCase();
        }
        return 0;
    }

    const statusProvider = function()
    {
        state = ["available","reserved","booked"];
        return state[Math.floor(Math.random()*3)];
    }

    for(i=1;i<=num;i++)
    {
        col = i%16;
        row = Math.floor(i/16);
        
        arr.push({
            "seat_id":`${letterProvider(row)}${col}`,
            "status":statusProvider()
        });
    }
    return arr;
}

const todayData = createData(105);
console.log(todayData);

let selectedSeats = [];


const container = document.getElementById('seat-container');
const firstBox  = document.getElementById('first-box');
const secondBox  = document.getElementById('second-box');
const thirdBox  = document.getElementById('third-box');

window.addEventListener('DOMContentLoaded',()=>{
    // #40e3a7
    const colormap = {
        "available":"none",
        "reserved":"#426aed",
        "booked":"#ed4245"
    }
    function createSeat(item,index,arr)
    {
        const seat = document.createElement('div');
        seat.className = 'seats';
        seat.innerText = item['seat_id'];
        seat.style.background = colormap[item['status']];

        let bar = Math.floor((index%15)/5); 
        if(bar == 0)
        {
            firstBox.appendChild(seat);
            console.log()
        }
        else if(bar == 1)
        {
            secondBox.appendChild(seat);
        }
        else if(bar == 2)
        {
            thirdBox.appendChild(seat);
        }
    }
    // const seat = document.createElement('div');
    //     seat.className = 'seats';
    //     seat.innerText = 'a1';
    //     seat.style.background = 'green';
    // secondBox.appendChild(seat);
    // firstBox.appendChild(seat);
    // // thirdBox.appendChild(seat);
    todayData.forEach(createSeat);
});

const seats = document.getElementsByClassName('seats');

container.addEventListener('click',(event)=>{
    console.log(event);
    const isSeat = event.target.className == 'seats';
    if(isSeat)
    {
        seatText = event.target.innerText;
        if(selectedSeats.includes(seatText))
        event.target.style.background = 'blue';
        selectedSeats.push(seatText);
        console.log(selectedSeats);
    }
})