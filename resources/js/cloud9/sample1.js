function check(){
    console.log('こんにちは！');
    console.log(form.name1.value);
    console.log(form.q1.value);
    console.log(form.comment.value);
    
    let name = form.name1.value;
    let num1 =1; //数字の１
    let num2 ='1';　//文字列の１
    
    
    if(form.name1.value==""){
        alert("名前が入力されていません。お名前を入力してください。");
        return false;
    }
    
    if(form.q1.value==""){
        alert("性別が選択されていません。性別を選択してください。");
        return false;
        
    }
    
    if(form.comment.value==""){
        alert("問合内容が入力されていません。問合内容を入力してください。")
        return false;
    }
    
    return true;
}

/*function check2(){
    console.log('こんばんわ！');
    
    return false;
}*/