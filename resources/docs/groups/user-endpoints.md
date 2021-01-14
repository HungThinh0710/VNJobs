# User endpoints


## Create a User
Store a newly created user in database.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"tenetur","last_name":"et","dob":"2021-01-14T17:31:37+0000","phone":"et","email":"xjohnston@example.com","password":"dicta","address":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "tenetur",
    "last_name": "et",
    "dob": "2021-01-14T17:31:37+0000",
    "phone": "et",
    "email": "xjohnston@example.com",
    "password": "dicta",
    "address": "et"
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
  'role_id': 1,
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
<form id="form-POSTapi-v1-auth-register" data-method="POST" data-path="api/v1/auth/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-register', this);">
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




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user?id=11" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/user"
);

let params = {
    "id": "11",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    "message": "Unauthenticated."
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
<form id="form-GETapi-v1-user" data-method="GET" data-path="api/v1/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user', this);">
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
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-user" data-component="query" required  hidden>
<br>
The id of the user.</p>
</form>


## Find a User
Display the specified user.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":7}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/voluptates"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 7
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
  'role_id': 1,
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
<div id="execution-results-GETapi-v1-user--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-user--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user--id-"></code></pre>
</div>
<form id="form-GETapi-v1-user--id-" data-method="GET" data-path="api/v1/user/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-user--id-" onclick="tryItOut('GETapi-v1-user--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-user--id-" onclick="cancelTryOut('GETapi-v1-user--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-user--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/user/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-user--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-user--id-" data-component="body" required  hidden>
<br>
The id of the user.</p>

</form>


## Update User&#039;s Information
Update the specified user in database.


.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/user/quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"sunt","last_name":"quo","dob":"2021-01-14T17:31:37+0000","phone":"voluptas","email":"bschinner@example.net","password":"aliquid","address":"doloremque"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/quod"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "sunt",
    "last_name": "quo",
    "dob": "2021-01-14T17:31:37+0000",
    "phone": "voluptas",
    "email": "bschinner@example.net",
    "password": "aliquid",
    "address": "doloremque"
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
  'role_id': 1,
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
<div id="execution-results-PUTapi-v1-user--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-user--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-user--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-user--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-user--id-" data-method="PUT" data-path="api/v1/user/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-user--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-user--id-" onclick="tryItOut('PUTapi-v1-user--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-user--id-" onclick="cancelTryOut('PUTapi-v1-user--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-user--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/user/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-user--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-v1-user--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-v1-user--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>dob</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="dob" data-endpoint="PUTapi-v1-user--id-" data-component="body"  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTapi-v1-user--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-v1-user--id-" data-component="body" required  hidden>
<br>
The value must be a valid email address.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="PUTapi-v1-user--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="PUTapi-v1-user--id-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove a User
Remove the specified user from database.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/user/harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":12}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/harum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 12
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
  'role_id': 1,
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
<form id="form-DELETEapi-v1-user--id-" data-method="DELETE" data-path="api/v1/user/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-user--id-', this);">
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



