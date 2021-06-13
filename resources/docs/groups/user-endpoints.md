# User endpoints


## Create a User
Store a newly created user in database.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"dolorem","last_name":"eius","dob":"2021-06-13T06:11:30+0000","phone":"voluptatibus","email":"celestino.hyatt@example.com","password":"nostrum","address":"earum"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "dolorem",
    "last_name": "eius",
    "dob": "2021-06-13T06:11:30+0000",
    "phone": "voluptatibus",
    "email": "celestino.hyatt@example.com",
    "password": "nostrum",
    "address": "earum"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (201):

```json

{
  'id': 1,
  'first_name': 'string',
  'last_name': 'string',
  'dob': '1990-12-12',
  'phone': '098 0983 092',
  'email': 'string',
  'email_verified_at': '1990-12-12 12:45:10',
  'password': 'string',
  'address': 'string',
  'bio': 'string',
  'avatar_path': 'string',
  'social_linkedin': 'string',
  'social_facebook': 'string',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-POSTapi-v1-auth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-auth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-register"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-register"></code></pre>
</div>
<form id="form-POSTapi-v1-auth-register" data-method="POST" data-path="api/v1/auth/register" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-auth-register" onclick="tryItOut('POSTapi-v1-auth-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-auth-register" onclick="cancelTryOut('POSTapi-v1-auth-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-auth-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/auth/register</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-auth-register" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-auth-register" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-v1-auth-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-v1-auth-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="POSTapi-v1-auth-register" data-component="body"  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-v1-auth-register" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-auth-register" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v1-auth-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-v1-auth-register" data-component="body"  hidden>
<br>
</p>

</form>


## Get User
Display data of user by id

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "error": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user"></code></pre>
</div>
<div id="execution-error-GETapi-v1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user"></code></pre>
</div>
<form id="form-GETapi-v1-user" data-method="GET" data-path="api/v1/user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-user" onclick="tryItOut('GETapi-v1-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-user" onclick="cancelTryOut('GETapi-v1-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/user</code></b>
</p>
<p>
<label id="auth-GETapi-v1-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-user" data-component="header"></label>
</p>
</form>


## Find a User
Display the specified user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/user/find/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":14}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/find/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 14
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
  'id': 1,
  'first_name': 'string',
  'last_name': 'string',
  'dob': '1990-12-12',
  'phone': '098 0983 092',
  'email': 'string',
  'email_verified_at': '1990-12-12 12:45:10',
  'password': 'string',
  'address': 'string',
  'bio': 'string',
  'avatar_path': 'string',
  'social_linkedin': 'string',
  'social_facebook': 'string',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-GETapi-v1-user-find--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-user-find--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user-find--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-user-find--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user-find--id-"></code></pre>
</div>
<form id="form-GETapi-v1-user-find--id-" data-method="GET" data-path="api/v1/user/find/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user-find--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-user-find--id-" onclick="tryItOut('GETapi-v1-user-find--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-user-find--id-" onclick="cancelTryOut('GETapi-v1-user-find--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-user-find--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/user/find/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-user-find--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-user-find--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-user-find--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-user-find--id-" data-component="body" required  hidden>
<br>
The id of the user.</p>

</form>


## Applied Jobs
View list applied jobs for that user.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/user/applied" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/applied"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "rn_id": 1,
    "user_id": 1,
    "is_elect": 1,
    "cv_path": "cv_path_tmp",
    "cover_letter_path": "cover_letter_path_tmp",
    "exp_years": 1,
    "created_at": null,
    "updated_at": null,
    "recruitment_news": {
        "id": 1,
        "org_id": 1,
        "author_id": 8,
        "major_id": 2,
        "title": "Part-time Java",
        "content": "Cần tuyển Aut ea nihil amet est. Impedit totam qui ipsam veniam.earum.",
        "address": "571 Phố Bồ Ánh Tú, Phường 6, Huyện Phượng Trung\nTây Ninh",
        "city": "Hồ Chí Minh",
        "work_type": "Remote",
        "start_time": "2021-05-18 03:47:00",
        "end_time": "2021-05-23 03:47:00",
        "interview_start_time": "2021-05-24 03:47:00",
        "interview_end_time": "2021-05-28 03:47:00",
        "created_at": "2021-05-18 03:47:00",
        "updated_at": "2021-05-18 03:47:00"
    }
}
```
<div id="execution-results-GETapi-v1-user-applied" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-user-applied"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user-applied"></code></pre>
</div>
<div id="execution-error-GETapi-v1-user-applied" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user-applied"></code></pre>
</div>
<form id="form-GETapi-v1-user-applied" data-method="GET" data-path="api/v1/user/applied" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user-applied', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-user-applied" onclick="tryItOut('GETapi-v1-user-applied');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-user-applied" onclick="cancelTryOut('GETapi-v1-user-applied');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-user-applied" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/user/applied</code></b>
</p>
<p>
<label id="auth-GETapi-v1-user-applied" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-user-applied" data-component="header"></label>
</p>
</form>


## Update User&#039;s Information
Update the specified user in database.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/v1/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"sit","last_name":"voluptatum","dob":"2021-06-13T06:11:30+0000","phone":2134.91934401,"email":"alessia49@example.net","address":"sit","id":13,"id2":19}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "sit",
    "last_name": "voluptatum",
    "dob": "2021-06-13T06:11:30+0000",
    "phone": 2134.91934401,
    "email": "alessia49@example.net",
    "address": "sit",
    "id": 13,
    "id2": 19
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
  'id': 1,
  'first_name': 'string',
  'last_name': 'string',
  'dob': '1990-12-12',
  'phone': '098 0983 092',
  'email': 'string',
  'email_verified_at': '1990-12-12 12:45:10',
  'password': 'string',
  'address': 'string',
  'bio': 'string',
  'avatar_path': 'string',
  'social_linkedin': 'string',
  'social_facebook': 'string',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-PUTapi-v1-user" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-user"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-user"></code></pre>
</div>
<form id="form-PUTapi-v1-user" data-method="PUT" data-path="api/v1/user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-user" onclick="tryItOut('PUTapi-v1-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-user" onclick="cancelTryOut('PUTapi-v1-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/user</code></b>
</p>
<p>
<label id="auth-PUTapi-v1-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-v1-user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-v1-user" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-v1-user" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-v1-user" data-component="body"  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="phone" data-endpoint="PUTapi-v1-user" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-v1-user" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="PUTapi-v1-user" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="PUTapi-v1-user" data-component="body" required  hidden>
<br>
The id of the user.</p>
<p>
<b><code>id2</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id2" data-endpoint="PUTapi-v1-user" data-component="body" required  hidden>
<br>
The id of the user.</p>

</form>


## Remove a User
Remove the specified user from database.

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/v1/user/odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":18}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/odio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 18
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
  'id': 1,
  'first_name': 'string',
  'last_name': 'string',
  'dob': '1990-12-12',
  'phone': '098 0983 092',
  'email': 'string',
  'email_verified_at': '1990-12-12 12:45:10',
  'password': 'string',
  'address': 'string',
  'bio': 'string',
  'avatar_path': 'string',
  'social_linkedin': 'string',
  'social_facebook': 'string',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}
```
<div id="execution-results-DELETEapi-v1-user--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-user--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-user--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-user--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-user--id-" data-method="DELETE" data-path="api/v1/user/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-user--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-user--id-" onclick="tryItOut('DELETEapi-v1-user--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-user--id-" onclick="cancelTryOut('DELETEapi-v1-user--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-user--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/user/{id}</code></b>
</p>
<p>
<label id="auth-DELETEapi-v1-user--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-v1-user--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-user--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEapi-v1-user--id-" data-component="body" required  hidden>
<br>
The id of the user.</p>

</form>


## Apply a Job
Apply a job with recruitment news

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/users/apply" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "rn_id=7" \
    -F "exp_years=8" \
    -F "cv_path=@C:\Users\Phoenix\AppData\Local\Temp\php2431.tmp"     -F "cover_letter_path=@C:\Users\Phoenix\AppData\Local\Temp\php2441.tmp" 
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/users/apply"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('rn_id', '7');
body.append('exp_years', '8');
body.append('cv_path', document.querySelector('input[name="cv_path"]').files[0]);
body.append('cover_letter_path', document.querySelector('input[name="cover_letter_path"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


> Example response (201):

```json

{
  "message": "Apply job successfully",
  "data": {
      "id": 1,
      "first_name": "Uông Đăng Bắc",
      "last_name": "Ông. Chiêm Lam Hoán",
      "dob": "2015-02-26",
      "phone": "0186-622-0077",
      "email": "gia.tien@example.com",
      "email_verified_at": "2021-06-12 05:55:18",
      "address": "47 Phố Tạ Đào Ly, Phường Đổng Hà Thảo, Huyện Độ Trình\nĐà Nẵng",
      "bio": "SpBxrIonxjW7kOFgkgBwvS2ZQ2YcXx",
      "avatar_path": "public/docs/user.png",
      "social_linkedin": null,
      "social_facebook": null,
      "created_at": "2021-06-12 05:55:18",
}
```
<div id="execution-results-POSTapi-v1-users-apply" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-users-apply"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users-apply"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-users-apply" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users-apply"></code></pre>
</div>
<form id="form-POSTapi-v1-users-apply" data-method="POST" data-path="api/v1/users/apply" data-authed="1" data-hasfiles="2" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users-apply', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-users-apply" onclick="tryItOut('POSTapi-v1-users-apply');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-users-apply" onclick="cancelTryOut('POSTapi-v1-users-apply');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-users-apply" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/users/apply</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-users-apply" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-users-apply" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>rn_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="rn_id" data-endpoint="POSTapi-v1-users-apply" data-component="body" required  hidden>
<br>
Recruitment news id.</p>
<p>
<b><code>cv_path</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="cv_path" data-endpoint="POSTapi-v1-users-apply" data-component="body" required  hidden>
<br>
Recruitment news id.</p>
<p>
<b><code>cover_letter_path</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="cover_letter_path" data-endpoint="POSTapi-v1-users-apply" data-component="body" required  hidden>
<br>
Recruitment news id.</p>
<p>
<b><code>exp_years</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="exp_years" data-endpoint="POSTapi-v1-users-apply" data-component="body" required  hidden>
<br>
Experience of job.</p>

</form>



