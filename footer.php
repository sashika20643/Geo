
<html>
<style>
/* Reset default margin and padding for all elements */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global styles */
body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Footer styles */
.site-footer {
    background-color: #333;
    color: #fff;
    padding: 40px 0;
}

.footer-columns {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}

.footer-column {
    flex: 1;
    min-width: 200px;
    font-size: 12px
}

.footer-column h3 {
    margin-bottom: 15px;
}

.footer-column ul {
    list-style: none;
}

.footer-column ul li {
    margin-bottom: 5px;
    font-size: 12px
}
.footer-column ul li a {
    color: white; /* Set link color */
    text-decoration: none; /* Remove underline */
    cursor: pointer; /* Add cursor style on hover */
    font-size: 12px
}

.footer-bottom {
    background-color: #222;
    padding: 15px 0;
    text-align: center;
}

.social-icons a {
    color: #fff;
    margin: 0 10px;
    font-size: 20px;
    text-decoration: none;
}

/* Media query for smaller screens */
@media (max-width: 768px) {
    .footer-columns {
        flex-direction: column;
        align-items: center;
    }

    .footer-column {
        text-align: center;
        margin-bottom: 20px;
    }
}


</style>

<footer class="site-footer">
    <div class="container">
        <div class="footer-columns">
            <div class="footer-column">
                <h3>About Us</h3>
                <p>Your trusted source for quality surveying equipment, rentals, and professional surveying services. We specialize in surveying equipment sales, rentals, and expert surveying solutions</p>
            </div>
            <div class="footer-column">
               <h3>Quick Links</h3>
               <ul>
                <li><a href="https://www.survey.gov.lk/" class="button-link">Survey Department of Sri Lanka</a></li>
                <li><a href="https://www.sab.ac.lk/geo/">Faculty of Gomatics</a></li>
                <li><a href="https://sisl.lk/">Surveyors Institute of Sri Lanka</a></li>
                <li><a href="http://www.nara.ac.lk/">NARA Sri Lanka</a></li>
               </ul>
            </div>
            <div class="footer-column">
                <h3>Services</h3>
               <ul>
                <li><a href="Services.php">Free Surevy practicals</a></li>
                <li><a href="Services.php">Survey work shops</a></li>
                <li><a href="Services.php">Instrument calibrations</a><li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contact Us</h3>
                <ul><li>Email: info@geodetia.com</li>
                <li>Phone: +94-11-123-4567</li>
                <li>Fax: +94-11-123-4567</li></ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>