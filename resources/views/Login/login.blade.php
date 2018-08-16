<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('test/lib/bootstrap/css/bootstrap.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('test/stylesheets/theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('test/lib/font-awesome/css/font-awesome.css') }}">

    <script src="{{ URL::asset('test/lib/jquery-1.7.2.min.js') }}" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Company</span></a>
        </div>
    </div>
    
<div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">登录</p>
            <div class="block-body" id="accountinput">
                <form>
                    <label>用户名</label>
                    <input type="text" class="span12" name='username' v-model='username'>
                    <label>密码</label>
                    <input type="password" class="span12" name='password' v-model='password'>
                    <a href="javascript:0" class="btn btn-primary pull-right" v-on:click="loginpost">登录</a>
                    <label class="remember-me" v-on:click="rememberme()" ><input type="checkbox">记住</label>
                    <div class="clearfix"></div>
                </form>
            </div>   
        </div>
        <p><a href="reset-password.html">忘记密码?</a></p>
    </div>
</div>


    


    <script src="{{ URL::asset('test/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('js/vue.js') }}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    <script type="text/javascript">
        var vuem = new Vue({
            el:"#accountinput",
            data:{
                username:'',
                password:'',
            },
            methods:{
                loginpost:function(){
                    axios({
                      method: 'post',
                      url: 'login',
                      data: this.$data,
                    })
                    .then(function(request){
                        if(request.data == "success"){
                            window.location.href = "admin/admin";
                        }else{
                            alert("shibai");
                        }
                    })
                    .catch(function(error){
                        alert("error");
                    })
                },
                setcookie: function (name, value, days) {

                    var d = new Date;

                    d.setTime(d.getTime() + 24*60*60*1000*days);

                    window.document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();

                },

                getcookie: function (name) {

                    var v = window.document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');

                    return v ? v[2] : null;

                },

                deletecookie: function (name) {

                    this.set(name, '', -1);

                },

                rememberme:function(){
                    this.setcookie("username",this.username,7);
                    this.setcookie("password",this.password,7);
                },
            },
            mounted:function(){//填充用户名，密码
                this.username = this.getcookie('username');
                this.password = this.getcookie('password');
            }
        })
    </script>
  </body>
</html>


