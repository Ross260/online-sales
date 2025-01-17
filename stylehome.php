<style>
    .nav-item{
        margin:0  20px;
        color: azure;
  }


  *{
    font-family: 'Times New Roman', Times, serif;
}

header{
    background: url(./image/other/homes.png)no-repeat 50% 50%; /* Image de fond*/
    background-size: cover; /* Fait à ce que l'image prenne toute la largeur de l'écran*/
    height: 100vh;
    border-radius: 0px 0px 20px 20px; /*dans le sens des éguilles d'une montre*/
    margin-bottom: 40px; /* crée une marge en bas de la page*/
    font-family: monospace;
}

/* ################################################################ */
/* le nav3 */
.contien{
    display: flex;
}

h1{
    font-size: 80px;
    float: left;
    color:rgb(235, 195, 16);
    margin-top: 60px;
    padding: 200px 0 0 20%; /* pagination dans le sens des éguilles d'une montre*/
    text-shadow: -3px 3px 2px #658559; /* Pour donner un peu d'ombre au h1*/
    animation: titre ease 3.5s;
}
@keyframes titre {
    0%{
        opacity: 0;
        transform: translateY(180px);
    } /*A 180px en bas de ta position initiale ton opacité est à 0*/
    100%{
        opacity: 1;
        transform: translateY(0px);
    } /*A 0px à ta position initiale ton opacité est à 1*/
} /* Ceci est une animation*/


.leH1 {
    font-size: 80px;
    float: left;
    color: green;
    margin-left: 100px;
    /* text-shadow: -3px 3px 2px #bcf5a9; Pour donner un peu d'ombre au h1 */
    animation: titre ease 3.5s;
  }
/* ################################################################ */


/* style appliquer sur l'icone de la navbar */
/* le conteiner de l'icone utilisateur */
#icoUser{
    color: lightgreen; 
    font-size: 25px;
    margin-right: 100px;

}
.fa-user{
    color: white;
    position: fixed;
    margin-right: 90px;
}
.fa-user:hover{
    color: lightgreen;
}

.dropdown-item:hover{
    background-color: #91eedd;
}
/* ------------------------------------- */

#ico-nav:hover{
    color:lightgreen;
    font-size: 30px;

}

/* la forme que je voulais ajouté sur l'image du header */
.over-header{
    background-color: #14d938;
    height: 100vh;
    opacity: 0.1;
}
.over-header h1{
    opacity:3;
}
/* ---------------------------------------------- */
.ml-3{
    font-size:20px;
}
.fa-check {
    font-size: 30px;
    width: 50px;
    height: 50px;
    margin:25px 25px;
}
.fa-arrow-right {
    font-size: 30px;
    width: 50px;
    height: 50px;
    margin:25px 25px;
}
.fa-desktop{
    font-size: 30px;
    width: 50px;
    height: 50px;
    margin:25px 25px;
}
.fa-cog{
    font-size: 30px;
    width: 50px;
    height: 50px;
    margin:25px 25px;
}

/* image du centre */
.centralImage{
    background: url(/image/other/green-background.jpg)no-repeat 50% 50%; /* Image de fond*/
    background-size: cover; /* Fait à ce que l'image prenne toute la largeur de l'écran*/
    height: 20px;
    border-radius: 0px 0px 20px 20px; /*dans le sens des éguilles d'une montre*/
    margin-bottom: 80px; /* crée une marge en bas de la page*/
    font-family: monospace;
}
/*  */

/* le style pour les cartes animées */
.card-anim {
    width: 190px;
    height: 300px;
    padding: .8em;
    background: #f5f5f5;
    position: relative;
    overflow: visible;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
   }
   
   .card-img1 {
    background-color: #a6ffb6;
    height: 40%;
    width: 100%;
    border-radius: .5rem;
    transition: .3s ease;
    background: url(/image/Afrique/image1.jpg)no-repeat 50% 50%;
   }
   .imageAnim{
    height: 20px;
    width: 20px;
   }
   
   .card-info {
    padding-top: 10%;
   }
   
   svg {
    width: 20px;
    height: 20px;
   }
   
   .card-footer {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
    border-top: 1px solid #ddd;
   }
   
   /*Text*/
   .text-title {
    font-weight: 900;
    font-size: 1.2em;
    line-height: 1.5;
   }
   
   .text-body {
    font-size: .9em;
    padding-bottom: 10px;
   }
   
   /*Button*/
   .card-button {
    display: flex;
    padding: .3em;
    cursor: pointer;
    border-radius: 50px;
    transition: .3s ease-in-out;
   }
   
   /*Hover*/
   .card-img:hover {
    transform: translateY(-25%);
    box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px;
   }
   
  
   #gogo:hover {
    font-size: 30px;
    color: #43a459;
   }



  </style>