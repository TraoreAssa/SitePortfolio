<style type="text/css">
    body {
        /* background: black; */
    background: linear-gradient(to top, rgb(204,166,164), rgb(199,102,102));

        margin: 0 auto;
    }

   
    .container {
        background: lightgrey;
        border: 5px solid blue;
        border-radius:10px;
    }

    
    /* Button a droite */
    .monter {
        position: fixed;
        background: transparent;
        right: 20px;
        cursor: pointer;
        font-size: 200%;
        color: slategray;
        border: none;
        bottom: 20px;
    }
        /*  */
    a{
        color: inherit;
        text-decoration : none;
    }
        
    a:hover{
        color: pink;
        text-decoration:  none;
    }
  
    hr{
        color: gainsboro;
        size:25px;
    }

  
    .container{
        overflow-y: hidden;
        border: 5px solid #550000;
        border-radius:10px;
        margin-top:5px;
        box-shadow: 10px 5px 5px #550000;
    }

    section, iframe{
        box-shadow: 10px 10px 5px 5px black;
        padding:2px;
        margin:10px;
        border-radius:10px;
    }

    .site:hover{
        color:white;
        font-size:25px;
    }


    i{
        color:grey;
    }

    i:hover{
        color:blue;
    }

    /* NAV */
    nav a:hover{
    background: #550000;
    transition: 2s;
    padding: 20px;
    width:100%;
    }
    .mainMenu{
        display: block;
        position: relative;
        /* les éléments vont bougé -> relative permet de les faires bouger // *si pas de position relative .content va se mettre au dessus de la nav */
        width: 100%;
        margin: 0;
        padding: 0;
        text-align: center;
        border-bottom: 1px solid #ccc;
        box-shadow: 0 0 3px 5px;
    }
    .content{
        margin: 1% 3%;
    }
    .menu{
        width: 100%;
        margin: 0;
        padding: 0;
        list-style: none;
        max-height: 0px;
        overflow-y: hidden;
        text-align: center;
    }

    .menu li{
        border-top: 1px solid #ccc;
        width: 100%;
    }
    .menu li:hover{
        background: #eee;
        cursor: pointer;
    }
    .menu a{
        color: #333;
        text-decoration: none;
        display: block;
        width: 94%;
        padding: 5px;
    }
    .menu a:hover{
        color: #666;
    }

    /* burger nav */
    label.menuTitle{
        text-align: left;
        font-size: 30px;
        height: 50px;
        width: 40px;
        margin-right: 1%;
        display: block;
        font-weight: bold;
        cursor: pointer;
        background: url(image/menu.png) no-repeat 100% 40%;
        background-size: 44px 39px;
        float: right; 
    }
    .hidden{
        display: none;
    }
    input[name="panel"]:checked ~ .menu{ /*checked: lorsque l'élément est coché*/
        max-height: 800px;
        transition: 2s;
    }
    .clear{
        clear: both;
    }
    /* Fin de la NAV */

   

    /* Effet survol avec transition et filtres COMPETENCES */
    .comp li{
        list-style: none;
        width: 241px;
        height: 250px;
        margin: 15px;
    }

    .comp img{
        position: absolute;
        z-index: 1;
        height: 250px;
        transition: .5s cubic-bezier(0,3,.4,1);
    }

    .comp li:hover img{
        z-index: 2;
        transform: scale(1.5);
    }

    .comp:hover li:not(:hover) img{
        /*je mets ai survol de la classe comp je met les image en gris et en flou */
        filter: grayscale(1) blur(8px);
    }

    /* Fin des compétences */
    

    /* V mobile */
    @media screen and (min-width:970px){
        label.menuTitle{
            display: none;
        }
        .menu, .menu li{
            padding: 2%;
            box-sizing: border-box; /*permet de bloquer un block à une certaine taille en padding décale avec border-box c'est bloqué et le padding se fait à l'intérieur*/
        }
        .menu li, .menu a{
            display: inline;
            border:none;
        }
        
    }

    /* -------------------------------------------------------------------------------------------- */

    /* html, body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    background: linear-gradient(to top, rgb(204,166,164), rgb(199,102,102));
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Lato';
    overflow: hidden;
} */


#profil .card {
    border-radius: 16px;
    width: 660px;
    height: 660px;
    /* background: url(image/Avatar.png) no-repeat; */
    position: relative;
    overflow: hidden;
    box-shadow: 0 5px 50px rgba(0,0,0,0.85);
}


#profil .card::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.92);
}


#profil .card .img {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
}


#profil .card .img span {
    width: 100%;
    height: 100%;
    color: white;
    font-size:50px;
    transition: 0.5s;
    top:250px;
}


#profil .card .img span:nth-child(1) {
    transition-delay: 0s;
    background-position: 0;
}

#profil .card .img span:nth-child(2) {
    transition-delay: 0.1s;
    background-position: 33.33%;
}
#profil .card .img span:nth-child(3) {
    transition-delay: 0.2s;
    background-position: 66.66%;
}
#profil .card .img span:nth-child(4) {
    transition-delay: 0.3s;
    background-position: 100%;
}

#profil .card:hover .img > span {
    transform: translateY(-100%);
}


.content { 
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    color: white;
    padding: 20px 20px;
    width: 100%;
    height: 100%;
    transform: translateY(100%);
}

#profil .card:hover .content {
    transform: translateY(0%);
    transition: 1s;
    transition-delay: 0.1s;
}

</style> 