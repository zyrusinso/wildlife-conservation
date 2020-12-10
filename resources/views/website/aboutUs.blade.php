@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-9">
            
            <div class="card">
                <div class="card-header">
                    <h1 class="_title" >Defending Fauna’s Right Utterly</h1>
                </div>

                <div class="card-body" style="text-align: center; color: white; margin-bottom: 70px;">
                    <p>
                        Our organization’s advocacy initiative represents a shared vision of justice and equity to <br/> all the wildlife in the world and together we fight to:<br/>
                        
                        
                            <ul>
                               <li>End Animal Cruelty</li>
                               <li>Promote their Rights</li>
                               <li>Acknowledge their Rights</li>
                               <li>Voice Out their Sufferings</li> 
                            </ul>
                            <br/>
                        	
                        
                        <div class="GSix">
                            <b style="margin-left: 20px;">Group 6 (ICT Project)</b> <br/>
                            Leader: Sean Patrick B. Magistrado<br/>
                            Assist. Leader: Lluan Fae A. Leocario<br/><br/>

                            Members:<br/>
                            Knight Montebon<br/>
                            Joy Ann Hapin<br/>
                            Ariane Historia<br/>
                            Arabel Balmes<br/>
                            Charlene Quiambao<br/>
                            Charly Guerero<br/>
                            Jhayveer Vilas<br/>
                            Lovely Angel Ubiña<br/>
                            Arjohn Ramirez<br/>
                        </div>
                    </p>

                    <p><b>Teacher: Mr. Paul Socrates Apostol Jr.</b></p>

                        Contact Us
                        @Facebook: <a class="facebookLink" target="_blank" href="https://www.facebook.com/Defending-Faunas-Right-Utterly-106503211304832">Defending Fauna’s Right Utterly</a>
                        
                        

                    
                </div>
                
            </div>

            
            
        </div>
    </div>
    
    
</div>
@endsection

<style>

.CoverBackGround{
    background-image: url('/uploads/bird.jpg') ;
    background-size: cover;
    background-position: center center;
    height: 300vh auto;
    background-repeat: no-repeat;
    width: 100%;

}
.facebookLink{
    text-decoration: none;
    color: white;
}

li{
    
    text-align: left;
    margin: 0px;
}

ul{
    margin-left: 30%;
}

.GSix{
    justify-content: left;
    text-align: left;
}

._title{

    color: white; 
    font-size: 40px; 
    text-transform: uppercase; 
    font-weight: bold; 
    text-align: center;
}
h4{

    color: white; 
    font-size: 25px; 
    text-transform: uppercase; 
    font-weight: bold; 
    text-align: center;
}

.img-select{
    border: 1px solid #ddd;
	border-radius: 8px;
	padding: 10px;
	height: 50vh;
	width: 230px;
	opacity: 0.7;
}

.card {

background-color: rgba(0,0,0, 0.4) !important;

}

.aboutUsClass{
    visibility: hidden;
}

.navbar-toggler{
    visibility: hidden;
}

</style>
