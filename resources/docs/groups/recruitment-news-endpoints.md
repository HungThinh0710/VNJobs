# Recruitment News endpoints


## List Recruitment News
Display a listing of the recruitment news.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/recruitment-news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/recruitment-news"
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
}
```
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


## Find a Recruitment News
Display the specified recruitment news.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/recruitment-news/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"veniam"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/recruitment-news/nihil"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "int": "veniam"
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
}
```
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


## Create a Recruitment News
Store a newly created recruitment news in database.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/recruitment-news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":13,"author_id":5,"major_id":7,"title":"ducimus","content":"et","address":"sunt","city":"doloremque","start_time":"2021-01-14T17:31:37+0000","end_time":"2021-01-14T17:31:37+0000","interview_start_time":"2021-01-14T17:31:37+0000","interview_end_time":"2021-01-14T17:31:37+0000"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/recruitment-news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 13,
    "author_id": 5,
    "major_id": 7,
    "title": "ducimus",
    "content": "et",
    "address": "sunt",
    "city": "doloremque",
    "start_time": "2021-01-14T17:31:37+0000",
    "end_time": "2021-01-14T17:31:37+0000",
    "interview_start_time": "2021-01-14T17:31:37+0000",
    "interview_end_time": "2021-01-14T17:31:37+0000"
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
}
```
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


## Update Recruitment News&#039;s Information
Update the specified recruitment news in database.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/recruitment-news/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":16,"author_id":5,"major_id":4,"title":"quia","content":"aut","address":"iste","city":"maiores","start_time":"2021-01-14T17:31:37+0000","end_time":"2021-01-14T17:31:37+0000","interview_start_time":"2021-01-14T17:31:37+0000","interview_end_time":"2021-01-14T17:31:37+0000"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/recruitment-news/voluptatem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 16,
    "author_id": 5,
    "major_id": 4,
    "title": "quia",
    "content": "aut",
    "address": "iste",
    "city": "maiores",
    "start_time": "2021-01-14T17:31:37+0000",
    "end_time": "2021-01-14T17:31:37+0000",
    "interview_start_time": "2021-01-14T17:31:37+0000",
    "interview_end_time": "2021-01-14T17:31:37+0000"
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
}
```
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


## Remove a Recruitment News
Remove the specified recruitment news from database.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/recruitment-news/suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"int":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/recruitment-news/suscipit"
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
}).then(response => response.json());
```


> Example response (200):

```json

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
}
```
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



