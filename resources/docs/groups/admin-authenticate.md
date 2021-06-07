# Admin Authenticate

APIs for authentication admin.

## Login.




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/admin/v1/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"vitae","password":"quia"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/admin/v1/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "vitae",
    "password": "quia"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-admin-v1-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-admin-v1-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-v1-login"></code></pre>
</div>
<div id="execution-error-POSTapi-admin-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-v1-login"></code></pre>
</div>
<form id="form-POSTapi-admin-v1-login" data-method="POST" data-path="api/admin/v1/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-v1-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-admin-v1-login" onclick="tryItOut('POSTapi-admin-v1-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-admin-v1-login" onclick="cancelTryOut('POSTapi-admin-v1-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-admin-v1-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/admin/v1/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>String</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-admin-v1-login" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>String</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-admin-v1-login" data-component="body" required  hidden>
<br>
</p>

</form>


## api/admin/v1/auth/token




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/admin/v1/auth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/admin/v1/auth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-admin-v1-auth-token" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-admin-v1-auth-token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-v1-auth-token"></code></pre>
</div>
<div id="execution-error-POSTapi-admin-v1-auth-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-v1-auth-token"></code></pre>
</div>
<form id="form-POSTapi-admin-v1-auth-token" data-method="POST" data-path="api/admin/v1/auth/token" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-v1-auth-token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-admin-v1-auth-token" onclick="tryItOut('POSTapi-admin-v1-auth-token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-admin-v1-auth-token" onclick="cancelTryOut('POSTapi-admin-v1-auth-token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-admin-v1-auth-token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/admin/v1/auth/token</code></b>
</p>
</form>



