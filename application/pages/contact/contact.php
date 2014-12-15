<title></title>

<div class="padsection">
    <div class="container_24">
        <p><?php echo $content; ?></p>
        
	   <form action="" method="POST" enctype="multipart/form-data">
    	
            <span></span>
            
            
            <div class="container_24">
            
                <label for="categories">Categories</label>
            
                <select name="categories">
                    <option value="<?php if(isset($category)) {echo $category;} ?>">Please Select a Category  </option>
                    <option value="Web Design"> Web Design </option>
                    <option value="Search Engine Optimisation"> Search Engine Optimisation </option>
                    <option value="Graphic Design"> Graphic Design </option>
                    <option value="Business Card"> Business Card </option>
                    <option value="Letter Heads"> Letter Heads </option>
                    <option value="Complimentary Slips"> Complimentary Slips </option>
                    <option value="Flyers"> Flyers </option>
                    <option value="Posters"> Posters </option>
                    <option value="Business Branding"> Business Branding </option>
                    <option value="Web Hosting"> Web Hosting </option>
                    <option value="General Enquiry"> General Enquiry </option>
             </select>
                <?php if (isset($err_category)){echo $err_category ;} ?>
            </div>
            
            
            <div class="container_24">
            
        <label for="fullName">Enter Your Name:</label>
                <input type="text" name="name" title="Please enter your name" autofocus placeholder="Last, First"
                 value="<?php if (isset($name)) {echo $name; } ?>"/>
            	<?php if (isset($err_name)){echo $err_name ;} ?>   
            </div>
          
            <div class="container_24">
    
                <label for="email">Enter Your Email address:</label>
                <input name="email" type="email"  autofocus placeholder="me@mycompany.com"
                title="Please enter your email address"
                value="<?php if (isset($email)) {echo $email; } ?>" />
                <?php if (isset($err_email)){echo $err_email;} ?>
            </div>
            
            <div class="container_24">
    
                <label for="tel">Enter Your Contact Number: </label>
                <input type="telephone" name="phoneNumber" autofocus placeholder="07958482326"
                value="<?php if (isset ($phoneNumber)) {echo $phoneNumber;} ?>"  />
                <?php if (isset($err_phoneNumber)){echo $err_phoneNumber;} ?>
            </div>
            
            
            <div class="container_24">
                <label for="organisation">Enter Organisation or Company Name: </label>
                <input type="text" name="organisation" autofocus placeholder="My Company Ltd"
                value="<?php if (isset($organisation)) {echo $organisation; } ;?>" />
                <?php if (isset($err_organisation)){echo $err_organisation ;} ?>
            </div>
            
     		
            
            <div class="container_24">
                <label for="enquiry">Please Enter Your Enquiry Below /label>
                <div class="clear"></div>
                <textarea name="enquiry"   rows="7"><?php if (isset($enquiry)) { echo $enquiry; } ?></textarea> 
                <?php if (isset($err_enquiry)){echo $err_enquiry;} ?>
            </div>
            
            <div class="container_24">
                <button type="submit" name="action" value="submit">Send</button>
        	</div>
        </form>
    </div>
</div>