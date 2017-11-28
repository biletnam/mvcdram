<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="contact-page" class="container">
<div class="bg">
    <div class="row">    		
        <div class="col-sm-12">    			   			
            <h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
            <div id="gmap" class="contact-map">
            </div>
        </div>			 		
    </div>    	
    <div class="row">
    
        <?php if ($result): ?>
            
            <p>Your message sent!</p>

        <?php else: ?>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-sm-8">
                <div class="contact-form">
                    <h2 class="title text-center">Get In Touch</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name" value="<?php echo $name; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required" placeholder="Subject" value="<?php echo $subject; ?>">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here">
                                <?php echo $message; ?>
                            </textarea>
                        </div>                        
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
            
        <?php endif; ?>

        <div class="col-sm-4">
            <div class="contact-info">
                <h2 class="title text-center">Contact Info</h2>
                <address>
                    <p>E-Shopper Inc.</p>
                    <p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
                    <p>Newyork USA</p>
                    <p>Mobile: +2346 17 38 93</p>
                    <p>Fax: 1-714-252-0026</p>
                    <p>Email: info@e-shopper.com</p>
                </address>
                <div class="social-networks">
                    <h2 class="title text-center">Social Networking</h2>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>    			
    </div>  
</div>	
</div><!--/#contact-page-->

<?php include ROOT . '/views/layouts/footer.php'; ?>