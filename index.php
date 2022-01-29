<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

body{
    background: url(img/main.jpg) no-repeat center top fixed;
    background-size: cover;
}

#pause {
	position: fixed;
	display: none;
    width: 200px;
    text-align: center;
    border: 2px solid #218de7;
    padding: 10px;
    background: rgba(0, 68, 18, 0.8);
    letter-spacing: 15px;
    box-shadow: inset 0px 0px 5px #000;
    color: #eaeaea;
    z-index: 2;
}

#menu {
    position: fixed;
    width: 40%;
    color: #eaeaea;
    font-weight: 600;
    cursor: context-menu;
    z-index: 2;
    -webkit-user-select: none;
    -moz-user-select: none;
    -o-user-select: none;
    -ms-user-select: none;
}

#menu > p:first-child {
	display: none;
    background: rgba(173, 0, 0, 0.8);
}

#menu > p {
    text-align: center;
    border: 2px solid #218de7;
    padding: 10px;
    background: rgba(0, 68, 18, 0.8);
    letter-spacing: 15px;
    box-shadow: inset 0px 0px 5px #000;
}

#menu ul {
    padding: 10px 0;
    list-style: none;
    background: rgba(0, 0, 0, 0.79);
    border: 2px solid #218DE7;
    text-align: center;
    box-shadow: inset 0px 0px 5px #000;
}

#menu > #count_meteor {
	letter-spacing: normal;
}

#start:hover {
    background: rgba(0, 92, 40, 0.8);
    cursor: pointer;
}

#animate_game_over {
	animation: game_over 2s infinite linear;
}

@keyframes game_over{
	0%{
		transform: scale(1);
	}
	50%{
		transform: scale(1.05);
	}
	100%{
		transform: scale(1);
	}
}

#sky {
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
	animation: sky 100s infinite linear;
}

@keyframes sky { 
    0%{
        transform: scale(1);   
    }
    50%{
        transform: scale(1.4);   
    }
    100%{
        transform: scale(1);   
    }
}

#ship {
    position: fixed;
    width: 40px;
    height: 40px;
    background: url(/img/ship.png);
    box-sizing: border-box;
    border-radius: 10px 10px 0px 0px;
    z-index: 1;
}

.enemy_meteor {
	position: fixed;
}

.enemy_aggressor {
	position: fixed;
}

@keyframes enemy_rotate{
	0%{
		transform: rotate(0deg);
	}
	100%{
		transform: rotate(359deg);
	}
}

.shoot {
	position: fixed;
}

.ship_shoot {
	position: fixed;
	width: 2px;
	height: 5px;
}

#ship_s {
    position: relative;
    width: 1px;
    height: 1px;
    background: blue;
}

.nozzle {
	position: absolute;
    background: url(/img/flame-fire.png);
    opacity: 0;
    transition: opacity 0.2s linear;
}

.rear_nozzle {
	top: 42px;
    left: 16px;
    width: 9px;
    height: 18px;
}

.front_nozzle {
    width: 9px;
    height: 18px;
    transform: rotate(180deg) scale(0.6);
}

.front_left_nozzle {
    top: 0px;
    left: 0px;
}

.front_right_nozzle {
    top: 0px;
    left: 31px;
}

.info {
	background: rgba(5, 29, 55, 0.69);
    width: 20px;
    height: 100px;
    border: 2px solid #218DE7;
    overflow: hidden;
    z-index: 1;
}

#indicate {
    display: flex;
    justify-content: space-around;
    width: 10%;
}

.indicator {
    border: 2px solid #218DE7;
    padding: 0px 8px;
    height: 30px;
    z-index: 1;
    text-align: center;
    color: #a8ff00;
    font-size: 1.5em;
    background: rgba(5, 29, 55, 0.69);
}

.indicator_fire {
    width: 100%;
    height: 100%;
    background: rgba(156, 12, 12, 0.8);
    position: relative;
    top: 100%;
}

.star {
	position: fixed;
	opacity: 0;
	animation: stars 2s infinite linear;
}

@keyframes stars{
    0%{
        transform: scale(0); opacity: 0;
    }
    50%{
        transform: scale(2); opacity: 1;
    }
    100%{
        transform: scale(0); opacity: 0;
    }
}

.air_fire {
	position: fixed;
	transform: scale(0);
	opacity: 0;
	animation: explosion 0.5s linear;
}

@keyframes explosion {
	0%{opacity: 0; transform: scale(0);}
	30%{opacity: 0.5; transform: scale(0.4);}
	100%{opacity: 0; transform: scale(0.3);}
}

.enemy_ship_missle {
	position: fixed;
    transition: opacity 0.3s linear;
}

.enemy_ship_mine {
    position: fixed;
    transition: opacity 0.3s linear;
    animation: enemy_ship_sh 2s infinite linear;
}

@keyframes enemy_ship_sh {
	0%{
		transform: rotate(0deg);
	}
	100%{
		transform: rotate(359deg);
	}
}

.enemy_ship_shoot {
    position: fixed;
    top: -5px;
	left: -2px;
    width: 3px;
    height: 9px;
    border-radius: 50%;
}

.hole {
    position: fixed;
    transition: opacity 1s linear;
    animation: hole 20s infinite linear;
    opacity: 0;
    z-index: 1;
}

.hole_opacity {
	opacity: 1;
}

@keyframes hole {
	0%{
		transform:rotate(0deg);
	}
	100%{
		transform:rotate(-359deg);
	}
}

#galaxi {
    position: fixed;
    top: 100px;
    left: 100px;
    font-size: 5em;
    font-family: cursive;
    font-weight: 600;
    color: #0009;
    transform: rotate(-45deg);
    text-shadow: 3px 3px 5px #49b785;
}

.charging_shoots {
 	position: fixed;
 	animation: chard_shoots 100s infinite linear;
    z-index: 1;
}

@keyframes chard_shoots{
	0%{
		transform:rotate(0deg);
	}
	100%{
		transform:rotate(3600deg);
	}
}

</style>

</head>
<body>


<div id="galaxi">Galaxi</div>
<div id="menu">
	<p></p>
	<p id="start" onclick="menu.children[0].id = ''; game = new newGame();">START GAME!</p>
	<p id="count_meteor">destroy <span>1</span> meteorites</p><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->
	<ul>
		<li style="color: #f55353; font-weight: 600;"><span>Controlling:</span></li>
		<li><span>Q - move forward</span></li>
		<li><span>A - move back</span></li>
		<li><span>O - rotate left</span></li>
		<li><span>P - rotate right</span></li>
		<li><span>Space - fire</span></li>
		<li><span>1 - pause</span></li>
	</ul>
</div>

<div id="indicate" style="opacity: 0;">
	<div id="gun" class="info">
		<div class="indicator_fire" style="top: 100%;"></div>
	</div>
	<div id="ammunition" class="indicator"></div>
	<div id="end_level" class="indicator"></div>
</div>

<div id="pause">PAUSE</div>

<script>
    
"use strict"


let game = null;


let menu = document.getElementById('menu');
	menu.style.left = innerWidth/2 - menu.getBoundingClientRect().width/2 + 'px';
	menu.style.top = innerHeight/2 - menu.getBoundingClientRect().height/2 + 'px';

let pause = document.getElementById('pause');

window.onresize = function(event) {
    menu.style.left = innerWidth/2 - menu.getBoundingClientRect().width/2 + 'px';
    menu.style.top = innerHeight/2 - menu.getBoundingClientRect().height/2 + 'px';
    pause.style.left = innerWidth/2 - pause.getBoundingClientRect().width/2 + 'px';
	pause.style.top = innerHeight/2 - pause.getBoundingClientRect().height/2 + 'px';
};



function collisionCircle(e1, e2){
	if(!e2){return;};
	let e1R = e1.width/2;
	let e2R = e2.width/2;

	if(Math.sqrt(Math.pow(e1.top + e1R - e2.top - e2R, 2) + Math.pow(e1.left + e1R - e2.left - e2R, 2)) < e1R + e2R) {
	    return true;
	}
	else{return false;};
};

function collisionRect(e1, e2){

    	if(e1.left + e1.width > e2.left && e1.left < e2.left + e2.width && e1.top + e1.height > e2.top && e1.top < e2.top + e2.height){
    		return true;
    	}
        else{return false;};
};

function explosion(e1){

	let audio = new Audio('/audio/explosion.mp3');
	audio.volume = 0.3;
	audio.play();

	let elem = document.createElement('img');
	elem.src = '/img/air_fire.png';
	elem.className = 'air_fire';

	elem.onload = function(){

		elem.style.left = e1.left + e1.width/2 - elem.width/2 + 'px';
		elem.style.top = e1.top + e1.width/2 - elem.height/2 + 'px';
		document.body.appendChild(elem);
		setTimeout(function(){elem.remove();}, 500);

	};
};

/////////////////////////////////////////////////////////////////////////

class Ship{

	constructor(){

		this.limitShoots = 10;
		this.countShoots = 10;

		this.ammunitionElem = document.getElementById('ammunition');
		this.ammunitionElem.textContent = this.countShoots;

		this.elem = document.createElement('div');
		this.elem_s = document.createElement('div');

		this.elem_rear_nozzle = document.createElement('div');
		this.elem_front_left_nozzle = document.createElement('div');
		this.elem_front_right_nozzle = document.createElement('div');

		this.elem.id = 'ship';
		this.elem_s.id = 'ship_s';

		this.elem_rear_nozzle.className = 'nozzle rear_nozzle';
		this.elem_front_left_nozzle.className = 'nozzle front_nozzle front_left_nozzle';
		this.elem_front_right_nozzle.className = 'nozzle front_nozzle front_right_nozzle';

		this.elem.appendChild(this.elem_s);
		this.elem.appendChild(this.elem_rear_nozzle);
		this.elem.appendChild(this.elem_front_left_nozzle);
		this.elem.appendChild(this.elem_front_right_nozzle);
		document.body.appendChild(this.elem);

		this.styleElem = getComputedStyle(this.elem);

		this.width = parseInt(this.styleElem.width);
		this.height = parseInt(this.styleElem.height);

		this.left = innerWidth/2 - this.width/2;
		this.top = innerHeight/2 - this.height/2;

		this.elem.style.left = this.left + 'px';
		this.elem.style.top = this.top + 'px';
		this.elem_s.style.left = this.width/2 + 'px';

		this.rotateCorner = 0;
		this.rotateTurn = null;
		this.rotateRender = false;

		this.stopShootInterval = null;
		this.blockFireSwitch = true;

		this.moveRender = false;

		this.x = 0.1;
		this.y = 0.2;

		this.stopChangeSpeed = null;

		this.speedFastTurn = false;
		this.delay = 1;
		this.delayStop = 4;

	};


	stopControlling(){

		document.documentElement.onkeydown = (e)=>{

			if(e.which == 79 || e.which == 80 || e.which == 81 || e.which == 65 || e.which == 32) return false;
			
		};

		document.documentElement.onkeyup = (e)=>{
			
			clearInterval(this.stopShootInterval);
			if(e.which == 79 || e.which == 80 || e.which == 81 || e.which == 65 || e.which == 32) return false;

		};
	};

	callShoot(){

		if(game.stopGame && !game.pause){

			clearInterval(this.stopShootInterval);

			if(this.countShoots  && Object.keys(game.shoots).length < this.limitShoots){this.shoot();}
			else if(!game.pause && game.stopGame){this.misfire();};

			this.stopShootInterval = setInterval(()=>{
				if(game.stopGame && !game.pause && this.countShoots  && Object.keys(game.shoots).length < this.limitShoots){
					this.shoot();
				}
				else if(!game.pause && game.stopGame){
					this.misfire();
				};
			}, 150);
		};
	};

	shoot(){
			new Shoot(game.ship.rotateCorner);
			this.countShoots--;
			this.ammunitionElem.textContent = this.countShoots;
			game.gun.children[0].style.top = (game.gun_indicatorHeight-=this.limitShoots) + '%';
	};

	misfire(){
			new Audio('/audio/osechka.mp3').play();
	};

	controlling(){

		document.documentElement.onkeydown = (e)=>{

			switch(e.which){

				//rotate elem
				case 79:
					this.rotateTurn = true;
					this.rotateRender = true;
					this.elem_front_left_nozzle.style.opacity = '1';
					break;

				case 80:
					this.rotateTurn = false;
					this.rotateRender = true;
					this.elem_front_right_nozzle.style.opacity = '1';
					break;

				//shoot

				case 32: 

					
					
					if(this.blockFireSwitch){

						this.blockFireSwitch = false;

						this.callShoot();
					};

					break;

				//move elem
                case 81:

					this.speedFastTurn = 1;
					this.elem_rear_nozzle.style.opacity = '1';
                    break;

                case 65:

					this.speedFastTurn = 2;
					this.elem_front_left_nozzle.style.opacity = '1';
					this.elem_front_right_nozzle.style.opacity = '1';
                   	break;

                case 49: if(game.pause){//run pause
		                	game.pause = false;
		                	pause.style.display = '';
		                	game.setEnemy()
		                	game.render();
		                }
		                else{
		                	game.pause = true;
		                	cancelAnimationFrame(game.stopRender);
		                	clearInterval(game.stopSetEnemy);
		                	pause.style.display = 'block';
		                	pause.style.left = innerWidth/2 - pause.getBoundingClientRect().width/2 + 'px';
							pause.style.top = innerHeight/2 - pause.getBoundingClientRect().height/2 + 'px';
		                };
			};
			
		};

		document.documentElement.onkeyup = (e)=>{

			switch(e.which){

				//stop rotate elem
				case 79:
					this.rotateRender = false;
					this.elem_front_left_nozzle.style.opacity = '0';
					break;

				case 80:
					this.rotateRender = false;
					this.elem_front_right_nozzle.style.opacity = '0';
					break;

				//stop change speed elem
                case 81:
                	
                	this.speedFastTurn = false;
                	this.elem_rear_nozzle.style.opacity = '0';
                    break;

                case 65:

                	this.speedFastTurn = false;
                	this.elem_front_left_nozzle.style.opacity = '0';
                	this.elem_front_right_nozzle.style.opacity = '0';
                   	break;

                //shoot
				case 32: 

					if(!this.blockFireSwitch){
						clearInterval(this.stopShootInterval);
						this.blockFireSwitch = true;
					};

					break;
			};
		};
	};

	speed(x){

		if(this.delay < this.delayStop){ 
			this.delay++;
		}
		else{
			this.delay = 1;

			if(x == 1){
				this.x += Math.sin(this.rotateCorner*game.cornerRad);
				this.y += Math.cos(this.rotateCorner*game.cornerRad);
			}
			else{
				this.x += -Math.sin(this.rotateCorner*game.cornerRad);
				this.y += -Math.cos(this.rotateCorner*game.cornerRad);
			};
		};
	};

    move(){

		this.left = this.left + this.x;
		this.top = this.top - this.y;





///////////////////////////////// collision width ammunition ///////////////////////////////
		if(game.ammunitionDefine){
			if(collisionCircle(this, game.ammunition)){
				this.ammunitionElem.textContent = this.countShoots+=10;
				let laserRecharge = new Audio('/audio/laser-recharge.mp3');
				laserRecharge.volume = 0.2;
				laserRecharge.play();
				game.deleteAmmunition();
			};
		};
///////////////////////////////////////////////////////////////////////////////////////////


		/////////////////////////// collision width BlackHole ////////////////////////////////
		if(game.holeDefine){

				if(collisionCircle(this, game.hole[1])){
				
						this.left = game.hole[2].left + game.hole[2].width/2 - this.width/2;
						this.top = game.hole[2].top + game.hole[2].height/2 - this.height/2;
						game.deleteEnemyShipShoots();
						game.holesDelete();
						new Audio('/audio/black-hole-colision.mp3').play();

				}
				else if(collisionCircle(this, game.hole[2])){

						this.left = game.hole[1].left + game.hole[1].width/2 - this.width/2;
						this.top = game.hole[1].top + game.hole[1].height/2 - this.height/2;
						game.deleteEnemyShipShoots();
						game.holesDelete();
						new Audio('/audio/black-hole-colision.mp3').play();
						
				};
		};
		////////////////////////////////////////////////////////////////////////////////////


        if(this.left > innerWidth){
        	this.left = -this.width;
        	game.deleteEnemyShipShoots();
        }
        else if(this.left + this.width < 0){
        	this.left = innerWidth;
        	game.deleteEnemyShipShoots();
        }
        else if(this.top > innerHeight){
        	this.top = -this.height;
        	game.deleteEnemyShipShoots();
        }
        else if(this.top + this.width < 0){
        	this.top = innerHeight;
        	game.deleteEnemyShipShoots();
        };

        this.left = +(this.left.toFixed(2))
        this.top = +(this.top.toFixed(2))

        this.elem.style.left = this.left + 'px';
        this.elem.style.top = this.top + 'px';

    };

	rotate(x){

		if(this.rotateCorner > 359)this.rotateCorner = 0;
		if(this.rotateCorner < 0)this.rotateCorner = 359;
		this.elem.style.transform = 'rotate(' + (x?this.rotateCorner+=3:this.rotateCorner-=3) + 'deg)';

	};

};

/////////////////////////////////////////////////////////////////////////

class Shoot{

	constructor(r){

		this.elem = document.createElement('div');
		this.elem_shoot = document.createElement('div');
		this.elem.className = 'shoot';
		this.elem_shoot.className = 'ship_shoot';
		this.rotateCorner = r;

		this.width = 1;
		this.height = 1;

		this.top = game.ship.elem_s.getBoundingClientRect().top - this.height/2;
		this.left = game.ship.elem_s.getBoundingClientRect().left - this.width/2;

		this.elem_shoot.style.background = 'yellow';
		this.elem.style.width = this.width + 'px';
		this.elem.style.height = this.height + 'px';
		this.elem.style.top = this.top + 'px';
		this.elem.style.left = this.left + 'px';
		this.elem.style.transform = 'rotate(' + this.rotateCorner + 'deg)';

        this.x = Math.sin(this.rotateCorner*game.cornerRad)*10;
        this.y = Math.cos(this.rotateCorner*game.cornerRad)*10;

        this.lifeCount = 0;
        this.lifeTime = 200;

		this.elem.appendChild(this.elem_shoot);
		document.body.appendChild(this.elem);


		new Audio('/audio/laser-blast.mp3').play();

		this.num = game.numShoot++;
		game.shoots[this.num] = this;

	};

    move(){

    	//если самострел
    	if(this.lifeCount > 10){
    		if(collisionRect(this, game.ship)){

    			explosion(game.ship);
    			game.die();

    		};
    	};

    	// если попадание во врага
		if(Object.keys(game.shoots).length){
			for(let o in game.enemies){

				if(game.enemies[o].elem.className == 'enemy_ship_missle'){
					if(collisionRect(this, game.enemies[o])){

						game.dieEnemies(game.enemies[o].num);

						this.elem.remove();
						delete game.shoots[this.num];

						gun.children[0].style.top = (game.gun_indicatorHeight+=game.ship.limitShoots) + '%';

					};
				}
				else{
					if(collisionCircle(this, game.enemies[o],3)){

						if(game.enemies[o].elem.className == 'enemy_meteor')game.indicatorEndLevel.textContent = --game.quantityIndicate;

						game.dieEnemies(game.enemies[o].num);

						this.elem.remove();
						delete game.shoots[this.num];

						gun.children[0].style.top = (game.gun_indicatorHeight+=game.ship.limitShoots) + '%';
					};
				};
			};
		};


    	this.lifeCount++;

        this.left += this.x;
        this.top -= this.y;


        if(this.left > innerWidth){this.left = -this.width;}
        else if(this.left + this.width < 0){this.left = innerWidth;};

        if(this.top > innerHeight){this.top = -this.height;}
        else if(this.top + this.width < 0){this.top = innerHeight;};

        if(this.lifeCount >= this.lifeTime){
        	this.elem.remove();
        	gun.children[0].style.top = (game.gun_indicatorHeight+=game.ship.limitShoots) + '%';
        	delete game.shoots[this.num];
        };

        this.elem.style.left = this.left + 'px';
        this.elem.style.top = this.top + 'px';

    };

};

/////////////////////////////////////////////////////////////////////////

class EnemyMeteor{

	constructor(){

		this.elem = document.createElement('img');
		this.elem.src = '/img/m' + parseInt(Math.random()*8 + 1) + '.png';

		this.width = parseInt(Math.random()*50)+10;
		this.height =this.width;

		this.elem.width = this.width;
		this.elem.height = this.height;

		this.elem.className ='enemy_meteor';


		let t = Math.round(Math.random());

		this.top = t?Math.round(Math.random()*innerHeight):-this.width;
		this.left = t?-this.width:Math.round((Math.random()*innerWidth));


		this.elem.style.width = this.width + 'px';
		this.elem.style.height = this.height + 'px';

		this.rotateCorner = Math.floor(Math.random()*359);
		if(this.rotateCorner == 0 || this.rotateCorner == 90 || this.rotateCorner == 180 || this.rotateCorner == 270){
			this.rotateCorner += 5;
		};

		this.elem.style.transform = 'rotate(' + this.rotateCorner + 'deg)';

        this.x = Math.sin(this.rotateCorner*game.cornerRad);
        this.y = Math.cos(this.rotateCorner*game.cornerRad);

		this.speed = +((Math.random()*1+0.1).toFixed(1));

		if(parseInt(Math.random()*2))this.elem.style.animation = 'enemy_rotate ' + parseInt(Math.random()*6 + 4) + 's' + (parseInt(Math.random()*2)?' reverse': '') + ' infinite linear';


		if(game.stopGame){
	        this.num = game.numEnemy++;
			game.enemies[this.num] = this;
			document.body.appendChild(this.elem);
		};

	};

    move(){

    	// если столкновение с кораблём
    	if(collisionCircle(this, game.ship)){
    		explosion(game.ship);

    		game.die();

			explosion(this);
    		this.elem.remove();
        	delete this;
    	};

        this.left += this.x*this.speed;
        this.top -= this.y*this.speed;

        if(this.left > innerWidth){this.left = 0;}
        else if(this.left + this.width < 0){this.left = innerWidth;};

        if(this.top > innerHeight){this.top = -this.width;}
        else if(this.top + this.width < 0){this.top = innerHeight;};

        this.elem.style.left = this.left + 'px';
        this.elem.style.top = this.top + 'px';

    };

};

/////////////////////////////////////////////////////////////////////////////////////////

class EnemyShip{

	constructor(){

		this.shipChoice = Math.floor(Math.random()*3);
		// this.shipChoice = 1;

		this.elem = document.createElement('img');
		this.elem.src = this.shipChoice?Math.round(Math.random())?'/img/enemy-ship2.png':'/img/enemy-ship3.png':'/img/enemy-ship1.png';

		this.timeShipLife = 200;
		this.timeShipFire = this.shipChoice?
			parseInt(Math.random()*(this.timeShipLife-this.timeShipLife/4)) + this.timeShipLife/5:
			[parseInt(Math.random()*(this.timeShipLife/3)), parseInt(Math.random()*(this.timeShipLife/3)+this.timeShipLife/3), parseInt(Math.random()*(this.timeShipLife/3)+this.timeShipLife-this.timeShipLife/3)]; // если 1 тогда ракета, иначе тройной лазер

		this.elem.onload = ()=>{

			this.width = this.elem.width;
			this.height = this.elem.width;

			this.speedLeft = +(Math.random()*4).toFixed(1);
			this.speedTop = +(Math.random()*4).toFixed(1);

			this.elem.className ='enemy_aggressor';

			let t = Math.round(Math.random()); //1

			this.top = t?//1
							Math.round(Math.random())?
														-this.width:
														innerHeight+this.width:
							parseInt(Math.random()*innerHeight/100*80) + innerHeight/100*10;

			this.left = t?//1
							parseInt(Math.random()*innerWidth/100*80) + innerWidth/100*10:
							Math.round(Math.random())?
														innerWidth+this.width:
														-this.width;

			this.elem.style.width = this.width + 'px';
			this.elem.style.height = this.height + 'px';

			this.rotateCorner = parseInt(Math.random()*359);
			this.elem.style.transform = 'rotate(' + this.rotateCorner + 'deg)';

	        this.x = Math.sin(this.rotateCorner*game.cornerRad);
	        this.y = Math.cos(this.rotateCorner*game.cornerRad);

			this.speedLeft = +(Math.random()+5).toFixed(1);
			this.speedTop = +(Math.random()+5).toFixed(1);

			if(game.stopGame){
		        this.num = game.numEnemy++;
				game.enemies[this.num] = this;
				document.body.appendChild(this.elem);
			};
		};     

	};

    move(){

    	
    	
    	if(this.shipChoice){//1
    		this.timeShipLife--;
    		if(this.timeShipFire == this.timeShipLife){new EnemyShipShoot(this.left, this.top);};
    	}
    	else{
    		this.timeShipLife--;
    		if(this.timeShipFire.indexOf(this.timeShipLife) != -1){new EnemyShipShoot2(this.left, this.top);};
    	};


    	// если столкновение с кораблём
    	if(collisionCircle(this, game.ship)){
    		explosion(game.ship);

    		game.die();

			explosion(this);
    		this.elem.remove();
        	delete this;
    	};

        this.left += this.x*this.speedLeft;
        this.top -= this.y*this.speedTop;

    	this.elem.style.left = this.left + 'px';
        this.elem.style.top = this.top + 'px'; 

    	if(this.timeShipLife >= 0){

	    	if(this.left > innerWidth){this.left = 0;}
	        else if(this.left + this.width < 0){this.left = innerWidth;};

	        if(this.top > innerHeight){this.top = -this.width;}
	        else if(this.top + this.width < 0){this.top = innerHeight;};

    	}
    	else{
    		if(this.left > innerWidth + this.width || this.left + this.width*2 < 0 || this.top > innerHeight + this.width || this.top + this.width*2 < 0){this.die();};
    	};
    };

    die(){

    	this.elem.remove();
    	delete game.enemies[this.num];

    };

};

class EnemyShipShoot{

	constructor(x,y){

		this.callDie = false;
		this.elem = document.createElement('img');

		this.choice = parseInt(Math.random()*2);

		this.elem.src = (this.choice)?'/img/enemy-ship-shoot.png':'/img/missle.png';
		this.elem.className = (this.choice)?'enemy_ship_mine':'enemy_ship_missle';

		this.speedShoot = 4;

		this.y = y;
		this.x = x;


		this.top = this.y;
		this.left = this.x;

		this.elem.onload = ()=>{

			this.width = this.elem.width;
			this.height = this.elem.height;

			this.elem.style.cssText = 'top:' + this.top + 'px; left:' + this.left + 'px;';

				if(game.stopGame){
			        this.num = game.numEnemy++;
					game.enemies[this.num] = this;
					document.body.appendChild(this.elem);
				};
		};
	};

	rotate(){

		let a = Math.abs(this.top - game.ship.top);
		let b = Math.abs(this.left - game.ship.left);
		let PI180 = 180/Math.PI;
		let res = parseInt((this.left>game.ship.left)?(this.top<game.ship.top)?Math.atan(b/a)*PI180:Math.atan(a/b)*PI180+90:(this.top>game.ship.top)?Math.atan(b/a)*PI180+180:Math.atan(a/b)*PI180+270);

		this.elem.style.transform = 'rotate(' + res + 'deg)';

	};

	move(){

		if(!this.callDie){

			if(!this.choice)this.rotate();

	        let a = game.ship.top - this.top;
	        let b = this.left - game.ship.left;
	        let tg = Math.sqrt(1/(1+Math.pow(a/b,2)));
	        this.x = (game.ship.left > this.left)?-tg*1:tg*1;
	        this.y = (game.ship.top > this.top)?Math.sqrt(Math.abs(1-this.x*this.x))*1:-Math.sqrt(Math.abs(1-this.x*this.x))*1;

		};

        this.top = this.top + this.y * this.speedShoot;
        this.left = this.left - this.x * this.speedShoot;

        this.elem.style.top = this.top + 'px';
        this.elem.style.left = this.left + 'px';
        
        if(collisionCircle(this, game.ship)){

    		explosion(game.ship);

			explosion(this);
    		game.die();

    	};
	};
};

class EnemyShipShoot2{

	constructor(x,y){

		this.elem = document.createElement('div');
		this.elem_shoot = document.createElement('div');
		this.elem.className = 'shoot';
		this.elem_shoot.className = 'enemy_ship_shoot';

		this.width = 1;
		this.height = 1;

		this.top = y;
		this.left = x;


		this.elem_shoot.style.background = '#ff5430';
		this.elem.style.width = this.width + 'px';
		this.elem.style.height = this.height + 'px';
		this.elem.style.top = this.top + 'px';
		this.elem.style.left = this.left + 'px';

		this.elem.appendChild(this.elem_shoot);
		document.body.appendChild(this.elem);

		this.speedShoot = 8;

		new Audio('/audio/laser-blast.mp3').play();

		this.num = game.numShoot++;
		game.shoots[this.num] = this;


		this.elem.style.cssText = 'top:' + this.top + 'px; left:' + this.left + 'px;';


		let a = game.ship.top+game.ship.height/2 - this.top;
        let b = this.left - game.ship.left+game.ship.width/2;
        let tg = Math.sqrt(1/(1+(a/b)*(a/b)));
        this.x = (game.ship.left > this.left)?-tg*1:tg*1;
        this.y = (game.ship.top > this.top)?Math.sqrt(Math.abs(1-this.x*this.x))*1:-Math.sqrt(Math.abs(1-this.x*this.x))*1;

		this.rotate();

	};

	rotate(){

		let a = Math.abs(this.top - game.ship.top);
		let b = Math.abs(this.left - game.ship.left);
		let PI180 = 180/Math.PI;
		let res = parseInt((this.left>game.ship.left+game.ship.width/2)?(this.top<game.ship.top+game.ship.height/2)?Math.atan(b/a)*PI180:Math.atan(a/b)*PI180+90:(this.top>game.ship.top+game.ship.height/2)?Math.atan(b/a)*PI180+180:Math.atan(a/b)*PI180+270);

		this.elem.style.transform = 'rotate(' + res + 'deg)';

	};

	move(){

		// if(this.callDie){return;};

        this.top = this.top + this.y*this.speedShoot;
        this.left = this.left - this.x*this.speedShoot;
        this.elem.style.top = this.top + 'px';
        this.elem.style.left = this.left + 'px';
        
        if(collisionCircle(this, game.ship)){

    		explosion(game.ship);

    		game.die();

			explosion(this);

    	};

    	if(this.left > innerWidth + this.width || this.left + this.width*2 < 0 || this.top > innerHeight + this.width || this.top + this.width*2 < 0){
	    		game.shoots[this.num].elem.remove();
				delete game.shoots[this.num];
    	};
	};
};

class BlackHole {

	constructor(){

		this.elem = new Image(100,100);

		this.elem.src = 'img/black-hole.png';
		this.elem.className = 'hole';

		this.width = this.elem.width;
		this.height = this.elem.height;

		this.rotateCorner = Math.floor(Math.random()*359);

		this.left = (Math.random()*(innerWidth/5*2-this.width));
		this.top = (Math.random()*(innerHeight-this.height));

		this.elem.style.left = this.left + 'px';
		this.elem.style.top = this.top + 'px';

		this.delay = 100;

		this.elem.onload = ()=>{
			document.body.appendChild(this.elem);
		};

	};

	hide(){
		setTimeout(()=>{this.elem.style.opacity = '1';},this.delay);
		setTimeout(()=>{game.holeDefine = true;}, this.delay + 1000);
	};

};

class BlackHole2 extends BlackHole {

	constructor(){

		super();

		this.left = (Math.random()*((innerWidth/5*2)-this.width))+innerWidth/5*3;

		this.elem.style.left = this.left + 'px';
		this.elem.style.top = this.top + 'px';

		this.elem.onload = ()=>{
			document.body.appendChild(this.elem);
		};
	};
};

class Ammunition{
	constructor(){

		this.elem = new Image(30,30);
		this.elem.src = 'img/charging_shoots.png';
		this.elem.className = 'charging_shoots';

		this.width = this.elem.width;
		this.height = this.elem.height;

		this.left = Math.round(Math.random()*(innerWidth-this.width));
		this.top = Math.round(Math.random()*(innerHeight-this.width));
		// this.left = innerWidth/2;
		// this.top = innerHeight/2-100;

		this.elem.style.left = this.left + 'px';
		this.elem.style.top = this.top + 'px';

		this.elem.onload = ()=>{
			document.body.appendChild(this.elem);

		};
	};
};

class newGame{

	constructor(){

		this.enemyLength = parseInt(document.getElementById('count_meteor').children[0].textContent);///////// ENEMY LENGTH //////////

		this.enemyQuantityOnSpace = (this.enemyLength < 3)?1:parseInt(this.enemyLength/3); //////// ENEMY Quantity On Space /////////
		this.quantityIndicate = this.enemyLength;
		this.indicatorEndLevel = document.getElementById('end_level');
		this.indicatorEndLevel.textContent = this.quantityIndicate;


		this.cornerRad = 0.0175;

		menu.style.display = 'none';

		if(document.getElementById('sky')){
			this.sky = document.getElementById('sky');
			this.sky.src = '/img/space' + this.enemyLength + '.jpg';
		}
		else{
			this.sky = document.createElement('img');
			this.sky.id = 'sky';
			this.sky.src = '/img/space' + this.enemyLength + '.jpg';
		};

		document.body.appendChild(this.sky);

		this.ship = new Ship();
		this.ship.controlling();

		this.stopGame = true;
		this.stopRender = null;

		this.checkingLastEnemy = false;

		this.shoots = {};
		this.numShoot = 1;

		this.enemies = {};
		this.numEnemy = 0;
		this.stopEnemy = false;

		this.indicate = document.getElementById('indicate');
		this.indicate.style.opacity = '1';


		this.gun = document.getElementById('gun');
		this.gun.children[0].style.top = '100%';
		this.gun_indicatorHeight = parseInt(getComputedStyle(gun.children[0]).top);

		this.render = this.render.bind(this);
		this.stopRender = requestAnimationFrame(this.render);

		this.enemyShipSwitch = true;

		if(document.getElementsByClassName('hole').length){
			document.getElementsByClassName('hole')[0].remove();
			document.getElementsByClassName('hole')[0].remove();
		};

		this.hole = {};
		this.holeDefine = false;
		this.holeSwitch = true;

		this.ammunition = null;
		this.ammunitionDefine = false;
		this.ammunitionDelay = true;


		this.pause = false;
		this.stopSetEnemy = null;
		this.setEnemy();

	};

	blackHole(){
		if(!Object.keys(game.hole).length){

			this.hole = {1: new BlackHole(), 2: new BlackHole2()};
			this.hole[1].hide();
			this.hole[2].hide();
		};
	};

	holesDelete(){

		if(Object.keys(this.hole).length){

			let h1 = game.hole[1].elem;
			let h2 = game.hole[2].elem;

			game.holeDefine = false;
			this.hole = {};


			h1.style.opacity = 0;
			h2.style.opacity = 0;

			setTimeout(()=>{
				h1.remove();
				h2.remove();
			}, 1000);
		};

	};


	die(){

		this.stopGame = false;

		this.ship.stopControlling();
		this.ship.elem.remove();
		delete this.ship;

		for(let o in game.enemies){
			game.enemies[o].elem.remove();
			delete game.enemies[o];
		};

		for(let o in game.shoots){
			game.shoots[o].elem.remove();
			delete game.shoots[o];
		};

		this.holesDelete();
		this.deleteAmmunition();

		menu.style.display = '';

		menu.children[0].textContent = 'YOU LOST! TRY AGAIN!';
		menu.children[0].id = 'animate_game_over';
		menu.children[0].style.display = 'block';
		menu.style.left = innerWidth/2 - menu.getBoundingClientRect().width/2 + 'px';
		menu.style.top = innerHeight/2 - menu.getBoundingClientRect().height/2 + 'px';

	};

	win(){

		this.stopGame = false;

		this.ship.stopControlling();
		this.ship.elem.remove();
		delete this.ship;


		for(let o in game.enemies){
			game.enemies[o].elem.remove();
			delete game.enemies[o];
		};

		for(let o in this.shoots){
			this.shoots[o].elem.remove();
			delete game.shoots[o];
		};
		
		this.holesDelete();
		this.deleteAmmunition();

		menu.style.display = '';

		menu.children[0].textContent = 'CONGRATULATIONS YOU WIN!';
		menu.children[0].id = 'animate_game_over';
		menu.children[0].style.display = 'block';
		menu.style.left = innerWidth/2 - menu.getBoundingClientRect().width/2 + 'px';
		menu.style.top = innerHeight/2 - menu.getBoundingClientRect().height/2 + 'px';

		if(this.enemyLength == 20){document.getElementById('count_meteor').children[0].textContent = this.enemyLength;}
		else{
			document.getElementById('count_meteor').children[0].textContent = parseInt(document.getElementById('count_meteor').children[0].textContent)+1;
		};



	};

	setEnemy(){
		let i = 0;
		this.stopSetEnemy = setInterval(()=>{

			if(!this.stopGame){clearInterval(this.stopSetEnemy); return;};


///////////////////////////////////////////////////////////////////////////////////////



					if(this.ammunitionDelay){

						this.ammunitionDelay = false;

						setTimeout(()=>{
							if(!this.ammunitionDefine && this.stopGame){
								this.ammunitionDefine = true;
								this.ammunition = new Ammunition();
							};
						}, 2000);
					};
///////////////////////////////////////////////////////////////////////////////////////


			if(!this.stopEnemy){
				if(i < this.enemyLength){
					if(Object.keys(this.enemies).length < this.enemyQuantityOnSpace){

						i++;

						new EnemyMeteor();

						if(this.enemyShipSwitch){
							this.enemyShipSwitch = false;
						}
						else{

							this.enemyShipSwitch = true;
							new EnemyShip();

							this.holeSwitch = this.holeSwitch?false:true;

							if(!this.holeDefine && this.holeSwitch){
								this.blackHole();
							};
						};
					};
				}

				else{
					this.checkingLastEnemy = true;
					this.stopEnemy = true;
					// clearInterval(this.stopSetEnemy);
				};
			};

		}, parseInt(Math.random()*1000)+1000);
	};

	dieEnemies(i){
		explosion(game.enemies[i]);
		game.enemies[i].elem.remove();
		delete game.enemies[i];
	};

	deleteEnemyShipShoots(){

		for(let o in this.enemies){

			if(game.enemies[o].elem.className == 'enemy_ship_mine' || game.enemies[o].elem.className == 'enemy_ship_missle'){
				game.enemies[o].callDie = true;
				game.enemies[o].elem.style.opacity = '0';
				setTimeout(()=>{
					// if(Object.keys(this.enemies).length){
						this.enemies[o].elem.remove();
						delete this.enemies[o];
					// };
				},300);
			};
		};
	};

	deleteAmmunition(){
		if(this.ammunitionDefine == true){
			this.ammunition.elem.remove();
			this.ammunition = {};
			this.ammunitionDefine = false;
			this.ammunitionDelay = true;

		};
	};


	render(){

		if(this.checkingLastEnemy){
			if(!Object.keys(this.enemies).length){
				cancelAnimationFrame(this.stopRender);
				this.win();
				return;
			};
		};

		if(this.ship.rotateRender){
			this.ship.rotateTurn?this.ship.rotate(0):this.ship.rotate(1);
		};

	    this.ship.move();

	    if(this.ship.speedFastTurn){
	    	this.ship.speed(this.ship.speedFastTurn);
	    };

		for(let o in this.enemies){
			this.enemies[o].move();
		};

		for(let o in this.shoots){
			this.shoots[o].move();
		};

		if(this.stopGame){
			this.stopRender = requestAnimationFrame(this.render);
		}
		else{
			cancelAnimationFrame(this.stopRender);
		};
	};
};




</script>

</body>
</html>