const date = new Date();

const renderCalendar = () => {
    const monthDays = document.querySelector(".days");

    date.setDate(1);
    
    const lastDay = new Date(date.getFullYear(), date.getMonth()+1, 0).getDate();
    
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
    
    const lastDayIndex = new Date(date.getFullYear(), date.getMonth()+1, 0).getDay();
    
    const nextDays =  7 - lastDayIndex - 1;
    
    const months = [
        "Januar",
        "Februar",
        "Marz",
        "April",
        "Mai",
        "Juni",
        "Juli",
        "August",
        "September",
        "Oktober",
        "November",
        "Dezember",
    ];

    const wdays = [
      6,
      0,
      1,
      2,
      3,
      4,
      5,
    ];
    
    
    document.querySelector(".date h1").innerHTML = months[date.getMonth()];
    document.querySelector(".date p").innerHTML = date.getFullYear();
    
    let days = "";
    
    for(let x= wdays[date.getDay()]; x>0; x--){
        days+=`<div class ="prev-date">${prevLastDay-x+1}</div>`;
    }
    
    for(let i=1; i<=lastDay; i++){
        if(i=== new Date().getDate() && date.getMonth() === new Date().getMonth() && date.getFullYear()=== new Date().getFullYear()){
            days+=`<div class = "today">${i}</div>`;
        } 
        else {
        days+=`<div>${i}</div>`;
        }
        
    }
    
    for(let j=1; j<=nextDays+1; j++){
        days+= `<div class = "next-date">${j}</div>`;
        monthDays.innerHTML = days;
    }
}



document.querySelector(".prev").addEventListener("click",() => {
date.setMonth(date.getMonth()-1);

renderCalendar();
})

document.querySelector(".next").addEventListener("click",() => {
    date.setMonth(date.getMonth()+1);
    renderCalendar();
})

renderCalendar();