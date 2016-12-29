<?php 
echo "
<div class='w3-card-4 w3-round-large w3-center w3-light-grey' style='margin-left:20px;margin-right: 20px'>
			<h1 class='shadowNfont w3-xxxlarge'>rougebird</h1> 
			<ul class='w3-navbar w3-indigo w3-card-4 w3-large w3-round'>
    			<li class='w3-dropdown-hover w3-indigo'>
    				<a href='#'>C# .NET Programming</a>
    				<div class='w3-dropdown-content w3-white w3-card-4'>
      					<a href='index.php?cat=CSM'>Reference Material</a>
      					<a href='code.php'>Practicals (Code)</a>
      				</div>
    			</li>
    			<li class='w3-dropdown-hover'>
    				<a href='#'>System Administration</a>
    				<div class='w3-dropdown-content w3-white w3-card-4'>
      					<a href='index.php?cat=SAM'>Reference Material</a>
      					<a href='index.php?cat=SAL'>Lab Experiments</a>
      				</div>
  				</li>
   			 	<li><a href='index.php?cat=MIS'>Other</a></li>
   			 	<li class='w3-right'><a onclick=\"document.getElementById('id01').style.display='block'\"><i class='fa fa-plus-circle' ></i>&nbsp;Add</a></li>
  			</ul>
</div>

 <div id='id01' class='w3-modal'>
    <div class='w3-modal-content w3-card-8 w3-animate-zoom' style='max-width:600px'>

      <div class='w3-center'><br>
        <span onclick=\"document.getElementById('id01').style.display='none'\" class='w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright' title='Close Modal'>&times;</span>
        
      </div>

      <form class='w3-container' action='#'>
        <div class='w3-section'>
          <label><b>Username</b></label>
          <input class='w3-input w3-border w3-margin-bottom' type='text' placeholder='Enter Username' name='usrname' required>
          <label><b>Password</b></label>
          <input class='w3-input w3-border' type='password' placeholder='Enter Password' name='psw' required>
          <button class='w3-btn-block w3-green w3-section w3-padding' type='submit'>Login</button>
          </div>
      </form>

      <div class='w3-container w3-border-top w3-padding-16 w3-light-grey'>
        <button onclick=\"document.getElementById('id01').style.display='none'\" type='button' class='w3-btn w3-red'>Cancel</button>
        
      </div>

    </div>
  </div>
</div>
	
";
?>
