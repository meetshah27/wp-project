<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Auto Geek | EveryInfo you need. </title>
    <link rel="stylesheet" href="CarInfo.css">
    <script type="text/javascript">
        function validate(form) {
            var user = form.name.value; 
            var check1 = /[A-Za-z]/;
            //var password = form.pwd.value; 
            var phone = form.phno.value; 
            var check2 = /^[0-9]{10}/;
            var check3 = /[A-Za-z0-9]/;
            var email = form.email.value;
            var check4 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (!check1.test(user)) {
                alert("Enter a valid username"); return false;
            }
            if (password.length < 6) { alert("Enter a valid password"); return false; }
            if (!check2.test(phone) || phone.length > 10) {
                alert("Enter a valid phone number"); return false;
            }
            if (!check4.test(email)) {
                alert("Enter a valid email"); return false;
            }
            //return true;
            alert("Data submitted successfully");
        }
    </script>
</head>

<body>
    <nav id="header">
        <div id="logo">
            <img src="./AutoGeek.png" alt="The Auto Geek">
        </div>
        <div class="textcenter" id="heading">
            The Auto Geek | EveryInfo you need.
        </div>
        <ul>
            <li><a href="index.html"> Home </a></li>
            <li><a href="#brands"> Brands</a> </li>
            <li><a href="#about"> About Us </a></li>
            <li><a href="#contact"> Contact Us</a></li>
        </ul>
    </nav>

    <div id="brands">
        <h1 class="textcenter hprimary" id="searchby">View by Brands</h1>
        <div class="brands">
            <div class="cards">
                <!-- A card with given width -->
                <a href="https://www.mercedes-benz.com/en/" target="_blank">
                    <div class="cards__item" id="mercedes">
                        <div class="subtitle textcenter">Mercedes</div>
                    </div>
                </a>

                <a href="https://www.audi.in/in/web/en.html" target="_blank">
                    <div class="cards__item" id="audi">
                        <div class="subtitle textcenter">Audi</div>
                    </div>
                </a>

                <a href="https://www.bmw.com/en/index.html" target="_blank">
                    <div class="cards__item" id="bmw">
                        <div class="subtitle textcenter">BMW</div>
                    </div>
                </a>

                <a href="https://www.porsche.com/middle-east/_india_/" target="_blank">
                    <div class="cards__item" id="porsche">
                        <div class="subtitle textcenter">Porsche</div>
                    </div>
                </a>

                <a href="https://www.ferrari.com/en-IN" target="_blank">
                    <div class="cards__item" id="ferrari">
                        <div class="subtitle textcenter">Ferrari</div>
                    </div>
                </a>

                <a href="https://www.rolls-roycemotorcars.com/en_GB/home.html" target="_blank">
                    <div class="cards__item" id="rollsroyce">
                        <div class="subtitle textcenter">Rolls Royce</div>
                    </div>
                </a>

                <a href="lamborghini.com/en-en" target="_blank">
                    <div class="cards__item" id="lamborghini">
                        <div class="subtitle textcenter">Lamborghini</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <h1 class="textcenter hprimary" id="searchby">View by Models</h1>
    <div class="brands">
        <div class="cards">
            <!-- A card with given width -->
            <div class="cards__item" id="gclass">
                <div class="subtitle textcenter">Mercedes-Benz G-Class
                </div>
            </div>

            <div class="cards__item" id="etron">
                <div class="subtitle textcenter">Audi RS e-tron GT</div>
            </div>

            <div class="cards__item" id="x7">
                <div class="subtitle textcenter">BMW X7</div>
            </div>

            <div class="cards__item" id="s911">
                <div class="subtitle textcenter">Porsche 911</div>
            </div>

            <div class="cards__item" id="f8">
                <div class="subtitle textcenter">Ferrari F8 Tributo</div>
            </div>

            <div class="cards__item" id="ghost">
                <div class="subtitle textcenter">Rolls-Royce Ghost</div>
            </div>

            <div class="cards__item" id="aven">
                <div class="subtitle textcenter">Lamborghini Aventador</div>
            </div>
        </div>
    </div> <br><br><br>
    <h1 class="textcenter hprimary" id="searchby">About Us</h1>
    <section id="about">
        <div> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque molestias rem harum laboriosam!
            Commodi similique sunt repellat! Pariatur sequi porro excepturi impedit accusantium reprehenderit
            exercitationem. Sapiente eius illum incidunt optio similique, aperiam amet cumque cupiditate qui non ipsum
            placeat officiis minima quos repellat dolore ex quam exercitationem alias ad earum. Lorem ipsum dolor sit
            amet
            consectetur adipisicing elit. Doloribus voluptatem eum delectus dignissimos illum consequatur tempore iusto
            repellendus similique, aut vero minus alias aperiam incidunt cum reprehenderit necessitatibus itaque neque
            omnis
            architecto, facilis nobis. Eius non, quae in laboriosam asperiores exercitationem vel possimus tempora
            veniam
            at, architecto veritatis. Laudantium, cumque inventore tenetur laboriosam dolores, praesentium nihil porro
            nobis
            nemo eaque dolor numquam quidem dicta qui veniam libero nesciunt obcaecati minima dolorum? Quidem voluptas
            unde
            similique reprehenderit praesentium. Recusandae deserunt dignissimos molestias alias esse maxime nesciunt,
            consequatur eos et cum pariatur.</div>
    </section> <br><br><br>
    <section id="contact">
        <h1 class="textcenter hprimary h-primary center" id="searchby">Contact Us</h1>
        <div id="contact-box">
            <form name="form" onsubmit="validate(this)"; method="post" action="login.php">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <label for="pwd">Enter password: </label>
                    <input type="password" name="pwd" />
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="text" name="phno" placeholder="Enter your Phone Number">
                </div>
                <div class="form-group">
                    <label for="email">Email ID: </label>
                    <input type="text" name="email" placeholder="Enter your Email">
                </div>
                <input type="submit">
                <input type="reset">
            </form>
        </div>
    </section>
    <footer>
        <p class="textcenter">
            Copyright &copy; 2022 The Auto Geek. All Rights Reserved.
        </p>
    </footer>
</body>

</html>