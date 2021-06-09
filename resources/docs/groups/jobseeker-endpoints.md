# JobSeeker endpoints


## List JobSeeker
Display a listing of the job-seeker.




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/job-seekers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/job-seekers"
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
}
```
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


## Find a JobSeeker
Display the specified job-seeker.




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/job-seekers/praesentium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"maxime"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/job-seekers/praesentium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "maxime"
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
     'user_id': 1,
     'is_elect': 0,
     'cv_path': "string",
     'cover_letter_path': "string",
     'cover_letter_path': "string",
     'exp_years': 0,
}
```
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


## Create a JobSeeker
Store a newly created job-seeker in database.




> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/job-seekers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":18,"is_elect":false,"cv_path":{},"cover_letter_path":"rerum","exp_years":8}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/job-seekers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 18,
    "is_elect": false,
    "cv_path": {},
    "cover_letter_path": "rerum",
    "exp_years": 8
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

{
     'id': 1,
     'user_id': 1,
     'is_elect': 0,
     'cv_path': "string",
     'cover_letter_path': "string",
     'cover_letter_path': "string",
     'exp_years': 0,
}
```
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


## Update a JobSeeker
Update the specified job-seeker in database.




> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/v1/job-seekers/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":9,"is_elect":false,"cv_path":{},"cover_letter_path":"ipsa","exp_years":6}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/job-seekers/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 9,
    "is_elect": false,
    "cv_path": {},
    "cover_letter_path": "ipsa",
    "exp_years": 6
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
     'user_id': 1,
     'is_elect': 0,
     'cv_path': "string",
     'cover_letter_path': "string",
     'cover_letter_path': "string",
     'exp_years': 0,
}
```
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


## Remove a JobSeeker
Remove the specified job-seeker from database.




> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/v1/job-seekers/beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"sed"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/job-seekers/beatae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "sed"
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


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

</form>



