const querystring = require('querystring');
const https = require('https');

var holdMyTicketId = '88379129337';
var accessToken = '818188174992540';
var accessKey = '7C81a9dd0ca370c7a761600a8f4a738a33';
var headers = {'Content-Type': 'application/json'};
var facebookGraphURL = 'graph.facebook.com';
var responseString = '';

var facebookApiPaths = {
	"posts"          : '/'+holdMyTicketId+'/posts?',
	"cover"          : '/'+holdMyTicketId+'?fields=cover',
	"name"           : '/'+holdMyTicketId+'?',
	"profilePicture" : '/'+holdMyTicketId+'?fields=picture'
};

var coverImg = function(value) {
	document.getElementById('cover').setAttribute('src', value['cover']['source']);
};

var profilePicture = function(value) {
	document.getElementById('profile-picture').setAttribute('src', value['picture']['data']['url']);
}

var facebookName = function(value) {
	document.getElementById('facebook-name').innerHTML = value['name'];
};

var latestPostTime = function(value) {
	document.getElementById('latest-facebook-post-time').innerHTML = new Date(value['data'][0]['created_time']).toLocaleString();
};

var latestPost = function(value) {
	document.getElementById('latest-facebook-post').innerHTML = value['data'][0]['message'];
};



var facebookRequest = function (path, writeToScreen) {
	var options = {
		hostname: facebookGraphURL,
		path: path+'&access_token='+accessToken+'%'+accessKey,
		method: 'GET',
		headers: headers,
	};

	var facebookRequest = https.request(options, (res) => {
		// console.log('statusCode: ', res.statusCode);
		// console.log('headers: ', res.headers);

		res.on('data', function(data) {
			responseString = data;
		});

		res.on('end', function() {
			var responseObject = JSON.parse(responseString);
			writeToScreen(responseObject);
			console.log(responseObject);
		});
	});
	facebookRequest.end();
};


var getCoverImg = facebookRequest(facebookApiPaths['cover'], coverImg);
var getProfilePicture = facebookRequest(facebookApiPaths['profilePicture'], profilePicture);
var getName = facebookRequest(facebookApiPaths['name'], facebookName);
var getLatestPostTime = facebookRequest(facebookApiPaths['posts'], latestPostTime);
var getLatestPost = facebookRequest(facebookApiPaths['posts'], latestPost);


