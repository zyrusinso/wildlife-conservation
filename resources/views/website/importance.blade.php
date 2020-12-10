@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-9">
            
            <div class="card">
                <div class="card-header">
                    <h1 class="_title" >IMPORTANCE</h1>
                    
                </div>

                <div class="card-body" style="text-align: center; color: white;">
                <h4>What Is Animal Welfare and Why Is It Important?</h4>
                    <p>
                        Animal welfare refers to the quality of life experienced by an animal and encompasses <br/>how well the animal is coping with his or her current situation and surroundings. <hr/>
                        World Animal Protection believes animal welfare is affected by the relationships human <br/>beings have with animals and it is our duty to ensure all animals are treated humanely, <br/>responsibly, and with respect.  <hr/>
                        This includes consideration for all aspects of animal well-being, such as the Five <br/>Domains. Animal welfare should be at the forefront of every human action involving <br/>animals. <hr/>
                        <b style="float: left;">What are the Five Domains of animal welfare?</b><br/>

                        <div>
                            <ul>
                                <b></b>
                                <li><b>Nutrition</b> – factors that involve the animal’s access to sufficient, balanced, varied, and clean food and water. </li>
                                <li><b>Environment</b> – factors that enable comfort through temperature, substrate, space, air, odour, noise, and predictability.</li>
                                <li><b>Health</b> – factors that enable good health through the absence of disease, injury, impairment with a good fitness level. </li>
                                <li><b>Behaviour</b> – factors that provide varied, novel, and engaging environmental challenges through sensory inputs, exploration, foraging, bonding, playing, retreating, and others.</li>
                                <li><b>Mental State</b> – by presenting positive situations in the previous four functional domains, the mental state of the animal should benefit from predominantly positive states, such as pleasure, comfort, or vitality while reducing negative states such as fear, frustration, hunger, pain, or boredom.</li>
                            </ul>
                        </div>	
                        
                        	
                        
                        <b style="float: left;">Why is animal welfare important? </b> <br/>
                        Animal welfare is important because there are so many animals around the world suffering from being used for entertainment, food, medicine, fashion, scientific advancement, and as exotic pets. Every animal deserves to have a good life where they enjoy the benefits of the Five Domains. 

                    </p>
                </div>
                
            </div>

            
            
        </div>
    </div>
    
    
</div>
@endsection

<style>

.CoverBackGround{
    background-image: url('/uploads/Sunset-Beach.jpg') ;
    background-size: cover;
    background-position: center center;
    height: 300vh auto;
    background-repeat: no-repeat;
    width: 100%;

}

li{
    
    text-align: left;
    margin: 0px;
}

ul{
    margin-left: 15%;
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

</style>
