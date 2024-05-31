<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_page</title>
    <link rel="stylesheet" type="text/css" href="depend_css_help.css">
    <script type = "text/javascript">  
        function visualisation() {  
           alert ("If you see visualization Login PLEASE!!!");  
        }  
  </script>       
</head>
<body  class="back">
    <body>
        <section class="head">
            <h>
                Sorting Visualizer
            </h>
        </section>
            <div class="dropdown">
                <button class="dropbtn">Insertion Sort</button>
                <div class="dropdown-content">
                <a href="https://www.javatpoint.com/insertion-sort">Definition/Code</a>
                <a href="https://youtu.be/yCxV0kBpA6M">Video Lector</a>
                <input class ="dropdown-content" value = "visualisation" onclick = "visualisation();" />
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Bubble Sort</button>
                <div class="dropdown-content">
                <a href="https://www.javatpoint.com/bubble-sort">Definition/Code</a>
                <a href="https://youtu.be/o4bAoo_gFBU">Video Lector</a>
                <input class ="dropdown-content" value = "visualisation" onclick = "visualisation();" />
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Selection Sort</button>
                <div class="dropdown-content">
                <a href="https://www.javatpoint.com/selection-sort">Definition/Code</a>
                <a href="https://youtu.be/9oWd4VJOwr0">Video Lector</a>
                <input class ="dropdown-content" value = "visualisation" onclick = "visualisation();" />
                </div>
            </div>
  
            <div class="dropdown">
                <button class="dropbtn">Merge Sort</button>
                <div class="dropdown-content">
                <a href="https://www.javatpoint.com/merge-sort">Definition/Code</a>
                <a href="https://youtu.be/jlHkDBEumP0">Video Lector</a>
                <input class ="dropdown-content" value = "visualisation" onclick = "visualisation();" />
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Quick Sort</button>
                <div class="dropdown-content">
                <a href="https://www.javatpoint.com/quick-sort">Definition/Code</a>
                <a href="https://youtu.be/QN9hnmAgmOc">Video Lector</a>
                <input class ="dropdown-content" value = "visualisation" onclick = "visualisation();" />
                </div>
            </div>

    </body>
</body>
<form action="insert.php" method="POST">
    <body>
        <div id="content_container">
            <div id="form_container">
                <div id="form_header_container">
                    <h2 id="form_header"> Welcome To Our Project </h2>
                </div>

                <div id="form_content_container">
                    <div id="form_content_inner_container">
                        <input type="text" name="username" id="full_name" placeholder="Full name">
                        <input type="email" name="email" id="email" placeholder="Email">
                        <input type="password" name="password" id="password" placeholder="Password">

                        <div id="button_container">
                            <button type="submit" name="submit" value="submit">Login</button>
                            <button type="submit" name="submit" value="submit">Register</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </form>
    <script src="index_login.js"></script>
</body>
</html>