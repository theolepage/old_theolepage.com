@extends('layouts.resume')

@section('title', 'Resume — Theo Lepage')

@section('content')

<div class="resume">

    <div class="resume-header">
        
        <div class="resume-header-content">
            <div class="resume-name">Theo Lepage</div>
            <div class="resume-description">Looking for an internship in Software Engineering or Machine Learning<br /> starting in September 2020.</div>
            <div class="resume-contact">
                <a class="resume-contact-item" href="https://www.google.com/maps/place/Paris/@48.864872,2.2183041,11z/data=!4m5!3m4!1s0x47e66e1f06e2b70f:0x40b82c3688c9460!8m2!3d48.856614!4d2.3522219">
                    <img class="resume-icon" src="/images/icon-map_blue.svg" alt="icon-map">
                    Paris, France
                </a>

                <a class="resume-contact-item" href="mailto:theo@theolepage.com">
                    <img class="resume-icon" src="/images/icon-email.svg" alt="icon-email">
                    theo@theolepage.com
                </a>

                <a class="resume-contact-item" href="tel:+33670097066">
                    <img class="resume-icon" src="/images/icon-phone.svg" alt="icon-phone">
                    +33 6 70 09 70 66
                </a>

                <a class="resume-contact-item" href="https://theolepage.com">
                    <img class="resume-icon" src="/images/icon-website.svg" alt="icon-website">
                    theolepage.com
                </a>                

                <a class="resume-contact-item" href="https://www.linkedin.com/in/theolepage/">
                    <img class="resume-icon" src="/images/icon-linkedin.svg" alt="icon-linkedin">
                    Theo Lepage
                </a>

                <a class="resume-contact-item" href="https://github.com/theolepage">
                    <img class="resume-icon" src="/images/icon-github.svg" alt="icon-github">
                    theolepage
                </a>
            </div>
        </div>

        <!-- <img class="resume-header-photo" src="/images/portrait2.jpg" alt="Portrait"> -->
    </div>

    <div class="resume-section resume-section_experience">
        <div class="resume-title">Professional experience</div>

        <div class="resume-experience">
            <div class="resume-experience-content">
                <div class="resume-experience-header">
                    <div class="resume-subtitle">
                        <span class="resume-emphasize">Machine Learning Research Assistant</span> at <a href="https://www.lse.epita.fr/">LSE</a>
                    </div>
                    <div class="resume-experience-icons">
                        <div class="resume-location">
                            <img class="resume-icon" src="/images/icon-map.svg" alt="icon-map">
                            Paris, France
                        </div>
                        <div class="resume-date">
                            <img class="resume-icon" src="/images/icon-calendar.svg" alt="icon-calendar">
                            Started Jan. 2020
                        </div>
                    </div>
                </div>
                <div class="resume-text">
                    Currently working on a prototype of a self-driving car to compete the French <a href="https://www.roboracingleague.com/">DIY Robocars</a> every month.<br />
                    Reading and implementing new methods and papers in the field of artificial intelligence.
                </div>
            </div>
            <div class="resume-experience-image">
                <img style="width: 100%" src="/images/lse.png" alt="">
            </div>
        </div>

        <div class="resume-experience">
            <div class="resume-experience-content">
                <div class="resume-experience-header">
                    <div class="resume-subtitle">
                    <span class="resume-emphasize">Teaching Assistant</span> at <a href="https://www.epita.fr/en">EPITA</a>
                    </div>
                    <div class="resume-experience-icons">
                        <div class="resume-location">
                            <img class="resume-icon" src="/images/icon-map.svg" alt="icon-map">
                            Paris, France
                        </div>
                        <div class="resume-date">
                            <img class="resume-icon" src="/images/icon-calendar.svg" alt="icon-calendar">
                            Started Sep. 2019
                        </div>
                    </div>
                </div>
                <div class="resume-text">
                    Teaching C programming language to second year students through weekly graded practicals.<br />
                    Worked on a web app to let other assistants test and evaluate student projects.
                </div>
            </div>
            <div class="resume-experience-image">
                <svg class="cv-sc-1hpqbbc-34 itmJrq" viewBox="0 0 645.63498 437.30501"><defs><clipPath id="a"><polygon points="168.501 380.651 645.635 257.905 340.052 28.353 168.501 380.651" style="fill: none;"></polygon></clipPath><linearGradient id="b" x1="24.42662" y1="639.962" x2="25.42662" y2="639.962" gradientTransform="matrix(0, -352.30007, -352.30007, 0, 225865.72601, 8986.15267)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#004c67"></stop><stop offset="1" stop-color="#00aae7"></stop></linearGradient><clipPath id="c"><polygon points="0 202.971 332.571 437.305 313.678 0 0 202.971" style="fill: none;"></polygon></clipPath><linearGradient id="d" x1="25.46192" y1="639.83387" x2="26.46192" y2="639.83387" gradientTransform="matrix(0, 437.30503, 437.30503, 0, -279636.28422, -11134.62539)" xlink:href="#b"></linearGradient><clipPath id="e"><polygon points="473.781 3.841 605.471 326.317 47.667 326.317 473.781 3.841" style="fill: none;"></polygon></clipPath><linearGradient id="f" x1="24.3736" y1="639.96856" x2="25.3736" y2="639.96856" gradientTransform="matrix(0, -322.47585, -322.47585, 0, 206700.97712, 8186.21334)" xlink:href="#b"></linearGradient></defs><title>logo_epita</title><g style="clip-path: url(&quot;#a&quot;);"><path d="M168.50125,380.65125,645.635,257.905,340.05248,28.35251Z" style="fill: url(&quot;#b&quot;);"></path></g><g style="clip-path: url(&quot;#c&quot;);"><path d="M0,202.97127,332.57125,437.305,313.67751,0Z" style="fill: url(&quot;#d&quot;);"></path></g><g style="clip-path: url(&quot;#e&quot;);"><path d="M473.78123,3.84125l131.69,322.47623H47.66749Z" style="fill: url(&quot;#f&quot;);"></path></g><path d="M108.97313,279.92764h68.42625V257.45389H131.54813V217.32014h45.85125v-22.475H131.54813v-40.1325h45.85125V132.23888H108.97313Zm120.48875-31.605a58.57513,58.57513,0,0,0,58.59376-58.59375,58.57736,58.57736,0,0,0-58.59376-58.495h-24.18V279.92764h22.47375v-31.605Zm-1.70625-94.915h1.70625a36.325,36.325,0,0,1,25.685,62.00626,34.99992,34.99992,0,0,1-25.685,10.635h-1.70625Zm83.47626,126.52h22.47375v-150.19H311.23189Zm42.03375-125.215h36.92249v124.4125h22.475V154.71264h36.92123v-23.2775H353.26562v23.2775Zm173.1,105.24875,7.82749,20.46875h24.07876l-59.49627-154.915-59.59752,154.915h24.07876l7.92625-20.46875h55.18253Zm-27.59-71.7375,18.96252,49.2625H479.81191Z" style="fill: rgb(255, 255, 255);"></path></svg>
            </div>
        </div>
    </div>

    <div class="resume-section resume-education">
        <div class="resume-title">Education</div>

        <div class="resume-item">
            <div class="resume-subtitle">
                <span class="resume-emphasize"><a href="https://www.epita.fr/en">EPITA - École Pour l'Informatique et les Techniques Avancées</a></span>
                (Engineering school)
            </div>
            <div class="resume-education-icons">
                <div class="resume-location">
                    <img class="resume-icon" src="/images/icon-map.svg" alt="icon-map">
                    Paris, France
                </div>
                <div class="resume-date">
                    <img class="resume-icon" src="/images/icon-calendar.svg" alt="icon-calendar">
                    Started Sep. 2017
                </div>
            </div>
            <div class="resume-text">
                Developed a deep interest in computer science through various challenging projects in small groups.<br />
                First three years of the program taught in English as I am part of the international section.<br />
                Courses: Linear algebra, Formal language, Programming, Computer architecture/networks, Probabilities, Statistics, ...
            </div>
        </div>

        <div class="resume-item">
            <div class="resume-subtitle">
                <span class="resume-emphasize"><a href="https://csumb.edu/">CSUMB - California State University, Monterey Bay</a></span>
                (Semester abroad)
            </div>
            <div class="resume-education-icons">
                <div class="resume-location">
                    <img class="resume-icon" src="/images/icon-map.svg" alt="icon-map">
                    Northern California, USA
                </div>
                <div class="resume-date">
                    <img class="resume-icon" src="/images/icon-calendar.svg" alt="icon-calendar">
                    From Jan. to Jun. 2019
                </div>
            </div>
            <div class="resume-text">
                Courses: Discrete mathematics, Software design, Graphics programming, Computer networks.<br />
                Joined a startup during a Techstars Startup Weekend and worked on a web app matching users with health providers.
            </div>
        </div>
    </div>

    <div class="resume-section resume-projects">
        <div class="resume-title">Projects</div>

        <div class="resume-cols">
            <div class="resume-col">
                <div class="resume-item">
                    <div class="resume-subtitle resume-emphasize">
                        <img class="resume-icon" src="/images/icon-project.svg" alt="icon-project">
                        <a href="/lab/prophecy">Prophecy - a neural network framework</a>
                    </div>
                    <div class="resume-text">Implemented n-dimensional arrays, dense and convolution from scratch in C++ and Cuda. Offering some of Keras features and handles MNIST dataset.</div>
                </div>

                <div class="resume-item">
                    <div class="resume-subtitle resume-emphasize">
                        <img class="resume-icon" src="/images/icon-project.svg" alt="icon-project">
                        <a href="/lab/cant-stop-driving">Can't Stop Driving</a>
                    </div>
                    <div class="resume-text">Led a team, for a 4 months school project, to create a 3D multiplayer game built with Unity. It was chosen by a jury to be presented during open days.</div>
                </div>
            </div>

            <div class="resume-col">
                <div class="resume-item">
                    <div class="resume-subtitle resume-emphasize">
                        <img class="resume-icon" src="/images/icon-project.svg" alt="icon-project">
                        <a href="/lab/ember-classification">Classification of EMBER dataset</a>
                    </div>
                    <div class="resume-text">
                        Developed machine learning methods (k-means, deep neural networks, ...) to classify a dataset of malware programs.
                        Ranked second out of 15 participants.
                    </div>
                </div>

                <div class="resume-item">
                    <div class="resume-subtitle resume-emphasize">
                        <img class="resume-icon" src="/images/icon-project.svg" alt="icon-project">
                        <a href="/lab/42sh">42sh - a POSIX shell</a>
                    </div>
                    <div class="resume-text">Worked on a shell, complying with the Command Shell Language standard, in C during one month. Our project works with most of the Bash grammar.</div>
                </div>
            </div>
        </div>

    </div>

    <div class="resume-section resume-interests-skills">
        <div class="resume-title">Interests and skills</div>

        <div class="resume-cols">
            <div class="resume-col">
                <div class="resume-item">
                    <div class="resume-subsubtitle">Programming languages / technologies</div>
                    <div class="resume-label">C</div>
                    <div class="resume-label">C++</div>
                    <div class="resume-label">C#</div>
                    <div class="resume-label">Java</div>
                    <div class="resume-label">Python</div>
                    <div class="resume-label">OCaml/Haskell</div>
                    <div class="resume-label">HTML/CSS</div>
                    <div class="resume-label">PHP</div>
                    <div class="resume-label">JavaScript</div>
                    <div class="resume-label">SQL</div>
                    <div class="resume-label">Git</div>
                    <div class="resume-label">Linux/Bash</div>
                </div>

                <div class="resume-item">
                    <div class="resume-subsubtitle">Miscellaneous</div>
                    <div class="resume-label">Algorithmics</div>
                    <div class="resume-label">Machine Learning</div>
                    <div class="resume-label">Software Engineering</div>
                    <div class="resume-label">Project Management</div>
                    <div class="resume-label">LaTex</div>
                </div>
            </div>

            <div class="resume-col">
                <div class="resume-item">
                    <div class="resume-subsubtitle">Certificates</div>
                    <div class="resume-label">Driving license</div>
                    <div class="resume-label">Sailing instructor diploma</div>
                </div>

                <div class="resume-item resume-floating">
                    <div class="resume-subsubtitle">Languages</div>
                    <div class="resume-label">English (TOEIC 905)</div>
                    <div class="resume-label">French</div>
                </div>

                <div class="resume-item">
                    <div class="resume-subsubtitle">Passions and interests</div>
                    <div class="resume-passion">
                        <img class="resume-icon resume-passion-icon" src="/images/icon-science.svg" alt="icon-science">
                        Science and AI
                    </div>
                    <div class="resume-passion">
                        <img class="resume-icon resume-passion-icon" src="/images/icon-wave.svg" alt="icon-wave">
                        Sailing and windsurf
                    </div>
                    <div class="resume-passion">
                        <img class="resume-icon resume-passion-icon" src="/images/icon-ecology.svg" alt="icon-ecology">
                        Sustainable development
                    </div>
                    <div class="resume-passion">
                        <img class="resume-icon resume-passion-icon" src="/images/icon-travel.svg" alt="icon-travel">
                        Traveling (+10 countries)
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="resume-footer">
        An up-to-date version of this document is available at <a href="/resume">theolepage.com/resume</a> (<a href="/resume/fr">french version</a>).
    </div>

</div>

@endsection
