@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <img src="uploads/title.png" style="item-align: center; width: 95%;" class="navbar-brand">    
        </div>
        <div class="col-md-9">
            
            <div class="card">
                <div class="card-header">
                    <h1 class="_title" style="color: rgb(144,238,144) !important;">Defending Fauna's Right Utterly</h1>
                </div>

                <div class="card-body" style="text-align: center; color: white;">
                This website was created to promote and spread awareness to all people about the rights of the animals because every 
                living organism here on Earth were created with an equal footing in terms of living.
                </div>
                
            </div>

            
            
        </div>
    </div>
    
    
</div>


        <div class="gallery-container">
            
                <div class="img-select">
                    <a href="/penalties" >
                        <img src="/uploads/Penalties.jpg"  style="width: 275px; height: 280px;">
                    </a>   
                </div>   

                <div class="img-select">
                    <a href="/laws">
                        <img src="/uploads/Laws.jpg"  style="width: 275px; height: 280px;">
                    </a> 
                </div>  

                <div class="img-select">
                    <a href="/cruelty">
                        <img src="/uploads/cruelty.jpg"  style="width: 275px; height: 280px;">
                    </a>     
                </div>  

                <div class="img-select">
                    <a href="/importance">
                        <img src="/uploads/Importance.jpg"  style="width: 275px; height:280px;">
                    </a>      
                </div>  
        </div>   



@endsection

<style>

*{
   
    box-sizing: border-box;
   
}


.gallery-container{
   
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}

.CoverBackGround{
    background-image: url('/uploads/bird.jpg') ;
    background-size: cover;
    background-position: center;
    height: 500vh auto;
    background-repeat: no-repeat;
    width: auto;
    
    

}



._title{

    color: green; 
    font-size: 40px; 
    text-transform: uppercase; 
    font-weight: bold; 
    text-align: center;
}

.img-select{
    
	
	padding: 0 20px 50px 0;
    
}
.img-select img{
    
    border-radius: 10%;
    
}

.img-select:hover{

    transform: scale(1.1);
    z-index: 5;
    
    

}




.responsiveClass{
    
    
    width: 25%;
}

a{
    radius: 8px;
}

.card {

background-color: rgba(255,255,255, 0) !important;

}

.card-body img{

    height: auto;
    width: 100%;
}










</style>
