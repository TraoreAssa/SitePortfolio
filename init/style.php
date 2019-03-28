<style type="text/css">
    body {
        background: black;
        margin: 0 auto;
    }

    nav a:hover{
    background: pink;
    transition: 2s;
    padding: 20px;

    }
    .container {
        background: white;
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
    section{
        /* margin:10px; */
    }
    hr{
        color: gainsboro;

    }


    /* nav {
        text-align: center;
        font-size: 30px;
    }
    nav a{
        text-decoration: none;
        color: black;
        margin: 20px;
    }
    hr{
        color: gainsboro;

    }
    p{
        margin: 20px;
    } */

    body{
        margin: 0;
    }
    .content{
        margin: 1% 3%;
    }
    .mainMenu{
        display: block;
        position: relative;/* les éléments vont bougé -> relative permet de les faires bouger // *si pas de position relative .content va se mettre au dessus de la nav */
        width: 100%;
        margin: 0;
        padding: 0;
        text-align: center;
        border-bottom: 1px solid #ccc;
        box-shadow: 0 0 3px 5px;
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
    label.menuTitle{
        text-align: left;
        font-size: 30px;
        height: 50px;
        width: 40px;
        margin-right: 1%;
        display: block;
        font-weight: bold;
        cursor: pointer;
        background: url(image/menu.jpg) no-repeat 100% 40%;
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

    /* Effet survol avec transition et filtres COMPETENCEs */
   
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

    /* mobile */
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



</style> 