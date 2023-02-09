<!DOCTYPE html>
<html lang="en">
<link href="/css/style.css" rel="stylesheet" type="text/css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
</head>
<header>
    <nav id="headerlinks">
        <button class="active"> <a href="/">Home</a> </button>
        <button> <a href="aboutme">About Me</a> </button>
        <button> <a href="faq">FAQ</a></button>
        <button> <a href="dashboard">Dashboard</a></button>
        <button> <a href="blog">Blogs</a></button>
    </nav>

    <nav id="asidemenu" class="dropdown">
        <button class="dropbtn">Handige Links!</button>
        <div class="dropdown-content">
            <ul>
                <li><a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"
                       target="_blank">Course and Examination Regulations</a></li>
                <li><a href="https://glaze-donut-5a5.notion.site/Assignment-Specification-661c5ac5d7494328a58be61d00dd41e4"
                       target="_blank">The Learn Assignment</a></li>
                <li><a
                        href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf"
                        target="_blank">The Implementation Regulations (IR)</a></li>
                <li><a href="https://learn.hz.nl/my/" target="_blank">MyHZ Dashboard</a></li>
                <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">GitHub</a></li>
                <li><a href="http://teams.microsoft.com/" target="_blank">MS Teams</a></li>
            </ul>
        </div>
    </nav>
</header>


<body>
<img src="/img/cameraenik.png" id="headerfoto">

<div id="FAQ">
    <h1>Frequently Asked Questions</h1>
    <ul>
        @foreach($faqs as $faq)
            <li>{{ $faq->question }}</li>
        @endforeach
    </ul>
    <button>
        <h1>How can you print a document from your laptop at HZ?</h1> <img src="/img/Printen.png"> <br> <a
            href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=78827361-9b3f-4261-9b41-940c9942f3da"
            target="_blank">Find the answer here.</a>
    </button>
    <button>
        <h1>How can you scan a document a send it to your laptop at HZ?</h1> <img src="/img/Scannen.png"><br> <a
            href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=d065a4e8-a56d-47dc-bd0f-fb9cdf78f20b"
            target="_blank">Find the answer here.</a>
    </button>
    <button>
        <h1>How can I buy something (like when I sign up for the IT introduction event at Friday 16/09) on the HZ web
            shop?</h1> <img src="/img/HZLogoKlein.png"> <br> <a
            href="https://webshop.hz.nl/WebshopApp/default.aspx?menu=082076044027019251066025111065201099237062130097"
            target="_blank">Find the answer here.</a>
    </button>
    <button>
        <h1> Where can I find the latest instructions on what to do when you show symptoms of COVID?</h1> <img
            src="/img/Rijksoverheidlogo.png"> <br> <a
            href="https://www.rijksoverheid.nl/onderwerpen/coronavirus-covid-19" target="_blank">Read More on the
            Rijksoverheid.</a>
    </button>
    <button>
        <h1>How can you book a project space in one of the wings?</h1> <img src="/img/confrenceroom.png"> <br> <a
            href="https://hzuniversity.topdesk.net/tas/public/ssp/52a63378-addd-4b21-b808-571200fd8d0c" target="_blank">Find
            the answer here.</a>
    </button>
    <button>
        <h1>What are the instructions if you want to park your car at the HZ parking lot?</h1> <img
            src="/img/parkeren.png"> <br> <a href="https://hz.nl/over-de-hz/contact/middelburg"
                                                      target="_blank">Find the answer at
            "parkeren".</a>
    </button>


</div>


<footer id="socials">
    <p>&copy; Dimitrie Lauer 2022</p>
    <a href="https://www.facebook.com/dimitrie.lauer/" target="_blank">Facebook</a>
    <a href="https://www.linkedin.com/in/dimitrie-lauer-b6270a14b/" target="_blank">LinkedIn</a>
    <a href="https://www.instagram.com/its_dimah/" target="_blank">Instagram</a>
    <a href="https://twitter.com/_Its_Dimah" target="_blank">Twitter</a>
</footer>
</body>

</html>
