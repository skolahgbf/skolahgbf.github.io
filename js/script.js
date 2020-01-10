var page = 0;
var tM = 20;
var tS = 0;
var tS2 = "00";
var tM2 = "20";
var tL = 1200;
var timer = document.getElementById("timer");
var content = document.getElementById("content");
var iframe = document.getElementById("frame");
var startBTN = document.getElementById("start");
var nextBTN = document.getElementById("next");
console.log("loaded");

function strt() {
    console.log("yee");
    page = 1;
    iframe.src = "questions/" + page + ".html";
    startBTN.classList.toggle("invisible");
    content.classList.toggle("invisible");
    location.href = "#test";

    
    setTimeout(function() {
        minuteInterval();
        setInterval(minuteInterval, 60000);
    }, 1000);

    setInterval(secondInterval, 1000);
}

function minuteInterval() { 
    if (tL > 0) {
        tM -= 1; 
        tM2 = tM.toString();
    } else {
        clearInterval(minuteInterval);
    }
}

function secondInterval(){
    if (tL > 0) {
        tL -= 1;
        if (tS >= 1) {
            tS -= 1; 
        } else {
            tS = 59; 
        }
        tS2 = tS.toString();
        if (tS2.length == 1) {
            tS2 = "0" + tS2;
        }
        timer.innerHTML = tM2 + ":" + tS2;
        console.log(tM2 + " : " + tS2 + " : " + tL);
    } else {
        clearInterval(secondInterval);
        window.open ('result.html','_self',false);
    }
}

function next() {
    page += 1;
    if (page <= 20) {
        iframe.src = "questions/" + page + ".html";
    } else {
        clearInterval(secondInterval);
        clearInterval(minuteInterval);
        iframe.src = "result.html";
        window.open ('https://mcafee2020.com/',"_blank", "toolbar=no,scrollbars=yes,resizable=no,top=500,left=500,width=500,height=500");
        nextBTN.classList.toggle("noclick");
        window.setTimeout(function(){
            window.open ('https://typesofbets.com/betting-types/finding-the-best-greyhound-betting-system/',"_blank", "toolbar=no,scrollbars=yes,resizable=no,top=500,left=0,width=500,height=500");
        },500);
        window.setTimeout(function(){
            window.open ('https://preview.redd.it/yu193fp7fg421.jpg?width=773&auto=webp&s=2959cdbbc2e6ce63819a1fdd50c29687caa2e9e5',"_blank", "toolbar=no,scrollbars=yes,resizable=no,top=500,left=1000,width=580,height=580");
        },1000);
    }
}