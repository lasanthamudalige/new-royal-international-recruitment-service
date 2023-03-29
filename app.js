const express = require("express");
const bodyParser = require("body-parser");
require('dotenv').config()

const app = express();

app.set("view engine", "ejs");

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static("public"));

app.get("/", (req, res) => {
    res.render("home", { mapApiKey: process.env.GOOGLE_MAPS_API_KEY });
});

app.post("/", (req, res) => {
    console.log(req.body.name);
    res.redirect("/");
});

app.listen(3000, function () {
    console.log("Server started on port 3000.");
});