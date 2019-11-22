<template>
    <div>
        <Navbar/>
        <div class="page-content">
            <Intro/>
<!--            <Stream/>-->
            <Register/>
            <Contact/>
            <Footer/>
        </div>
    </div>
</template>
<script>
    import Navbar from './home/Navbar'
    import Intro from "./home/Intro";
    import Stream from "./home/Stream";
    import Register from './home/Register';
    import Contact from './home/Contact';
    import Footer from './home/Footer';
    export default {
        components:{
            'Navbar' : Navbar,
            'Intro': Intro,
            'Stream': Stream,
            'Register': Register,
            'Contact': Contact,
            'Footer': Footer
        }

    }
</script>
