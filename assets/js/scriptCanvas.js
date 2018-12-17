var isco = document.getElementById('myCanvas');
var ctx = isco.getContext('2d');
c.beginPath();
c.moveTo(150,200);
c.quadraticCurveTo(200,20,250,200);
c.fillStyle="yellow";
c.fill();
c.closePath();

c.beginPath();
c.moveTo(100,200);
c.quadraticCurveTo(200,100,300,200);
c.fillStyle="green";
c.fill();
c.closePath();

c.beginPath();
c.moveTo(100,200);
c.quadraticCurveTo(200,300,300,200);
c.fill();
c.closePath();


