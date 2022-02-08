//container, box and row
// import { todayData } from "./data";

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
function createData(num){
    let arr = new Array();
    

    const statusProvider = function()
    {
        state = ["available","reserved","booked"];
        return state[Math.floor(Math.random()*3)];
    }

    for(i=0;i<num;i++)
    {
        col = i%15;
        row = Math.floor(i/15);
        
        arr.push({
            "seat_id":`${letterProvider(row)}${col+1}`,
            "status":statusProvider()
        });
    }
    return arr;
}

const todayData = createData(120);
console.log(todayData);

let selectedSeats = [];


const container = document.getElementById('seat-container');
const zeroBox  = document.getElementById('zero-box');
const firstBox  = document.getElementById('first-box');
const secondBox  = document.getElementById('second-box');
const thirdBox  = document.getElementById('third-box');

window.addEventListener('DOMContentLoaded',()=>{
    // #40e3a7
    const colormap = {
        "available":"none",
        "reserved":"#2EB086",
        "booked":"#f55142"
    }
    function createSeat(item,index,arr)
    {
        const seat = document.createElement('div');
        seat.className = 'seats';
        seat.innerText = item['seat_id'];
        seat.style.background = colormap[item['status']];
        seat.part.value = item['status'];
        if(item['status']=='available')
        {
            seat.style.cursor = 'pointer';
            seat.addEventListener('mouseover',()=>
            {
                if(item['status']=='available')
                seat.style.color = '#313552';
            });
            seat.addEventListener('mouseout',()=>
            {
                seat.style.color = 'transparent';
            });
        }
        else{
            seat.style.cursor = 'default';
        }

        //Adding the letter index for each new column
        if (index%15 == 0){
            const ind = document.createElement('div');
            ind.className = 'seats';
            ind.style.background = 'none';
            ind.innerText = letterProvider(Math.floor(index/15));
            ind.style.color = '#313552';
            ind.style.border = '2px solid transparent';
            zeroBox.appendChild(ind);
        }


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
    // console.log(event);
    const isSeat = event.target.className == 'seats';
    const value = event.target.part.value;
    if(isSeat && !(value=='reserved' || value=='booked'))
    {
        seatText = event.target.innerText;
        if(!selectedSeats.includes(seatText))
        {
            event.target.style.background = '#313552';
            selectedSeats.push(seatText);
            console.log(selectedSeats);
        }
        else
        {
            event.target.style.background = 'none';
            selectedSeats = selectedSeats.filter(item=>item!==seatText);
            console.log(selectedSeats);
        }
    }
})