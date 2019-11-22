<template>
    <div>
        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
                    data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="#top">Intro</a></li>
                        <li><a href="#stream">Stream</a></li>
                        {/*<li><a href="#team">Teams</a></li>*/}
                        {/*<li><a href="#fixtures">Fixtures</a></li>*/}
                        <li><a href="#register">Register</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                <a href="#">Team<em>work</em></a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#top">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Intro
                        </a>
                    </li>
                    <li>
                        <a href="#stream">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Stream
                        </a>
                    </li>
<!--                    {/*<li>*/}-->
<!--                    {/*    <a href="#team">*/}-->
<!--                        {/*        <span class="rect"></span>*/}-->
<!--                        {/*        <span class="circle"></span>*/}-->
<!--                        {/*        Teams*/}-->
<!--                        {/*    </a>*/}-->
<!--                    {/*</li>*/}-->
<!--                    {/*<li>*/}-->
<!--                    {/*    <a href="#fixtures">*/}-->
<!--                        {/*        <span class="rect"/>*/}-->
<!--                        {/*        <span class="circle"/>*/}-->
<!--                        {/*        Fixtures*/}-->
<!--                        {/*    </a>*/}-->
<!--                    {/*</li>*/}-->
                    <li>
                        <a href="#register">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Contact Us
                        </a>
                    </li>

                </ul>
            </nav>
            <ul class="social-icons">
                <li>
                    <a href="https://www.facebook.com/TeamworkOffficial/" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
<!--                {/*<li><a href="#"><i class="fa"><img src="{{ asset('img/branding/Discord-Logo-White') }}" style="height: 20px; width: 20px" alt=""></i></a></li>*/}-->
                <li>
                    <a href="#">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {

    }
</script>
