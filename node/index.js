const cheerio = require('cheerio');
const request = require('request');
const express = require('express')
const app = express()
const port = 3000

app.get('/', (req, res) => {
    const from = req.query.from;
    const to = req.query.to;

    
    getKurs(from, to).then((rr)=>{
        res.send(`1 ${from} => ${rr} ${to}`)
    })
})

const getKurs = (from, to)=>{
    let promise = new Promise((resolve)=>{
    const sideAPI = 'https://transferwise.com/gb/currency-converter/';

    const apiREQ = `${sideAPI}${from}-to-${to}-rate`;

        request(apiREQ, (x,y,z)=>{
            if(x)
                return console.error(x);
            
            const $ = cheerio.load(y.body);
            const kurs = $('.cc__source-to-target.m-t-2').html().split('<span>')[2].split(" ")[0];
            resolve(kurs);
        })
    })
    return promise;
}

app.listen(port, () => console.log(`Example app listening on port ${port}!`))