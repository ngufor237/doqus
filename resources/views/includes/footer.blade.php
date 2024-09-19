@yield('all')
<footer style="background-color: #0B3D91; color: #fff; padding: 20px 0;position:relative">
    <div class="container-fluid text-center">
         <div class="row">
            <!-- Location -->
            <div class="col-md-4 mb-3">
                <h5>Location</h5>
                <p>Douala, Cameroon</p>
            </div>
            <!-- Email -->
            <div class="col-md-4 mb-3">
                <h5>Email</h5>
                <p><a href="mailto:cwill3072@gmail.com" style="color: #FFD700; text-decoration: none;">cwill3072@gmail.com</a></p>
            </div>
            <!-- Phone -->
            <div class="col-md-4 mb-3">
                <h5>Phone</h5>
                <p><a href="tel:+237676573436" style="color: #FFD700; text-decoration: none;">+237 676 573 436</a></p>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="row">
            <div class="col-md-12">
                <a href="#" style="color: #FFD700; margin: 0 10px;"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#" style="color: #FFD700; margin: 0 10px;"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" style="color: #FFD700; margin: 0 10px;"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row">
            <div class="col-md-12 mt-3">
                <p>&copy; 2024 All Rights Reserved. Proudly Made in Cameroon by Ngufor Precious </p>
            </div>
        </div>
    </div>
</footer>

<!-- FontAwesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <!-- FontAwesome for icons -->
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
    // Sidebar toggle functionality
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggle-btn');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        toggleBtn.textContent = sidebar.classList.contains('collapsed') ? 'Expand' : 'Collapse';
    });
</script>
</html>
