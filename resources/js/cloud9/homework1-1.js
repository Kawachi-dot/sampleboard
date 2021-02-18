//Homewor(条件分岐)
let num;
num=prompt("点数を入力してください。","");
if(0<=num<50){
    console.log("もう少し頑張りましょう。");
}else if(50<=num<75){
    console.log("できました。");
}else if(75<=num<90){
    console.log("よくできました。");
}else if(90<=num<=100){
    console.log("大変良くできました。");
}else{
    console.log("0~100を入力してください。");
}
