<?php
// Your PHP code here (including any dynamic content generation)


<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <!-- Your menu items here -->

                <li class="sub-menu">
                    <a href='profile'>Basic Details</a>
                </li>
                <li class="sub-menu">
                    <a href='edu'>Education Details</a>
                </li>
                <li class="sub-menu">
                    <a href='exp'>Experience Details</a>
                </li>
            </ul>
        </div>
    </div>
</aside>

<main class="content p-3" id="dashboard-content">
    <!-- Content loaded through AJAX will appear here -->
</main>

// <script>
//     function loadForm(formName) {
//         var contentElement = document.getElementById('dashboard-content');
//         var xhttp = new XMLHttpRequest();
//         xhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 contentElement.innerHTML = this.responseText;

//                 // Extract and execute the JavaScript code from the loaded content
//                 var scripts = contentElement.getElementsByTagName('script');
//                 for (var i = 0; i < scripts.length; i++) {
//                     eval(scripts[i].innerHTML);
//                 }
//             }
//         };
//         xhttp.open('GET', formName + '.php', true); // Add .php extension
//         xhttp.send();
//     }
</script>

?>