<template>
  <div class="container-css">
    <nav>
      <ul>
        <li class="link">| Proiecte |</li>
        <li class="link">| Despre mine |</li>  
        <li class="mobile-button"> <div style="margin-top: 0" class="hamburger"></div><div class="hamburger"></div><div class="hamburger"></div></li>
      </ul>
    </nav>   
    <div class="project-card">
      <figure v-for="n in 3" :key="n" class="snip1336">
        <img src="../assets/eagronetwork.jpg" alt="sample87" />
        <figcaption>
          <h2>eAgroNetwork</h2>
          <p>Aplicatie de promovare a producatorilor agricoli pentru potentiali clienti. Tehnologi folosite: Vue.js, Laravel, Mysql.<br>Email: dev@app.com<br>Parola: 1234 </p>
          <a href="http://raspberypi.go.ro/eagronetwork" class="info">Vizualizare</a>
        </figcaption>
      </figure>
    </div>
    <div class="bottom">
      <p class="info-bottom">Nicolaescu Gheorghe-Mihaita 2021</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Website',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
@media screen and (max-width: 600px){
  .link{
    display: none;
  }
  .mobile-button{
    font-family: "Otomanopee";
    font-size: 25px;
    color: white;
    align-items: right;
    padding-top:10px;
  }
  ul{
    justify-content: right;
    display: block;
    list-style-type: none;  
    height: 100%;
  }

  nav{
    height: 50px;
    opacity: 0.75;
    background-color: black;
  }

  .hamburger{
    width: 35px;
    height: 5px;
    background-color: white;
    margin-top: 6px;
  }
  ul li{
    padding: 10px;
    padding-top: 0;
    padding-bottom: 0;
  }
}

@media screen and (min-width: 601px){
  ul{
    list-style-type: none;
    display: flex;
    align-items: center;
    justify-content: center;    
    background-color: black;
    opacity: 0.7;
  }
  .mobile-button{
    display: none;
  } 
}

.info-bottom{
  font-family: "Bebas";
  font-size: 25px;
  text-align: center;
  font-weight: bold;

}
.container-css{
    width: 100%;
    height: 100vh;
    overflow: hidden;
}
/* Hide scrollbar for Chrome, Safari and Opera */
::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
  @font-face {
    font-family: "Bebas";
    src: url("../assets/fonts/BebasNeue-Regular.ttf");
  }
  @font-face {
    font-family: "Otomanopee";
    src: url("../assets/fonts/OtomanopeeOne-Regular.ttf");
  }
  .project-card{
    display: flex;
    flex-wrap: wrap;
    margin: auto;
    justify-content: center;
    width: 100%;
    height: 100%;
    max-height: 86vh;
    overflow: scroll;
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
    margin-top: 10px;
  }
  .link{
    font-family: "Bebas";
    font-size: 45px;
    color: white;
  }

  ul li{
    padding: 10px;
    padding-top: 0;
    padding-bottom: 0;
  }



/* Figura */
@import url(https://fonts.googleapis.com/css?family=Roboto:300,400,600);
.snip1336 {
  font-family: 'Roboto', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #ffffff;
  text-align: left;
  line-height: 1.4em;
  background-color: #141414;
  max-height: 100%;
}
.snip1336 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.snip1336 img {
  max-width: 100%;
  vertical-align: top;
  opacity: 0.85;
}
.snip1336 figcaption {
  width: 100%;
  background-color: #141414;
  padding: 25px;
  position: relative;
}
.snip1336 figcaption a {
  padding: 5px;
  border: 1px solid #ffffff;
  color: #ffffff;
  font-size: 0.7em;
  text-transform: uppercase;
  margin: 10px 0;
  display: inline-block;
  opacity: 0.65;
  width: 47%;
  text-align: center;
  text-decoration: none;
  font-weight: 600;
  letter-spacing: 1px;
}
.snip1336 figcaption a:hover {
  opacity: 1;
}
.snip1336 .follow {
  margin-right: 4%;
  border-color: #2980b9;
  color: #2980b9;
}
.snip1336 h2 {
  margin: 0 0 5px;
  font-weight: 300;
}
.snip1336 h2 span {
  display: block;
  font-size: 0.5em;
  color: #2980b9;
}
.snip1336 p {
  margin: 0 0 10px;
  font-size: 0.8em;
  letter-spacing: 1px;
  opacity: 0.8;
}

</style>
