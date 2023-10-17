import { io } from 'socket.io-client';
// import go from 'gojs';

export const socket = io('http://localhost:3000', {
    transports: ['websocket'],
});


socket.on('connect', function () {
    console.log('conectado con el servidor');
    //emitir al servidor el nombre de usuario y diagrama
    // socket.emit('conectado', { nombre: "Cristian", diagrama: "diagrama1"});
});
