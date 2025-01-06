// const express = require('express');
// const {createServer} = require('node:http');
// const {join} = require('node:path');
// const {Server} = require('socket.io');
//
// const app = express();
// const server = createServer(app);
// const io = new Server(server);
//
// app.get('/', (req, res) => {
//     res.send("hello");
// });
//
// // io.on('connection', (socket) => {
// //     console.log('a user connected');
// // });
// io.on("connection", (socket) => {
//     socket.emit("hello", 1, "2", { 3: "4", 5: Buffer.from([6]) });
// });
// server.listen(3000, () => {
//     console.log('server running at http://localhost:3000');
// });


// import { readFileSync } from "fs";
// import { createServer } from "http";
// import { Server } from "socket.io";
//
// const httpServer = createServer((req, res) => {
//     if (req.url !== "/") {
//         res.writeHead(404);
//         res.end("Not found");
//         return;
//     }
//     // reload the file every time
//     const content = readFileSync("index.html");
//     const length = Buffer.byteLength(content);
//
//     res.writeHead(200, {
//         "Content-Type": "text/html",
//         "Content-Length": length,
//     });
//     res.end(content);
// });
//
// const io = new Server(httpServer, {
//     // Socket.IO options
// });
//
// io.on("connection", (socket) => {
//     console.log(`connect ${socket.id}`);
//
//     socket.on("disconnect", (reason) => {
//         console.log(`disconnect ${socket.id} due to ${reason}`);
//     });
// });
//
// httpServer.listen(3000);