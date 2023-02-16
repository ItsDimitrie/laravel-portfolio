<!DOCTYPE html>
<html lang="en">
<link href="/css/style.css" rel="stylesheet" type="text/css">

<header>
    <nav id="headerlinks">
        <button class="{{ Request::path() === '/' ? 'active' : '' }}"> <a href="/">Home</a> </button>
        <button class="{{ Request::path() === 'aboutme' ? 'active' : '' }}"> <a href="/aboutme">About Me</a> </button>
        <button class="{{ Request::path() === 'faq' ? 'active' : '' }}"> <a href="/faq">FAQ</a></button>
        <button class="{{ Request::path() === 'dashboard' ? 'active' : '' }}"> <a href="/dashboard">Dashboard</a></button>
        <button class="{{ Request::path() === 'blogs' ? 'active' : '' }}"> <a href="/blogs">Blogs</a></button>
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
            <img src="/img/cameraenik.png" id="headerfoto">
        </div>
    </nav>

</header>

<body>
@yield ('content');
</body>

<footer id="socials">
    <p>&copy; Dimitrie Lauer 2023</p>
    <a href="https://www.facebook.com/dimitrie.lauer/" target="_blank">Facebook</a>
    <a href="https://www.linkedin.com/in/dimitrie-lauer-b6270a14b/" target="_blank">LinkedIn</a>
    <a href="https://www.instagram.com/its_dimah/" target="_blank">Instagram</a>
    <a href="https://twitter.com/_Its_Dimah" target="_blank">Twitter</a>
</footer>

