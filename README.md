# Build an Email Subscriber List by using Firebase Real time Database

[![GPL](https://img.shields.io/badge/Liscense-GPL-green.svg)](http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)

### Firebase Realtime Database by Using PHP cURL Method

<p>Build an Email Subscriber list for your Blog/Website by using Firebase Realtime Database.</P>

- Open - https://firebase.google.com
- Create a New Firebase Project
- Goto Database
- Go to RULE
- Update the Database Auth Rule

```
 {
  "rules": {
    ".read": "auth != true",
    ".write": "auth != true"
  }
}
```


- Create a New Folder on your Web server Named as <b>subscribe</b>
- Download and Upload this Plugin - https://github.com/mskian/Build-an-Email-Subscriber-List-by-using-Firebase/archive/master.zip on Newly Created Folder - <b>subscribe</b>
- Visitor's Subscribe URL - `http://example.com/subscribe`
- open `index.php`
- Find this Below line 


```
$message= '<div class="container"><div class="row"><div class="col-lg-6 col-lg-offset-3"><div class="alert alert-success text-center"><i class="fa fa-thumbs-up"></i> <b>Thanks for Subscribe to Our Blog Post  Updates</b></div></div></div></div>';
```

- Replace the Default Alert Message with your OWN Alert Message
- Next Find this Line & replace it with your Firebase real-time Database Storage URL

```
//replace https://example-project.firebaseio.com with Firebase Realtime DB URL - DON'T REMOVE /subscribers.json
    $url = "https://example-project.firebaseio.com/subscribers.json";
```

- That's all Done, Save the settings and Start Building your Blog Email Subscriber List
- All Collected Emails and Names are Stored on Firebase Realtime Database
- You can Export the collected Email's as JSON Format only - there are plenty of online sites available for converting the JSON into CSV format else you can do it manually

<b>Live Setup and Demo's</b> - https://youtu.be/AIz-vOw-UsY

### License & Copyright

GPL v3.0 or later.
Copyright (C) 2017  Santhosh veer https://santhoshveer.com/

This program is free software; you can redistribute it and/or modify it
under the terms of the GNU General Public License as published by the Free
Software Foundation; either version 2 of the License, or (at your option)
any later version.

This program is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for
more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

