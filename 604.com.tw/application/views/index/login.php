 
   <br>
  <br>
   <br>
    <br>
     <br>
      <br><br>
    <!--shopping-list-->
         
           
  

 
    <?php

    $i=0;
        foreach ($this->cart->contents() as $items) {
    $i++;

    }




     ?>

 
             
        
 

    <div class="container" id="all">
    <!-- MAIN SLIDER -->     
    <div class="login-registered col-md-offset-1 col-md-10 col-xs-12">     
        <div class="login col-md-6 col-xs-12">



           <h3>會員登入</h3>
           <div class="login-info col-md-12 col-xs-12">
           <form action="checklogin" method="post">
                <input class="form-control" placeholder="帳號" autofocus="" name="username" type="text">
                <input class="form-control" placeholder="密碼" name="password" type="password" value="">

                    <div class="col-md-6 col-xs-6 checkbox">
                        <label><input type="checkbox" name="remember"> 保持登入狀態 </label>
                    </div>
                    <div class="col-md-6 col-xs-6 forget-pwd-area">
                        <p class=" text-right forget-pwd checkbox">
                        <a href="https://www.604.com.tw/password/reset">忘記密碼  ?</a>
                        </p>
                    </div>  
               
                <input  type="submit" value="會員登入" class="btn-primary login-btn col-md-12 col-xs-12"></input>
            </div>
            <div class="col-xs-12 col-md-12">
                <h3>其他登入方式</h3>
                <div 
                class="fb-login-button" 
                data-max-rows="1" 
                data-size="large" 
                data-button-type="login_with" 
                data-show-faces="false" 
                data-auto-logout-link="false" 
                data-use-continue-as="false"
                scope="public_profile,email"
                
                onlogin="checkLoginState();"></div>
                
            </div>
        </div>
        
</Form >
        <form action="register" method="post">
        <div class="registered col-md-offset-1 col-md-5 col-xs-12">
            <h3>加入會員</h3>
            <div class="registered-info col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-md-3">
                        <p>帳號</p>
                    </div>
                    <div class="col-md-9">
                        <input class="form-control" required="" name="user_accnum">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>密碼</p>
                    </div>
                    <div class="col-md-9">
                        <input  class="form-control" required="" type="password" name="user_password">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <p>確認密碼</p>
                    </div>
                    <div class="col-md-9">
                    <input class="form-control" required="" type="password" name="user_passwordb">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>姓名</p>
                    </div>
                    <div class="col-md-9">
                    <input class="form-control" required="" name="user_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>E-mail</p>
                    </div>
                    <div class="col-md-9">
                    <input class="form-control" required="" name="user_email">
                    </div>
                </div>

                <div class="submit" style="text-align: center;"> 
            <input   class="btn-primary member col-md-12 col-xs-12" type="submit" value="註冊">
                </div>   
</form>
            </div>

        </div>


    </div>
        <hr>
    </div>

      

    </div>
    </div>   

    
    
            <!-- /.container -->
    </div>

    

  <br>
   <br>
    <br>
     <br>
      <br><br>
  <br>
   <br>
    <br>
     <br>
      <br><br>
  <br>
   <br>
    <br>
     <br>
      <br>
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '119810032064208',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.10' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.



  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/zh_TW/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
  
    FB.api('me?fields=email,id,name', function(response) {
        post_to_url('<?=base_url();?>fblogin', 
            {'username':response.name,
          'usernid':response.id,
            'useremail':response.email});
    });



  }

  function post_to_url(path, params, method) {
    method = method || "post"; // Set method to post by default, if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", key);
        hiddenField.setAttribute("value", params[key]);

        form.appendChild(hiddenField);
    }

    document.body.appendChild(form);    // Not entirely sure if this is necessary
    form.submit();
}
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  }
</script>

  