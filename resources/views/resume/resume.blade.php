@extends('layouts.resume')

@section('title', 'Resume — Theo Lepage')

@section('content')

<div class="resume">

    <div class="resume-name">Theo Lepage</div>
    <div class="resume-description">Looking for a Autumn internship in Software Engineering starting in September 2020.</div>

    <div class="resume-contact">
        <div class="resume-contact-col">
            <a class="resume-contact-top" href="https://theolepage.com">
                <img class="resume-icon" src="/images/icon-website.svg" alt="icon-website">
                theolepage.com
            </a>
            <a href="https://www.linkedin.com/in/theolepage/">
                <img class="resume-icon" src="/images/icon-linkedin.svg" alt="icon-linkedin">
                Theo Lepage
            </a>
        </div>
        <div class="resume-contact-col">
            <a class="resume-contact-top" href="mailto:theo@theolepage.com">
                <img class="resume-icon" src="/images/icon-email.svg" alt="icon-email">
                theo@theolepage.com
            </a>
            <a href="https://github.com/thdoteo">
                <img class="resume-icon" src="/images/icon-github.svg" alt="icon-github">
                thdoteo
            </a>
        </div>
        <div class="resume-contact-col"> 
            <a class="resume-contact-top" href="tel:+33670097066">
                <img class="resume-icon" src="/images/icon-phone.svg" alt="icon-phone">
                +33 6 70 09 70 66
            </a>
            <a href="https://twitter.com/thdoteo">
                <img class="resume-icon" src="/images/icon-twitter.svg" alt="icon-twitter">
                @thdoteo
            </a>
        </div>
    </div>
    
    <div class="resume-section resume-education">
        <div class="resume-title">Education</div>
    
        <div class="resume-item">
            <div class="resume-subtitle">
                <a href="https://www.epita.fr/en">EPITA – École Pour l'Informatique et les Techniques Avancées</a>
                (Engineering School)
            </div>
            <div class="resume-icons">
                <div class="resume-location">
                    <img class="resume-icon" src="/images/icon-map.svg" alt="icon-map">
                    Paris, France
                </div>
                <div class="resume-date">
                    <img class="resume-icon" src="/images/icon-calendar.svg" alt="icon-calendar">
                    Started Sep. 2017
                </div>
            </div>
            <div class="resume-text">Master in Computer Science, taught in English as I am part of the international section.</div>
        </div>

        <div class="resume-item">
            <div class="resume-subtitle">
                <a href="https://csumb.edu/">CSUMB – California State University of Monterey Bay</a>
            </div>
            <div class="resume-icons">
                <div class="resume-location">
                    <img class="resume-icon" src="/images/icon-map.svg" alt="icon-map">
                    Northern California, USA
                </div>
                <div class="resume-date">
                    <img class="resume-icon" src="/images/icon-calendar.svg" alt="icon-calendar">
                    From Jan. 2019 to Jun. 2019
                </div>
            </div>
            <div class="resume-text">Semester abroad. Worked on a startup project after participating to a Techstars Startup Weekend.</div>
        </div>
    </div>

    <div class="resume-section resume-experience">
        <div class="resume-title">Experience</div>

        <div class="resume-item">
            <div class="resume-subtitle">
                Teaching assistant
            </div>
            <div class="resume-icons">
                <div class="resume-location">
                    <img class="resume-icon" src="/images/icon-map.svg" alt="icon-map">
                    Paris, France
                </div>
                <div class="resume-date">
                    <img class="resume-icon" src="/images/icon-calendar.svg" alt="icon-calendar">
                    Started Sep. 2019
                </div>
            </div>
            <div class="resume-text">Teaching UNIX concepts and C to second year students through weekly graded practicals.</div>
        </div>
    </div>

    <div class="resume-section resume-projects">
        <div class="resume-title">Projects</div>

        <div class="resume-item">
            <div class="resume-subtitle">
                <a href="https://github.com/NoneOfAllOfTheAbove/ocr">An Optical Character Recognition software</a>
            </div>
            <div class="resume-text">Led a team during three months with the aim of creating a software, based on a neural network, able to extract text from images.<div>
        </div>

        <div class="resume-item">
            <div class="resume-subtitle">
                <a href="https://github.com/AllOfTheAbove/cant-stop-driving">Can't Stop Driving</a>
            </div>
            <div class="resume-text">Made a 3D multiplayer game built with Unity. The project was chosen by a jury to be presented to new students.<div>
        </div>

        <div class="resume-item">
            <div class="resume-subtitle">
                <a href="https://thdoteo.com">thdoteo.com</a>
            </div>
            <div class="resume-text">Created a website with a dashboard to manage and present some of my 30+ open source projects.<div>
        </div>
    </div>

    <div class="resume-section resume-interests-skills">
        <div class="resume-title">Interests and skills</div>

        <div class="resume-item">
            <div class="resume-subtitle">Programming languages / softwares</div>
            <div class="resume-text">Algorithmics, C, C++, C#, Python, PHP, JavaScript, Java, Git, Linux, Bash, LaTex.</div>
        </div>

        <div class="resume-item">
            <div class="resume-subtitle">Passions</div>
            <div class="resume-text"> - Sailing (sailing instructor).<div>
            <div class="resume-text"> - Traveling (USA, Mexico, England, Ireland, Italy, Egypt, Morocco, Senegal, Jordan...).</div>
        </div>
    </div>

</div>

@endsection