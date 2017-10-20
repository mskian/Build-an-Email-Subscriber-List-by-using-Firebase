# Build an Email Subscriber List by-using Firebase Real time Database


<p>Build an Email Subscriber List by using Firebase Real-time Database - PHP cURL Method</P>

- Create New Folder on your Web server Names as <b>subscribe</b>
- Download and Upload this Plugin on Newly Created Folder - <b>subscribe</b>
- Find this Below line 

```
$message= '<div class="container"><div class="row"><div class="col-lg-6 col-lg-offset-3"><div class="alert alert-success text-center"><i class="fa fa-thumbs-up"></i> <b>Thanks for Subscribe to Our Blog Post  Updates</b></div></div></div></div>';
```
- Replace the Default alert Message with your OWN Alert Message
- Now Find this Line & replace it with your Firebase real-time database Storage URL

```
//replace https://example-project.firebaseio.com with Firebase Realtime DB URL - DON'T REMOVE /subscribers.json
    $url = "https://example-project.firebaseio.com/subscribers.json";
```
- That's all Done, Save the settings and Start Build your Email Subscriber List

### Firebase real-time Database URL


