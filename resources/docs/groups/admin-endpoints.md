# Admin Endpoints


## Show Statistic.


APIs for analyst & statistic jobs.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/admin/v1/statistic" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/admin/v1/statistic"
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


## Show organizations.


Show all organizations list.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/admin/v1/organization" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/admin/v1/organization"
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
</form>



