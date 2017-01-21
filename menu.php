<?php 
echo "
<div class='w3-card-4 w3-round-large w3-center w3-light-grey' style='margin-left:20px;margin-right: 20px'>
			<h1 class='shadowNfont w3-xxlarge'>rougebird</h1> 
			<ul class='w3-navbar w3-indigo w3-card-4 w3-small w3-round'>
    			<li><a href='index.php'>Home</a></li>
          <li class='w3-dropdown-hover w3-indigo'>
    				<a href='#'>C# .NET Programming</a>
    				<div class='w3-dropdown-content w3-white w3-card-4'>
      					<a href='content.php?cat=CSM'>Reference Material</a>
      					<a href='code.php'>Practicals (Code)</a>
      				</div>
    			</li>
    			<li class='w3-dropdown-hover'>
    				<a href='#'>System Administration</a>
    				<div class='w3-dropdown-content w3-white w3-card-4'>
      					<a href='content.php?cat=SAM'>Reference Material</a>
      					<a href='content.php?cat=SAL'>Lab Experiments</a>
      				</div>
  				</li>
   			 	<li><a href='content.php?cat=MIS'>Other</a></li>
          ";
            if(isset($_SESSION["logged"]))
            {
              echo "<li class='w3-right'><a href='validate.php'><i class='fa fa-sign-out'></i>&nbsp;Logout</a></li>";
              
              echo "<li class='w3-dropdown-hover w3-right'>
                      <a href='#'><i class='fa fa-minus-circle' ></i>&nbsp;Delete</a></a>
                      <div class='w3-dropdown-content w3-white w3-card-4'>
                        <a href='#'><i class='fa fa-minus-circle' ></i>&nbsp;Delete Content</a></a>
                        
                      </div>
                    </li>";

              echo "<li class='w3-dropdown-hover w3-right'>
                      <a href='#'><i class='fa fa-plus-circle' ></i>&nbsp;Add</a></a>
                      <div class='w3-dropdown-content w3-white w3-card-4'>
                        <a href='addContent.php'><i class='fa fa-plus-circle' ></i>&nbsp;Add Content</a></a>
                        <a href='addCategory.php'><i class='fa fa-plus-circle' ></i>&nbsp;New Category</a></a>
                        
                      </div>
                    </li>";    
                          
            }
            else     
            {
              echo "<li class='w3-right'><a onclick=\"document.getElementById('id01').style.display='block'\"><i class='fa fa-user' ></i>&nbsp;Login</a></li>";
            }        	
              
  			echo "
        </ul>
</div>
<div class='w3-main' style='margin-left:20px;margin-right: 20px; margin-top: 5px'>
    <header class='w3-container w3-magenta'>
        <div class='w3-left'><h3 >Study References</h3> </div>";
        if(isset($_SESSION["uname"]))
          echo "<div class='w3-container w3-card-4 w3-round-xxlarge w3-right w3-teal'><h6>Welcome &nbsp;".  $_SESSION["uname"]."</h6></div>";
        echo "
    </header>
</div>

 <div id='id01' class='w3-modal'>
    <div class='w3-modal-content w3-card-8 w3-animate-zoom ' style='max-width:400px'>

      <div class='w3-center'><br>
        <span onclick=\"document.getElementById('id01').style.display='none'\" class='w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright w3-small' title='Close Modal'>&times;</span>
        
      </div>

      <form class='w3-container' action='validate.php' method='POST'>
        <div class='w3-section w3-small'>
          <label><b>Username</b></label>
          <input class='w3-input w3-border w3-margin-bottom' type='text' placeholder='Enter Username' name='usrname' required>
          <label><b>Password</b></label>
          <input class='w3-input w3-border' type='password' placeholder='Enter Password' name='psw' required>
          <button class='w3-btn-block w3-green w3-section w3-padding' type='submit'>Login</button>
          </div>
      </form>
     

      <div class='w3-container w3-border-top w3-padding-16 w3-light-grey w3-small'>
        <button onclick=\"document.getElementById('id01').style.display='none'\" type='button' class='w3-btn w3-red'>Cancel</button>
        
      </div>

    </div>
  </div>
</div>

";
?>
