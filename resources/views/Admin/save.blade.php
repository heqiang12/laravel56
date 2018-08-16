@extends('base')
    
<!-- 导航栏 -->
<!-- @section('navbar')    -->
    
<!-- 侧边栏 -->
<!-- @section('sidebar-nav') -->
    
    
@section('content')    
  <div class="header">
            
            <h1 class="page-title">Edit User</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li><a href="users.html">Users</a> <span class="divider">/</span></li>
            <li class="active">User</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
    <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
    <a href="#myModal" data-toggle="modal" class="btn">Delete</a>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Password</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
    <form id="tab">
        <label>用户名</label>
        <input type="text" value="" class="input-xlarge" placeholder="必填" v-model="username" >
        <label>密码</label>
        <input type="password" value="" class="input-xlarge" placeholder="必填" v-model="password" >
        <label>手机号</label>
        <input type="text" value="" class="input-xlarge" v-model="mobile" >
        <label>Email</label>
        <input type="text" value="" class="input-xlarge" v-model="email" >
        <label>地址</label>
        <textarea value="" rows="3" class="input-xlarge" v-model="address" >

        </textarea>
        <div>
        <button class="btn btn-success " type="button" v-on:click="addUser()" >提交</button>
        <button class="btn btn-danger " >重置</button>
        </div>
    </form>
      </div>
      <div class="tab-pane fade" id="profile">
    <form id="tab2">
        <label>New Password</label>
        <input type="password" class="input-xlarge">
        <div>
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
      </div>
  </div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Delete Confirmation</h3>
  </div>
  <div class="modal-body">
    
    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
  </div>
</div>            
      </div>
  </div>
@endsection

@section('js')
<!-- <script src="{{ URL::asset('js/vue.js') }}"></script> -->
<!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->
  <script type="text/javascript">
    var vuem = new Vue({
      el:"#tab",
      data:{
        username:'',
        password:'',
        mobile:'',
        email:'',
        address:'',
      },
      methods:{
        addUser:function(){
          axios({
            method:"post",
            url:'save',
            data:this.$data,
          })
          .then(function(request){
            // console.log(request);
            if(request.data.status == 1){
              alert(request.data.info);
            }else{
              alert(request.data.info);
            }
            
          })
          .catch(function(error){
            alert("error");
          })
        }
      },
    });
  </script>
@endsection