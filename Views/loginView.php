<div class="wrapper row4">
<main class="container clear"> 
    <div class="content"> 
      <div id="comments" >

    <h1>Admin Login</h1>
  </div>
  <div id="comments">
    <form class="login-form" id="mainav" method="post" action="<?php echo FRONT_ROOT."Session/CheckAdminLogin" ?>">
    <div class="form-group">
                         <label>Nickname</label>
                         <input name="userName" type="Text" placeholder="Nickname" style="max-width: 20%;"/>  
                    </div>
                    <div class="form-group">
                         <label >Password</label>
                         <input name="password" type="password" placeholder="Password" style="max-width: 20%;"/> 
                    </div>
<br>
      <input type="submit" value="Log In" class="btn" style="background-color:#DC8E47;color:white;"/>
  
    </form>

  </div>
</main>
  </div>
</div>

