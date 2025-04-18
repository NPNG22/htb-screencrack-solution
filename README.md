<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<h1 align="center">ScreenCrack – Laravel SSRF to Redis RCE</h1>
<p align="center">
  A Hack The Box walkthrough and exploit project<br>
  SSRF ➜ Redis ➜ Encrypted Laravel Job ➜ Unserialization ➜ Remote Code Execution
</p>

---

##  About This Project

This repository contains Team 7's walkthrough and proof-of-concept exploit for the Hack The Box machine **ScreenCrack**, which simulates a vulnerable Laravel-based web application.

We explore a full **SSRF-to-RCE** exploit chain by injecting malicious job payloads into Redis via gopher protocol, triggering RCE through Laravel’s job queue mechanism.

 **This project is for educational purposes only.**

---

## Attack Chain Overview (flow)

``` 
  A[User Input Field] --> B[cURL Fetch (SSRF)]
  B --> C[gopher://127.0.0.1:6379] // Redis is on port 6379
  C --> D[Redis Queue]
  D --> E[Laravel Worker]
  E --> F[Unserialize & Execute Payload]
  F --> G[Flag written to web directory]
```
## Status
This project is a proof of concept and is **in progress**.
