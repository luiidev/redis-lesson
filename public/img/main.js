var socket = io.connect('http://localhost:81', {forceNew: true});

socket.on('messages:App\\Events\\UserMessage', function(data){
	render(data);
});

function render(data){
	var html = data.reduce(function(text, obj, i) {
		return text + ( `<div>
				<strong>${obj.name}</strong>
				<em>${obj.text}</em>
				</div>`);
	}, '');

	document.getElementById('messages').innerHTML = html;
}


function addMessage(e){
	var payload = {};
	payload.name = document.getElementById('userName').value;
	payload.text = document.getElementById('text').value;
	payload._token = document.getElementById('_token').value;

	$.ajax({
		method: 'POST',
		url: '/',
		data: payload
	}).done(function(response){
		console.log(response);
	})

	return false;
} 