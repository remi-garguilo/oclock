// Global variables and objects //

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var timer =[];
var i = 0;

var alarms_ul = document.getElementById('alarms_ul');


// Display clock function //
let displayClock = () => {
    let today = new Date();
    let message = document.getElementById('message');
    let hours = today.getHours();
    let minutes = today.getMinutes();
    let seconds = today.getSeconds();
    let clock = document.getElementById('clock');
    let currentHour = hours < 10 ? '0' + hours : hours ;
    clock.innerHTML = `
    ${hours > 24 ? hours - 24 : currentHour }
    : ${minutes < 10 ? '0' + minutes : minutes}
    : ${seconds < 10 ? '0' + seconds : seconds}
    `;
    setTimeout(displayClock,1000);
}

let setAlarm = () => {
    let alarmsInput = document.getElementById('alarm_input');
    let alarm = alarmsInput.value;
    alarmsInput.value="";
    if(alarm!==""){
        let curr_time = new Date();
        let alarm_time = new Date(alarm);
        let duration = alarm_time - curr_time ;
        if(duration < 0){
            alert('Cette horaire est deja passée');
        }else{
            displayAlarms(alarm_time);
            timer[i++] = setTimeout(() => {
            alert(message.value);
            console.log("Reveil supprimé");
                document.getElementById(alarm_time).remove();
                i--;

            },duration);

        }
    }else{
        alert('Selectionnez une horaire')
    }

}

// Display Alarm List //
let displayAlarms = (time) => {

    let alarmTime = time;
    let hours = alarmTime.getHours();
    let minutes = alarmTime.getMinutes();
    let seconds = alarmTime.getSeconds();

    let newLi = document.createElement('li');
    newLi.className = "alarms-li";
    newLi.id=  time;
    newLi.innerHTML = `
    <span class="fa-li"><i class="fas fa-bell fa-2x"></i></span>
    ${months[alarmTime.getMonth()]}
    ${alarmTime.getDate()}
    @
    ${hours % 24 < 10 ? ("0" + (hours % 24)): (hours % 24)}:
    ${minutes<10 ? "0"+ minutes : minutes }:
    ${seconds<10 ? "0"+ seconds : seconds }
    <button  type="submit" onClick={deleteAlarm(${i})} class='deleteAlarm button'>Delete</button>
    `;
    alarms_ul.appendChild(newLi);
}

//Delete Alarm function
let deleteAlarm = (index)=> {
    clearInterval(timer[index]);
}

function removeAlarm(el){
    // console.log(el);
    if(el.classList.contains('deleteAlarm')){
        el.parentElement.remove();
    }

}
        //  Handle Events //

//Hanlde DisplayClock
document.addEventListener('DOMContentLoaded ',displayClock());

//handle Add Alarm
document.querySelector('#submit_alarm_time').addEventListener('click',(e)=>{
    e.preventDefault();
    setAlarm();
});

document.getElementById('alarms_ul').addEventListener('click',(e)=>{

    removeAlarm(e.target);
})