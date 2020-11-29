# Endpoints


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user"
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
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
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
    "id": 3,
    "role_id": 4,
    "first_name": "Cự Duy Vi",
    "last_name": "Tô Ly Vi",
    "dob": "1996-09-03",
    "phone": "0218 310 3825",
    "email": "d.mn@example.net",
    "email_verified_at": "2020-11-25 19:45:56",
    "address": "64 Phố Tống Trang Công, Xã Hán, Huyện Hà Bích Trân\nĐồng Tháp",
    "bio": "4N7w4bd55bhUrexu14n1xuJ1z5w2fG",
    "social_linkedin": null,
    "social_facebook": null,
    "created_at": "2020-11-25 19:45:56",
    "updated_at": "2020-11-25 19:45:56",
    "orgs": [
        {
            "id": 1,
            "owner_id": 4,
            "org_name": "Công ty Khưu-Đan",
            "phones": "(84)(55)073-2993",
            "description": null,
            "tax_id": "76928",
            "address": "824 Phố Cung, Thôn Diệp Lam, Huyện Bạch\nYên Bái",
            "is_verify": 1,
            "created_at": "2020-11-25 19:45:56",
            "updated_at": "2020-11-25 19:45:56",
            "pivot": {
                "user_id": 3,
                "id": 1
            }
        },
        {
            "id": 4,
            "owner_id": 10,
            "org_name": "Công ty Danh-Ân",
            "phones": "052 518 1918",
            "description": null,
            "tax_id": "33176",
            "address": "15 Phố Viên, Phường Vỹ, Huyện Bá Đàn\nHải Phòng",
            "is_verify": 0,
            "created_at": "2020-11-25 19:45:56",
            "updated_at": "2020-11-25 19:45:56",
            "pivot": {
                "user_id": 3,
                "id": 4
            }
        },
        {
            "id": 10,
            "owner_id": 5,
            "org_name": "Công ty Ngân, Cái and Giao",
            "phones": "(095)826-1894",
            "description": null,
            "tax_id": "181210",
            "address": "1 Phố Hồ Nghi Bạch, Xã Ấu Dung Lâm, Huyện Nhữ Tùng Sinh\nĐà Nẵng",
            "is_verify": 1,
            "created_at": "2020-11-25 19:45:56",
            "updated_at": "2020-11-25 19:45:56",
            "pivot": {
                "user_id": 3,
                "id": 10
            }
        }
    ],
    "own_orgs": [
        {
            "id": 2,
            "owner_id": 3,
            "org_name": "Công ty Yên-Phạm",
            "phones": "+84-166-559-8898",
            "description": null,
            "tax_id": "902510",
            "address": "541 Phố Mâu Thắng Nghị, Phường Phú Cái, Huyện Liêm Trạch\nHậu Giang",
            "is_verify": 0,
            "created_at": "2020-11-25 19:45:56",
            "updated_at": "2020-11-25 19:45:56"
        },
        {
            "id": 3,
            "owner_id": 3,
            "org_name": "Công ty Ngô-Đôn",
            "phones": "(094) 177 7666",
            "description": null,
            "tax_id": "58304",
            "address": "6 Phố Văn Ca Tâm, Thôn Phi Hoàn, Quận Phong Ngân\nĐà Nẵng",
            "is_verify": 1,
            "created_at": "2020-11-25 19:45:56",
            "updated_at": "2020-11-25 19:45:56"
        }
    ],
    "role": {
        "id": 4,
        "role_name": "User",
        "created_at": null,
        "updated_at": null
    },
    "recruitment_news": [],
    "applied_jobs": []
}
```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>



