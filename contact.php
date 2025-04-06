<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact our professional team for assistance">
    <title>Contact Us | Professional Services</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/contact.css">

</head>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Contact Information Section -->
            <div class="col-lg-6 left-side">
                <div>
                    <h1>Get in Touch</h1>
                    <p class="lead">We're here to help and answer any questions you might have. We look forward to hearing from you.</p>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email Us</h3>
                            <p>Our team will get back to you within 24 hours</p>
                            <a href="mailto:contact@professionalservices.com">contact@professionalservices.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3>Visit Us</h3>
                            <p>Come say hello at our office headquarters</p>
                            <a href="https://maps.google.com" target="_blank">123 Business Avenue, Suite 456<br>New York, NY 10001</a>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3>Call Us</h3>
                            <p>Monday to Friday from 9am to 5pm</p>
                            <a href="tel:+12125551234">+1 (212) 555-1234</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form Section -->
            <div class="col-lg-6 right-side">
                <div>
                    <h2>Send Us a Message</h2>
                    <p>Have questions about our services? Fill out the form below and we'll get back to you promptly.</p>
                    
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">How Can We Help?</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your message..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>