<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>VNJobs API Documentaion</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: June 7 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>API for mobile, web client of VNJobs Project - By Phoenix (aka Hưng Thịnh) &amp; Khắc Tuấn (aka SinJunior)</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost:8000";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.4.2.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:8000</code></pre><h1>Admin Authenticate</h1>
<p>APIs for authentication admin.</p>
<h2>Login.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/admin/v1/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"vitae","password":"quia"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
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
<h2>api/admin/v1/auth/token</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/admin/v1/auth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/admin/v1/auth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
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
</form><h1>Auth endpoints</h1>
<h2>Login.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"quasi","password":"reprehenderit"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "quasi",
    "password": "reprehenderit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-v1-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v1-auth-login" data-method="POST" data-path="api/v1/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-auth-login" onclick="tryItOut('POSTapi-v1-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-auth-login" onclick="cancelTryOut('POSTapi-v1-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>String</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-auth-login" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>String</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v1-auth-login" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Check valid token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/is-valid-token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/is-valid-token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-v1-is-valid-token" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-is-valid-token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-is-valid-token"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-is-valid-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-is-valid-token"></code></pre>
</div>
<form id="form-POSTapi-v1-is-valid-token" data-method="POST" data-path="api/v1/is-valid-token" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-is-valid-token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-is-valid-token" onclick="tryItOut('POSTapi-v1-is-valid-token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-is-valid-token" onclick="cancelTryOut('POSTapi-v1-is-valid-token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-is-valid-token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/is-valid-token</code></b>
</p>
</form><h1>JobSeeker endpoints</h1>
<h2>List JobSeeker</h2>
<p>Display a listing of the job-seeker.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/job-seekers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/job-seekers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
  "current_page": 1,
  "data": [{
     'user_id': 1,
     'is_elect': 0,
     'cv_path': "string",
     'cover_letter_path': "string",
     'cover_letter_path': "string",
     'exp_years': 0,
  }, {
     'user_id': 1,
     'is_elect': 0,
     'cv_path': "string",
     'cover_letter_path': "string",
     'cover_letter_path': "string",
     'exp_years': 0,
  }],
  "first_page_url": "http://127.0.0.1:8000/api/v1/job-seekers?page=1",
  "from": null,
  "last_page": 1,
  "last_page_url": "http://127.0.0.1:8000/api/v1/job-seekers?page=1",
  "next_page_url": null,
  "path": "http://127.0.0.1:8000/api/v1/job-seekers",
  "per_page": 10,
  "prev_page_url": null,
  "to": null,
  "total": 0
}</code></pre>
<div id="execution-results-GETapi-v1-job-seekers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-job-seekers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-job-seekers"></code></pre>
</div>
<div id="execution-error-GETapi-v1-job-seekers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-job-seekers"></code></pre>
</div>
<form id="form-GETapi-v1-job-seekers" data-method="GET" data-path="api/v1/job-seekers" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-job-seekers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-job-seekers" onclick="tryItOut('GETapi-v1-job-seekers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-job-seekers" onclick="cancelTryOut('GETapi-v1-job-seekers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-job-seekers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/job-seekers</code></b>
</p>
</form>
<h2>Find a JobSeeker</h2>
<p>Display the specified job-seeker.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/job-seekers/aliquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"qui"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/job-seekers/aliquam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "qui"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
     'id': 1,
     'user_id': 1,
     'is_elect': 0,
     'cv_path': "string",
     'cover_letter_path': "string",
     'cover_letter_path': "string",
     'exp_years': 0,
}</code></pre>
<div id="execution-results-GETapi-v1-job-seekers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-job-seekers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-job-seekers--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-job-seekers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-job-seekers--id-"></code></pre>
</div>
<form id="form-GETapi-v1-job-seekers--id-" data-method="GET" data-path="api/v1/job-seekers/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-job-seekers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-job-seekers--id-" onclick="tryItOut('GETapi-v1-job-seekers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-job-seekers--id-" onclick="cancelTryOut('GETapi-v1-job-seekers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-job-seekers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/job-seekers/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-job-seekers--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-job-seekers--id-" data-component="body" required  hidden>
<br>
The id of the job seeker.</p>

</form>
<h2>Create a JobSeeker</h2>
<p>Store a newly created job-seeker in database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/job-seekers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":3,"is_elect":false,"cv_path":{},"cover_letter_path":"aut","exp_years":2}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/job-seekers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 3,
    "is_elect": false,
    "cv_path": {},
    "cover_letter_path": "aut",
    "exp_years": 2
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
     'id': 1,
     'user_id': 1,
     'is_elect': 0,
     'cv_path': "string",
     'cover_letter_path': "string",
     'cover_letter_path': "string",
     'exp_years': 0,
}</code></pre>
<div id="execution-results-POSTapi-v1-job-seekers" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-job-seekers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-job-seekers"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-job-seekers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-job-seekers"></code></pre>
</div>
<form id="form-POSTapi-v1-job-seekers" data-method="POST" data-path="api/v1/job-seekers" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-job-seekers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-job-seekers" onclick="tryItOut('POSTapi-v1-job-seekers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-job-seekers" onclick="cancelTryOut('POSTapi-v1-job-seekers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-job-seekers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/job-seekers</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-v1-job-seekers" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_elect</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-v1-job-seekers" hidden><input type="radio" name="is_elect" value="true" data-endpoint="POSTapi-v1-job-seekers" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-v1-job-seekers" hidden><input type="radio" name="is_elect" value="false" data-endpoint="POSTapi-v1-job-seekers" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>cv_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cv_path" data-endpoint="POSTapi-v1-job-seekers" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>cover_letter_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cover_letter_path" data-endpoint="POSTapi-v1-job-seekers" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>exp_years</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="exp_years" data-endpoint="POSTapi-v1-job-seekers" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Update a JobSeeker</h2>
<p>Update the specified job-seeker in database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/job-seekers/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":6,"is_elect":false,"cv_path":{},"cover_letter_path":"nemo","exp_years":13}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/job-seekers/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 6,
    "is_elect": false,
    "cv_path": {},
    "cover_letter_path": "nemo",
    "exp_years": 13
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
     'id': 1,
     'user_id': 1,
     'is_elect': 0,
     'cv_path': "string",
     'cover_letter_path': "string",
     'cover_letter_path': "string",
     'exp_years': 0,
}</code></pre>
<div id="execution-results-PUTapi-v1-job-seekers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-job-seekers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-job-seekers--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-job-seekers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-job-seekers--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-job-seekers--id-" data-method="PUT" data-path="api/v1/job-seekers/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-job-seekers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-job-seekers--id-" onclick="tryItOut('PUTapi-v1-job-seekers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-job-seekers--id-" onclick="cancelTryOut('PUTapi-v1-job-seekers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-job-seekers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/job-seekers/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-job-seekers--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-v1-job-seekers--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_elect</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-v1-job-seekers--id-" hidden><input type="radio" name="is_elect" value="true" data-endpoint="PUTapi-v1-job-seekers--id-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-v1-job-seekers--id-" hidden><input type="radio" name="is_elect" value="false" data-endpoint="PUTapi-v1-job-seekers--id-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>cv_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cv_path" data-endpoint="PUTapi-v1-job-seekers--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>cover_letter_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cover_letter_path" data-endpoint="PUTapi-v1-job-seekers--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>exp_years</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="exp_years" data-endpoint="PUTapi-v1-job-seekers--id-" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Remove a JobSeeker</h2>
<p>Remove the specified job-seeker from database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/job-seekers/nulla" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"maxime"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/job-seekers/nulla"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "maxime"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEapi-v1-job-seekers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-job-seekers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-job-seekers--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-job-seekers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-job-seekers--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-job-seekers--id-" data-method="DELETE" data-path="api/v1/job-seekers/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-job-seekers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-job-seekers--id-" onclick="tryItOut('DELETEapi-v1-job-seekers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-job-seekers--id-" onclick="cancelTryOut('DELETEapi-v1-job-seekers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-job-seekers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/job-seekers/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-job-seekers--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="DELETEapi-v1-job-seekers--id-" data-component="body" required  hidden>
<br>
</p>

</form><h1>Major endpoints</h1>
<h2>List Major</h2>
<p>Display a listing of the resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/majors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/majors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
"current_page": 1,
data: [{
  "id": 1,
  "major_name": "string",
  "image_path": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
 {
  "id": 1,
  "major_name": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  }
],
,
  "first_page_url": "http://127.0.0.1:8000/api/v1/majors?page=1",
  "from": 1,
  "last_page": 1,
  "last_page_url": "http://127.0.0.1:8000/api/v1/majors?page=1",
  "next_page_url": null,
  "path": "http://127.0.0.1:8000/api/v1/majors",
  "per_page": 10,
  "prev_page_url": null,
  "to": 10,
  "total": 2
}</code></pre>
<div id="execution-results-GETapi-v1-majors" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-majors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-majors"></code></pre>
</div>
<div id="execution-error-GETapi-v1-majors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-majors"></code></pre>
</div>
<form id="form-GETapi-v1-majors" data-method="GET" data-path="api/v1/majors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-majors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-majors" onclick="tryItOut('GETapi-v1-majors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-majors" onclick="cancelTryOut('GETapi-v1-majors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-majors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/majors</code></b>
</p>
</form>
<h2>Find a Major</h2>
<p>Display the specified major.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/majors/reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"rerum"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/majors/reiciendis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "rerum"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "major_name": "string",
    "image_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-GETapi-v1-majors--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-majors--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-majors--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-majors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-majors--id-"></code></pre>
</div>
<form id="form-GETapi-v1-majors--id-" data-method="GET" data-path="api/v1/majors/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-majors--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-majors--id-" onclick="tryItOut('GETapi-v1-majors--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-majors--id-" onclick="cancelTryOut('GETapi-v1-majors--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-majors--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/majors/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-majors--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-majors--id-" data-component="body" required  hidden>
<br>
The id of the major.</p>

</form>
<h2>Create Major</h2>
<p>Store a newly created major in database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/majors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"major_name":"deserunt","image_path":"repellat"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/majors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "major_name": "deserunt",
    "image_path": "repellat"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "major_name": "string",
    "image_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-POSTapi-v1-majors" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-majors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-majors"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-majors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-majors"></code></pre>
</div>
<form id="form-POSTapi-v1-majors" data-method="POST" data-path="api/v1/majors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-majors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-majors" onclick="tryItOut('POSTapi-v1-majors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-majors" onclick="cancelTryOut('POSTapi-v1-majors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-majors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/majors</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>major_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="major_name" data-endpoint="POSTapi-v1-majors" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>image_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="image_path" data-endpoint="POSTapi-v1-majors" data-component="body"  hidden>
<br>
</p>

</form>
<h2>Update Major&#039;s Information</h2>
<p>Update the specified major in database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/majors/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"major_name":"ab","image_path":"dolorem"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/majors/velit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "major_name": "ab",
    "image_path": "dolorem"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "major_name": "string",
    "image_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-PUTapi-v1-majors--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-majors--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-majors--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-majors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-majors--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-majors--id-" data-method="PUT" data-path="api/v1/majors/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-majors--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-majors--id-" onclick="tryItOut('PUTapi-v1-majors--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-majors--id-" onclick="cancelTryOut('PUTapi-v1-majors--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-majors--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/majors/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-majors--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>major_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="major_name" data-endpoint="PUTapi-v1-majors--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>image_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="image_path" data-endpoint="PUTapi-v1-majors--id-" data-component="body"  hidden>
<br>
</p>

</form>
<h2>Remove a Major</h2>
<p>Remove the specified major from database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/majors/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"et"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/majors/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "et"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "major_name": "string",
    "image_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-DELETEapi-v1-majors--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-majors--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-majors--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-majors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-majors--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-majors--id-" data-method="DELETE" data-path="api/v1/majors/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-majors--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-majors--id-" onclick="tryItOut('DELETEapi-v1-majors--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-majors--id-" onclick="cancelTryOut('DELETEapi-v1-majors--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-majors--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/majors/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-majors--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="DELETEapi-v1-majors--id-" data-component="body" required  hidden>
<br>
The id of the major.</p>

</form><h1>Organization endpoints</h1>
<h2>List Organization</h2>
<p>Display a listing of the Organization.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/organizations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
"current_page": 1,
data: [{
  "id": 1,
  "owner_id": 1,
  "org_name": "Công ty Vi Inc",
  "phones": "+84-165-015-8016",
  "description": "string",
  "tax_id": "41665",
  "address": "string",
  "is_verify": 0,
  "logo_path": "string",
  "cover_path": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
 {
  "id": 2,
  "owner_id": 1,
  "org_name": "Công ty Vi Inc",
  "phones": "+84-165-015-8016",
  "description": "string",
  "tax_id": "41665",
  "address": "string",
  "is_verify": 0,
  "logo_path": "string",
  "cover_path": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
],
,
  "first_page_url": "http://127.0.0.1:8000/api/v1/organizations?page=1",
  "from": 1,
  "last_page": 1,
  "last_page_url": "http://127.0.0.1:8000/api/v1/organizations?page=1",
  "next_page_url": null,
  "path": "http://127.0.0.1:8000/api/v1/organizations",
  "per_page": 10,
  "prev_page_url": null,
  "to": 10,
  "total": 2
}</code></pre>
<div id="execution-results-GETapi-v1-organizations" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organizations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organizations"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organizations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organizations"></code></pre>
</div>
<form id="form-GETapi-v1-organizations" data-method="GET" data-path="api/v1/organizations" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organizations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organizations" onclick="tryItOut('GETapi-v1-organizations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organizations" onclick="cancelTryOut('GETapi-v1-organizations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organizations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organizations</code></b>
</p>
</form>
<h2>Find an Organization</h2>
<p>Display the specified resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/organizations/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"maiores"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations/sed"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "maiores"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-GETapi-v1-organizations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organizations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organizations--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organizations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organizations--id-"></code></pre>
</div>
<form id="form-GETapi-v1-organizations--id-" data-method="GET" data-path="api/v1/organizations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organizations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organizations--id-" onclick="tryItOut('GETapi-v1-organizations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organizations--id-" onclick="cancelTryOut('GETapi-v1-organizations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organizations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organizations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-organizations--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
The id of the organization.</p>

</form>
<h2>Create Organization</h2>
<p>Store a newly created resource in Database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/organizations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"owner_id":19,"org_name":"libero","phones":"eos","description":"dignissimos","tax_id":3,"address":"aut","logo_path":"natus","cover_path":"ut"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "owner_id": 19,
    "org_name": "libero",
    "phones": "eos",
    "description": "dignissimos",
    "tax_id": 3,
    "address": "aut",
    "logo_path": "natus",
    "cover_path": "ut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-POSTapi-v1-organizations" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-organizations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-organizations"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-organizations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-organizations"></code></pre>
</div>
<form id="form-POSTapi-v1-organizations" data-method="POST" data-path="api/v1/organizations" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-organizations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-organizations" onclick="tryItOut('POSTapi-v1-organizations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-organizations" onclick="cancelTryOut('POSTapi-v1-organizations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-organizations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/organizations</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>owner_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="owner_id" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>org_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="org_name" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>phones</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phones" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tax_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tax_id" data-endpoint="POSTapi-v1-organizations" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-v1-organizations" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>logo_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="logo_path" data-endpoint="POSTapi-v1-organizations" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>cover_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cover_path" data-endpoint="POSTapi-v1-organizations" data-component="body"  hidden>
<br>
</p>

</form>
<h2>Update an Organization</h2>
<p>Update the specified resource in Database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/organizations/nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"owner_id":13,"org_name":"amet","phones":"reiciendis","description":"omnis","tax_id":4,"address":"autem","logo_path":"molestiae","cover_path":"doloremque"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations/nisi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "owner_id": 13,
    "org_name": "amet",
    "phones": "reiciendis",
    "description": "omnis",
    "tax_id": 4,
    "address": "autem",
    "logo_path": "molestiae",
    "cover_path": "doloremque"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-PUTapi-v1-organizations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-organizations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-organizations--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-organizations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-organizations--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-organizations--id-" data-method="PUT" data-path="api/v1/organizations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-organizations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-organizations--id-" onclick="tryItOut('PUTapi-v1-organizations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-organizations--id-" onclick="cancelTryOut('PUTapi-v1-organizations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-organizations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/organizations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-organizations--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>owner_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="owner_id" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>org_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="org_name" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>phones</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phones" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tax_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tax_id" data-endpoint="PUTapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address" data-endpoint="PUTapi-v1-organizations--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>logo_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="logo_path" data-endpoint="PUTapi-v1-organizations--id-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>cover_path</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cover_path" data-endpoint="PUTapi-v1-organizations--id-" data-component="body"  hidden>
<br>
</p>

</form>
<h2>Remove an Organization</h2>
<p>Remove the Organization from Database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/organizations/cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"adipisci"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations/cupiditate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "adipisci"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "owner_id": 1,
    "org_name": "Công ty Vi Inc",
    "phones": "+84-165-015-8016",
    "description": "string",
    "tax_id": "41665",
    "address": "string",
    "is_verify": 0,
    "logo_path": "string",
    "cover_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-DELETEapi-v1-organizations--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-organizations--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-organizations--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-organizations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-organizations--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-organizations--id-" data-method="DELETE" data-path="api/v1/organizations/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-organizations--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-organizations--id-" onclick="tryItOut('DELETEapi-v1-organizations--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-organizations--id-" onclick="cancelTryOut('DELETEapi-v1-organizations--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-organizations--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/organizations/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-organizations--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="DELETEapi-v1-organizations--id-" data-component="body" required  hidden>
<br>
The id of the organization.</p>

</form><h1>Recruitment News endpoints</h1>
<p>APIs for Recruitment News.</p>
<h2>List Recruitment News</h2>
<p>Display a listing of the recruitment news.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/recruitment-news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
"current_page": 1,
data: [{
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
 {
  "id": 2,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'address': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  }
],
,
  "first_page_url": "http://127.0.0.1:8000/api/v1/recruitment-news?page=1",
  "from": 1,
  "last_page": 1,
  "last_page_url": "http://127.0.0.1:8000/api/v1/recruitment-news?page=1",
  "next_page_url": null,
  "path": "http://127.0.0.1:8000/api/v1/recruitment-news",
  "per_page": 10,
  "prev_page_url": null,
  "to": 2,
  "total": 2
}</code></pre>
<div id="execution-results-GETapi-v1-recruitment-news" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-recruitment-news"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-recruitment-news"></code></pre>
</div>
<div id="execution-error-GETapi-v1-recruitment-news" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-recruitment-news"></code></pre>
</div>
<form id="form-GETapi-v1-recruitment-news" data-method="GET" data-path="api/v1/recruitment-news" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-recruitment-news', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-recruitment-news" onclick="tryItOut('GETapi-v1-recruitment-news');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-recruitment-news" onclick="cancelTryOut('GETapi-v1-recruitment-news');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-recruitment-news" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/recruitment-news</code></b>
</p>
</form>
<h2>api/v1/recruitment-news-by-major</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/recruitment-news-by-major" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news-by-major"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 1,
        "major_name": "IT",
        "image_path": ".\/public\/images\/major.png",
        "created_at": null,
        "updated_at": null,
        "recruitment_news": [
            {
                "id": 2,
                "org_id": 2,
                "author_id": 9,
                "major_id": 1,
                "title": "Part-time .Net",
                "content": "Cần tuyển Est maxime officia provident quas. Dolores ducimus nulla non tempora quia recusandae.",
                "address": "8463, Ấp Phượng, Xã 16, Quận Nhiệm Ty Dũng\nHậu Giang",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Bế-Bá",
                    "phones": "84-57-069-8209",
                    "description": null,
                    "tax_id": "60865",
                    "address": "70 Phố Hàng Quân Bắc, Xã Khương Việt Thống, Quận Điền\nNam Định",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 3,
                "org_id": 2,
                "author_id": 10,
                "major_id": 1,
                "title": "Part-time Java",
                "content": "Cần tuyển Vitae voluptas error quia. Suscipit fugiat est neque quia quia placeat. Rerum autem unde provident quia in et. Accusantium necessitatibus qui magnam omnis.",
                "address": "7 Phố Mạc, Phường 6, Quận Phi Vũ\nPhú Thọ",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Bế-Bá",
                    "phones": "84-57-069-8209",
                    "description": null,
                    "tax_id": "60865",
                    "address": "70 Phố Hàng Quân Bắc, Xã Khương Việt Thống, Quận Điền\nNam Định",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 8,
                "org_id": 4,
                "author_id": 9,
                "major_id": 1,
                "title": "Remote ReactJS",
                "content": "Cần tuyển Deleniti commodi et repellendus. Adipisci rerum illo officiis iure animi soluta tenetur. Vel nam culpa odit delectus tempore dolorem. Dolorem explicabo odit ut.",
                "address": "9, Ấp Chi Hoàn, Phường 4, Quận Đoàn Tuyến\nTây Ninh",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Vừ, Bế and Bình",
                    "phones": "0510 451 3735",
                    "description": null,
                    "tax_id": "18403",
                    "address": "26 Phố Phi, Xã Lý Kim Viên, Quận Ánh\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 12,
                "org_id": 10,
                "author_id": 7,
                "major_id": 1,
                "title": "Fulltime NodeJS",
                "content": "Cần tuyển Incidunt laboriosam qui minus aut magnam recusandae dolore. Blanditiis molestiae laudantium recusandae vero a ipsam. Aliquam fugit aperiam nesciunt ea aut rerum consequatur et.",
                "address": "3218 Phố Lại Thiên Tâm, Phường Đôn Lợi Phụng, Huyện Loan\nHà Nội",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 10,
                    "owner_id": 4,
                    "org_name": "Công ty Nhiệm and Sons",
                    "phones": "(092) 328 8654",
                    "description": null,
                    "tax_id": "2766",
                    "address": "2307 Phố Viên Vĩ Quyết, Xã Điền, Quận Đổng Đan\nThái Nguyên",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 13,
                "org_id": 7,
                "author_id": 10,
                "major_id": 1,
                "title": "Part-time .Net",
                "content": "Cần tuyển Molestiae aliquam sit voluptates excepturi itaque ipsam ut. Molestiae voluptate voluptas velit optio molestiae aliquid ut exercitationem.",
                "address": "4698, Thôn 8, Phường 54, Huyện Chu Hà\nBắc Giang",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 7,
                    "owner_id": 1,
                    "org_name": "Công ty An PLC",
                    "phones": "+84-55-056-9978",
                    "description": null,
                    "tax_id": "86563",
                    "address": "8 Phố Khổng, Thôn Mai Anh, Huyện 28\nNinh Bình",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 14,
                "org_id": 4,
                "author_id": 6,
                "major_id": 1,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Aut amet autem ut exercitationem. Maiores sunt rerum ut et eveniet. Velit perspiciatis esse commodi voluptas. Ut alias omnis quisquam quo eveniet quibusdam soluta.",
                "address": "38 Phố Giao, Xã 1, Huyện Văn Khê\nHải Phòng",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Vừ, Bế and Bình",
                    "phones": "0510 451 3735",
                    "description": null,
                    "tax_id": "18403",
                    "address": "26 Phố Phi, Xã Lý Kim Viên, Quận Ánh\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 15,
                "org_id": 4,
                "author_id": 7,
                "major_id": 1,
                "title": "Remote NodeJS",
                "content": "Cần tuyển Unde perferendis sunt voluptatem voluptates est. Tempore et sit ut. Esse animi labore placeat facere ratione ut qui laudantium. Non officiis quia quia fugiat numquam ut est ut.",
                "address": "44 Phố Hà Cẩn Thục, Xã 89, Huyện Diêm Sử Thắm\nBình Dương",
                "city": "Đà Nẵng",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Vừ, Bế and Bình",
                    "phones": "0510 451 3735",
                    "description": null,
                    "tax_id": "18403",
                    "address": "26 Phố Phi, Xã Lý Kim Viên, Quận Ánh\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 16,
                "org_id": 7,
                "author_id": 9,
                "major_id": 1,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Quae quam voluptatem aperiam voluptatem ea aliquid. Modi quia iure facilis et ab velit aliquid est. Aut sint cumque veniam non. Non nam ad eos quidem ut facere dolorem.",
                "address": "4247 Phố Thịnh Vinh Phúc, Phường Tuyền, Quận Ngụy\nCần Thơ",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 7,
                    "owner_id": 1,
                    "org_name": "Công ty An PLC",
                    "phones": "+84-55-056-9978",
                    "description": null,
                    "tax_id": "86563",
                    "address": "8 Phố Khổng, Thôn Mai Anh, Huyện 28\nNinh Bình",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 20,
                "org_id": 3,
                "author_id": 2,
                "major_id": 1,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Dicta illo excepturi nobis beatae. Laudantium amet voluptatem expedita et. Odit veritatis sunt voluptatem velit.",
                "address": "6082, Thôn Bảo, Phường Kiều, Huyện Tiếp Khiếu\nBắc Giang",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 3,
                    "owner_id": 1,
                    "org_name": "Công ty Lỳ, Lỡ and Giáp",
                    "phones": "(84)(56)496-4003",
                    "description": null,
                    "tax_id": "56638",
                    "address": "72 Phố Nông Khiêm San, Xã Bá, Quận Hình Sơn Ca\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 21,
                "org_id": 2,
                "author_id": 10,
                "major_id": 1,
                "title": "Remote .Net",
                "content": "Cần tuyển Quia iusto dolorum maxime quos sunt fugit. Numquam consequatur maiores dolorum ab iure voluptatem. Fugit sunt blanditiis numquam non quod et amet. Id officia distinctio ipsum totam.",
                "address": "8 Phố Hoa Khoa Thương, Phường Hiên, Huyện 65\nHà Nội",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Bế-Bá",
                    "phones": "84-57-069-8209",
                    "description": null,
                    "tax_id": "60865",
                    "address": "70 Phố Hàng Quân Bắc, Xã Khương Việt Thống, Quận Điền\nNam Định",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            }
        ]
    },
    {
        "id": 2,
        "major_name": "BA",
        "image_path": ".\/public\/images\/major.png",
        "created_at": null,
        "updated_at": null,
        "recruitment_news": [
            {
                "id": 5,
                "org_id": 8,
                "author_id": 3,
                "major_id": 2,
                "title": "Remote Java",
                "content": "Cần tuyển Et nihil rerum eveniet placeat et molestias est nihil. Quaerat qui ducimus rerum provident mollitia dignissimos dolores libero. Autem dolorem saepe consequatur velit enim expedita.",
                "address": "43 Phố Khoa, Phường Giả Thanh Thy, Quận 5\nHải Phòng",
                "city": "Hồ Chí Minh",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 8,
                    "owner_id": 8,
                    "org_name": "Công ty Hùng LLC",
                    "phones": "84-120-770-4958",
                    "description": null,
                    "tax_id": "10738",
                    "address": "83 Phố Triệu Nhu Ân, Thôn Dao Khải, Quận An\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 7,
                "org_id": 2,
                "author_id": 6,
                "major_id": 2,
                "title": "Fulltime NodeJS",
                "content": "Cần tuyển Asperiores vero eius cum saepe unde rem. Deserunt ad quaerat consequuntur cumque ab. Tempora exercitationem qui est totam eos debitis et. Et autem fugit aut nulla aut.",
                "address": "49, Ấp Vĩnh Khu, Phường 8, Quận Đan\nĐồng Tháp",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Bế-Bá",
                    "phones": "84-57-069-8209",
                    "description": null,
                    "tax_id": "60865",
                    "address": "70 Phố Hàng Quân Bắc, Xã Khương Việt Thống, Quận Điền\nNam Định",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 9,
                "org_id": 2,
                "author_id": 3,
                "major_id": 2,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Occaecati tempore vel soluta qui ad modi sed possimus. Aut voluptatum molestias vel non aliquid fugiat reprehenderit. Odit et ut quidem officia. Quia earum iusto corporis quae.",
                "address": "4561, Ấp Lưu Nhiên, Xã 11, Quận Phượng Đậu\nPhú Yên",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Bế-Bá",
                    "phones": "84-57-069-8209",
                    "description": null,
                    "tax_id": "60865",
                    "address": "70 Phố Hàng Quân Bắc, Xã Khương Việt Thống, Quận Điền\nNam Định",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 19,
                "org_id": 10,
                "author_id": 8,
                "major_id": 2,
                "title": "Part-time Java",
                "content": "Cần tuyển Quis molestias aperiam aperiam repellendus aut deleniti. Soluta laborum id iusto accusantium. Expedita dolorum nesciunt quia et modi sit unde.",
                "address": "8, Thôn Phát Nghiêm, Xã Hạ, Huyện Sa Trác\nĐồng Nai",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 10,
                    "owner_id": 4,
                    "org_name": "Công ty Nhiệm and Sons",
                    "phones": "(092) 328 8654",
                    "description": null,
                    "tax_id": "2766",
                    "address": "2307 Phố Viên Vĩ Quyết, Xã Điền, Quận Đổng Đan\nThái Nguyên",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 22,
                "org_id": 8,
                "author_id": 1,
                "major_id": 2,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Quasi alias nihil tenetur. Voluptatibus et nihil nihil tempore accusamus natus provident. Hic doloremque repellendus ducimus qui corrupti nihil. Iusto iste voluptatem blanditiis magnam eius nisi.",
                "address": "16 Phố Dã, Xã Chế, Quận Lý Trinh Ngọc\nBắc Kạn",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 8,
                    "owner_id": 8,
                    "org_name": "Công ty Hùng LLC",
                    "phones": "84-120-770-4958",
                    "description": null,
                    "tax_id": "10738",
                    "address": "83 Phố Triệu Nhu Ân, Thôn Dao Khải, Quận An\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 31,
                "org_id": 3,
                "author_id": 8,
                "major_id": 2,
                "title": "Fulltime Java",
                "content": "Cần tuyển Ut et molestiae enim quia expedita nemo ad. Eum ut itaque et aliquam eveniet unde cum. Voluptas ex laboriosam saepe voluptas. Autem sit ut ullam beatae.",
                "address": "736, Thôn 7, Phường Vượng Hy, Quận Thạch Khánh Lâm\nPhú Thọ",
                "city": "Đà Nẵng",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 3,
                    "owner_id": 1,
                    "org_name": "Công ty Lỳ, Lỡ and Giáp",
                    "phones": "(84)(56)496-4003",
                    "description": null,
                    "tax_id": "56638",
                    "address": "72 Phố Nông Khiêm San, Xã Bá, Quận Hình Sơn Ca\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 32,
                "org_id": 9,
                "author_id": 7,
                "major_id": 2,
                "title": "Remote ReactJS",
                "content": "Cần tuyển Explicabo consequuntur porro consectetur ut cumque veniam nobis optio. Voluptas corrupti omnis consectetur. Molestiae qui quis neque quidem.",
                "address": "59, Thôn Đình Phượng, Phường Tú, Quận Bích Ngô\nThanh Hóa",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 9,
                    "owner_id": 6,
                    "org_name": "Công ty Đồng, Quách and Mộc",
                    "phones": "84-166-984-1562",
                    "description": null,
                    "tax_id": "35238",
                    "address": "80 Phố Chiêm, Phường Võ, Huyện Phương Cấn\nHải Phòng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 33,
                "org_id": 8,
                "author_id": 8,
                "major_id": 2,
                "title": "Part-time ReactJS",
                "content": "Cần tuyển Et maiores nihil sed. Saepe ut qui error qui minus. Maiores porro qui et. Architecto deserunt magnam blanditiis incidunt voluptas nam. Quis aut veniam pariatur dignissimos alias.",
                "address": "7567 Phố Bàng Huyền Khôi, Phường 3, Huyện 7\nLạng Sơn",
                "city": "Cần Thơ",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 8,
                    "owner_id": 8,
                    "org_name": "Công ty Hùng LLC",
                    "phones": "84-120-770-4958",
                    "description": null,
                    "tax_id": "10738",
                    "address": "83 Phố Triệu Nhu Ân, Thôn Dao Khải, Quận An\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 38,
                "org_id": 9,
                "author_id": 5,
                "major_id": 2,
                "title": "Part-time Java",
                "content": "Cần tuyển Natus maiores est dolorem unde quos. Id vel qui numquam doloribus sint aut consectetur. Aut dolor et nostrum ut. Culpa perspiciatis ab iure recusandae quis.",
                "address": "142 Phố Trà Nhi Tân, Xã Ý Ma, Huyện 73\nBến Tre",
                "city": "Đà Nẵng",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 9,
                    "owner_id": 6,
                    "org_name": "Công ty Đồng, Quách and Mộc",
                    "phones": "84-166-984-1562",
                    "description": null,
                    "tax_id": "35238",
                    "address": "80 Phố Chiêm, Phường Võ, Huyện Phương Cấn\nHải Phòng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 41,
                "org_id": 6,
                "author_id": 10,
                "major_id": 2,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Exercitationem reiciendis aut est non. Quis sint aut ut ut cum. Asperiores ut rerum error totam non omnis. Officiis rerum repellat expedita sit.",
                "address": "8, Ấp 5, Xã Nhiệm, Quận Án Phát\nĐắk Nông",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 6,
                    "owner_id": 1,
                    "org_name": "Công ty Chế-Khương",
                    "phones": "84-163-221-6480",
                    "description": null,
                    "tax_id": "73710",
                    "address": "826, Thôn Hằng, Phường 93, Huyện 98\nBình Định",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            }
        ]
    },
    {
        "id": 3,
        "major_name": "BrSE",
        "image_path": ".\/public\/images\/major.png",
        "created_at": null,
        "updated_at": null,
        "recruitment_news": [
            {
                "id": 1,
                "org_id": 10,
                "author_id": 10,
                "major_id": 3,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Autem voluptates architecto eligendi. Minima soluta qui reprehenderit qui. Sequi dolores ipsa et iure non amet. Nisi nobis eum et culpa quia fugiat.",
                "address": "652 Phố Ma, Phường Kiện, Quận Trinh Hạnh\nVĩnh Phúc",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 10,
                    "owner_id": 4,
                    "org_name": "Công ty Nhiệm and Sons",
                    "phones": "(092) 328 8654",
                    "description": null,
                    "tax_id": "2766",
                    "address": "2307 Phố Viên Vĩ Quyết, Xã Điền, Quận Đổng Đan\nThái Nguyên",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 6,
                "org_id": 2,
                "author_id": 4,
                "major_id": 3,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Ea consequuntur blanditiis temporibus omnis. Non omnis iste aspernatur ut dolorum. Quasi velit aliquam tempore voluptatem minus eum consequuntur.",
                "address": "538 Phố Lữ Thuận Định, Phường 1, Huyện Thành Kiên\nHà Nội",
                "city": "Hồ Chí Minh",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Bế-Bá",
                    "phones": "84-57-069-8209",
                    "description": null,
                    "tax_id": "60865",
                    "address": "70 Phố Hàng Quân Bắc, Xã Khương Việt Thống, Quận Điền\nNam Định",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 11,
                "org_id": 7,
                "author_id": 9,
                "major_id": 3,
                "title": "Part-time .Net",
                "content": "Cần tuyển Qui et qui eaque. Eius nostrum omnis quis voluptas non dicta possimus quia. Dolor voluptatibus quas iusto perferendis beatae. Dolor et omnis excepturi et illum.",
                "address": "99 Phố Mang Hải Cường, Xã Bồ Quốc Hiếu, Quận 11\nCần Thơ",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 7,
                    "owner_id": 1,
                    "org_name": "Công ty An PLC",
                    "phones": "+84-55-056-9978",
                    "description": null,
                    "tax_id": "86563",
                    "address": "8 Phố Khổng, Thôn Mai Anh, Huyện 28\nNinh Bình",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 23,
                "org_id": 7,
                "author_id": 3,
                "major_id": 3,
                "title": "Fulltime NodeJS",
                "content": "Cần tuyển Qui velit quidem eos. Consequuntur est earum earum non. Et iste libero et delectus voluptatum ab.",
                "address": "9, Ấp Tuyền Lô, Xã Đức, Quận Ty Vĩ\nLào Cai",
                "city": "Cần Thơ",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 7,
                    "owner_id": 1,
                    "org_name": "Công ty An PLC",
                    "phones": "+84-55-056-9978",
                    "description": null,
                    "tax_id": "86563",
                    "address": "8 Phố Khổng, Thôn Mai Anh, Huyện 28\nNinh Bình",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 25,
                "org_id": 8,
                "author_id": 7,
                "major_id": 3,
                "title": "Remote NodeJS",
                "content": "Cần tuyển Saepe cupiditate distinctio et velit aliquam. Minus consequuntur recusandae fugit in autem hic.",
                "address": "3045, Ấp Bàng, Xã Mộc, Huyện Giao Như Chương\nYên Bái",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 8,
                    "owner_id": 8,
                    "org_name": "Công ty Hùng LLC",
                    "phones": "84-120-770-4958",
                    "description": null,
                    "tax_id": "10738",
                    "address": "83 Phố Triệu Nhu Ân, Thôn Dao Khải, Quận An\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 28,
                "org_id": 7,
                "author_id": 6,
                "major_id": 3,
                "title": "Part-time Java",
                "content": "Cần tuyển Odio aut aut voluptatem perferendis. Magnam repellat quis dolores unde et est qui optio. Vero eum minus vel saepe. Numquam harum tenetur minus consectetur.",
                "address": "711 Phố Ánh Phụng Đạt, Xã Lâm Diệu Hậu, Huyện Quyền Lư\nHải Phòng",
                "city": "Đà Nẵng",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 7,
                    "owner_id": 1,
                    "org_name": "Công ty An PLC",
                    "phones": "+84-55-056-9978",
                    "description": null,
                    "tax_id": "86563",
                    "address": "8 Phố Khổng, Thôn Mai Anh, Huyện 28\nNinh Bình",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 30,
                "org_id": 3,
                "author_id": 4,
                "major_id": 3,
                "title": "Fulltime .Net",
                "content": "Cần tuyển Libero temporibus culpa molestias tempore et qui ut. Blanditiis iusto exercitationem qui aspernatur ullam. Dignissimos ut minus omnis perspiciatis quia aperiam.",
                "address": "6104 Phố Nghiêm Công Tuyền, Phường 75, Huyện 8\nHà Tĩnh",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 3,
                    "owner_id": 1,
                    "org_name": "Công ty Lỳ, Lỡ and Giáp",
                    "phones": "(84)(56)496-4003",
                    "description": null,
                    "tax_id": "56638",
                    "address": "72 Phố Nông Khiêm San, Xã Bá, Quận Hình Sơn Ca\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 34,
                "org_id": 8,
                "author_id": 3,
                "major_id": 3,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Facere doloremque neque harum in officiis eum. Eos rerum commodi doloremque alias accusantium et ad veniam. Eum aut vel quas debitis illo voluptatem. Non sint soluta ut mollitia et incidunt ut.",
                "address": "9, Thôn 1, Phường Đỗ, Quận Sơn Bích Nhật\nSóc Trăng",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 8,
                    "owner_id": 8,
                    "org_name": "Công ty Hùng LLC",
                    "phones": "84-120-770-4958",
                    "description": null,
                    "tax_id": "10738",
                    "address": "83 Phố Triệu Nhu Ân, Thôn Dao Khải, Quận An\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 35,
                "org_id": 1,
                "author_id": 8,
                "major_id": 3,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Occaecati quia sint et nihil dolores doloremque molestias repellat. Placeat aspernatur dolor omnis est rem. Ut non debitis libero sint dolorum est odit. Molestiae ea qui quia.",
                "address": "987 Phố Thôi Điệp Thể, Phường Trân Lư, Huyện Nhiên Lộc\nBình Dương",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 1,
                    "owner_id": 1,
                    "org_name": "Công ty Bồ, Đậu and Lều",
                    "phones": "064-002-5977",
                    "description": null,
                    "tax_id": "9432",
                    "address": "31, Thôn Khổng Khiếu Nghĩa, Phường Trác, Huyện Lê Trúc Tuyến\nĐồng Tháp",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 40,
                "org_id": 5,
                "author_id": 1,
                "major_id": 3,
                "title": "Part-time .Net",
                "content": "Cần tuyển Eum aperiam aut sit provident repudiandae vel. Cum ea et odio asperiores ut quis sunt. Odio commodi sed modi earum quia molestiae error.",
                "address": "3783, Thôn Khánh Hồng, Xã Nghị, Huyện 6\nHà Tĩnh",
                "city": "Cần Thơ",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 5,
                    "owner_id": 1,
                    "org_name": "Công ty Lâm-Lỡ",
                    "phones": "84-127-672-5465",
                    "description": null,
                    "tax_id": "39296",
                    "address": "7 Phố Cù, Xã 9, Quận Tiển\nYên Bái",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            }
        ]
    },
    {
        "id": 4,
        "major_name": "Sales",
        "image_path": ".\/public\/images\/major.png",
        "created_at": null,
        "updated_at": null,
        "recruitment_news": [
            {
                "id": 4,
                "org_id": 8,
                "author_id": 5,
                "major_id": 4,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Quidem et optio nam enim. Sit aut necessitatibus distinctio rerum officiis aut. Iusto et et in.",
                "address": "87 Phố Đào Nhiên Di, Xã Cung Phượng Kiện, Huyện 1\nBình Dương",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 8,
                    "owner_id": 8,
                    "org_name": "Công ty Hùng LLC",
                    "phones": "84-120-770-4958",
                    "description": null,
                    "tax_id": "10738",
                    "address": "83 Phố Triệu Nhu Ân, Thôn Dao Khải, Quận An\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 10,
                "org_id": 7,
                "author_id": 10,
                "major_id": 4,
                "title": "Part-time ReactJS",
                "content": "Cần tuyển Consequuntur aut aspernatur rerum hic. At suscipit voluptas maiores repellat rerum tenetur nobis. Totam quia ipsa eos porro pariatur illum voluptatem architecto.",
                "address": "787 Phố Diệp Diệp Cát, Thôn Hàn Diệu, Huyện 8\nQuảng Ngãi",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 7,
                    "owner_id": 1,
                    "org_name": "Công ty An PLC",
                    "phones": "+84-55-056-9978",
                    "description": null,
                    "tax_id": "86563",
                    "address": "8 Phố Khổng, Thôn Mai Anh, Huyện 28\nNinh Bình",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 17,
                "org_id": 1,
                "author_id": 10,
                "major_id": 4,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Fuga molestiae unde consequatur aut eaque qui saepe. Tempora aut nemo incidunt at. Sed non libero placeat. Ut rem animi in.",
                "address": "1 Phố Thạch Uy Bảo, Thôn Cương Định, Huyện Trọng Kỳ\nCần Thơ",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 1,
                    "owner_id": 1,
                    "org_name": "Công ty Bồ, Đậu and Lều",
                    "phones": "064-002-5977",
                    "description": null,
                    "tax_id": "9432",
                    "address": "31, Thôn Khổng Khiếu Nghĩa, Phường Trác, Huyện Lê Trúc Tuyến\nĐồng Tháp",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 18,
                "org_id": 3,
                "author_id": 7,
                "major_id": 4,
                "title": "Remote .Net",
                "content": "Cần tuyển Dignissimos nihil fugiat mollitia id. Omnis suscipit in dolorem quia ipsam corporis molestiae. Aliquid dicta corporis mollitia sint molestiae aliquam. Aperiam iusto doloribus quos doloribus dolor.",
                "address": "5 Phố Du, Phường 12, Huyện Quyên Thoại\nCần Thơ",
                "city": "Hải Phòng",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 3,
                    "owner_id": 1,
                    "org_name": "Công ty Lỳ, Lỡ and Giáp",
                    "phones": "(84)(56)496-4003",
                    "description": null,
                    "tax_id": "56638",
                    "address": "72 Phố Nông Khiêm San, Xã Bá, Quận Hình Sơn Ca\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 24,
                "org_id": 5,
                "author_id": 5,
                "major_id": 4,
                "title": "Fulltime Java",
                "content": "Cần tuyển Architecto nam consequuntur sed et. Dolore sed excepturi nihil numquam quia ab. Vero esse ipsum quo quia aut.",
                "address": "2 Phố Thiều, Thôn Hạ Sỹ, Huyện Khôi Bế\nSơn La",
                "city": "Hải Phòng",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 5,
                    "owner_id": 1,
                    "org_name": "Công ty Lâm-Lỡ",
                    "phones": "84-127-672-5465",
                    "description": null,
                    "tax_id": "39296",
                    "address": "7 Phố Cù, Xã 9, Quận Tiển\nYên Bái",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 26,
                "org_id": 3,
                "author_id": 7,
                "major_id": 4,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Sunt aspernatur repellendus autem qui ratione eligendi quis. Alias perferendis qui aut esse laudantium. Non quia assumenda error. Aspernatur tempora asperiores aut et.",
                "address": "246, Thôn Khoa Toản, Phường Bùi Quân Khanh, Huyện An Bắc Trúc\nHà Nam",
                "city": "Hồ Chí Minh",
                "work_type": "Part-time",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 3,
                    "owner_id": 1,
                    "org_name": "Công ty Lỳ, Lỡ and Giáp",
                    "phones": "(84)(56)496-4003",
                    "description": null,
                    "tax_id": "56638",
                    "address": "72 Phố Nông Khiêm San, Xã Bá, Quận Hình Sơn Ca\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 37,
                "org_id": 9,
                "author_id": 6,
                "major_id": 4,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Aut est veniam adipisci velit a iste nobis. Quidem doloribus est consequatur sunt eaque. Nihil magnam et quo quisquam consequatur. Quia hic ad debitis ea.",
                "address": "2505 Phố Ngô Như Phượng, Phường 0, Quận Mạnh Vân\nHà Nội",
                "city": "Hải Phòng",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 9,
                    "owner_id": 6,
                    "org_name": "Công ty Đồng, Quách and Mộc",
                    "phones": "84-166-984-1562",
                    "description": null,
                    "tax_id": "35238",
                    "address": "80 Phố Chiêm, Phường Võ, Huyện Phương Cấn\nHải Phòng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 43,
                "org_id": 2,
                "author_id": 4,
                "major_id": 4,
                "title": "Part-time ReactJS",
                "content": "Cần tuyển Iusto omnis nostrum blanditiis. Maiores totam et vel iste. Aut et officia beatae perferendis aut. Omnis sed quis voluptas vel quis.",
                "address": "4811, Thôn Tú Lục, Xã Hậu Lại, Huyện Xuyến Thủy\nThái Bình",
                "city": "Cần Thơ",
                "work_type": "Remote",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 2,
                    "owner_id": 1,
                    "org_name": "Công ty Bế-Bá",
                    "phones": "84-57-069-8209",
                    "description": null,
                    "tax_id": "60865",
                    "address": "70 Phố Hàng Quân Bắc, Xã Khương Việt Thống, Quận Điền\nNam Định",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            },
            {
                "id": 44,
                "org_id": 6,
                "author_id": 4,
                "major_id": 4,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Non aut repellendus nam hic saepe sit. Aut ad explicabo officia repellat. Nobis vero porro tenetur dolorem. Labore et qui doloremque velit.",
                "address": "8623 Phố Hợp, Xã Định Đào, Quận Hồng Lều\nHồ Chí Minh",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-06-07 04:40:31",
                "end_time": "2021-06-12 04:40:31",
                "interview_start_time": "2021-06-13 04:40:31",
                "interview_end_time": "2021-06-17 04:40:31",
                "created_at": "2021-06-07 04:40:31",
                "updated_at": "2021-06-07 04:40:31",
                "org": {
                    "id": 6,
                    "owner_id": 1,
                    "org_name": "Công ty Chế-Khương",
                    "phones": "84-163-221-6480",
                    "description": null,
                    "tax_id": "73710",
                    "address": "826, Thôn Hằng, Phường 93, Huyện 98\nBình Định",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-07 04:40:31",
                    "updated_at": "2021-06-07 04:40:31"
                }
            }
        ]
    }
]</code></pre>
<div id="execution-results-GETapi-v1-recruitment-news-by-major" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-recruitment-news-by-major"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-recruitment-news-by-major"></code></pre>
</div>
<div id="execution-error-GETapi-v1-recruitment-news-by-major" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-recruitment-news-by-major"></code></pre>
</div>
<form id="form-GETapi-v1-recruitment-news-by-major" data-method="GET" data-path="api/v1/recruitment-news-by-major" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-recruitment-news-by-major', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-recruitment-news-by-major" onclick="tryItOut('GETapi-v1-recruitment-news-by-major');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-recruitment-news-by-major" onclick="cancelTryOut('GETapi-v1-recruitment-news-by-major');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-recruitment-news-by-major" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/recruitment-news-by-major</code></b>
</p>
</form>
<h2>Find a Recruitment News</h2>
<p>Display the specified recruitment news.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/recruitment-news/voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"atque"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/voluptate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "atque"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-GETapi-v1-recruitment-news--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-recruitment-news--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-recruitment-news--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-recruitment-news--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-recruitment-news--id-"></code></pre>
</div>
<form id="form-GETapi-v1-recruitment-news--id-" data-method="GET" data-path="api/v1/recruitment-news/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-recruitment-news--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-recruitment-news--id-" onclick="tryItOut('GETapi-v1-recruitment-news--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-recruitment-news--id-" onclick="cancelTryOut('GETapi-v1-recruitment-news--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-recruitment-news--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/recruitment-news/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-recruitment-news--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The id of the recruiment news.</p>

</form>
<h2>api/v1/search</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-v1-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-search"></code></pre>
</div>
<form id="form-POSTapi-v1-search" data-method="POST" data-path="api/v1/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-search" onclick="tryItOut('POSTapi-v1-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-search" onclick="cancelTryOut('POSTapi-v1-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/search</code></b>
</p>
</form>
<h2>Create a Recruitment News</h2>
<p>Store a newly created recruitment news in database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/recruitment-news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":3,"author_id":14,"major_id":12,"title":"labore","content":"qui","address":"odio","city":"aperiam","work_type":"aperiam","start_time":"2021-06-07T05:41:59+0000","end_time":"2021-06-07T05:41:59+0000","interview_start_time":"2021-06-07T05:41:59+0000","interview_end_time":"2021-06-07T05:41:59+0000"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 3,
    "author_id": 14,
    "major_id": 12,
    "title": "labore",
    "content": "qui",
    "address": "odio",
    "city": "aperiam",
    "work_type": "aperiam",
    "start_time": "2021-06-07T05:41:59+0000",
    "end_time": "2021-06-07T05:41:59+0000",
    "interview_start_time": "2021-06-07T05:41:59+0000",
    "interview_end_time": "2021-06-07T05:41:59+0000"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-POSTapi-v1-recruitment-news" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-recruitment-news"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-recruitment-news"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-recruitment-news" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-recruitment-news"></code></pre>
</div>
<form id="form-POSTapi-v1-recruitment-news" data-method="POST" data-path="api/v1/recruitment-news" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-recruitment-news', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-recruitment-news" onclick="tryItOut('POSTapi-v1-recruitment-news');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-recruitment-news" onclick="cancelTryOut('POSTapi-v1-recruitment-news');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-recruitment-news" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/recruitment-news</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>org_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="org_id" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>author_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="author_id" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>major_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="major_id" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>work_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="work_type" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_time" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_time" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>interview_start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="interview_start_time" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>interview_end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="interview_end_time" data-endpoint="POSTapi-v1-recruitment-news" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>

</form>
<h2>Update Recruitment News&#039;s Information</h2>
<p>Update the specified recruitment news in database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/recruitment-news/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":15,"author_id":20,"major_id":17,"title":"fugiat","content":"natus","address":"et","city":"sapiente","work_type":"minus","start_time":"2021-06-07T05:41:59+0000","end_time":"2021-06-07T05:41:59+0000","interview_start_time":"2021-06-07T05:41:59+0000","interview_end_time":"2021-06-07T05:41:59+0000"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 15,
    "author_id": 20,
    "major_id": 17,
    "title": "fugiat",
    "content": "natus",
    "address": "et",
    "city": "sapiente",
    "work_type": "minus",
    "start_time": "2021-06-07T05:41:59+0000",
    "end_time": "2021-06-07T05:41:59+0000",
    "interview_start_time": "2021-06-07T05:41:59+0000",
    "interview_end_time": "2021-06-07T05:41:59+0000"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-PUTapi-v1-recruitment-news--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-recruitment-news--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-recruitment-news--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-recruitment-news--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-recruitment-news--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-recruitment-news--id-" data-method="PUT" data-path="api/v1/recruitment-news/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-recruitment-news--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-recruitment-news--id-" onclick="tryItOut('PUTapi-v1-recruitment-news--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-recruitment-news--id-" onclick="cancelTryOut('PUTapi-v1-recruitment-news--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-recruitment-news--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/recruitment-news/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>org_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="org_id" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>author_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="author_id" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>major_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="major_id" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="city" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>work_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="work_type" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="start_time" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_time" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>interview_start_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="interview_start_time" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>
<p>
<b><code>interview_end_time</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="interview_end_time" data-endpoint="PUTapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The value must be a valid date.</p>

</form>
<h2>Remove a Recruitment News</h2>
<p>Remove the specified recruitment news from database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/recruitment-news/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"minima"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/eum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "minima"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
  'id': 1,
  'org_id': 1,
  'author_id': 1,
  'major_id': 1,
  'title': 'string',
  'content': 'string',
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-DELETEapi-v1-recruitment-news--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-recruitment-news--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-recruitment-news--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-recruitment-news--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-recruitment-news--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-recruitment-news--id-" data-method="DELETE" data-path="api/v1/recruitment-news/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-recruitment-news--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-recruitment-news--id-" onclick="tryItOut('DELETEapi-v1-recruitment-news--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-recruitment-news--id-" onclick="cancelTryOut('DELETEapi-v1-recruitment-news--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-recruitment-news--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/recruitment-news/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-recruitment-news--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="DELETEapi-v1-recruitment-news--id-" data-component="body" required  hidden>
<br>
The id of the recruitment news</p>

</form><h1>Role endpoints</h1>
<h2>List Role</h2>
<p>Display a listing of the role.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
{
"current_page": 1,
data: [{
  "id": 1,
  "role_name": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  },
 {
  "id": 2,
  "role_name": "string",
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10"
  }
],
,
  "first_page_url": "http://127.0.0.1:8000/api/v1/roles?page=1",
  "from": 1,
  "last_page": 1,
  "last_page_url": "http://127.0.0.1:8000/api/v1/roles?page=1",
  "next_page_url": null,
  "path": "http://127.0.0.1:8000/api/v1/roles",
  "per_page": 10,
  "prev_page_url": null,
  "to": 2,
  "total": 2
}</code></pre>
<div id="execution-results-GETapi-v1-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-roles"></code></pre>
</div>
<div id="execution-error-GETapi-v1-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-roles"></code></pre>
</div>
<form id="form-GETapi-v1-roles" data-method="GET" data-path="api/v1/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-roles" onclick="tryItOut('GETapi-v1-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-roles" onclick="cancelTryOut('GETapi-v1-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/roles</code></b>
</p>
</form>
<h2>Find a Role</h2>
<p>Display the specified role.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/roles/quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"possimus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/roles/quasi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "possimus"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 2,
    "role_name": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-GETapi-v1-roles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-roles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-roles--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-roles--id-"></code></pre>
</div>
<form id="form-GETapi-v1-roles--id-" data-method="GET" data-path="api/v1/roles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-roles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-roles--id-" onclick="tryItOut('GETapi-v1-roles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-roles--id-" onclick="cancelTryOut('GETapi-v1-roles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-roles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/roles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-roles--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-roles--id-" data-component="body" required  hidden>
<br>
The id of the role.</p>

</form>
<h2>Create a Role</h2>
<p>Store a newly created role in database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"role_name":"reiciendis"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role_name": "reiciendis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 2,
    "role_name": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-POSTapi-v1-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-roles"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-roles"></code></pre>
</div>
<form id="form-POSTapi-v1-roles" data-method="POST" data-path="api/v1/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-roles" onclick="tryItOut('POSTapi-v1-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-roles" onclick="cancelTryOut('POSTapi-v1-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/roles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>role_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role_name" data-endpoint="POSTapi-v1-roles" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Update Role&#039;s Information</h2>
<p>Update the specified role in database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/roles/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"role_name":"non"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/roles/eos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role_name": "non"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 2,
    "role_name": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-PUTapi-v1-roles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-roles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-roles--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-roles--id-"></code></pre>
</div>
<form id="form-PUTapi-v1-roles--id-" data-method="PUT" data-path="api/v1/roles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-roles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-roles--id-" onclick="tryItOut('PUTapi-v1-roles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-roles--id-" onclick="cancelTryOut('PUTapi-v1-roles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-roles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/roles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-v1-roles--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>role_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role_name" data-endpoint="PUTapi-v1-roles--id-" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>Remove a Role</h2>
<p>Remove the specified role from database.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/roles/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"numquam"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/roles/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "numquam"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 2,
    "role_name": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}</code></pre>
<div id="execution-results-DELETEapi-v1-roles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-roles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-roles--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-roles--id-"></code></pre>
</div>
<form id="form-DELETEapi-v1-roles--id-" data-method="DELETE" data-path="api/v1/roles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-roles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-roles--id-" onclick="tryItOut('DELETEapi-v1-roles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-roles--id-" onclick="cancelTryOut('DELETEapi-v1-roles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-roles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/roles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-v1-roles--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="DELETEapi-v1-roles--id-" data-component="body" required  hidden>
<br>
The id of the role.</p>

</form><h1>User endpoints</h1>
<p>APIs for user.</p>
<h2>Create a User</h2>
<p>Store a newly created user in database.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"nam","last_name":"natus","dob":"2021-06-07T05:41:59+0000","phone":"tenetur","email":"leuschke.granville@example.com","password":"nihil","address":"perspiciatis"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "nam",
    "last_name": "natus",
    "dob": "2021-06-07T05:41:59+0000",
    "phone": "tenetur",
    "email": "leuschke.granville@example.com",
    "password": "nihil",
    "address": "perspiciatis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">
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
}</code></pre>
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
<h2>Get User</h2>
<p>Display data of user by id</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "Unauthenticated."
}</code></pre>
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
<h2>Find a User</h2>
<p>Display the specified user.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/user/find/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":5}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/find/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 5
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
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
}</code></pre>
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
<h2>Applied Jobs</h2>
<p>View list applied jobs for that user.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/user/applied" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/applied"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Update User&#039;s Information</h2>
<p>Update the specified user in database.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost:8000/api/v1/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"rerum","last_name":"distinctio","dob":"2021-06-07T05:41:59+0000","phone":382.9039,"email":"camron.huels@example.org","address":"alias","id":14,"id2":5}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "rerum",
    "last_name": "distinctio",
    "dob": "2021-06-07T05:41:59+0000",
    "phone": 382.9039,
    "email": "camron.huels@example.org",
    "address": "alias",
    "id": 14,
    "id2": 5
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
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
}</code></pre>
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
<h2>Remove a User</h2>
<p>Remove the specified user from database.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost:8000/api/v1/user/quae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":13}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/user/quae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 13
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
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
}</code></pre>
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
<h2>api/v1/users/apply</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/users/apply" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/users/apply"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-v1-users-apply" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-users-apply"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users-apply"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-users-apply" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users-apply"></code></pre>
</div>
<form id="form-POSTapi-v1-users-apply" data-method="POST" data-path="api/v1/users/apply" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users-apply', this);">
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
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>