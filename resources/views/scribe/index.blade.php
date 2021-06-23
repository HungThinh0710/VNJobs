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
            <li>Last updated: June 13 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>API for mobile, web client of VNJobs Project - By Phoenix (a.k.a Hưng Thịnh) &amp; SinJunior (a.k.a Khắc Tuấn)</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
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
<pre><code class="language-yaml">http://localhost:8000</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Admin Authenticate</h1>
<p>APIs for authentication admin.</p>
<h2>Login.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/admin/v1/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"excepturi","password":"veritatis"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/admin/v1/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "excepturi",
    "password": "veritatis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-admin-v1-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-admin-v1-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-v1-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-admin-v1-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-v1-auth-login"></code></pre>
</div>
<form id="form-POSTapi-admin-v1-auth-login" data-method="POST" data-path="api/admin/v1/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-v1-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-admin-v1-auth-login" onclick="tryItOut('POSTapi-admin-v1-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-admin-v1-auth-login" onclick="cancelTryOut('POSTapi-admin-v1-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-admin-v1-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/admin/v1/auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>String</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-admin-v1-auth-login" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>String</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-admin-v1-auth-login" data-component="body" required  hidden>
<br>
</p>

</form>
<h2>api/admin/v1/token</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/admin/v1/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/admin/v1/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTapi-admin-v1-token" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-admin-v1-token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-admin-v1-token"></code></pre>
</div>
<div id="execution-error-POSTapi-admin-v1-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-admin-v1-token"></code></pre>
</div>
<form id="form-POSTapi-admin-v1-token" data-method="POST" data-path="api/admin/v1/token" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-admin-v1-token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-admin-v1-token" onclick="tryItOut('POSTapi-admin-v1-token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-admin-v1-token" onclick="cancelTryOut('POSTapi-admin-v1-token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-admin-v1-token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/admin/v1/token</code></b>
</p>
</form><h1>Admin Endpoints</h1>
<h2>Show Statistic.</h2>
<p>APIs for analyst &amp; statistic jobs.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/admin/v1/statistic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/admin/v1/statistic"
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
<div id="execution-results-GETapi-admin-v1-statistic" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admin-v1-statistic"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-v1-statistic"></code></pre>
</div>
<div id="execution-error-GETapi-admin-v1-statistic" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-v1-statistic"></code></pre>
</div>
<form id="form-GETapi-admin-v1-statistic" data-method="GET" data-path="api/admin/v1/statistic" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-v1-statistic', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admin-v1-statistic" onclick="tryItOut('GETapi-admin-v1-statistic');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admin-v1-statistic" onclick="cancelTryOut('GETapi-admin-v1-statistic');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admin-v1-statistic" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admin/v1/statistic</code></b>
</p>
</form>
<h2>Show organizations.</h2>
<p>Show all organizations list.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/admin/v1/organization" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/admin/v1/organization"
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
<div id="execution-results-GETapi-admin-v1-organization" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-admin-v1-organization"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-v1-organization"></code></pre>
</div>
<div id="execution-error-GETapi-admin-v1-organization" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-v1-organization"></code></pre>
</div>
<form id="form-GETapi-admin-v1-organization" data-method="GET" data-path="api/admin/v1/organization" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-v1-organization', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-admin-v1-organization" onclick="tryItOut('GETapi-admin-v1-organization');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-admin-v1-organization" onclick="cancelTryOut('GETapi-admin-v1-organization');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-admin-v1-organization" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/admin/v1/organization</code></b>
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
    -d '{"email":"ipsum","password":"qui"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ipsum",
    "password": "qui"
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
    -G "http://localhost:8000/api/v1/job-seekers/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"velit"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/job-seekers/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "velit"
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
    -d '{"user_id":11,"is_elect":false,"cv_path":{},"cover_letter_path":"iure","exp_years":11}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/job-seekers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 11,
    "is_elect": false,
    "cv_path": {},
    "cover_letter_path": "iure",
    "exp_years": 11
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
    "http://localhost:8000/api/v1/job-seekers/iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":1,"is_elect":false,"cv_path":{},"cover_letter_path":"molestiae","exp_years":15}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/job-seekers/iusto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 1,
    "is_elect": false,
    "cv_path": {},
    "cover_letter_path": "molestiae",
    "exp_years": 15
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
    "http://localhost:8000/api/v1/job-seekers/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"aliquid"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/job-seekers/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "aliquid"
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
    -G "http://localhost:8000/api/v1/majors/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"atque"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/majors/eos"
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
    -d '{"major_name":"aut","image_path":"porro"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/majors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "major_name": "aut",
    "image_path": "porro"
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
    "http://localhost:8000/api/v1/majors/esse" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"major_name":"minima","image_path":"illum"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/majors/esse"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "major_name": "minima",
    "image_path": "illum"
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
    "http://localhost:8000/api/v1/majors/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"beatae"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/majors/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "beatae"
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
    -G "http://localhost:8000/api/v1/organizations/find-by-id/quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"repellat"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations/find-by-id/quas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "repellat"
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
<div id="execution-results-GETapi-v1-organizations-find-by-id--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organizations-find-by-id--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organizations-find-by-id--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organizations-find-by-id--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organizations-find-by-id--id-"></code></pre>
</div>
<form id="form-GETapi-v1-organizations-find-by-id--id-" data-method="GET" data-path="api/v1/organizations/find-by-id/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organizations-find-by-id--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organizations-find-by-id--id-" onclick="tryItOut('GETapi-v1-organizations-find-by-id--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organizations-find-by-id--id-" onclick="cancelTryOut('GETapi-v1-organizations-find-by-id--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organizations-find-by-id--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organizations/find-by-id/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-organizations-find-by-id--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-organizations-find-by-id--id-" data-component="body" required  hidden>
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
    -d '{"owner_id":16,"org_name":"tempore","phones":"quaerat","description":"blanditiis","tax_id":15,"address":"quia","logo_path":"vel","cover_path":"repellendus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "owner_id": 16,
    "org_name": "tempore",
    "phones": "quaerat",
    "description": "blanditiis",
    "tax_id": 15,
    "address": "quia",
    "logo_path": "vel",
    "cover_path": "repellendus"
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
    "http://localhost:8000/api/v1/organizations/perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"owner_id":20,"org_name":"excepturi","phones":"possimus","description":"voluptas","tax_id":4,"address":"perspiciatis","logo_path":"quis","cover_path":"sit"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations/perferendis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "owner_id": 20,
    "org_name": "excepturi",
    "phones": "possimus",
    "description": "voluptas",
    "tax_id": 4,
    "address": "perspiciatis",
    "logo_path": "quis",
    "cover_path": "sit"
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
    "http://localhost:8000/api/v1/organizations/magnam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"impedit"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations/magnam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "impedit"
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

</form>
<h2>Show all members of Organization</h2>
<p>Show all membership of Organization with each role.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/organizations/membership?org_id=16" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations/membership"
);

let params = {
    "org_id": "16",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
    "id": 3,
    "owner_id": 1,
    "org_name": "Công ty Khoa PLC",
    "phones": "053-385-3690",
    "description": null,
    "tax_id": "63021",
    "address": "5396, Thôn Thiên Chinh, Xã 5, Huyện Xa\nHậu Giang",
    "logo_path": "public\/docs\/logo.png",
    "cover_path": "public\/docs\/logo.png",
    "is_verify": 0,
    "created_at": "2021-06-12 05:55:18",
    "updated_at": "2021-06-12 05:55:18",
    "users": [
        {
            "id": 3,
            "first_name": "Cô. Phạm Thái Oanh",
            "last_name": "Phạm Toàn",
            "dob": "1970-01-01",
            "phone": "+84-74-764-7269",
            "email": "doan.lam@example.com",
            "email_verified_at": "2021-06-12 05:55:18",
            "address": "574 Phố Ánh, Thôn Giả Lâm, Huyện 37\nCao Bằng",
            "bio": "3l4Co7gkL2YtDUHmlh3br1Ra93tbEN",
            "avatar_path": "public\/docs\/user.png",
            "social_linkedin": null,
            "social_facebook": null,
            "created_at": "2021-06-12 05:55:18",
            "updated_at": "2021-06-12 05:55:18",
            "pivot": {
                "org_id": 3,
                "user_id": 3
            },
            "roles": [
                {
                    "id": 3,
                    "role_name": "ContentWriter",
                    "created_at": null,
                    "updated_at": null,
                    "pivot": {
                        "user_id": 3,
                        "role_id": 3,
                        "org_id": 3
                    }
                }
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-v1-organizations-membership" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-organizations-membership"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-organizations-membership"></code></pre>
</div>
<div id="execution-error-GETapi-v1-organizations-membership" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-organizations-membership"></code></pre>
</div>
<form id="form-GETapi-v1-organizations-membership" data-method="GET" data-path="api/v1/organizations/membership" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-organizations-membership', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-organizations-membership" onclick="tryItOut('GETapi-v1-organizations-membership');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-organizations-membership" onclick="cancelTryOut('GETapi-v1-organizations-membership');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-organizations-membership" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/organizations/membership</code></b>
</p>
<p>
<label id="auth-GETapi-v1-organizations-membership" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-organizations-membership" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>org_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="org_id" data-endpoint="GETapi-v1-organizations-membership" data-component="query" required  hidden>
<br>
id of Organization.</p>
</form>
<h2>Add member to Organization</h2>
<p>Add member to Organization with each role.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/organizations/membership" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":6,"user_id":8,"role_id":19}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/organizations/membership"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 6,
    "user_id": 8,
    "role_id": 19
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
  "message": "Add member to your organization successfully",
  "org": {
     "id": 3,
     "owner_id": 1,
     "org_name": "Công ty Khoa PLC",
     "phones": "053-385-3690",
     "description": null,
     "tax_id": "63021",
     "address": "5396, Thôn Thiên Chinh, Xã 5, Huyện Xa\nHậu Giang",
     "logo_path": "public/docs/logo.png",
     "cover_path": "public/docs/logo.png",
     "is_verify": 0,
     "created_at": "2021-06-12 05:55:18",
     "updated_at": "2021-06-12 05:55:18",
     "users": [
     {
         "id": 3,
         "first_name": "Cô. Phạm Thái Oanh",
         "last_name": "Phạm Toàn",
         "dob": "1970-01-01",
         "phone": "+84-74-764-7269",
         "email": "doan.lam@example.com",
         "email_verified_at": "2021-06-12 05:55:18",
         "address": "574 Phố Ánh, Thôn Giả Lâm, Huyện 37\nCao Bằng",
         "bio": "3l4Co7gkL2YtDUHmlh3br1Ra93tbEN",
         "avatar_path": "public/docs/user.png",
         "social_linkedin": null,
         "social_facebook": null,
         "created_at": "2021-06-12 05:55:18",
         "updated_at": "2021-06-12 05:55:18",
         "pivot": {
             "org_id": 3,
             "user_id": 3,
             "role_id": 3
         },
         "roles": [
             {
                 "id": 3,
                 "role_name": "ContentWriter",
                 "created_at": null,
                 "updated_at": null,
                 "pivot": {
                     "user_id": 3,
                     "role_id": 3,
                     "org_id": 3
                 }
             }
         ]
     },
}</code></pre>
<div id="execution-results-POSTapi-v1-organizations-membership" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-organizations-membership"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-organizations-membership"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-organizations-membership" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-organizations-membership"></code></pre>
</div>
<form id="form-POSTapi-v1-organizations-membership" data-method="POST" data-path="api/v1/organizations/membership" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-organizations-membership', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-organizations-membership" onclick="tryItOut('POSTapi-v1-organizations-membership');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-organizations-membership" onclick="cancelTryOut('POSTapi-v1-organizations-membership');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-organizations-membership" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/organizations/membership</code></b>
</p>
<p>
<label id="auth-POSTapi-v1-organizations-membership" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-v1-organizations-membership" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>org_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="org_id" data-endpoint="POSTapi-v1-organizations-membership" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-v1-organizations-membership" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="role_id" data-endpoint="POSTapi-v1-organizations-membership" data-component="body" required  hidden>
<br>
</p>

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
                "id": 39,
                "org_id": 6,
                "author_id": 8,
                "major_id": 1,
                "title": "Remote ReactJS",
                "content": "Cần tuyển Animi sit nihil incidunt voluptates ipsum earum. Dignissimos reprehenderit qui earum dignissimos eaque. Atque voluptatem rem ipsam qui.",
                "address": "235, Thôn Triệu, Phường Ngọc, Huyện Trang Phó\nNinh Thuận",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 40,
                "org_id": 9,
                "author_id": 5,
                "major_id": 1,
                "title": "Part-time Java",
                "content": "Cần tuyển Velit aperiam ducimus molestiae officiis tempore eos. Explicabo mollitia esse dolore nobis. Voluptatum dolor dolorum culpa aut repellat quasi asperiores est. Quas placeat sed laudantium voluptas.",
                "address": "36 Phố Bùi Phát Tú, Phường Nhuận Vĩ, Huyện Tôn\nTây Ninh",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 9,
                    "owner_id": 2,
                    "org_name": "Công ty Thập Group",
                    "phones": "(0165)200-0374",
                    "description": null,
                    "tax_id": "30345",
                    "address": "5745, Thôn 4, Phường Hồ Quân Lâm, Huyện Linh Lập\nAn Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 43,
                "org_id": 1,
                "author_id": 7,
                "major_id": 1,
                "title": "Remote NodeJS",
                "content": "Cần tuyển Accusamus repellat voluptatibus labore aliquam commodi aut voluptatem. Exercitationem est dignissimos alias voluptatibus. Porro error quibusdam fugit aperiam sit dolorum beatae eveniet.",
                "address": "6296, Thôn Sáng, Phường Đăng Liễu, Huyện Lỳ Tuyền Tú\nSơn La",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 1,
                    "owner_id": 4,
                    "org_name": "Công ty Doãn-Chung",
                    "phones": "054 455 0914",
                    "description": null,
                    "tax_id": "40937",
                    "address": "272 Phố Sơn Chung Triết, Xã Hảo Ngân, Quận 2\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 4,
                "org_id": 8,
                "author_id": 9,
                "major_id": 1,
                "title": "Remote .Net",
                "content": "Cần tuyển Quidem autem est sit iure qui pariatur. Et molestias tempora dolorem qui ea. Expedita error optio accusantium in voluptatem.",
                "address": "67, Ấp Khai, Ấp Hoa Uyển, Huyện Quyền Mạc\nKiên Giang",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 7,
                "org_id": 1,
                "author_id": 3,
                "major_id": 1,
                "title": "Remote Java",
                "content": "Cần tuyển Fuga dolor autem est quidem voluptates. Doloremque autem veniam minus porro. Et quo quae beatae sapiente quae.",
                "address": "3897, Thôn 56, Phường Kha Hà, Huyện Huệ Quế\nĐiện Biên",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 1,
                    "owner_id": 4,
                    "org_name": "Công ty Doãn-Chung",
                    "phones": "054 455 0914",
                    "description": null,
                    "tax_id": "40937",
                    "address": "272 Phố Sơn Chung Triết, Xã Hảo Ngân, Quận 2\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 14,
                "org_id": 7,
                "author_id": 9,
                "major_id": 1,
                "title": "Remote Ruby",
                "content": "Cần tuyển Magnam officiis recusandae culpa ipsum. Incidunt assumenda et aut sit. Eveniet velit reiciendis ut eaque fuga. Harum velit enim error enim consequuntur quia. Hic quia est unde eligendi non.",
                "address": "235 Phố Mẫn, Phường Yên Cổ, Huyện 1\nHồ Chí Minh",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 7,
                    "owner_id": 4,
                    "org_name": "Công ty Phan, Lưu and Đới",
                    "phones": "(076) 692 4864",
                    "description": null,
                    "tax_id": "72532",
                    "address": "46, Thôn Lan Quảng, Xã 17, Huyện 72\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 17,
                "org_id": 4,
                "author_id": 10,
                "major_id": 1,
                "title": "Part-time ReactJS",
                "content": "Cần tuyển Aut assumenda perferendis id sit. Sint omnis omnis eveniet. Est ullam architecto velit quae voluptatem impedit rerum. Qui occaecati atque rem soluta.",
                "address": "22 Phố Tuyền, Xã Huyền, Huyện Thắng Khưu\nTiền Giang",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Ngô LLC",
                    "phones": "(0167) 821 4754",
                    "description": null,
                    "tax_id": "1055",
                    "address": "6773 Phố Bạc Hiên Lộc, Phường 97, Quận Tiên Giáp\nĐắk Lắk",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 20,
                "org_id": 6,
                "author_id": 2,
                "major_id": 1,
                "title": "Fulltime Java",
                "content": "Cần tuyển Eos id voluptatum quo cum qui. Ut unde sunt ducimus id nam qui voluptate dolorem. Consequatur quia aspernatur mollitia at et accusantium dolores. Odit voluptatum molestiae est et omnis voluptas.",
                "address": "9779 Phố Ngạn, Phường 6, Quận Long Vĩ\nPhú Thọ",
                "city": "Hải Phòng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 22,
                "org_id": 3,
                "author_id": 3,
                "major_id": 1,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Libero facere consectetur iusto consequuntur et consectetur provident exercitationem. Voluptatem a aliquid vitae voluptatem autem enim quod in. Maxime sint est perferendis et.",
                "address": "76 Phố Thi My Võ, Phường Bích Thạch, Quận Bào Đoàn\nHà Nội",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 3,
                    "owner_id": 1,
                    "org_name": "Công ty Khoa PLC",
                    "phones": "053-385-3690",
                    "description": null,
                    "tax_id": "63021",
                    "address": "5396, Thôn Thiên Chinh, Xã 5, Huyện Xa\nHậu Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 23,
                "org_id": 6,
                "author_id": 4,
                "major_id": 1,
                "title": "Remote ReactJS",
                "content": "Cần tuyển Natus voluptatem illum qui consequatur vel incidunt sit. Ab incidunt non sed explicabo at et. Maxime est nemo aspernatur non qui enim. Quidem modi sint repellendus.",
                "address": "96, Ấp 8, Phường 77, Huyện Bế\nAn Giang",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
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
                "id": 41,
                "org_id": 3,
                "author_id": 8,
                "major_id": 2,
                "title": "Remote .Net",
                "content": "Cần tuyển Molestiae distinctio debitis id enim eligendi. Similique aut ducimus culpa fugit aliquid aut laborum. Exercitationem tempora et quis asperiores reiciendis exercitationem ut.",
                "address": "7 Phố Lữ Kha Giang, Xã Phùng, Quận Lý\nNghệ An",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 3,
                    "owner_id": 1,
                    "org_name": "Công ty Khoa PLC",
                    "phones": "053-385-3690",
                    "description": null,
                    "tax_id": "63021",
                    "address": "5396, Thôn Thiên Chinh, Xã 5, Huyện Xa\nHậu Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 42,
                "org_id": 6,
                "author_id": 4,
                "major_id": 2,
                "title": "Remote Java",
                "content": "Cần tuyển Praesentium non culpa dignissimos. Recusandae nihil voluptatibus explicabo aperiam sit voluptatibus. Voluptatem voluptate et qui earum aliquam blanditiis.",
                "address": "1735 Phố Khúc Đại Thống, Ấp Lò Phụng, Huyện Chiêm Chinh Thuận\nSơn La",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 3,
                "org_id": 5,
                "author_id": 8,
                "major_id": 2,
                "title": "Remote ReactJS",
                "content": "Cần tuyển Ullam aut illum aut voluptas eum quasi. Officia sequi non debitis omnis eum ipsam sit. Voluptatibus sapiente ex sed totam expedita molestiae.",
                "address": "551 Phố Lục Triệu Nhàn, Xã 90, Huyện Nhân Hy\nSơn La",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 5,
                    "owner_id": 5,
                    "org_name": "Công ty Khu, Tào and Ung",
                    "phones": "0351 580 7960",
                    "description": null,
                    "tax_id": "660210",
                    "address": "9675 Phố Mạch, Ấp Hy Lộc, Quận 7\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 6,
                "org_id": 4,
                "author_id": 5,
                "major_id": 2,
                "title": "Fulltime NodeJS",
                "content": "Cần tuyển Neque praesentium fugit cupiditate itaque aut. Sed voluptates officia qui qui. Labore eos similique sed quidem qui magnam nisi. Expedita qui nostrum quis illum voluptate ut doloribus enim.",
                "address": "5926 Phố Nhâm, Xã Xuân, Quận 06\nBình Dương",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Ngô LLC",
                    "phones": "(0167) 821 4754",
                    "description": null,
                    "tax_id": "1055",
                    "address": "6773 Phố Bạc Hiên Lộc, Phường 97, Quận Tiên Giáp\nĐắk Lắk",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 8,
                "org_id": 4,
                "author_id": 1,
                "major_id": 2,
                "title": "Fulltime Java",
                "content": "Cần tuyển Minus laudantium eos itaque ipsum molestiae enim eos. Nesciunt necessitatibus perferendis est velit. Eos neque est animi voluptatem reiciendis. Officia illo facere omnis sit distinctio.",
                "address": "753 Phố Lưu Kính Bạch, Phường 4, Huyện Hạnh Luật\nLạng Sơn",
                "city": "Hải Phòng",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Ngô LLC",
                    "phones": "(0167) 821 4754",
                    "description": null,
                    "tax_id": "1055",
                    "address": "6773 Phố Bạc Hiên Lộc, Phường 97, Quận Tiên Giáp\nĐắk Lắk",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 19,
                "org_id": 7,
                "author_id": 9,
                "major_id": 2,
                "title": "Remote .Net",
                "content": "Cần tuyển Perspiciatis aliquid maxime a et pariatur nam. Id illo nobis aut. Omnis minus quo incidunt et. Atque voluptatem autem quas ipsa quia amet ipsam.",
                "address": "9, Ấp Ung Thanh, Phường 52, Huyện Xa Thùy\nBạc Liêu",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 7,
                    "owner_id": 4,
                    "org_name": "Công ty Phan, Lưu and Đới",
                    "phones": "(076) 692 4864",
                    "description": null,
                    "tax_id": "72532",
                    "address": "46, Thôn Lan Quảng, Xã 17, Huyện 72\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 25,
                "org_id": 8,
                "author_id": 3,
                "major_id": 2,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Qui repudiandae nulla voluptas atque laborum. Eum qui animi omnis eaque reiciendis numquam dicta. Molestiae ea nemo repellat exercitationem.",
                "address": "778 Phố Điền, Xã Trực An, Huyện 75\nThanh Hóa",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 28,
                "org_id": 1,
                "author_id": 9,
                "major_id": 2,
                "title": "Remote Java",
                "content": "Cần tuyển Velit blanditiis totam non recusandae. Ipsam eaque deserunt quisquam illum. Non ut et voluptatem velit cupiditate et qui praesentium.",
                "address": "3371, Thôn Ánh, Xã 79, Huyện 82\nBình Dương",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 1,
                    "owner_id": 4,
                    "org_name": "Công ty Doãn-Chung",
                    "phones": "054 455 0914",
                    "description": null,
                    "tax_id": "40937",
                    "address": "272 Phố Sơn Chung Triết, Xã Hảo Ngân, Quận 2\nCần Thơ",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 29,
                "org_id": 10,
                "author_id": 2,
                "major_id": 2,
                "title": "Part-time .Net",
                "content": "Cần tuyển Occaecati tenetur sed enim beatae hic. Et dolorum qui quia. Et ut soluta aut asperiores dignissimos. Dolor voluptas commodi exercitationem atque enim animi autem. Dignissimos aperiam illum ex dolor.",
                "address": "70 Phố Mã Tuyến Nương, Xã Nghị Trinh Mạnh, Quận Trịnh Kính My\nCần Thơ",
                "city": "Đà Nẵng",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 10,
                    "owner_id": 3,
                    "org_name": "Công ty Tống, Lưu and Từ",
                    "phones": "+84-218-415-0789",
                    "description": null,
                    "tax_id": "69976",
                    "address": "345 Phố Ấu Nguyên Khánh, Phường 7, Quận Biện\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 31,
                "org_id": 4,
                "author_id": 3,
                "major_id": 2,
                "title": "Fulltime .Net",
                "content": "Cần tuyển Modi numquam impedit laboriosam ex. Dolor quia non sit quae dolor cumque at. Odio dolorem vitae qui iste et. Neque ratione maiores aut et.",
                "address": "45 Phố Chung, Phường Bửu Linh Hằng, Quận Xuân Hội\nBình Dương",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 4,
                    "owner_id": 5,
                    "org_name": "Công ty Ngô LLC",
                    "phones": "(0167) 821 4754",
                    "description": null,
                    "tax_id": "1055",
                    "address": "6773 Phố Bạc Hiên Lộc, Phường 97, Quận Tiên Giáp\nĐắk Lắk",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
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
                "id": 33,
                "org_id": 9,
                "author_id": 10,
                "major_id": 3,
                "title": "Fulltime .Net",
                "content": "Cần tuyển Voluptas rerum perferendis inventore voluptas. Quia et est velit et molestiae iste vel sed. Earum laborum ea officia quia consequuntur. Eos minus eveniet repellat officiis reiciendis.",
                "address": "6, Thôn Từ, Phường Nghiêm Bình Linh, Quận Phượng Tào\nKhánh Hòa",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 9,
                    "owner_id": 2,
                    "org_name": "Công ty Thập Group",
                    "phones": "(0165)200-0374",
                    "description": null,
                    "tax_id": "30345",
                    "address": "5745, Thôn 4, Phường Hồ Quân Lâm, Huyện Linh Lập\nAn Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 34,
                "org_id": 8,
                "author_id": 5,
                "major_id": 3,
                "title": "Part-time ReactJS",
                "content": "Cần tuyển Nemo est quia reprehenderit magnam. Recusandae perspiciatis sed nam dolores. Quia dicta ducimus laboriosam.",
                "address": "890 Phố Âu Hậu Phương, Thôn Văn Dụng, Huyện 6\nĐà Nẵng",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 36,
                "org_id": 5,
                "author_id": 5,
                "major_id": 3,
                "title": "Part-time Java",
                "content": "Cần tuyển Possimus sit occaecati minima. Blanditiis et neque et et aliquam aut dolores ut. Blanditiis nihil veritatis velit accusantium vel in. Qui facere similique nisi id architecto ipsum omnis.",
                "address": "1465 Phố Bế Minh Huỳnh, Phường 70, Quận Hùng\nThanh Hóa",
                "city": "Đà Nẵng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 5,
                    "owner_id": 5,
                    "org_name": "Công ty Khu, Tào and Ung",
                    "phones": "0351 580 7960",
                    "description": null,
                    "tax_id": "660210",
                    "address": "9675 Phố Mạch, Ấp Hy Lộc, Quận 7\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 38,
                "org_id": 8,
                "author_id": 2,
                "major_id": 3,
                "title": "Fulltime Java",
                "content": "Cần tuyển Velit numquam ut aperiam in porro. Occaecati excepturi dolore tempore et tenetur voluptate.",
                "address": "561 Phố Chu Hậu Độ, Phường Mẫn Thúc, Quận Bào Giang\nCà Mau",
                "city": "Đà Nẵng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 1,
                "org_id": 2,
                "author_id": 1,
                "major_id": 3,
                "title": "Fulltime ReactJS",
                "content": "Cần tuyển Vitae labore ut optio quisquam. Reprehenderit qui voluptas possimus. Aliquam odit debitis autem illo est et. Voluptatum est officia excepturi quia suscipit eum labore.",
                "address": "6896, Thôn 7, Phường Huyền, Quận 45\nCao Bằng",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 2,
                    "owner_id": 5,
                    "org_name": "Công ty Cấn Ltd",
                    "phones": "(072) 528 8482",
                    "description": null,
                    "tax_id": "75487",
                    "address": "61, Thôn 82, Xã Cẩn, Quận 1\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 2,
                "org_id": 10,
                "author_id": 4,
                "major_id": 3,
                "title": "Fulltime Ruby",
                "content": "Cần tuyển Omnis enim voluptatem illo et deleniti. Consectetur neque consequatur incidunt optio ad. Officiis et consequatur quia dolor maiores qui.",
                "address": "1 Phố Mâu, Phường Bình Trác, Huyện Trang Thủy Khôi\nHồ Chí Minh",
                "city": "Cần Thơ",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 10,
                    "owner_id": 3,
                    "org_name": "Công ty Tống, Lưu and Từ",
                    "phones": "+84-218-415-0789",
                    "description": null,
                    "tax_id": "69976",
                    "address": "345 Phố Ấu Nguyên Khánh, Phường 7, Quận Biện\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 9,
                "org_id": 10,
                "author_id": 5,
                "major_id": 3,
                "title": "Fulltime .Net",
                "content": "Cần tuyển Consequatur unde eaque est delectus praesentium sunt. Dolorem impedit neque quidem cumque rem. Atque recusandae aut temporibus velit itaque. Rerum sequi velit iure modi. Cumque fuga nam debitis.",
                "address": "759 Phố An, Phường Ngô, Quận Viên\nĐà Nẵng",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 10,
                    "owner_id": 3,
                    "org_name": "Công ty Tống, Lưu and Từ",
                    "phones": "+84-218-415-0789",
                    "description": null,
                    "tax_id": "69976",
                    "address": "345 Phố Ấu Nguyên Khánh, Phường 7, Quận Biện\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 15,
                "org_id": 9,
                "author_id": 10,
                "major_id": 3,
                "title": "Part-time NodeJS",
                "content": "Cần tuyển Molestias porro et eum perferendis autem id. Dolores aperiam mollitia adipisci aliquam et.",
                "address": "13 Phố Lý, Phường 24, Quận 65\nCần Thơ",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 9,
                    "owner_id": 2,
                    "org_name": "Công ty Thập Group",
                    "phones": "(0165)200-0374",
                    "description": null,
                    "tax_id": "30345",
                    "address": "5745, Thôn 4, Phường Hồ Quân Lâm, Huyện Linh Lập\nAn Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 16,
                "org_id": 8,
                "author_id": 6,
                "major_id": 3,
                "title": "Remote Ruby",
                "content": "Cần tuyển Laudantium praesentium ut laboriosam non numquam autem. Voluptatibus reiciendis porro cum nobis. Molestiae quod saepe sunt et expedita temporibus.",
                "address": "192, Thôn Ngân Chiến, Xã Đoàn Hòa Nhân, Huyện Trương\nCà Mau",
                "city": "Đà Nẵng",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 18,
                "org_id": 6,
                "author_id": 9,
                "major_id": 3,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Laboriosam aliquam possimus nobis tenetur at earum iure. Earum recusandae dolores eos officiis debitis assumenda. Temporibus voluptas ipsam aut ut aut. Nam rerum eligendi repudiandae qui.",
                "address": "74 Phố Bửu Thục Đào, Phường Lộ Khúc, Huyện Vi Nhiên\nĐắk Nông",
                "city": "Hà Nội",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
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
                "id": 35,
                "org_id": 6,
                "author_id": 1,
                "major_id": 4,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Minima perspiciatis nihil consequatur enim non delectus. At autem nesciunt iure qui asperiores est. Vel qui eligendi ratione molestiae non velit consectetur.",
                "address": "84 Phố Chử, Xã 2, Huyện Kiếm\nThanh Hóa",
                "city": "Hà Nội",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 37,
                "org_id": 7,
                "author_id": 1,
                "major_id": 4,
                "title": "Remote Ruby",
                "content": "Cần tuyển Architecto laboriosam qui quis porro esse. Sunt reprehenderit eos quisquam explicabo et. Soluta voluptatibus doloremque voluptas et.",
                "address": "2 Phố Chu Vĩnh Trác, Phường 49, Huyện Bá Chi\nLạng Sơn",
                "city": "Hải Phòng",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 7,
                    "owner_id": 4,
                    "org_name": "Công ty Phan, Lưu and Đới",
                    "phones": "(076) 692 4864",
                    "description": null,
                    "tax_id": "72532",
                    "address": "46, Thôn Lan Quảng, Xã 17, Huyện 72\nGia Lai",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 44,
                "org_id": 6,
                "author_id": 6,
                "major_id": 4,
                "title": "Part-time Ruby",
                "content": "Cần tuyển Voluptas omnis et tempora perferendis. Occaecati mollitia eos accusantium quia voluptatibus labore harum iure. Quae qui aliquid tempore quas quia quod. Accusamus dolorem culpa sint quisquam.",
                "address": "3, Thôn 5, Xã 54, Huyện 00\nThừa Thiên Huế",
                "city": "Cần Thơ",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 6,
                    "owner_id": 10,
                    "org_name": "Công ty Lỳ-Lã",
                    "phones": "+84-129-771-9419",
                    "description": null,
                    "tax_id": "21013",
                    "address": "656 Phố Giang Dương Hằng, Phường Công Ông, Quận Sa Thu\nĐà Nẵng",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 45,
                "org_id": 8,
                "author_id": 6,
                "major_id": 4,
                "title": "Part-time Java",
                "content": "Cần tuyển Dolores consectetur similique mollitia ut. Quia esse amet qui rerum dolor aperiam mollitia.",
                "address": "472, Ấp Hùng Nhiên Bích, Ấp Cung Giang, Huyện Nga Giáp\nHải Dương",
                "city": "Hồ Chí Minh",
                "work_type": "Remote",
                "start_time": "2021-06-12 05:55:19",
                "end_time": "2021-06-17 05:55:19",
                "interview_start_time": "2021-06-18 05:55:19",
                "interview_end_time": "2021-06-22 05:55:19",
                "created_at": "2021-06-12 05:55:19",
                "updated_at": "2021-06-12 05:55:19",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 5,
                "org_id": 8,
                "author_id": 3,
                "major_id": 4,
                "title": "Remote Ruby",
                "content": "Cần tuyển Delectus veniam sit quisquam reprehenderit. Sed illum ab sunt eum voluptatem commodi repudiandae sed. Architecto in vitae quis voluptate eligendi est dicta. Quia laborum delectus officia blanditiis.",
                "address": "98, Ấp 2, Ấp Thịnh Thảo, Quận Miên Lâm\nĐồng Tháp",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 10,
                "org_id": 8,
                "author_id": 2,
                "major_id": 4,
                "title": "Remote .Net",
                "content": "Cần tuyển Quia rerum ipsum fugiat sed odit. Nesciunt qui voluptatibus qui perspiciatis accusantium corporis. Quia qui in sed tenetur.",
                "address": "447, Ấp Giáp Uy, Xã Trung Thư, Quận Ngà\nThanh Hóa",
                "city": "Hồ Chí Minh",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 11,
                "org_id": 9,
                "author_id": 3,
                "major_id": 4,
                "title": "Part-time ReactJS",
                "content": "Cần tuyển Molestiae facere omnis voluptate possimus nemo qui in. Nam eos omnis deserunt dolores sit vel sapiente. Ratione reiciendis sunt ipsa aut vel sint eligendi.",
                "address": "57, Thôn Lữ Kim Thoại, Phường Âu, Huyện Ty\nLong An",
                "city": "Hà Nội",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 9,
                    "owner_id": 2,
                    "org_name": "Công ty Thập Group",
                    "phones": "(0165)200-0374",
                    "description": null,
                    "tax_id": "30345",
                    "address": "5745, Thôn 4, Phường Hồ Quân Lâm, Huyện Linh Lập\nAn Giang",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 12,
                "org_id": 8,
                "author_id": 6,
                "major_id": 4,
                "title": "Remote Java",
                "content": "Cần tuyển Enim nobis qui a ut. Ipsam sed sint amet ut officia deleniti fuga expedita. Omnis velit eligendi quae aut est sit quia. Voluptas qui sed possimus excepturi culpa. Molestias odit est explicabo.",
                "address": "7 Phố Tâm, Xã Thịnh Lộc, Quận Ấu\nTiền Giang",
                "city": "Cần Thơ",
                "work_type": "Part-time",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 8,
                    "owner_id": 1,
                    "org_name": "Công ty Đoàn PLC",
                    "phones": "+84-62-346-9416",
                    "description": null,
                    "tax_id": "88708",
                    "address": "996 Phố Đào Oanh Mẫn, Xã Quân, Quận Phan Thêu\nNghệ An",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 1,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
                }
            },
            {
                "id": 13,
                "org_id": 10,
                "author_id": 3,
                "major_id": 4,
                "title": "Fulltime Java",
                "content": "Cần tuyển Voluptatem molestiae quia amet earum aspernatur et et. Dolores necessitatibus nulla nobis. Doloribus non et autem optio fugiat. Neque eos rerum inventore quo cum.",
                "address": "23 Phố Lễ, Ấp Bình Lợi, Quận Tân Ngôn\nPhú Thọ",
                "city": "Hải Phòng",
                "work_type": "Fulltime",
                "start_time": "2021-06-12 05:55:18",
                "end_time": "2021-06-17 05:55:18",
                "interview_start_time": "2021-06-18 05:55:18",
                "interview_end_time": "2021-06-22 05:55:18",
                "created_at": "2021-06-12 05:55:18",
                "updated_at": "2021-06-12 05:55:18",
                "org": {
                    "id": 10,
                    "owner_id": 3,
                    "org_name": "Công ty Tống, Lưu and Từ",
                    "phones": "+84-218-415-0789",
                    "description": null,
                    "tax_id": "69976",
                    "address": "345 Phố Ấu Nguyên Khánh, Phường 7, Quận Biện\nHồ Chí Minh",
                    "logo_path": "public\/docs\/logo.png",
                    "cover_path": "public\/docs\/logo.png",
                    "is_verify": 0,
                    "created_at": "2021-06-12 05:55:18",
                    "updated_at": "2021-06-12 05:55:18"
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
    -G "http://localhost:8000/api/v1/recruitment-news/quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"delectus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/quisquam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "delectus"
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
The id of the recruitment news.</p>

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
    -d '{"org_id":10,"author_id":8,"major_id":9,"title":"corporis","content":"dignissimos","address":"et","city":"ipsa","work_type":"ducimus","start_time":"2021-06-13T06:11:30+0000","end_time":"2021-06-13T06:11:30+0000","interview_start_time":"2021-06-13T06:11:30+0000","interview_end_time":"2021-06-13T06:11:30+0000"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 10,
    "author_id": 8,
    "major_id": 9,
    "title": "corporis",
    "content": "dignissimos",
    "address": "et",
    "city": "ipsa",
    "work_type": "ducimus",
    "start_time": "2021-06-13T06:11:30+0000",
    "end_time": "2021-06-13T06:11:30+0000",
    "interview_start_time": "2021-06-13T06:11:30+0000",
    "interview_end_time": "2021-06-13T06:11:30+0000"
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
    "http://localhost:8000/api/v1/recruitment-news/asperiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":18,"author_id":14,"major_id":4,"title":"qui","content":"voluptatem","address":"repudiandae","city":"animi","work_type":"magni","start_time":"2021-06-13T06:11:30+0000","end_time":"2021-06-13T06:11:30+0000","interview_start_time":"2021-06-13T06:11:30+0000","interview_end_time":"2021-06-13T06:11:30+0000"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/asperiores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 18,
    "author_id": 14,
    "major_id": 4,
    "title": "qui",
    "content": "voluptatem",
    "address": "repudiandae",
    "city": "animi",
    "work_type": "magni",
    "start_time": "2021-06-13T06:11:30+0000",
    "end_time": "2021-06-13T06:11:30+0000",
    "interview_start_time": "2021-06-13T06:11:30+0000",
    "interview_end_time": "2021-06-13T06:11:30+0000"
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
    "http://localhost:8000/api/v1/recruitment-news/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"ea"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news/enim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "ea"
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

</form>
<h2>Get Job seekers of recruitment news</h2>
<p>Display the list of job seekers, who applied to this recruitment news by id.</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost:8000/api/v1/recruitment-news-job-seekers/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"omnis"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/recruitment-news-job-seekers/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "omnis"
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
  'address': 'string',
  'city': 'string',
  'start_time': '1990-12-12 12:45:10',
  'end_time': '1990-12-12 12:45:10',
  'interview_start_time': '1990-12-12 12:45:10',
  'interview_end_time': '1990-12-12 12:45:10',
  "created_at": "1990-12-12 12:45:10",
  "updated_at": "1990-12-12 12:45:10",
  "job_seekers": [
     {
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
         "updated_at": "2021-06-12 05:55:18",
         "pivot": {
         "rn_id": 1,
         "user_id": 1,
         "cv_path": "",
         "is_elect": 0,
         "cover_letter_path": "",
         "exp_years": 2
         }
     }
  ]
}</code></pre>
<div id="execution-results-GETapi-v1-recruitment-news-job-seekers--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-recruitment-news-job-seekers--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-recruitment-news-job-seekers--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-recruitment-news-job-seekers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-recruitment-news-job-seekers--id-"></code></pre>
</div>
<form id="form-GETapi-v1-recruitment-news-job-seekers--id-" data-method="GET" data-path="api/v1/recruitment-news-job-seekers/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-recruitment-news-job-seekers--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-recruitment-news-job-seekers--id-" onclick="tryItOut('GETapi-v1-recruitment-news-job-seekers--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-recruitment-news-job-seekers--id-" onclick="cancelTryOut('GETapi-v1-recruitment-news-job-seekers--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-recruitment-news-job-seekers--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/recruitment-news-job-seekers/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-v1-recruitment-news-job-seekers--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-v1-recruitment-news-job-seekers--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-recruitment-news-job-seekers--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>int</code></b>&nbsp;&nbsp;<small>id</small>  &nbsp;
<input type="text" name="int" data-endpoint="GETapi-v1-recruitment-news-job-seekers--id-" data-component="body" required  hidden>
<br>
The id of the recruitment news.</p>

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
    -G "http://localhost:8000/api/v1/roles/explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"non"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/roles/explicabo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "non"
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
    -d '{"role_name":"vero"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role_name": "vero"
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
    "http://localhost:8000/api/v1/roles/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"role_name":"nisi"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/roles/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role_name": "nisi"
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
    "http://localhost:8000/api/v1/roles/placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"ut"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/roles/placeat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "ut"
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
    -d '{"first_name":"dolorem","last_name":"eius","dob":"2021-06-13T06:11:30+0000","phone":"voluptatibus","email":"celestino.hyatt@example.com","password":"nostrum","address":"earum"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">
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
    -G "http://localhost:8000/api/v1/user/find/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":14}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
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
    -d '{"first_name":"sit","last_name":"voluptatum","dob":"2021-06-13T06:11:30+0000","phone":2134.91934401,"email":"alessia49@example.net","address":"sit","id":13,"id2":19}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
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
    "http://localhost:8000/api/v1/user/odio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":18}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
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
<h2>Apply a Job</h2>
<p>Apply a job with recruitment news</p>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost:8000/api/v1/users/apply" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "rn_id=7" \
    -F "exp_years=8" \
    -F "cv_path=@C:\Users\Phoenix\AppData\Local\Temp\php2431.tmp"     -F "cover_letter_path=@C:\Users\Phoenix\AppData\Local\Temp\php2441.tmp" </code></pre>
<pre><code class="language-javascript">const url = new URL(
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
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (201):</p>
</blockquote>
<pre><code class="language-json">
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
}</code></pre>
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
