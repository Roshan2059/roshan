function createData(num){
    let arr = new Array();

    const letterProvider = function(n)
    {
        letters = 'abcdefghijklmnopqrstuvwxyz';
        each = letters.split('');
        len = each.length;
        if(n<len && n>=0)
        {
            return each[n];
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
        col = num%15;
        row = num/15;
        
        arr.push({
            "seat_id":`${letterProvider(row)}${col}`,
            "status":statusProvider()
        });
    }
    return arr;
}

export const todayData = createData(10);