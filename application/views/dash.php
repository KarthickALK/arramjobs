<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<body>
    <header>
        <h1>Welcome to arramjobs</h1>
    </header>
    <div class="dashboard-container">
        <nav class="side-menu">
            <h3 class="px-3 py-2">Create profile</h3>
            <ul class="list-unstyled">
                <li><a href="javascript:void(0);" class="menu-link" data-method="profile">Load Profile</a></li>
                <li><a href="javascript:void(0);" class="menu-link" data-method="edu">Load Education</a></li>
                <li><a href="javascript:void(0);" class="menu-link" data-method="exp">Load Experience</a></li>
            </ul>
        </nav>
        <main class="content p-3" id="dashboard-content">
            <!-- Content will be loaded here -->
        </main>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var menuLinks = document.querySelectorAll(".menu-link");
            var contentElement = document.getElementById("dashboard-content");
            
            menuLinks.forEach(function(link) {
                link.addEventListener("click", function() {
                    var method = this.getAttribute("data-method");
                    loadForm(method);
                });
            });
            
            function loadForm(method) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", method + ".php", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        contentElement.innerHTML = xhr.responseText;
                    }
                };
                xhr.send();
            }
        });
    </script>
</body>
</html>
