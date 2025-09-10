@extends('composable.layout')

@section('title', 'Person index')

{{-- Disable container wrapper --}}
@section('containerClass', '')


@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    font-family: Arial, Helvetica, sans-serif;
}

html {
    font-size: 63%;
}

body {
    overflow-x: hidden;
    background-color: rgb(0, 0, 0);
}

/* Scoped Portfolio Styles */
.portfolio-page header {
    margin-top: 20px;
    position: sticky;
    top: 0;
    left: 0;
    width: 100%;
    padding: 1rem 9%;
    background-color: rgb(31, 1, 1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    transition: top 0.3s ease;
}

.portfolio-page .logo {
    font-size: 3rem;
    color: brown;
    font-weight: 800;
    cursor: pointer;
    transition: 0.5 ease;
}

.portfolio-page nav a {
    font-size: 1.8rem;
    color: brown;
    margin-left: 4rem;
    font-weight: 500;
    transition: 0.3 ease;
    border-bottom: 3px solid transparent;
}

.portfolio-page nav a:hover {
    color: brown;
    border-bottom: 3px solid brown;
    transform: scale(.5) translate(-5px);
    box-shadow: 0 0 20px;
}

.portfolio-page section {
    min-height: 100vh;
    padding: 5rem 9% 5rem;
}

.portfolio-page .home {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8rem;
    background-color: black;
}

.portfolio-page .home-body p,
.portfolio-page .home-body h1,
.portfolio-page .home-body h3 {
    color: white;
}

.portfolio-page .home .home-body h1 {
    font-size: 6rem;
    font-weight: 800;
    line-height: 1.3;
}

.portfolio-page span {
    color: aqua;
}

.portfolio-page .home-body h3 {
    font-size: 4rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.portfolio-page .home-img {
    border-radius: 50%;
}

.portfolio-page .home-img img {
    position: relative;
    width: 32vw;
    border-radius: 50%;
    box-shadow: 0 0 25px solid;
    cursor: pointer;
    transition: 0.2 ease;
}

.portfolio-page .home-img img:hover {
    font-size: 1.8rem;
    font-weight: 500;
}

.portfolio-page .social-icons a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    background-color: transparent;
    border: 0.2rem solid brown;
    font-size: 2rem;
    border-radius: 50%;
    margin: 3rem 1.5rem 3rem;
    transition: 0.3 ease;
}

.portfolio-page .social-icons a:hover {
    color: black;
    transform: scale(1.3) translate(-5px);
    background-color: brown;
    box-shadow: 0 0 25px brown;
}

/* Hobbies section */
.portfolio-page .hobbies {
    background-color: rgb(20, 20, 20);
    text-align: center;
    color: white;
}

.portfolio-page .hobbies h1 {
    font-size: 5rem;
    margin-bottom: 3rem;
    color: aqua;
}

.portfolio-page .hobby-list {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5rem;
    flex-wrap: wrap;
}

.portfolio-page .hobby-item {
    background-color: rgb(31, 1, 1);
    padding: 2rem;
    border-radius: 20px;
    width: 250px;
    transition: 0.3s ease;
    box-shadow: 0 0 10px brown;
}

.portfolio-page .hobby-item:hover {
    transform: scale(1.1);
    box-shadow: 0 0 25px brown;
}

.portfolio-page .hobby-item i {
    font-size: 4rem;
    color: brown;
    margin-bottom: 1rem;
}

.portfolio-page .hobby-item h3 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.portfolio-page .hobby-item p {
    font-size: 1.5rem;
    color: #ddd;
}

/* Experience section */
.portfolio-page .experience {
    background-color: black;
    text-align: center;
    color: white;
    padding-top: 5rem;
}

.portfolio-page .experience h1 {
    font-size: 5rem;
    margin-bottom: 3rem;
    color: aqua;
}

.portfolio-page .experience-list {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5rem;
    flex-wrap: wrap;
}

.portfolio-page .experience-item {
    background-color: rgb(31, 1, 1);
    padding: 2rem;
    border-radius: 20px;
    width: 300px;
    transition: 0.3s ease;
    box-shadow: 0 0 10px brown;
}

.portfolio-page .experience-item:hover {
    transform: scale(1.1);
    box-shadow: 0 0 25px brown;
}

.portfolio-page .experience-item i {
    font-size: 4rem;
    color: brown;
    margin-bottom: 1rem;
}

.portfolio-page .experience-item h3 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.portfolio-page .experience-item p {
    font-size: 1.5rem;
    color: #ddd;
}


</style>
@endpush
@section('content')
<div class="portfolio-page">
    <header>
        <h1 class="logo">DREI</h1>
        <nav>
            <a href="#About" class="active">About</a>
            <a href="#Hobbies" class="active">Hobbies</a>
            <a href="#Experience" class="active">Experience</a>
        </nav>
    </header>

    <section class="home" id="About">
        <div class="home-img">
                <img src="pic1.jpg" alt="Profile Picture">
        </div>
        <div class="home-body">
            <h1>Hi I'm <span>Carl</span></h1>
            <h3>Welcome <span></span></h3>
            <p>My name is Carl, an aspiring developer and currently studying at ISPSC tagudin taking BSIT course. My education in IT has provided me with a solid foundation in the principles of software development. I am a hardworking and motivated student, driven by a desire to turn ideas into reality through code. I am actively seeking a role where I can not only learn from experienced professionals but also apply my skills and grow as a developer.</p>
        <div id="Contact" class="social-icons">
             <a href="https://www.facebook.com/carlbienandrei.lardizabal" target="_blank"><i class="fab fa-facebook"></i></a>
             <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
             <a href="https://github.com/carlbienandreilardizabal-spec" target="_blank"><i class="fab fa-github"></i></a>
        </div>
        </div>
    </section>

    <!-- Hobbies Section -->
    <section class="hobbies" id="Hobbies">
        <h1>My Hobbies</h1>
        <div class="hobby-list">
            <div class="hobby-item">
                <i class="fas fa-code"></i>
                <h3>Coding</h3>
                <p>I enjoy building projects and improving my problem-solving skills through programming.</p>
            </div>
            <div class="hobby-item">
                <i class="fas fa-gamepad"></i>
                <h3>Gaming</h3>
                <p>Playing games helps me relax while sharpening my strategic thinking skills.</p>
            </div>
            <div class="hobby-item">
                <i class="fas fa-music"></i>
                <h3>Music</h3>
                <p>Listening to music inspires creativity and helps me focus while coding.</p>
            </div>
        </div>
    </section>
    <!-- Experience Section -->
    <section class="experience" id="Experience">
        <h1>Experience</h1>
        <div class="experience-list">
            <div class="experience-item">
                <i class="fas fa-store"></i>
                <h3>E-commerce Website</h3>
                <p>Developed a PHP-based online shoe shop named <strong>Meroyalty</strong>. 
                Features include product listing, add-to-cart, search, and responsive design.</p>
            </div>

            <div class="experience-item">
                <i class="fas fa-laptop-code"></i>
                <h3>Portfolio Website</h3>
                <p>Built my personal portfolio using HTML, CSS, and JavaScript to showcase my skills, hobbies, and projects.</p>
            </div>

            <div class="experience-item">
                <i class="fas fa-graduation-cap"></i>
                <h3>Academic Projects</h3>
                <p>Worked on group projects involving basic systems development, applying software development principles learned in IT.</p>
            </div>
        </div>
    </section>
</div>
@endsection