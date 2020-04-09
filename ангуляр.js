<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	function test(id) {
    	var element = $('#test1');
        var elementInput = $('#test-input');

        console.log( elementInput.val() );

        
        if (element.css('display') == 'none') {
        	element.css({'display': 'block'});
        } else {
        	element.css({'display': 'none'});
        }
       
       element.html('<p>и</p><p>тут</p><p>hi</p>');
        element.css({'height': '100px', 'background-color': 'orange'});


    }

    $(document).ready(function(){
		
        $('#test-input').change(function(){
        	var element = $('#test2');
        	var value = $(this).val();
            element.html(value);
            console.log( $(this).val() );
        })

        $('.button2').click(function(){
        	var heigh = $(this).css('height');
            var width = $(this).css('width');
            var newHeigh = parseFloat(heigh.replace('px', ''))+20+'px';
            var newWidth = parseFloat(width.replace('px', ''))+20+'px';

            console.log(heigh, width, newHeigh, newWidth);

        	
            $(this).animate({
              left: '300px',
              opacity: '0.5',
              height: '177px',
              width: '177px'
            }, "slow");
        });
	});
</script>
<style>

@keyframes blur-1 {
	50% {
		text-shadow: 0 0 0.15em rgb(0,0,0);
	}
}

@-o-keyframes blur-1 {
	50% {
		text-shadow: 0 0 0.15em rgb(0,0,0);
	}
}

@-ms-keyframes blur-1 {
	50% {
		text-shadow: 0 0 0.15em rgb(0,0,0);
	}
}

@-webkit-keyframes blur-1 {
	50% {
		text-shadow: 0 0 0.15em rgb(0,0,0);
	}
}

@-moz-keyframes blur-1 {
	50% {
		text-shadow: 0 0 0.15em rgb(0,0,0);
	}
}

@keyframes blur-2 {
	50% {
		text-shadow: 0 0 0.075em rgb(0,0,0);
	}
}

@-o-keyframes blur-2 {
	50% {
		text-shadow: 0 0 0.075em rgb(0,0,0);
	}
}

@-ms-keyframes blur-2 {
	50% {
		text-shadow: 0 0 0.075em rgb(0,0,0);
	}
}

@-webkit-keyframes blur-2 {
	50% {
		text-shadow: 0 0 0.075em rgb(0,0,0);
	}
}

@-moz-keyframes blur-2 {
	50% {
		text-shadow: 0 0 0.075em rgb(0,0,0);
	}
}

@keyframes blur-3 {
	50% {
		text-shadow: 0 0 0.05em rgb(0,0,0);
	}
}

@-o-keyframes blur-3 {
	50% {
		text-shadow: 0 0 0.05em rgb(0,0,0);
	}
}

@-ms-keyframes blur-3 {
	50% {
		text-shadow: 0 0 0.05em rgb(0,0,0);
	}
}

@-webkit-keyframes blur-3 {
	50% {
		text-shadow: 0 0 0.05em rgb(0,0,0);
	}
}

@-moz-keyframes blur-3 {
	50% {
		text-shadow: 0 0 0.05em rgb(0,0,0);
	}
}

@keyframes wobble {
	from, to {
		transform: rotateY(-45deg);
	}
	50% {
		transform: rotateY(45deg);
	}
}

@-o-keyframes wobble {
	from, to {
		-o-transform: rotateY(-45deg);
	}
	50% {
		-o-transform: rotateY(45deg);
	}
}

@-ms-keyframes wobble {
	from, to {
		-ms-transform: rotateY(-45deg);
	}
	50% {
		-ms-transform: rotateY(45deg);
	}
}

@-webkit-keyframes wobble {
	from, to {
		-webkit-transform: rotateY(-45deg);
	}
	50% {
		-webkit-transform: rotateY(45deg);
	}
}

@-moz-keyframes wobble {
	from, to {
		-moz-transform: rotateY(-45deg);
	}
	50% {
		-moz-transform: rotateY(45deg);
	}
}
</style>
</head>
<body>




	<button onclick='test(123)'>test</button>
	<div id='test1' test-attr='987' style='height: 20px; width: 30px; background-color: red;'>чтоб было</div>

    <p>---------</p>

    <input type='text' id='test-input' />
	<div id='test2' style='height: 23px; width: 147px; background-color: blue;'></div>

    <br><br>

	<button class='button2'>1</button>
	<button class='button2'>2</button>
	<button class='button2'>3</button>

</body>
</html>