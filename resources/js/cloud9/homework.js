//Homework1
alert("Hello!");
alert("My name is"+a);
alert("I live in"+b);
alert("Thank you!");
let a="Kawachi";
let b="Kyoto";

//Homework2
console.log("Hello!");
console.log("My name is"+c);
console.log("I live in"+d);
console.log("Thank you!");
let c="Kawachi";
let d="Kyoto";

//Homework3
//問題１
console.log(num1+num2);
console.log(num1-num2);
console.log(num1*num2);
console.log(num1/num2);
let num1=2;
let num2=12;

//問題2
const lastname=["佐藤","田中","鈴木","山田"];
const firstname=["太郎","花子","次郎","三郎"];
const rnd1=Math.floor(Math.random()*lastname.length);
const rnd2=Math.floor(Math.random()*firstname.length);
console.log(lastname[rnd1]+firstname[rnd2]);

//Homework4
let tyukan=30;
let kimatsu=90;

if(tyukan>=75&&kimatsu>=75){
    console.log("合格");
} else if(tyukan+kimatsu>=140) {
    console.log("合格");
} else if((tyukan+kimatsu>=100)&&(tyukan>=90||kimatsu>=90)) {
    console.log("合格");
} else {
    console.log("不合格");
}

