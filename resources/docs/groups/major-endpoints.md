# Major endpoints


## List Major
Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/majors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/majors"
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
}
```
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


## Find a Major
Display the specified major.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/majors/voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"incidunt"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/majors/voluptate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "incidunt"
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
    "id": 1,
    "major_name": "string",
    "image_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
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


## Create Major
Store a newly created major in database.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/majors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"major_name":"rerum","image_path":"est"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/majors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "major_name": "rerum",
    "image_path": "est"
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
    "id": 1,
    "major_name": "string",
    "image_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
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


## Update Major&#039;s Information
Update the specified major in database.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/majors/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"major_name":"quia","image_path":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/majors/omnis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "major_name": "quia",
    "image_path": "et"
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
    "id": 1,
    "major_name": "string",
    "image_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
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


## Remove a Major
Remove the specified major from database.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/majors/deserunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"aperiam"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/majors/deserunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "aperiam"
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
    "id": 1,
    "major_name": "string",
    "image_path": "string",
    "created_at": "1990-12-12 12:45:10",
    "updated_at": "1990-12-12 12:45:10"
}
```
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

</form>



