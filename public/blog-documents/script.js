//
// function move(elem){
//     var table = document.getElementById("tbl2");
//     var arr=[];
//     var blankSpaceElem;
//     var bsp;// blank space position
//     for(var i=10; i<19;i++){
//         var x = document.getElementById(String(i)).innerHTML;
//         if(x!=" "){
//             arr[i-10]=Number(x);
//         }
//         else{
//             arr[i-10]=0;
//             blankSpaceElem = document.getElementById(String(i));
//             bsp=i-10;
//         }
//
//     }
//     //alert(arr);
//     var ecp;// refers to element clicked position
//     for(i=9;i<18;i++){
//         if(elem.innerHTML == arr[i])
//         {ecp=i;}
//     }
//
//     //check Top
//     if((bsp-12)>=9 && arr[ecp] == arr[bsp-12]){
//         var temp;
//         temp = elem.innerHTML;
//         elem.innerHTML = blankSpaceElem.innerHTML;
//         blankSpaceElem.innerHTML = temp;
//         movebtn++;
//     }
//     //check Bottom
//     if((bsp+12)<=17 && arr[ecp] == arr[bsp+12]){
//         var temp;
//         temp = elem.innerHTML;
//         elem.innerHTML = blankSpaceElem.innerHTML;
//         blankSpaceElem.innerHTML = temp;
//         movebtn++;
//     }
//
//     //check Left
//     if((bsp-10)>=9 && arr[ecp] == arr[bsp-10]){
//         var temp;
//         temp = elem.innerHTML;
//         elem.innerHTML = blankSpaceElem.innerHTML;
//         blankSpaceElem.innerHTML = temp;
//         movebtn++;
//     }
//
//     //check Right
//     if((bsp+10)<=17 && arr[ecp] == arr[bsp+10]){
//         var temp;
//         temp = elem.innerHTML;
//         elem.innerHTML = blankSpaceElem.innerHTML;
//         blankSpaceElem.innerHTML = temp;
//         movebtn++;
//     }
//
//
//     // Congratulation, winning match
//     var array2=[1,2,3,4,5,6,7,8,0];
//     var is_same = (arr.length == 9) && arr.every(function(element, index) {
//         return element == array2[index]; });
//     if(is_same){
//         alert("Congratulations! You have successfully completed the game! You need "+movebtn);
//     }
// }
//
// // Timer start & reset section
// // var clicked = false;
// // var sec = 0;
// //
// // function startClock() {
// //     if (clicked === false) {
// //         clock = setInterval("stopWatch()", 1000);
// //         clicked = true;
// //     }
// //     else if (clicked === true) {
// //     }
// // }
// //
// // function stopWatch() {
// //     sec++;
// //     document.getElementById("timer").innerHTML = sec;
// // }
// //
// // function stopClock() {
// //     window.clearInterval(clock);
// //     sec = 0;
// //     document.getElementById("timer").innerHTML=0;
// //     clicked = false;
// // }
//
// // Timer start & stop & reset section
//
// window.onload = () => {
//     var hour = 0;
//     var minute = 0;
//     var seconds = 0;
//     var totalSeconds = 0;
//
//     var intervalId = null;
//
//     function startTimer() {
//         ++totalSeconds;
//         hour = Math.floor(totalSeconds /3600);
//         minute = Math.floor((totalSeconds - hour*3600)/60);
//         seconds = totalSeconds - (hour*3600 + minute*60);
//
//         document.getElementById("hour").innerHTML =hour;
//         document.getElementById("minute").innerHTML =minute;
//         document.getElementById("seconds").innerHTML =seconds;
//     }
//
//     document.getElementById('start-btn').addEventListener('click', () => {
//         intervalId = setInterval(startTimer, 1000);
// })
//
//     document.getElementById('stop-btn').addEventListener('click', () => {
//         if (intervalId)
//         clearInterval(intervalId);
// });
//
//
//     document.getElementById('reset-btn').addEventListener('click', () => {
//         totalSeconds = 0;
//         movebtn=0;
//     document.getElementById("hour").innerHTML = '0';
//     document.getElementById("minute").innerHTML = '0';
//     document.getElementById("seconds").innerHTML = '0';
// });
// }

var userMove=0;
 function move(elem) {
    // B10
    if(elem.id==10&&elem.innerHTML!=' '){

        if(document.getElementById('11').innerHTML==' '){
            document.getElementById('11').innerHTML=elem.innerHTML;
            document.getElementById('10').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('13').innerHTML==' '){
            document.getElementById('13').innerHTML=elem.innerHTML;
            document.getElementById('10').innerHTML=' ';
            userMove++;
        }
    }
    // B11
    if(elem.id==11&&elem.innerHTML!=' '){

        if(document.getElementById('10').innerHTML==' '){
            document.getElementById('10').innerHTML=elem.innerHTML;
            document.getElementById('11').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('12').innerHTML==' '){
            document.getElementById('12').innerHTML=elem.innerHTML;
            document.getElementById('11').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('14').innerHTML==' '){
            document.getElementById('14').innerHTML=elem.innerHTML;
            document.getElementById('11').innerHTML=' ';
            userMove++;
        }
    }
    // B12
    if(elem.id==12&&elem.innerHTML!=' '){

        if(document.getElementById('11').innerHTML==' '){
            document.getElementById('11').innerHTML=elem.innerHTML;
            document.getElementById('12').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('15').innerHTML==' '){
            document.getElementById('15').innerHTML=elem.innerHTML;
            document.getElementById('12').innerHTML=' ';
            userMove++;
        }
    }
    // B13
    if(elem.id==13&&elem.innerHTML!=' '){

        if(document.getElementById('10').innerHTML==' '){
            document.getElementById('10').innerHTML=elem.innerHTML;
            document.getElementById('13').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('14').innerHTML==' '){
            document.getElementById('14').innerHTML=elem.innerHTML;
            document.getElementById('13').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('16').innerHTML==' '){
            document.getElementById('16').innerHTML=elem.innerHTML;
            document.getElementById('13').innerHTML=' ';
            userMove++;
        }
    }
    // B14
    if(elem.id==14&&elem.innerHTML!=' '){

        if(document.getElementById('11').innerHTML==' '){
            document.getElementById('11').innerHTML=elem.innerHTML;
            document.getElementById('14').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('13').innerHTML==' '){
            document.getElementById('13').innerHTML=elem.innerHTML;
            document.getElementById('14').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('15').innerHTML==' '){
            document.getElementById('15').innerHTML=elem.innerHTML;
            document.getElementById('14').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('17').innerHTML==' '){
            document.getElementById('17').innerHTML=elem.innerHTML;
            document.getElementById('14').innerHTML=' ';
            userMove++;
        }
    }
    // B15
    if(elem.id==15&&elem.innerHTML!=' '){

        if(document.getElementById('12').innerHTML==' '){
            document.getElementById('12').innerHTML=elem.innerHTML;
            document.getElementById('15').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('14').innerHTML==' '){
            document.getElementById('14').innerHTML=elem.innerHTML;
            document.getElementById('15').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('18').innerHTML==' '){
            document.getElementById('18').innerHTML=elem.innerHTML;
            document.getElementById('15').innerHTML=' ';
            userMove++;
        }
    }
    // B16
    if(elem.id==16&&elem.innerHTML!=' '){

        if(document.getElementById('13').innerHTML==' '){
            document.getElementById('13').innerHTML=elem.innerHTML;
            document.getElementById('16').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('17').innerHTML==' '){
            document.getElementById('17').innerHTML=elem.innerHTML;
            document.getElementById('16').innerHTML=' ';
            userMove++;
        }
    }
    // B17
    if(elem.id=='17'&&elem.innerHTML!=' '){
        if(document.getElementById('18').innerHTML==' '){
            document.getElementById('18').innerHTML=elem.innerHTML;
            document.getElementById('17').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('14').innerHTML==' '){
            document.getElementById('14').innerHTML=elem.innerHTML;
            document.getElementById('17').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('16').innerHTML==' '){
            document.getElementById('16').innerHTML=elem.innerHTML;
            document.getElementById('17').innerHTML=' ';
            userMove++;
        }

    }
    // B18
    if(elem.id==18&&elem.innerHTML!=' '){

        if(document.getElementById('15').innerHTML==' '){
            document.getElementById('15').innerHTML=elem.innerHTML;
            document.getElementById('18').innerHTML=' ';
            userMove++;
        }
        else if(document.getElementById('17').innerHTML==' '){
            document.getElementById('17').innerHTML=elem.innerHTML;
            document.getElementById('18').innerHTML=' ';
            userMove++;
        }
    }
    if(document.getElementById('1').innerHTML==document.getElementById('10').innerHTML&&
        document.getElementById('2').innerHTML==document.getElementById('11').innerHTML&&
        document.getElementById('3').innerHTML==document.getElementById('12').innerHTML&&

        document.getElementById('4').innerHTML==document.getElementById('13').innerHTML&&
        document.getElementById('5').innerHTML==document.getElementById('14').innerHTML&&
        document.getElementById('6').innerHTML==document.getElementById('15').innerHTML&&

        document.getElementById('7').innerHTML==document.getElementById('16').innerHTML&&
        document.getElementById('8').innerHTML==document.getElementById('17').innerHTML&&
        document.getElementById('9').innerHTML==document.getElementById('18').innerHTML
    ){
        alert('you win with needed move '+userMove);
        reset();
    }

}
function reset(){
     userMove = 0;
     document.getElementById('10').innerHTML=1;
    document.getElementById('11').innerHTML=' ';
    document.getElementById('12').innerHTML=3;
    document.getElementById('13').innerHTML=4;
    document.getElementById('14').innerHTML=5;
    document.getElementById('15').innerHTML=6;
    document.getElementById('16').innerHTML=7;
    document.getElementById('17').innerHTML=8;
    document.getElementById('18').innerHTML=2;
}



window.onload = () => {
    var hour = 0;
    var minute = 0;
    var seconds = 0;
    var totalSeconds = 0;

    var intervalId = null;

    function startTimer() {
        ++totalSeconds;
        hour = Math.floor(totalSeconds /3600);
        minute = Math.floor((totalSeconds - hour*3600)/60);
        seconds = totalSeconds - (hour*3600 + minute*60);

        document.getElementById("hour").innerHTML =hour;
        document.getElementById("minute").innerHTML =minute;
        document.getElementById("seconds").innerHTML =seconds;
    }

    document.getElementById('start-btn').addEventListener('click', () => {
        intervalId = setInterval(startTimer, 1000);
})

    document.getElementById('stop-btn').addEventListener('click', () => {
        if (intervalId)
        clearInterval(intervalId);
});


    document.getElementById('reset-btn').addEventListener('click', () => {
        totalSeconds = 0;
    movebtn=0;
    document.getElementById("hour").innerHTML = '0';
    document.getElementById("minute").innerHTML = '0';
    document.getElementById("seconds").innerHTML = '0';
});
}
