<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scribble | About Us</title>
    <link href="/css/variable.css" rel="stylesheet">
    <link href="/css/about-us.css" rel="stylesheet">
</head>
<body>
    @include('components/navbar-logo')
    <div class="containers">
        <div class="first-section">
            <div class="text1">
                <p class="h2">We believe that stationery is <mark id='orange'>more</mark> than just supplies.</p>
            </div>

            <div class="text2">
                <p class="h2">it's a way to <mark id='green'>spark creativity</mark> and make <mark id='blue'>your mark</mark> on the world.</p>
            </div>
        </div>

        <div class="second-section">
            <div class="left">
                <p class="b3">Scribble is a leading online provider of exceptional quality stationery designed to inspire and empower individuals across various endeavors. </p>
                <p class="b3">we curate a comprehensive collection encompassing a diverse range of products, from school, office to profesional supplies. Whether you are a seasoned professional seeking to enhance your productivity or a budding artist yearning to express your creativity, our meticulously selected stationery caters to your unique needs. </p>
            </div>
            <p class="h2">Who We Are?</p>
        </div>

        <div class="third-section">
            <h1>Our Accomplishments</h1>
            <div class="up">
                <img src="\images\circle1.png" alt="increased sales">
                <img src="\images\circle2.png" alt="customers">
                <img src="\images\circle3.png" alt="our rating">
            </div>
            <div class="down">
                <img src="\images\circle4.png" alt="increased sales">
                <img src="\images\circle5.png" alt="increased sales">
            </div>
        </div>

        <div class="fourth-section">
                <h1>Our Team</h1>
                <img src="/images/group.jpg" class="banner">
                <div class="description">
                    <div class="cards">
                        <b3 id="jingga">Stefanie Angeline Sanjaya</b3>
                        <p class="nim">2602189682</p>
                        <p class="role">Scrum Master</p>
                    </div>
                    <div class="cards">
                        <b3 id="biru">Jesslyn Tanuwijaya</b3>
                        <p class="nim">2602201265</p>
                        <p class="role">Developer Team</p>
                    </div>
                    <div class="cards">
                        <b3 id="hijau">Nicholas Matthew Salim</b3>
                        <p class="nim">2602198945</p>
                        <p class="role">Developer Team</p>
                    </div>
                    <div class="cards">
                        <b3 id="jingga">Hans Christian Arinardi</b3>
                        <p class="nim">2602198932</p>
                        <p class="role">Product Owner</p>
                    </div>
                    <div class="cards">
                        <b3 id="biru">Marlene Jusup</b3>
                        <p class="nim">2602189631</p>
                        <p class="role">Developer Team</p>
                    </div>
                </div>
        </div>


        <a href="/"><button type="submit" class="btn-bthome">Back To Home</button></a>
    </div>



    @include('components/footer')

</body>
</html>
