<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        

        <style>
            *{
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
            body{
                margin: 0;
                background-color: rgb(23, 33, 41);
               
                
            }
           




.btn-flip1{
    opacity: 1;
	outline: 0;
	color: #fff;
	line-height: 40px;
	position: relative;
	text-align: center;
	letter-spacing: 1px;
	display: inline-block;
	text-decoration: none;
	font-family: 'Open Sans';
	text-transform: uppercase;
	
	&:hover{
       
		
		&:after{
			opacity: 1;
            
			transform: translateY(0) rotateX(0);
		}
		
		&:before{
			opacity: 0;
           
			transform: translateY(50%) rotateX(90deg);
		}
	}
	
	&:after{
        
		top: 0;
		left: 0;
		opacity: 0;
		width: 100%;
		color: #323237;
		display: block;
		transition: $speed;
		position: absolute;
		background: #adadaf;
		content: attr(data-back);
		transform: translateY(-50%) rotateX(90deg);
        padding: 20px 104.5px;
	}
	
	&:before{
        
		top: 0;
		left: 0;
		opacity: 1;
		color: #adadaf;
		display: block;
		padding: 20px 104.5px;
		line-height: 40px;
		transition: $speed;
		position: relative;
		background: #323237;
		content: attr(data-front);
		transform: translateY(0) rotateX(0);
	}
}
.btn-flip2{
    opacity: 1;
	outline: 0;
	color: #fff;
	line-height: 40px;
	position: relative;
	text-align: center;
	letter-spacing: 1px;
	display: inline-block;
	text-decoration: none;
	font-family: 'Open Sans';
	text-transform: uppercase;
	
	&:hover{
       
		
		&:after{
			opacity: 1;
            
			transform: translateY(0) rotateX(0);
		}
		
		&:before{
			opacity: 0;
           
			transform: translateY(50%) rotateX(90deg);
		}
	}
	
	&:after{
        
		top: 0;
		left: 0;
		opacity: 0;
		width: 100%;
		color: #323237;
		display: block;
		transition: $speed;
		position: absolute;
		background: #adadaf;
		content: attr(data-back);
		transform: translateY(-50%) rotateX(90deg);
        padding: 20px 125px;
        margin-top: 20px;
	}
	
	&:before{
        
		top: 0;
		left: 0;
		opacity: 1;
		color: #adadaf;
		display: block;
		padding: 20px 125px;
        margin-top: 20px;
		line-height: 40px;
		transition: $speed;
		position: relative;
		background: #323237;
		content: attr(data-front);
		transform: translateY(0) rotateX(0);
	}
}
.btn-flip1:after {
  transition: 0.5s;
}
.btn-flip1:before {
  transition: 0.5s;
}

.btn-flip2:after {
  transition: 0.5s;
}
.btn-flip2:before {
  transition: 0.5s;
}


            .main{
                display: flex;
                height: 85px;
                width: 100%;
                background-color: rgb(46, 56, 62);
                align-items: center;
               
            }
            .logo{
                display: flex;
                height: 85px;
                width: 200px;
                background-color: transparent;
                color: white;
                font-weight: bold;
                font-size: 30px;
                text-align: center;
                justify-content: center;
                align-items: center;
                
            }
            .velociti{
                cursor: pointer;
            }
            .logout{
                position: absolute;
                right: 100px;
                font-weight: 300;
            }
            .out{
                display: flex;
                padding-left: 30px;
                padding-right: 30px;
                padding-top: 10px;
                padding-bottom: 10px;
                font-size: 17px;
                color: #00ffff;
                background-color: transparent;
                border: 1px solid #00ffff;
                border-radius: 10px;
                cursor: pointer;
                
            }
            .out:hover{
                background-color:#00ffff;
                color: black;
            }
            .part1{
                height: 380px;
                width: 850px;
                display: flex;
                margin-left:100px;
                padding-top: 15px;
                margin-top: 30px;
                border: 2px solid #323237;
                border-radius: 0px;
                background-color: #323237;
            }
            .under-main{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .part2{
                height: 310px;
                width: 300px;
                background-color: yellow;
                margin-left: 50px;
                margin-top: 30px;
                margin-right: 100px;
                display: block;
                
            }
            .maintainance{
                height: 130px;
                width: 300px;
                cursor: pointer;
                margin-bottom: 50px;
                border: 2px solid white;
                border-radius: 20px;
                background-color: transparent;
                font-size: 30px;
                color: white;
            }
            .expenses{
                height: 130px;
                width: 300px;
                cursor: pointer;
                border: 2px solid white;
                border-radius: 20px;
                background-color: transparent;
                font-size: 30px;
                color: white;
            }
            .maintainance:hover{
                background-color: white;
                color: black;
            }
            .expenses:hover{
                background-color: white;
                color: black;
            }
            .sub1{
                height: 440px;
                width: 405px;
                background-color: transparent;
                display: flex;
                
            }
            .sub2{
                height: 440px;
                width: 405px;
                background-color: transparent;
                display: flex;
            }
            .sub1-p1{
                display: block;
                padding-left: 20px;
                color: white;
            }
            .sub2-p1{
                display: block;
                padding-left: 20px;
                color: white;
            }
            .sub1-p2{
                display: block;
                padding-left: 10px;
                color: #adadaf;
            }
            .sub2-p2{
                display: block;
                padding-left: 10px;
                color: #adadaf;
            }
            .d{
                margin-bottom: 50px;
            }

            .maint{
                background-color: transparent;
                text-align: center;
                align-items: center;
                width: 100%; 
                margin-top: 50px;
            }


            .header{
    color: white;
    margin-bottom: 15px;
    font-size: 25px;

}

label{
    color: white;
    
}

.form{
    
    text-align: center;
}

.input1{
    margin-left: 50px;
    margin-bottom: 15px;
    border-radius: 5px;
   
    
}
.input2{
    margin-left: 9px;
    margin-bottom: 15px;
    border-radius: 5px;
}
.input3{
    margin-left: 107px;
    border-radius: 5px;
    margin-bottom: 20px;
}
.submit{
    background-color: black;
    color: white;
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 10px;
    padding-top: 10px;
    margin-left: 84px;
    border-radius: 5px;
}
.top{
    text-align: center;
    margin-bottom: 50px;
    margin-top: 15px;
}

.table-part{
    background-color: transparent;
    margin-top: 35px;
    display: flex;
    justify-content: center; /* Horizontally centers the table */
    align-items: center;  
    color: #adadaf;
}
table {
border-collapse: separate; /* Default for border-spacing to work */
border-spacing: 15px;      /* Adjust column and row spacing */

}

.t{
    display: flex;
    align-items: center;
    justify-content: center;
   text-align: center;
   margin-top: 50px;
    background-color: transparent;
}
            
        </style>
    </head>
    <body>
       
    
        <div class="under-main">
    
        <div class="part1">
    
            <div class="sub1">
    
            <div class="sub1-p1">
                <p class="d">Name:</p>
                <p class="d">Age:</p>
                <p class="d">Email:</p>
                <p class="d">Phone Number:</p>
                </div>
    
                <div class="sub1-p2">
                    <p class="d">{{ auth()->user()->name }}</p>
                    <p class="d">{{ auth()->user()->age}}</p>
                    <p class="d">{{ auth()->user()->email}}</p>
                    <p class="d">{{ auth()->user()->PhoneNumber}}</p>
                </div>
    
            </div>
    
            <div class="sub2">
    
            <div class="sub2-p1">
    
                <p class="d">Model:</p>
                <p class="d">Engine Type:</p>
                <p class="d">Engine Capacity:</p>
                <p class="d">Model Year:</p>
                
    
                </div>
    
                <div class="sub2-p2">
                    <p class="d">{{ auth()->user()->BikeModel }}</p>
                    <p class="d">{{ auth()->user()->EngineType }}</p>
                    <p class="d">{{ auth()->user()->EngineCapacity }}</p>
                    <p class="d">{{ auth()->user()->ModelYear }}</p>
                    
                </div>
    
            </div>
    
        </div>
        
    </div>
    <div class="maint">
        <h2 class="header">Maintenance Tracking</h2>

        <form method="post" action="{{route('data.save')}}">
            @csrf
            <label for="date">Service Date:</label>
            <input class="input1" type="date" id="date" name="date" placeholder="2025-03-05" required><br>
    
            <label for="type">Maintenance Type:</label>
            <input class="input2" type="text" id="type" name="type" placeholder="Maintenance Type" required><br>
    
            <label for="cost">Cost:</label>
            <input class="input3" type="text" id="cost" name="cost" placeholder="Cost"><br>
    
            <button class="submit" type="submit">Add</button>
        </form>
    </div>
    <div class="t">
       
    

        <table border="1" class="table mt-5">
            <thead>
                <tr>
                    
                    <th>Date</th>
                    <th>Type</th>
                    <th>Cost</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                
                
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
                    
            </tbody>
        </table>
    </div>
    </body>
    </html>
    

   


</x-app-layout>
