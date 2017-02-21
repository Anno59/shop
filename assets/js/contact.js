$(function () {
    $('input.username').blur(function () {
        // var flag=this.value.match(/^[\u4E00-\u9FA5a-zA-Z]{2,15}$/g);
        var flag=this.value.match(/^.+/g);
        !flag?$(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入2-15位字母或汉字'):$(this).next().html('<i class="icon-ok-circle"></i>');
    });
    $('input.email').blur(function () {
        var flag=this.value.match(/^\w{1,15}@\w+\.[a-zA-Z]+$/g);
        !flag?$(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入正确的邮箱格式，如：xxxx@xxx.xxx'):$(this).next().html('<i class="icon-ok-circle"></i>');
    });
    $('input.realname').blur(function () {
        var flag=this.value.match(/^.+/g);
        !flag?$(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入正确的姓名'):$(this).next().html('<i class="icon-ok-circle"></i>');
    });
    $('input.password').blur(function () {
        var flag=this.value.match(/^.+/g);
        !flag?$(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入正确的密码'):$(this).next().html('<i class="icon-ok-circle"></i>');
    });
    $('input.tel').blur(function () {
        var flag=this.value.match(/\d{11}/g);
        !flag?$(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入正确的手机号'):$(this).next().html('<i class="icon-ok-circle"></i>');
    });
    $('input.idnumber').blur(function () {
        var flag=this.value.match(/\d{17}([0-9]|X|x)/);
        !flag?$(this).next().html('<i class="icon-remove-circle"></i>&nbsp;&nbsp;请输入正确的身份证号'):$(this).next().html('<i class="icon-ok-circle"></i>');
    });
});
