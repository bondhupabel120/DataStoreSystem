var mp = new Map();
var pa =new Map();
function solve() {
   // alert("aslam");
    var inti = document.getElementById('10').innerHTML+
               document.getElementById('11').innerHTML+
               document.getElementById('12').innerHTML+
                document.getElementById('13').innerHTML+
                document.getElementById('14').innerHTML+
                document.getElementById('15').innerHTML+
                document.getElementById('16').innerHTML+
                document.getElementById('17').innerHTML+
                document.getElementById('18').innerHTML;

    var goal = document.getElementById('1').innerHTML+
        document.getElementById('2').innerHTML+
        document.getElementById('3').innerHTML+
        document.getElementById('4').innerHTML+
        document.getElementById('5').innerHTML+
        document.getElementById('6').innerHTML+
        document.getElementById('7').innerHTML+
        document.getElementById('8').innerHTML+
        document.getElementById('9').innerHTML;
    //alert("aslam" );
    var q = [];
    mp.clear;
    pa.clear;
    q.push(inti);
    var t= q.length;
    //alert(t);
    pa.set(inti,"-1");
    while(q.length!=0) {
        var s  =q.shift();
        //alert("len "+q.length +"  "+s);
        var pos;
        for(let i=0;i<s.length;i++){
            if(s[i]==' '){
                pos=i;
                break;
            }
        }
       // alert(s);
       // alert(pos);
        if(s==goal){
          //  alert("ans pailam");
            print(goal);
            break;
        }
        else{
          //  alert("aslam");
            var temp = up(s,pos);
            //alert("äbar aslam "+temp);
            if(temp!="-1"){
                q.push(temp);
                mp.set(temp,1);
                pa.set(temp,s);
              //  alert("up "+temp+"  "+s);
            }
            //alert("as down");
            temp = down(s, pos);
          //  alert("äbar aslam "+temp);
           // alert("down "+temp);
            if (temp!="-1"){
                q.push(temp);
                mp.set(temp,1);
                pa.set(temp,s);

            }
            temp = left(s, pos);
           // alert("äbar aslam "+temp);
            if (temp!="-1"){
                q.push(temp);
                mp.set(temp,1);
                pa.set(temp,s);
            }

            temp = right(s, pos);
          //  alert("äbar aslam "+temp);
            if (temp!="-1"){
                q.push(temp);
                mp.set(temp,1);
                pa.set(temp,s);
            }

        }

    }

}

function up(s,p) {
    var str = s;
    //alert("up "+s+" "+p);
    if (!(p < 3)) {
      //   alert(" up aslam ");
        var a = str[p-3];
       // alert(a);
        var newS="";

        for(let i=0;i<p;i++) {
            newS+=str[i];
        }
        newS+=a;
        //alert("up "+newS);
        var len = str.length;
       // alert(len);
        var t = p+1;
       // alert("t "+t);
        for(let i=t;i<len;i++)newS+=str[i];

       // alert("ht ");
        str="";
        for(let i=0;i<p-3;i++)str+=newS[i];
        str+=' ';
        for(let i=p-2;i<newS.length;i++)str+=newS[i];

        //alert(str);
    }

    // Eliminates child of X if its on OPEN or CLOSED
    if (mp.has(str))
        return "-1";
    else
        return str;
}

function down(s, p) {
    var str = s;
   // alert(s+ " "+p);

    if (p<6) {

        var a = str[p + 3];

        var newS="";
        for(let i=0;i<p;i++)newS+=str[i];
        newS+=a;
       for(let i=P+1; i<str.length; i++)newS+=str[i];

     //   String newS = str.substring(0, p) + a + str.substring(p + 1;
        str="";
        for(let i=0; i<p+3; i++)str+=newS[i];
        str+=' ';
        for(let i=p+4;i<newS.length;i++)str+=newS[i];

        //str = newS.substring(0, (p + 3)) + '0' + newS.substring(p + 4);
    }

    // Eliminates child of X if its on OPEN or CLOSED
    if (mp.has(str))
        return "-1";
    else
        return str;
}

function left(s, p) {
    var str = s;

    if (p!=0 && p!=3 && p!=6) {
       // alert("aslam left "+s+" "+p);
        var a = str[p-1];
        var newS="";

        for(let i=0;i<p;i++)newS+=str[i];
        newS+=a;
        for(let i=p+1;i<str.length;i++)newS+=str[i];
       // var newS = str.substring(0, p) + a + str.substring(p + 1);
     //   alert(newS);
        str="";
        for(let i=0;i<p-1;i++)str+=newS[i];
        str+=' ';
        for(let i=p;i<newS.length;i++)str+=newS[i];

        //str = newS.substring(0, (p - 1)) + '0' + newS.substring(p);
    }
    // Eliminates child of X if its on OPEN or CLOSED
   // alert("left "+str);
    if (mp.has(str))
        return "-1";
    else
        return str;
}

/*
 * MOVEMENT RIGHT
 */
function right(s,p) {
    var str = s;
    if (p!=2 && p!=5 && p!=8) {
        var a=str[p+1];
        var newS="";
        for(let i=0;i<p;i++)newS+=str[i];
        newS+=a;
        for(let i=p+1;i<str.length;i++)newS+=str[i];
      //  var newS = str.substring(0, p) + a + str.substring(p + 1);
       str="";
       for(let i=0;i<p+1;i++)str+=newS[i];
       str+=' ';
       for(let i=p+2;i<newS.length;i++)str+=newS[i];
     //    str = newS.substring(0, (p + 1)) + '0' + newS.substring(p + 2);
    }
  //  alert("Right "+str);
    if (mp.has(str))
        return "-1";
    else
        return str;
}

function print( goal) {
    //ans.push(goal);
    alert("goal "+goal);
    /*var s = goal;
    while(!(s.equals("-1"))){
        ans.push(s);
        s = pa.get(s);
    }
    var d = ans.size();
    alert("Need Moves "+(d-1));
   // while(!ans.empty()){

   // }*/

}