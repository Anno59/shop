var a = 0,b = 0,c = 0,d = 0,e = 0,f = 0;
function submitUserValue(){
    if(a&&b&&c&&d&&e&&f){
        a = 0;b = 0;c = 0;d = 0;e = 0;f = 0;
        return true;
    }else{
        return false;
    }
}
function frontLoginRegValue(){
    if(a&&d){
        a = 0;d = 0;
        return true;
    }else{
        return false;
    }
}
$(function () {
    $('input.username').blur(function () {
        var flag=this.value.match(/^[0-9a-zA-Z\u4e00-\u9fa5]{2,15}$/g);
        if(!flag){
            $(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入2-15位字母数字或汉字');
            a = 0;
        }else{
            $(this).next().html('<i class="icon-ok-circle"></i>');
            a = 1;
        }
    });
    $('input.email').blur(function () {
        var flag=this.value.match(/^\w{1,15}@\w+\.[a-zA-Z]+$/g);
        if(!flag){
            $(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入正确的邮箱格式，如：xxxx@xxx.xxx');
            b = 0;
        }else{
            $(this).next().html('<i class="icon-ok-circle"></i>');
            b = 1;
        }
    });
    $('input.realname').blur(function () {
        var flag=this.value.match(/^.+/g);
        if(!flag){
            $(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入正确的姓名');
            c = 0;
        }else{
            $(this).next().html('<i class="icon-ok-circle"></i>');
            c = 1;
        }
    });
    $('input.password').blur(function () {
        var flag=this.value.match(/^[0-9a-zA-Z]{3,8}/g);
        if(!flag){
            $(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入3-8位的正确密码');
            d = 0;
        }else{
            $(this).next().html('<i class="icon-ok-circle"></i>');
            d = 1;
        }
    });
    $('input.tel').blur(function () {
        var flag=this.value.match(/\d{11}/g);
        if(!flag){
            $(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入正确的手机号');
            e = 0;
        }else{
            $(this).next().html('<i class="icon-ok-circle"></i>');
            e = 1;
        }
    });
    $('input.idnumber').blur(function () {
        var flag=this.value.match(/\d{17}([0-9]|X|x)/);
        if(!flag){
            $(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入正确的身份证号');
            f = 0;
        }else{
            $(this).next().html('<i class="icon-ok-circle"></i>');
            f = 1;
        }
    });
});
