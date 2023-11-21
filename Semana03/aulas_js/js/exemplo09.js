function desenhar(){
	context=document.getElementById('x').getContext('2d')

	context.beginPath()

	context.moveTo(150,50)

	context.lineTo(220,250)
	context.lineTo(50,125)
	context.lineTo(250,125)
	context.lineTo(80,250)
	context.lineTo(150,50)

	context.fillStyle='#ff0'
	context.fill()

	context.strokeStyle='#f00'
	context.stroke()
}